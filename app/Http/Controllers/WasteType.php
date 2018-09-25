<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\waste_type;
class WasteType extends Controller
{
   public function WasteGenerated() {
   	$waste_type = waste_type::all();
	return view('ajax.waste',compact('waste_type'));
   }

}
