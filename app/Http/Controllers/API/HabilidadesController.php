<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;

class HabilidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Service::latest()->paginate(10);
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
             'imgServicio' => 'required'
            
        ]);
 
       if($request->imgServicio){

            $name = time().'.' .explode('/', explode(':', substr($request->imgServicio, 0, strpos
            ($request->imgServicio, ';')))[1])[1];    

            \Image::make($request->imgServicio)->save(public_path('images/servicios/').$name);      
            $request->merge(['imgServicio' => $name]);
            

       }

        return Service::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'user_id' => $request['user_id'],
            'imgServicio' => $request['imgServicio'],
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
             'imgServicio' => 'required'
        ]);
       
        $habilidad = Service::findOrFail($id);
        
        $currentimgService = $habilidad->imgServicio;
       

       if($request->imgServicio != $currentimgService){

            $name = time().'.' .explode('/', explode(':', substr($request->imgServicio, 0, strpos
            ($request->imgServicio, ';')))[1])[1];    

            \Image::make($request->imgServicio)->save(public_path('images/servicios/').$name);      
            $request->merge(['imgServicio' => $name]);
            
            

       }

       $habilidad->update($request->all());

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
        $habilidad = Service::findOrFail($id);

        // delete the user
        $habilidad->delete();

        return ['mesaage' => 'Habilidad Delete'];
    }
}
