<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class MessageController extends Controller
{

    /**
     * Remove the specified resource from storage.
     *
     * @param Message $messages
     *
     * @return RedirectResponse
     */

    public function destroy(): RedirectResponse
    {
        Message::truncate();
       return Redirect::route('index');
    }
}

