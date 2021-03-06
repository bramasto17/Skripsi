<?php

namespace App\Http\Controllers;

use App\Forum;
use App\Post;
use App\Timeline;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Auth;
use Session;

use Carbon\Carbon;

use App\Rating;
use App\Review;
use App\Watch;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class RatingController extends Controller
{
    public function ratingMovie(Request $request){
        // dd($request);
        $rating = Rating::where('userId',Auth::user()->id)
            ->where('movieId',$request->movieId)
            ->first();

        if($rating != null){
            $rating->rating = $request->rating;
            $rating->save();
        }
        else{
            $rating = new Rating();
            $rating->userId = Auth::user()->id;
            $rating->movieId = $request->movieId;
            $rating->rating = $request->rating;
            $rating->save();
        }

        $watch_movie = (object) tmdb()->getMovie($rating->movieId)->get();

        $timeline = new Timeline();
        $timeline->userId = Auth::user()->id;
        $timeline->text = "I give " . $watch_movie->title . " " . $rating->rating . " stars";
        $timeline->save();

        // return redirect('/movie/'.$request->movieId);
        return json_encode(['message' => 'Success']);
    }
}
