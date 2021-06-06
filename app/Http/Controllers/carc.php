<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car;
class carc extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car= car::all();

        return view('car.index',[
            'cars'=>$car
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $car=  car::create([
         'name'=> $request->input('name'),

         'founded'=> $request->input('founded'),
         'description'=> $request->input('description')

     ]);
     return redirect('/cars');
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
$car= car::find($id)->first();
        return view('car.edit')->with('car',$car);
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
        $car=  car::where('id',$id)
        ->update([
            'name'=> $request->input('name'),

            'founded'=> $request->input('founded'),
            'description'=> $request->input('description')

        ]);
        return redirect('/cars');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car= car::find($id)->first();

        $car->delete();

        return redirect('/cars');

    }
}
