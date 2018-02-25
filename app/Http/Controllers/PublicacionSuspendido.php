<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Lista_suspendido;
use Session;
use Carbon\Carbon;

class PublicacionSuspendido extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('publicacion_suspendido.nuevosuspendido');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function lista(){
        $listas = Lista_suspendido::all();

        return view('publicacion_suspendido.lista_observados',compact('listas'));
    }




    public function create(Request $request)
    {

        $observados =new Lista_suspendido;
        $observados->nombre=$request->nombre;
        $observados->ci=$request->ci;
        $observados->mes=$request->mes;
        $observados->save();
        Session::flash('saveobservado','Se registro satisfactoriamente');
          return redirect('admin');

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $observado= Lista_suspendido::find($id);
        return view('publicacion_suspendido.frmeditarobservado',compact('observado'));
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
        $observado = Lista_suspendido::find($id);
        $observado->nombre =$request->nombre;
        $observado->ci =$request->ci;
        $observado->mes =$request->mes;
        $observado->save();
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
        $observado=Lista_suspendido::FindOrFail($id);
        $resul = $observado->delete();
        if ($resul)
        {
            return response()->json(['success'=>'true']); 
        }
        else
        {
            return response()->json(['success'=> 'false']);
        }
    }



    public function verificaobservado(Request $request){
        $numeroci= $request->numeroci;
        Carbon::setlocale('es');
        $now = Carbon::now();
        $month = date('m');
        $year = date('y');
        $primero = date('y-m-d',mktime(0,0,0,$month,1,$year)); 
        $fechaa = new Carbon($primero);
        
        $fechaa->addMonth(); 

        $verifica=Lista_suspendido::where('ci',$numeroci)->get();
        if(Lista_suspendido::where('ci',$numeroci)->count() != 0){
            $con = Lista_suspendido::where('mes',$fechaa)->where('ci',$numeroci)->count();
            if ($con != 0) {
                return response()->json(1);
            }else{
                return response()->json(2);
            }
        }else{
            return response()->json(3);
        }

         
        


    }
}
