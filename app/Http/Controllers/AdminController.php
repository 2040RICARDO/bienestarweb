<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Carbon\Carbon;
use App\Publicacion;
use Storage;
use Illuminate\Support\Facades\Validator;
use Session;



class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    
     */


 
 

    public function index()
    {
        return view('admin');
    }

    public function vistaformulario(){

        $usuario=\Auth::user();
        return view('publicacion\vistaformulario',compact('usuario'));
    }

   






    public function vistalista(){



        $rutaarchivos= "../storage/archivos/";
        $publicaciones = \DB::table('publicacion')
    ->select('publicacion.*','users.name as nombre')
    ->join('users', 'users.id','=','publicacion.users_id')
    ->get();


       
        return view('publicacion\vistalista',compact('publicaciones','rutaarchivos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Request $request)
    {
        $usuario=\Auth::user();
        $archivo = $request->file('file');
        $input = array('file' => $archivo);
        $reglas = array('file' => 'required|mimes:pdf|max:50000');
        $validacion = Validator::make($input, $reglas);
        if($validacion->fails())
        {
            Session::flash('save1','La publicacion no fue registrada revise el tipo de archivo');
            return redirect('admin');
        }
        else{
          $publicacion = new Publicacion;
          $publicacion->users_id = $request->users_id;
          $publicacion->fechapublicacion = $request->fechapublicacion;
          $publicacion->estado = $request->estado;
          $publicacion->descripcion = $request->descripcion; 

          $carpeta = "publicacion";
          $ruta = time() . '.' .$archivo->getClientOriginalName(); 
          $r1 = Storage::disk('archivos')->put($ruta, \File::get($archivo));
          $publicacion->ruta=$ruta;
          $resul = $publicacion->save(); 
          Session::flash('save','La publicación fue registrada satisfactoriamente');
          return redirect('admin');
        }

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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


 public function descargar_publicacion($id){
        
         //$publicacion=Publicacion::find($id);
         //$rutaarchivo= "../storage/archivos/".$publicacion->ruta;
         //return response()->download($rutaarchivo);


    
     

       }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicacion = Publicacion::find($id);
        return view('publicacion\frmeditarpublicacion',compact('publicacion'));
    }


    public function mostrar($id)
    {
        $publicacion = Publicacion::find($id);
       return response()->json($publicacion);
    
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
        $publicar = Publicacion::find($id);
        $publicar->fechapublicacion = $request->fechapublicacion;
         $publicar->estado = $request->estado;
         $publicar->descripcion = $request->descripcion;
    
        $publicar->save();
        return response()->json([
            "mensaje" => "listo"
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publicacion = Publicacion::FindOrFail($id);
        $resul = $publicacion->delete();

        if ($resul)
        {
            return response()->json(['success'=>'true']); 
        }
        else
        {
            return response()->json(['success'=> 'false']);
        }
    }
}
