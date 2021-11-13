<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cake;
use App\Models\Image;
use App\Models\CakeDetail;
use App\Http\Resources\Cake as CakeResource;

class CakeManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cakes = 
            CakeResource::collection(Cake::paginate(3));

        return view('admin/cake')
            ->with('cakes',  $cakes);
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
        if($request->has('add')){
            
        //     if(Cake::where('name','=',$request->name)->exists()){
        //         //$name = $request->name;
        //         $cake = Cake::where('name','=',$request->name);
        //         //var_dump($cake);
        //         echo $cake->id;
        //         // $cake_detail = new CakeDetail;
        //         // $cake_detail->cake_id = $cake->id;
        //         // $cake_detail->flavor = $request->flavor;
        //         // $cake_detail->quantity = $request->quantity;
        //         // $cake_detail->save();
        //         // return redirect()->route('cake-add.index');
        //    }else{
               //Save cake
               $cake = new Cake;
               $cake->name = $request->name;
               $cake->price = $request->price;
               $cake->quantity = $request->quantity;
               $cake->desc = $request->desc;
               $cake->save();
               //Save cake detail
               $cake_detail = new CakeDetail;
               $cake_detail->cake_id = $cake->id;
               $cake_detail->flavor = $request->flavor;
               $cake_detail->quantity = $request->quantity;
               $cake_detail->save();
               return redirect()->route('cake-add.index');
           //}
        }else if($request->has('edit')){
            $id = $request->id;
            //Update Cake Details
            $cake_detail = CakeDetail::findOrFail($id);
            $cake_detail->flavor = $request->flavor;
            $cake_detail->quantity = $request->quantity;
            $cake_detail->save();
            $cake_id = $cake_detail->cake_id;
            //Update Cake
            $cake = Cake::find($cake_id);
            $cake->name = $request->name;
            $cake->price = $request->price;
            $cake->quantity = $cake->quantity + $request->quantity;
            $cake->desc = $request->desc;
            $cake->save();
            return redirect()->route('cake-add.index');
        }else if($request->has('delete')){
                $cake_detail = CakeDetail::find($request->id);
                $id = $cake_detail->cake_id;
                $cake_detail->delete();
                $cake = Cake::find($id);
                if(CakeDetail::where('cake_id',$id)){
                    return redirect()->route('cake-add.index');
                }else{
                    $cake->delete();
                    return redirect()->route('cake-add.index');
                }
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
        echo $request->name;
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
