<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use App\Models\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['paises'] = Pais::paginate(10);
        return view("pais.index", $data);
    }
    public function create()
    {
        return view("pais.create");
    }
    public function store(Request $request)
    {
        $campos= [
            'name' => 'required|string|max:100',
            'color' => 'required|string|max:100'
        ];

        $mensajes = [
            'required' => 'El :attribute es requerido',
        ];
        $this->validate($request, $campos, $mensajes);
        $dataPais = request()->except('_token');
        Pais::insert($dataPais);
        return redirect('pais')->with('mensaje','País agregado con éxito.');
    }
    public function edit($id)
    {
        $pais = Pais::findOrFail($id);
        
        $pais['registros'] = Registro::where([
             'pais_id' => $id
        ])->get();     
        return view('pais.edit', compact('pais'));
    }
    public function update(Request $request, $id)
    {
        $campos= [
            'name' => 'required|string|max:100',
            'color' => 'required|string|max:100'
        ];

        $mensajes = [
            'required' => 'El :attribute es requerido',
        ];

        $this->validate($request, $campos, $mensajes);

        $dataPais = request()->except(['_token','_method']);
         
        $count = Registro::where([
            'pais_id' => $id
        ])->max('commit');

        Pais::where('id','=', $id)->update($dataPais);
        //buscar el último registro id y sumarle 1
        
        Registro::insert([
            'pais_id' => $id,
            'name' => $request->name,
            'color' => $request->color,
            'commit' => $count + 1,
            'created_at' => Carbon::now()
        ]);
        //$pais = Pais::findOrFail($id);
        
        return redirect('pais')->with('mensaje','Cambios con éxito.');
    }
    public function destroy($id)
    {
        $pais = Pais::findOrFail($id);
        if($pais){
            Pais::destroy($id);
        }else{
            return redirect('pais')->with('mensaje','Ocurrio un Error.');
        }
        return redirect('pais')->with('mensaje','Empleado eliminado con éxito.');
    }

}
