<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function     store(Request $request)
    {
        DB::beginTransaction();
        try
        {
            $information = Information::where('user_id', $request->user_id)->first();
            if($information){
                return response()->json(['error' => 'Ya existe informcion del usuario']);
            }

            $user = UsersController::getUser($request->user_id);
            if(!$user){
                return response()->json(['error' => 'Usuario no existe'], 400);
            }

            $information= Information::create([
                'title' => $request->title,
                'description' => $request->description,
                'interesting' => $request->interesting,
                'user_id' => $request->user_id,
            ]);
            if(!$information) throw new \Exception('Error al crear la información');   
            $existimage = $request->image != null;
            if($existimage){
                $archivo=$request->file('image');
            //crearemos la ruta donde se guardara el archivo

            $ruta=storage_path(`/images/`.$request->user_id);
            if(!file_exists($ruta))
            {
                mkdir($ruta, 0777, true);
            }
            //mover el archivo a la ruta indicada
            $archivo->move($ruta,$archivo->getClientOriginalName());
            //obtenemos la ruta completa del archivo
            $rutaCompleta=$ruta.'/'.$archivo->getClientOriginalName();
          
            $information::where('id',$information->id)->update(['image'=>$rutaCompleta]);
            }
            
            DB::commit();

            return $information;  
            
            //Pero no se almacena en la bd
        }       
        catch(\Exception $e)
        {

            DB::rollback();
            return response()->json(['error' => $e->getMessage()], 500);
        }

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $information = Information::all();
        return $information;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $information)
    {
        $information = Information::where('id',$information->id)->update([
            'title' => $information->title,
            'description' =>  $information->description,
            'interesting' => $information->interesting,
        ]);
        return $information;
    }

    public function getInformation($id)
    {
        $information = Information::where('user_id', $id)->first();
        return $information;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $information)
    {
        $id = Information::where('user_id', $information->user_id)->first();
        if(!$id) return response()->json(['error' => 'No existe la información']);
        try{
            $informations = Information::where('user_id', $information->user_id)->update([
                'title' => $information->title,
                'description' => $information->description,
                'interesting' => $information->interesting,
            ]);
            return $information;
        }
        catch(\Exception $e)
        {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy(Information $information)
    {
        //
    }
}
