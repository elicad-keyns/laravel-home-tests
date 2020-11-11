<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WhereFromController extends Controller
{
    public function index() {
      //$cities = City::whereNotNull('secondaryRelation')->get();

      //return view('profile.update-profile-information-form')->with(compact('cities'));
    }
}
