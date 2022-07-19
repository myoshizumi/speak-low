<?php

namespace App\Http\Controllers\Tweet;

use App\Models\Tweet;
use Illuminate\Http\Request;
use App\Services\TweetService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tweet\CreateRequest;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CreateRequest $request, TweetService $tweetService)
    {
        $tweetService->saveTweet(
            $request->userId(),
            $request->tweet(),
            $request->images()
        );
        return redirect()->route('tweet.index');
    }
}