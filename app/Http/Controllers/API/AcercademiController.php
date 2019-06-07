<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\About;

class AcercademiController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return About::latest()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
             'name' => 'required|string|max:191',
             'description' => 'required',
             'user_id' => 'required',
            
        ]);
 
       
        return About::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'user_id' => $request['user_id'],
        ]);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $this->validate($request,[
             'name' => 'required|string|max:191',
             'description' => 'required',
             'user_id' => 'required',
            
        ]);
       
        $about = About::findOrFail($id);

       $about->update($request->all());

       return ['message' => "Succes"];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::findOrFail($id);

        // delete the user
        $about->delete();

        return ['mesaage' => 'Acerca de mi Delete'];
    }
}
