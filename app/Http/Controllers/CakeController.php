<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Redirect;
use Illuminate\Http\Request;
use App\Models\Cake;
use App\Models\Image;
use App\Models\CakeDetail;

class CakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $data = $req->input();
        $con = Session::get('session_cart');
        if(session()->has('session_cart')){
            foreach(Session::get('session_cart') as $item => $value){
                if($value["id"]==$data["id"])
                    return back()->with('success','Add to cart successfully!');
            }
            Session::push('session_cart',[
                'id'=>$data['id'],
                'name'=>$data['name'],
                'price'=>$data['price'],
                'flavor'=>$data['flavor'],
                'quantity'=>$data['quantity'],
                'note'=>$data['note'],
                ]);
                Session::flash('success','Add to cart successfully!');
                return back()->with('success','Add to cart successfully!');
        }else{
            $session = Session::put('session_cart',[[
                'id'=>$data['id'],
                'name'=>$data['name'],
                'price'=>$data['price'],
                'flavor'=>$data['flavor'],
                'quantity'=>$data['quantity'],
                'note'=>$data['note'],
                ]]);
                Session::flash('success','Add to cart successfully!');
                return back()->with('success','Add to cart successfully!');
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $cake = Cake::where('id', $id);
        // $name = $cake->name;
        // $desc = $cake->desc;
        // $price = $cake->price;
        // $images = Cake::where('imageable_id',$id);
        // $cake = Cake::find(1);
        // $images = Image::where('imageable_id',$id);
        return view('cake-detail',[
            // $name,
            // $desc,
            // $price,
            // $images
            'cake' =>Cake::findOrFail($id),
            'images' =>Cake::findOrFail($id)->images,
            'cakeDetails' =>CakeDetail::where('cake_id',$id)->get()
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
