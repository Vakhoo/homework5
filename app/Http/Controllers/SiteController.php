<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Longdescription;
use App\Comments;


class SiteController extends Controller
{
    public function index()
    {
    	return view("guest.index", ["data"=>Products::get()]);
    }
    public function single(Request $req)
    {
    	$data=Products::where("id",$req["id"])->firstOrFail();
    	$longdesc=Longdescription::where("long_desc_id", $req["id"])->FirstOrFail();
    	$comm_data=Comments::where("product_id",$req["id"])->get();
    	return view("guest.single", [
    		"data"=>$data,
    		"longdesc"=>$longdesc,
    		"comment"=>$comm_data
    	]);

    }
}
