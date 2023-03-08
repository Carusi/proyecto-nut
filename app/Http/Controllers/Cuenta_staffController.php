<?php

namespace App\Http\Controllers;

use App\Models\cuenta_staff;
use Illuminate\Http\Request;

class Cuenta_staffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adm = cuenta_staff::paginate(2);
        // $adm = cuenta_staff::orderBy('cue_id')->get();
        return view('dashboard.adminUsu', compact('adm'));
    }

    public function vistas()
    {
        return view('dashboard.adminIni');
    }

    public function cita()
    {
        return view('dashboard.adminCit');
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
        // $datos = $request->validate(
        //     [
                
        //         'cue_correo' => 'required',
        //         'cue_password' => 'required'
        //     ]

        // );
        // $staff = cuenta_staff::create($datos);
        $admin = new cuenta_staff();
        $admin->cue_nombre = $request->cue_nombre;
        $admin->cue_apellido = $request->cue_apellido;
        $admin->cue_correo = $request->cue_correo;
        $admin->password = $request->cue_password;
        
        if($admin->save()){
            // return response()->json([
                return redirect()->route('adm.index');
                // 'mensaje'=> 'Registro exitoso',
                // 'icono'=> 'success'
            // ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cuenta_staff  $cuenta_staff
     * @return \Illuminate\Http\Response
     */
    public function show(cuenta_staff $cuenta_staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cuenta_staff  $cuenta_staff
     * @return \Illuminate\Http\Response
     */
    public function edit(cuenta_staff $cuenta_staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cuenta_staff  $cuenta_staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cuenta_staff $cuenta_staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cuenta_staff  $cuenta_staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(cuenta_staff $cuenta_staff)
    {
        //
    }
}
