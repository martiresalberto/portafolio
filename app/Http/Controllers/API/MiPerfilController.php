<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class MiPerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::latest()->paginate(10);
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
             'email' => 'required',
            
        ]);
 
       if($request->imgPerfil){

            $name = time().'.' .explode('/', explode(':', substr($request->imgPerfil, 0, strpos
            ($request->imgPerfil, ';')))[1])[1];    

            \Image::make($request->imgPerfil)->save(public_path('images/miperfi/').$name);      
            $request->merge(['imgPerfil' => $name]);
            

       }

        return User::create([
            'name' => $request['name'],
            'email' => $request['email'],
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
             'email' => 'required',
            
        ]);
       
        $perfil = User::findOrFail($id);
        
        $currentimgPerfil = $perfil->imgPerfil;
       

       if($request->imgPerfil != $currentimgPerfil){

            $name = time().'.' .explode('/', explode(':', substr($request->imgPerfil, 0, strpos
            ($request->imgPerfil, ';')))[1])[1];    

            \Image::make($request->imgPerfil)->save(public_path('images/miperfil/').$name);      
            $request->merge(['imgPerfil' => $name]);
            

       }

       $perfil->update($request->all());

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
        $perfil = User::findOrFail($id);

        // delete the user
        $perfil->delete();

        return ['mesaage' => 'Pefil Delete'];
    }
}
