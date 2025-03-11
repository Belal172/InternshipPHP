<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "this is index of photos";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return"we call view and create from here";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Photos Saved";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Photo ID: $id";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Edit Photo ID: $id";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Photo Updated";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Photo Deleted";
    }
}
