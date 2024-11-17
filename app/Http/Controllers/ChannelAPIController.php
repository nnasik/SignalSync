<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;

class ChannelAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $channels = Channel::all();
        return $channels;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tg_id'=>'required:unique:channels,tg_id',
            'tg_title'=>'required',
            'tg_username'=>'required',
            'name'=>'required',
            'system_action'=>'required',
        ]);
        $channel = Channel::create($request->all());
        return $channel;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

     public function storeDP(Request $request){
        // Validate that the file is an image and of type jpg
        $request->validate([
            'tg_id'=>'required',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048', // Adjust max size as needed (2MB)
        ]);

        

        // Handle the uploaded file
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Store the image file in the 'public' disk, in the 'images' folder
            $path = $request->file('image')->store('images', 'public');

            $channel = Channel::where('tg_id', $request->tg_id)->first();
            $channel->tg_dp = $path;
            $channel->save();
            
            // Return the file path or a success response
            return response()->json([
                'message' => 'Image uploaded successfully',
                'path' => $path,
            ], 200);
            
        }

        // If file isn't uploaded or is invalid
        return response()->json([
            'message' => 'Invalid file upload',
        ], 400);


    }

}