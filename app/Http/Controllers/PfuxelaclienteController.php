<?php

namespace App\Http\Controllers;

use App\Models\pfuxelacliente;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use  App\Http\Requests\ClientepfuStoreRequest;



class PfuxelaclienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return pfuxelacliente::OrderBy('created_at', 'DESC')->get();
        
        // $pfuxelaclientes = Pfuxelacliente::all();
        // return response()->json($pfuxelaclientes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientepfuStoreRequest $ClientepfuStoreRequest)
    {

        $newPfuxelacliente = new pfuxelacliente;
        $newPfuxelacliente-> nome = $ClientepfuStoreRequest->nome;
        $newPfuxelacliente-> email = $ClientepfuStoreRequest->email;
        $newPfuxelacliente-> contacto = $ClientepfuStoreRequest->contacto;
        $newPfuxelacliente-> Data_requesicao = $ClientepfuStoreRequest->Data_requesicao;
        $newPfuxelacliente-> local_partida = $ClientepfuStoreRequest->local_partida;
        $newPfuxelacliente-> destino_partida = $ClientepfuStoreRequest->destino_partida;
        $newPfuxelacliente-> passageiros = $ClientepfuStoreRequest->passageiros;
        $newPfuxelacliente-> Data_estimativa_entrega = $ClientepfuStoreRequest->Data_estimativa_entrega;
        $newPfuxelacliente-> horas_partida_viatura = $ClientepfuStoreRequest->horas_partida_viatura;
        $newPfuxelacliente-> horas_entrega_viatura = $ClientepfuStoreRequest->horas_entrega_viatura;
        $newPfuxelacliente-> descricao = $ClientepfuStoreRequest->descricao;
        // $newPfuxelacliente-> ficheiro = $ClientepfuStoreRequest->ficheiro;
        
        // $pfuxelacliente= Pfuxelacliente::create($request->all());
        // return response()->json(['message' => 'Requesição feita com sucesso.']);
        $newPfuxelacliente->save();


        return response()->json(['message' => 'Requesição feita com sucesso.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(pfuxelacliente $pfuxelacliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pfuxelacliente $pfuxelacliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $pfuxelacliente)
    {
        $existemCliente = pfuxelacliente::find($pfuxelacliente);
       
         if( $existemCliente ) {
            $existemCliente->nome = $request->nome;
            $existemCliente->email = $request->email;
            $existemCliente->contacto = $request->contacto;
            $existemCliente->Data_requesicao = $request->Data_requesicao;
            $existemCliente->local_partida = $request->local_partida;
            $existemCliente->destino_partida = $request->destino_partida;
            $existemCliente->passageiros = $request->passageiros;
            $existemCliente->Data_estimativa_entrega = $request->Data_estimativa_entrega;
            $existemCliente->horas_partida_viatura = $request->horas_partida_viatura;
            $existemCliente->horas_entrega_viatura = $request->horas_entrega_viatura;
            $existemCliente->descricao = $request->descricao;
            // $existemCliente->ficheiro= $request->ficheiro;
            $existemCliente->save();
             return $existemCliente;
        }
    return response()->json(['message' => 'Requesição feita sem sucesso.']);        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($pfuxelacliente)
    {
        $existemCliente = pfuxelacliente::find($pfuxelacliente);
            if ( $existemCliente){
                $existemCliente->delete();
                return "Apagado com sucesso";
            }
            return "Sem nada por apagar";  
    }
    
    public function upload(Request $request) {
        $request -> validate([
            'file' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf|max:2048'
        ]);
        $pfuxelacliente = new pfuxelacliente;
        if ($request -> file()) {
            $file_name = time().'_'.$request -> file -> getClientOriginalExtension();
            $file_path = $request -> file('file') -> storeAs('uploads', $file_name, 'public');
    
            $pfuxelacliente -> ficheiro=time().'_'.$request -> file -> getClientOriginalExtension();
            $pfuxelacliente -> path = ' /storage/'.$file_path;
            $pfuxelacliente -> save();
        }
    
        // if ($request->File('file')) {
    
        //     // $file = $request->file('file');
        //     // $ext = $file->getClientOriginalExtension();
        //     // $filename = time() . '.' . $ext;
        //     // $file->move('uploads/pdf/', $filename);
        // }
    
        return response() -> json(['success'=> 'File upload successfull']);
    
    }
}
