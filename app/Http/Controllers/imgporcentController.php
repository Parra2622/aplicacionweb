<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Models\Imgporcent;
use Illuminate\Support\Facades\Storage;
Use App\Http\Requests\ImgporcentRequest;

class imgporcentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }
    public function index(Request $request)
    {
        if ($request){
                $query = trim($request->get('searchpu'));

                $noticia = imgporcent::where('id', 'LIKE', '%' . $query . '%')
                          ->orderBy('id', 'asc')
                        ->paginate();

                return view('admin.buscarimg', ['noticia' => $noticia, 'searchpu' => $query]);
                
            }
    }

    public function show()
    {
      $imgporcent = imgporcent::all();
        return view('partials.Informacion.inform', compact('imgporcent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crearimgporcent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ImgporcentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImgporcentRequest $request)
    {
        $pubAgregado=request()->except('_token');

        if($request->hasFile('imagen'))
        {
          $pubAgregado['imagen'] = $request->file('imagen')->store('public');
        }

         $request->session()->flash('alert-success', 'Añadido exitosamente!'); 

        imgporcent::create($pubAgregado);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tbl_imgporcent  $tbl_imgporcent
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tbl_imgporcent  $tbl_imgporcent
     * @return \Illuminate\Http\Response
     */
    public function editar($idimg)
    {
        $publicacion = imgporcent::findOrFail($idimg);
        return view('admin.editarimgporcent', compact('publicacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_imgporcent  $tbl_imgporcent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idimg)
    {
        $pubActualizado=request()->except(['_token','_method']);

        if($request->hasFile('imagen'))
        {
          $publicacion= imgporcent::findOrFail($idimg);

          Storage::delete($publicacion->imagen);
        
          $pubActualizado['imagen'] = $request->file('imagen')->store('public');
        }

          $request->session()->flash('alert-success', 'Actualización exitosa!'); 

        imgporcent::where('id','=',$idimg)->update($pubActualizado);

        $publicacion = imgporcent::findOrFail($idimg);
        return view('admin.editarimgporcent',compact('publicacion'));
       
            return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_imgporcent  $tbl_imgporcent
     * @return \Illuminate\Http\Response
     */
    public function eliminar(Request $request,$idimg){
     
       $request->session()->flash('alert-success', 'Eliminado exitosamente!'); 
            
        $eliminar = imgporcent::where('id', $idimg)->get()->first();
        Storage::delete($eliminar->imagen);
         imgporcent::destroy($idimg);

         return back();
    }
}