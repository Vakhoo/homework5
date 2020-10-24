<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Comments;
use App\Longdescription;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("products.index",["products"=>Products::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("products.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Products::create([
            "title"=>$request->input("title"),
            "description"=>$request->input("description")
        ]);
        return redirect()->route("adminindex");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Products::where("id",$id)->firstOrFail();
        $comm_data=Comments::where("product_id",$id)->get();
        $longdesc=Longdescription::where("long_desc_id", $id)->first();
        return view("products.show",[
            "productsshow"=>$data,
            "comment"=>$comm_data,
            "desc"=>$longdesc
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Products::where("id",$id)->firstOrFail();
        return view("products.edit", ["productsedit"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Products::where("id",$request->input("id"))->update([
            "title"=>$request->input("title"),
            "description"=>$request->input("description")
        ]);
        return redirect()->route("adminindex");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Products::where("id", $request->input("id"))->delete();
        return redirect()->back();
    }

    public function comment(Request $request)
    {
        Comments::create([
            "product_id"=>$request->input("id"),
            "comment"=>$request->input("comment")
        ]);
        return redirect()->back();

    }
     public function longdesc(Request $request)
    {
        Longdescription::where("long_desc_id", $request->input("id"))->update([
            "long_desc_id"=>$request->input("id"),
            "Long_desc"=>$request->input("long_description")
        ]);
        return redirect()->back();

    }
}
