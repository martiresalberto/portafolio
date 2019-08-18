<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class MiPortafolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::latest()->paginate(10);
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
             'price' => 'required',
             'estado' => 'required',
             'imgProducto' => 'required'
            
        ]);
 
       if($request->imgProducto){

            $name = time().'.' .explode('/', explode(':', substr($request->imgProducto, 0, strpos
            ($request->imgProducto, ';')))[1])[1];    

            \Image::make($request->imgProducto)->save(public_path('images/portafolio/').$name);      
            $request->merge(['imgProducto' => $name]);
            

       }

        return Product::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'user_id' => $request['user_id'],
            'price' => $request['price'],
            'url' => $request['url'],
            'estado' => $request['estado'],
            'imgProducto' => $request['imgProducto'],
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
             'price' => 'required',
             'imgProducto' => 'required'
            
        ]);
       
        $portafolio = Product::findOrFail($id);
        
        $currentimgProducto = $portafolio->imgProducto;
       

       if($request->imgProducto != $currentimgProducto){

            $name = time().'.' .explode('/', explode(':', substr($request->imgProducto, 0, strpos
            ($request->imgProducto, ';')))[1])[1];    

            \Image::make($request->imgProducto)->save(public_path('images/portafolio/').$name);      
            $request->merge(['imgProducto' => $name]);
            

       }

       $portafolio->update($request->all());

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
        $portafolio = Product::findOrFail($id);

        // delete the user
        $portafolio->delete();

        return ['mesaage' => 'Portafolio Delete'];
    }
}
