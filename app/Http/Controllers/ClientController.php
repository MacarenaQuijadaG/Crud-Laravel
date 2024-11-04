<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //Listar 
        $clients = Client::paginate(5);
        //Retornar la vista
        return view('client.index')
            ->with('clients',$clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Retornar la vista del crear cliente
        return view('client.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //retorna 
        $request->validate([
            'name' => 'required|max:15', 
            'due' => 'required|gte:50'
        ]);

        $client = Client::create($request->only('name','due','comments'));

        Session::flash('mensaje','Registado con Exito');

        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(client $client)
    {
        //
        return view('client.form')
                ->with('client', $client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, client $client)
    {
        // Actualizar

          //retorna 
          $request->validate([
            'name' => 'required|max:15', 
            'due' => 'required|gte:50'
        ]);

        $client->name = $request['name'];
        $client->due = $request['due'];
        $client->comments = $request['comments'];
        $client->save();

        Session::flash('mensaje','Editado con Exito');

        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(client $client)
    {
        //
    }
}
