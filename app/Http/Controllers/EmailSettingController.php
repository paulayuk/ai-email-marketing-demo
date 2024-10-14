<?php

namespace App\Http\Controllers;

use App\Models\EmailSetting;
use Illuminate\Http\Request;

class EmailSettingController extends Controller
{
    public function __invoke(Request $request){

        $validated = $request->validate([
            'api_key' => 'required',
        ]);

        EmailSetting::create([
            'user_id' => $request->user()->{'id'},
            'api_key' => $request->api_key,
            'webhook_url' => config('app.url')."/api/webhooks",
        ]);

        return redirect()->back()->with("success", "Sengrid account connected");

    }
}


