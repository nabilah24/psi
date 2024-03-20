<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::latest()->paginate(5);

        return view('admin.menu.adminMenu', compact('menus'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.menu.adminMenu-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_item' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required',
        ]);

        $input = $request->all();

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $destinationPath = 'storage/gambar';
            $profileImage = date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = $profileImage;
        }

        Menu::create($input);

        return redirect()->route('adminMenu.index')
            ->with('success', 'Menu berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $menus = Menu::findOrFail($id);

        return view('admin.menu.adminMenu-show', compact('menus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $menus = Menu::findOrFail($id);

        return view('admin.menu.adminMenu-edit', compact('menus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_item' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required',
        ]);

        $input = $request->all();
        $menus = Menu::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $destinationPath = 'storage/gambar';
            $profileImage = date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['gambar'] = $profileImage;
        } else {
            unset($input['gambar']);
        }

        $menus->update($input);

        return redirect()->route('adminMenu.index')
            ->with('success', 'Menu berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $menus = Menu::findOrFail($id);
        $menus->delete();

        return redirect()->route('adminMenu.index')
            ->with('success', 'Menu berhasil dihapus.');
    }
}
