<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class WhereFromController extends Controller
{
   public function GetSubCatAgainstMainCatEdit($id)
   {
      $request = City::where('secondaryRelation', $id)->get();
      //echo "<pre>"; print_r($request); die;
      return json_encode($request);
   }
}
