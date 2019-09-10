<?php

namespace App\Http\Controllers\Chat;

use App\Models\Chat\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChatMessageController extends Controller
{
    public function index()
    {
        $messages = Message::with(['user'])->latest()->limit(100)->get();

        return response()->json($messages, 200);
    }
}