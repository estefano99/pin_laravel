<?php

namespace App\Http\Controllers;

use App\Models\Api;
use Illuminate\Http\Request;
use App\Mail\MensajeContacto;
use Illuminate\Support\Facades\Mail;

class ApiController extends Controller
{
    public function verApi(){
        return view("api");
    }
    public function storeMensaje(){
        $mensaje = Api::create([
            "name"=> request()->name,
            "email" => request()->email,
            "phone" => request()->phone,
            "message" => request()->message
        ]);
        // dd(request()->all());
        Mail::to("estefanobugari@gmail.com")->send(new MensajeContacto($mensaje));
        // return redirect()->route('/')->with("status", "se envio el mensaje, contestaremos lo antes posible!");

    }
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\api  $api
     * @return \Illuminate\Http\Response
     */
    public function show(api $api)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\api  $api
     * @return \Illuminate\Http\Response
     */
    public function edit(api $api)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\api  $api
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, api $api)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\api  $api
     * @return \Illuminate\Http\Response
     */
    public function destroy(api $api)
    {
        //
    }
}
