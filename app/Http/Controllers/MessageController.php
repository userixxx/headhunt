<?php

namespace App\Http\Controllers;

use App\Events\StoreMessageEvent;
use App\Http\Requests\Message\StoreRequest;
use App\Http\Resources\Message\MessageResource;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index() {
        $messages = Message::latest()->get();
//        $messages = MessageResource::collection($messages)->resolve();
        return view('pages.chat', compact('messages'));
    }
    public function store(StoreRequest $request)
    {
        $validatedData = $request->validated();

        if (isset($validatedData['sms_type'])) {
            $message = Message::create([
                'sms_type' => $validatedData['sms_type'],
                'body' => $validatedData['body'] ?? '',
                'sender_id' => Auth::id(),
            ]);

            broadcast(new StoreMessageEvent($message))->toOthers();

            return back();
        } else {
            return response()->json(['error' => 'The "sms_type" key is missing in the request data.'], 400);
        }
    }
}
