<?php

namespace App\Http\Controllers;

use App\Http\Resources\AnnotationResource;
use App\Models\Annotation;
use Illuminate\Http\Request;

class AnnotationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        try {
            $annotations = AnnotationResource::collection(Annotation::with('contents')->get());
            return response()->json($annotations);
        } catch (\Exception $th) {
            return response()->json(['error' => 'Failed to fetch annotations', 'message' => $th->getMessage()], 500);
        }
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Annotation $annotation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Annotation $annotation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Annotation $annotation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Annotation $annotation)
    {
        //
    }
}
