<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'age', 'votes'];
    public function limitCandidate() {
        $candidate = Candidate::all()->count();
        if($candidate > 3){
            return true;
        }
    }

    public function limitVote() {
        $candidate = Candidate::where('votes','>=','20')->get();
        foreach ($candidate as $c) {
            return $c->votes == 20 ? true: false;
        }

    }
}
