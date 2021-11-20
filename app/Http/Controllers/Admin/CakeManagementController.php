<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cake;
use App\Models\Image;
use App\Models\CakeDetail;
use App\Http\Resources\Cake as CakeResource;
use Illuminate\Support\Facades\Storage;
use Validator;
use Exception;

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
            CakeResource::collection(Cake::paginate(9));

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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input();
        $cakeResult = Cake::create($data);

        $flavors = explode(PHP_EOL, $data["flavors"]);
        foreach ($flavors as $key => $value) {
            CakeDetail::create([
                'cake_id' => $cakeResult->id,
                'flavor' => $value
            ]);
        }

        $imgResult = [];
        if (($request->hasfile('images')))
        {
            $imgs = $request->file('images');
            foreach($imgs as $image)
            {
                if ($image->isValid()) {
                    $name = $image->hashName();
                    $path = 
                        Storage::disk('public')->putFile('images', $image);
                    $url = env('APP_URL',false).Storage::url($path);
                    // //Insert to DB
                    $image = [
                        'name' => $name,
                        'url' => $url,
                        'imageable_id' => $cakeResult->id,
                        'imageable_type' => 'cake',
                    ];
                    Image::create($image);
                    $imgResult[] = $url;
                } 
            }
        }

        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new CakeResource(Cake::findOrFail($id));
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
        $data = $request->input();
        $cake = Cake::findOrFail($id);
        $result = $cake->update($data);

        // Update flavor
        $cake->cake_details()->delete();
        $flavors = explode(PHP_EOL, $data["flavors"]);
        foreach ($flavors as $key => $value) {
            CakeDetail::create([
                'cake_id' => $id,
                'flavor' => $value
            ]);
        }
        // Insert image
        $imgResult = [];
        // Delete exist image
        if (($request->hasfile('images')))
        {
            Cake::findOrFail($id)->images()->delete();
            $imgs = $request->file('images');
            foreach($imgs as $image)
            {
                if ($image->isValid()) {
                    $name = $image->hashName();
                    $path = 
                        Storage::disk('public')->putFile('images', $image);
                    $url = env('APP_URL',false).Storage::url($path);
                    // //Insert to DB
                    $image = [
                        'name' => $name,
                        'url' => $url,
                        'imageable_id' => $id,
                        'imageable_type' => 'cake',
                    ];
                    Image::create($image);
                    $imgResult[] = $url;
                } 
            }
        }

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Cake::where('id', $id)->delete();
        return response()->json(['status' => 'success']);
    }
}
