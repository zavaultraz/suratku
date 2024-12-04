<?php

namespace App\Http\Controllers\admin;

use App\Models\suratKeluar; // Updated model name
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Support\Facades\Auth;

class suratKeluarController extends Controller // Updated class name
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Surat Keluar - index';
        $suratKeluar = suratKeluar::where('user_id', Auth::user()->id)
            ->latest()
            ->paginate(10);
        return view('admin.keluar.index', compact('title', 'suratKeluar')); // Updated view path
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Surat Keluar - Create';
        $category = category::where('user_id', Auth::user()->id)
            ->select('id', 'name')
            ->latest()->get();
        return view('admin.keluar.create', compact('title', 'category')); // Updated view path
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $this->validate($request, [
            'nomor_surat' => 'required|string|max:255',
            'isi_surat' => 'required|string',
            'link' => 'nullable|url',
            'category_id' => 'required',
            'tanggal_surat' => 'required|date',
        ]);

        // Buat data ke dalam tabel surat_keluar
        suratKeluar::create([ // Updated model name
            'nomor_surat' => $request->nomor_surat,
            'isi_surat' => $request->isi_surat,
            'link' => $request->link,
            'category_id' => $request->category_id,
            'tanggal_surat' => $request->tanggal_surat,
            'slug' => Str::slug($request->nomor_surat), // Updated slug source
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('keluar.index')->with('success', 'Surat berhasil ditambahkan.'); // Updated route
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $suratKeluar = suratKeluar::findOrFail($id); // Updated model name
        return view('admin.keluar.show', compact('suratKeluar')); // Updated view path
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Surat Keluar - Edit';
        $suratKeluar = suratKeluar::findOrFail($id); // Updated model name
        $category = category::where('user_id', Auth::user()->id)->select('id', 'name')->latest()->get();
        return view('admin.keluar.edit', compact('title', 'suratKeluar', 'category')); // Updated view path
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $this->validate($request, [
            'nomor_surat' => 'required|string|max:255',
            'isi_surat' => 'required|string',
            'link' => 'nullable|url',
            'category_id' => 'required',
            'tanggal_surat' => 'required|date',
        ]);

        // Temukan surat berdasarkan ID
        $surat = suratKeluar::findOrFail($id); // Updated model name

        // Update data surat
        $surat->update([
            'nomor_surat' => $request->nomor_surat,
            'isi_surat' => $request->isi_surat,
            'link' => $request->link,
            'category_id' => $request->category_id,
            'tanggal_surat' => $request->tanggal_surat,
            'slug' => Str::slug($request->nomor_surat), // Updated slug source
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('keluar.index')->with('success', 'Surat berhasil diperbarui.'); // Updated route
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $suratKeluar = suratKeluar::findOrFail($id); // Updated model name
        $suratKeluar->delete();
        return redirect()->back()->with(['success' => 'Data telah dihapus 👋']);
    }
}
