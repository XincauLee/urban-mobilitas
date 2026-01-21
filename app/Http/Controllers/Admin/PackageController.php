<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::latest()->paginate(10);
        return view('admin.packages.index', compact('packages'));
    }

    public function create()
    {
        return view('admin.packages.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'features' => 'required|string', // Disimpan sebagai text biasa (per baris)
        ]);

        Package::create($validated);

        return redirect()->route('admin.packages.index')
            ->with('success', 'Paket berhasil ditambahkan!');
    }

    public function edit(Package $package)
    {
        return view('admin.packages.edit', compact('package'));
    }

    public function update(Request $request, Package $package)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'features' => 'required|string',
        ]);

        $package->update($validated);

        return redirect()->route('admin.packages.index')
            ->with('success', 'Paket berhasil diperbarui!');
    }

    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('admin.packages.index')
            ->with('success', 'Paket berhasil dihapus.');
    }
}