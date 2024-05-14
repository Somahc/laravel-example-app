<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Models\Tweet;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $tweetId = (int) $request->route('tweetId');
        // dd($tweetId);
        $tweet = Tweet::where('id', $tweetId)->firstOrFail();
        return view('tweet.update')->with('tweet', $tweet);
    }
}
