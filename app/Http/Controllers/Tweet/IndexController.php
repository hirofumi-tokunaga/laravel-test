<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use App\Services\TweetService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request,TweetService $tweetService)
    {
      // $tweetService = new TweetService();

      $tweets = $tweetService->getTweets();
      // return view('tweet.index'),['name' => 'laravel']);
      return view('tweet.index')->with('tweets',$tweets)->with('version','8');
    }
}
