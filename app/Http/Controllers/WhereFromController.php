<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class WhereFromController extends Controller
{
   public function GetSubCatAgainstMainCatEdit($id)
   {
      $request = City::where('secondaryRelation', $id)->get();
      return json_encode($request);
   }
}
