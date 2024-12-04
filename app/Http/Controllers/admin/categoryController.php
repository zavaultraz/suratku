<?php

namespace App\Http\Controllers\admin;

use App\Models\category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Category - index';
        $category = category::where('user_id', Auth::user()->id)
        ->select('id', 'name')
        ->latest()
        ->paginate(10);
        return view('admin.category.index', compact('title','category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Category - Create';
        return view('admin.category.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:220',
        ]);

        //melakkukan save to database
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'user_id'=>Auth::user()->id
        ]);
        //melakukan return redirect
        return redirect()->route('category.index')->with('success', 'Mantap data Berhasil Di Tambahkan! 👍');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Category - edit';
        $category = category::findOrFail($id);
        return view('admin.category.edit', compact('title', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required|max:220',
        ]);
        // get data by id
        $category = category::findOrFail($id); {
            $category->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
            ]);
            return redirect()->route('category.index')->with(['success' => 'Title berhasil di ubah😁']);
        }
        return redirect()->route('category.index')->with(['success' => 'Data telah diubah 😙']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //get data by id
        $category = category::findOrFail($id);
        $category->delete();
        //redirect
        return redirect()->route('category.index')->with(['success' => 'Data telah dihapus 👋']);
    }
}
