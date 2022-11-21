<?php

namespace App\Http\Controllers;

use App\Models\Publisher;

class PublisherController extends Controller
{
    public function index()
    {
        $publishers = Publisher::all();
        return view('publisher', compact('publishers'));
    }

    public function showById($id)
    {
        $publisher = Publisher::findOrFail($id);
        return view('detailPublisher', compact('publisher'));
    }
}
