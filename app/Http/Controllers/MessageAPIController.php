<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;
use App\Models\Message;

class MessageAPIController extends Controller
{
    public function store(Request $request){
        try {
            $request->validate([
                'channel_id' => 'required',
                'tg_message_id' => 'required',
                'message' => 'required'
            ]);

            $channel = Channel::where('tg_id', $request->channel_id)->first();

            if (!$channel) {
                return response()->json(['error' => 'Channel not found'], 404);
            }

            $message = new Message();
            $message->channel_id = $channel->id;
            $message->tg_message_id = $request->tg_message_id;
            $message->message = $request->message;
            $message->save();

            return response()->json([
                'TG Message ID' => $message->tg_message_id,
                'ID' => $message->id,
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'An error occurred while storing the message',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}