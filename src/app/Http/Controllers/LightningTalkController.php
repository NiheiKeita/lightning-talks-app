<?php

namespace App\Http\Controllers;

use App\Models\LightningTalk;
use App\Models\Conference;
use Illuminate\Http\Request;

class LightningTalkController extends Controller
{
    public function index(Request $request): mixed
    {
        $lightningTalks = Conference::find($request->conference_id)->lightning_talks;
        return $lightningTalks;
    }
    public function store(Request $request): string
    {
        return $request . "store";
    }
    public function show(LightningTalk $lightningTalk): string
    {
        return $lightningTalk . "show";
    }
    public function update(Request $request, LightningTalk $lightningTalk): string
    {
        return $request . $lightningTalk . "update";
    }
}
