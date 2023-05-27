<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\posts;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorepostsRequest;
use App\Http\Requests\UpdatepostsRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepostsRequest $request)
    {
              // If the request passes validation, you can access the validated data
              $validatedData = $request->validated();

              return response()->json([
                  'data' => $validatedData,
                  'message' => 'Validation successful',
              ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepostsRequest $request, posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(posts $posts)
    {
        //
    }
}
