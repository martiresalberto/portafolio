<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Certification;

class CertificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Certification::latest()->paginate(10);
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
             'imgCertificacion' => 'required'
            
        ]);
 
       if($request->imgCertificacion){

            $name = time().'.' .explode('/', explode(':', substr($request->imgCertificacion, 0, strpos
            ($request->imgCertificacion, ';')))[1])[1];    

            \Image::make($request->imgCertificacion)->save(public_path('images/certificados/').$name);      
            $request->merge(['imgCertificacion' => $name]);
            

       }

        return Certification::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'user_id' => $request['user_id'],
            'imgCertificacion' => $request['imgCertificacion'],
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
             'imgCertificacion' => 'required'
        ]);
       
        $certificado = Certification::findOrFail($id);
        
        $currentimgCertificacion = $certificado->imgCertificacion;
       

       if($request->imgCertificacion != $currentimgCertificacion){

            $name = time().'.' .explode('/', explode(':', substr($request->imgCertificacion, 0, strpos
            ($request->imgCertificacion, ';')))[1])[1];    

            \Image::make($request->imgCertificacion)->save(public_path('images/certificados/').$name);      
            $request->merge(['imgCertificacion' => $name]);
            

       }

       $certificado->update($request->all());

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
        $certificado = Certification::findOrFail($id);

        // delete the user
        $certificado->delete();

        return ['mesaage' => 'Certificado Delete'];
    }
}
