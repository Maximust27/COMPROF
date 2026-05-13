<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('dashboard.about', compact('about'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        $about = About::first();

        if ($about) {
            $about->update($request->all());
        } else {
            About::create($request->all());
        }

        return redirect()->back()->with('success', 'Data About Us berhasil diperbarui!');
    }
}
