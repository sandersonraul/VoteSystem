<?php

namespace App\Http\Controllers;
use App\Models\Candidate;
use Illuminate\Http\Request;

class RegisterVoteController extends Controller
{


    public function registerVote($id) {
        $candidate = Candidate::find($id);
        if(!$candidate->limitVote()){
            $candidate->votes+=1;
            $candidate->save();
            return redirect('/index');
        } else {
            return redirect('/index');
        }
    }
}
