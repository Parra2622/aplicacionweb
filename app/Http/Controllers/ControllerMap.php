<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblMapeo;
use App\Models\TblRegistroasada;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\MapeoRequest;


class ControllerMap extends Controller
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

     public function index(Request $request)
    {
         if ($request){
                $query = trim($request->get('searchm'));

                $mapeo = TblMapeo::where('Nom_Asada', 'LIKE', '%' . $query . '%')
                          ->orderBy('IdMapeo', 'asc')
                        ->paginate();

                return view('admin.buscarmapeo', ['mapeo' => $mapeo, 'searchm' => $query]);
                
            }
   
}
   

    public function editar($idmap)
    {
        $mapeos = TblMapeo::findOrFail($idmap);
        return view('admin.editarmapeo', compact('mapeos'));
    }

    public function update (Request $request, $idmap)
    {
          $mapeoActualizado=request()->except(['_token','_method']);

        if($request->hasFile('Archivo_SHP'))
        {
          $mapeos= TblMapeo::findOrFail($idmap);

          Storage::delete($mapeos->Archivo_SHP);
        
          $mapeoActualizado['Archivo_SHP'] = $request->file('Archivo_SHP')->store('public');
        }

          $request->session()->flash('alert-success', 'Actualización exitosa!'); 

        TblMapeo::where('IdMapeo','=',$idmap)->update($mapeoActualizado);

        $mapeos = TblMapeo::findOrFail($idmap);
        return view('admin.editarmapeo',compact('mapeos'));
       // $mapeoActualizado->save();
            return back();
    }
    public function destroy(Request $request, $idmap){
     
        $request->session()->flash('alert-success', 'Eliminado exitosamente!'); 
            
        $eliminar = TblMapeo::where('IdMapeo', $idmap)->get()->first();
        Storage::delete($eliminar->Archivo_SHP);
         TblMapeo::destroy($idmap);

         return back();
    }


    public function create()
    {
      $categorias = TblRegistroasada::all();
        return view('admin.createmapeo', compact('categorias'));
    }

     public function store(MapeoRequest $request){

     //  $mapeoAgregado=request()->all();

        $mapeoAgregado=request()->except('_token');

        if($request->hasFile('Archivo_SHP'))
       {
          $mapeoAgregado['Archivo_SHP'] = $request->file('Archivo_SHP')->store('public');
        }

         $request->session()->flash('alert-success', 'Añadido exitosamente!'); 

        TblMapeo::create($mapeoAgregado);

  
     

        return back();
    }
    }
    



  

   
