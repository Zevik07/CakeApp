<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cake;
use App\Models\Image;
use App\Models\CakeDetail;

class AddCakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('add-cake',[
            'cakes' =>Cake::All(),
            'details' =>CakeDetail::All()
        ]);
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
    public function store(Request $request)
    {
        // if(Cake::has($request->name)){

        // }
        $cake = new Cake;
        $cake->name = $request->name;
        $cake->price = $request->price;
        $cake->quantity = $request->quantity;
        $cake->desc = $request->desc;
        $cake->save();
        //$cake_saved = Cake::where('name',$request->name)->get();
        //echo $cake->id;
        $cake_detail = new CakeDetail;
        $cake_detail->cake_id = $cake->id;
        $cake_detail->flavor = $request->flavor;
        $cake_detail->quantity = $request->quantity;
        $cake_detail->save();
        return redirect()->route('cake-add.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
