<?php

namespace App\Http\Controllers\admin;

use App\Models\suratMasuk;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Support\Facades\Auth;

class suratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Surat Masuk - index';
        $suratMasuk = suratMasuk::where('user_id', Auth::user()->id)
        ->latest()
        ->paginate(10);     
        return view('admin.masuk.index', compact('title', 'suratMasuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Surat Masuk - Create';
        $category = category::where('user_id', Auth::user()->id)
        ->select('id', 'name')
        ->latest()->get();
        return view('admin.masuk.create', compact('title', 'category'));
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

        // Buat data ke dalam tabel surat_masuk
        suratMasuk::create([
            'nomor_surat' => $request->nomor_surat,
            'isi_surat' => $request->isi_surat,
            'link' => $request->link,
            'category_id' => $request->category_id,
            'tanggal_surat' => $request->tanggal_surat,
            'slug' => Str::slug($request->name),
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('masuk.index')->with('success', 'Surat berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $suratMasuk = suratMasuk::findOrFail($id);
        return view('admin.masuk.show', compact('suratMasuk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Surat Masuk - Edit';
        $suratMasuk = suratMasuk::findOrFail($id);
        $category = category::where('user_id', Auth::user()->id)->select('id', 'name')->latest()->get();
        return view('admin.masuk.edit', compact('title', 'suratMasuk', 'category'));
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
        $surat = suratMasuk::findOrFail($id);

        // Update data surat
        $surat->update([
            'nomor_surat' => $request->nomor_surat,
            'isi_surat' => $request->isi_surat,
            'link' => $request->link,
            'category_id' => $request->category_id,
            'tanggal_surat' => $request->tanggal_surat,
            'slug' => Str::slug($request->name),
            'user_id' => Auth::user()->id, // Jika ingin tetap mengupdate user_id
        ]);

        return redirect()->route('masuk.index')->with('success', 'Surat berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $suratMasuk = suratMasuk::findOrFail($id);
        $suratMasuk->delete();
        return redirect()->back()->with(['success' => 'Data telah dihapus 👋']);
    }
}
