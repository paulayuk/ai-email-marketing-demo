<?php

namespace App\Http\Controllers;

use App\Models\EmailSetting;
use Illuminate\Http\Request;

class EmailSettingController extends Controller
{
    public function __invoke(Request $request){

    }
}


                $provider->addKeys(
                        $request->user()->{'id'},
                        $request->input('api_key'),
                    )->{'webhook_url'},

        EmailSetting::create([
            'user_id' => $company['id'],
            'api_key' => $isDefault,
            'webhook_url' => config('app.url')."/api/webhooks",
        ]);