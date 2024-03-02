<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use DrewRoberts\Media\Models\Image;
use Illuminate\Http\Request;

class MemesController extends Controller
{
    public function __invoke(Request $request)
    {
        // $image = Image::find(43)->url;
        $image = url('img/og-bob.png');

        return view('pages.memes', [
            'title' => 'Memes for $BOB on Solana',
            'description' => 'Memes for $BOB on Solana are created by the Bob Community and available freely to share on the interwebs to promote Bob & Robert and all of us because we are all Bob.',
            'canonical' => route('memes'),
            'ogimage' => $image === null ? url('img/og-bob.png') : $image,
        ]);
    }
}