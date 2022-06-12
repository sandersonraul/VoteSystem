<?php

namespace App\Http\Controllers;
use App\Models\Candidate;

use Illuminate\Http\Request;

class CandidatesController extends Controller
{

    public function create() {
        return view('createCandidate');
    }

    public function store(Request $request) {
        $candidate = new Candidate;
        if(!$candidate->limitCandidate()){
            $candidate->name = $request->name;
            $candidate->age = $request->age;
            $candidate->save();
            return redirect('/index');
        }
    }

    public function index() {
        $candidates = Candidate::all();
        return view('index', ['candidates'=> $candidates]);
    }
}
