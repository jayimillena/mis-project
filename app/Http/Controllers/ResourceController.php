<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResourceRequest;
use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('publish', ['resources' => Resource::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ResourceRequest $request)
    {
        $savedBook = Resource::create($request->validated());

        return view('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $slug)
    {
        return view('resource', [
            'resource' => Resource::where('slug', $slug)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resource $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resource $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resource $book)
    {
        //
    }
}
