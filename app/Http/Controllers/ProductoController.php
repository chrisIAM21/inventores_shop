<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('catalogo');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(): View
    // {
    //     $productos = Producto::get();
    //     //$productos = Producto::withTrashed()->get(); // Con esto podemos ver los productos eliminados
    //     return view('productos.indexProducto', compact('productos')); // la ruta para ver en web sería: localhost:8000/productos
    // }
    /* Modificamos el método index para que muestre las categorias asociadas a cada producto usando with */
    public function index(): View
    {
        $productos = Producto::with('categorias')->get();
        return view('productos.indexProducto', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.createProducto'); // la ruta para ver en web sería: localhost:8000/productos/create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required|max:255',
            'modelo' => 'required|max:255',
            'color' => ['required', 'max:40'],
            'stock' => 'required|numeric|min:0',
        ]);

        /*
        $producto = new Producto();
        $producto->marca = $request->marca;
        $producto->modelo = $request->modelo;
        $producto->color = $request->color;
        $producto->stock = $request->stock;
        $producto->save();
        */

        Producto::create($request->all());

        return redirect()->route('productos.create')->with('producto', 'creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        $producto = Producto::with('categorias')->find($producto->id);
        return view('productos.showProducto', compact('producto')); // la ruta para ver en web sería: localhost:8000/productos/{id} | El compact es para pasarle el producto
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $categorias = Categoria::all(); // Obtener todas las categorías
        $producto->load('categorias'); // Cargar las categorías asociadas al producto
        return view('productos.editProducto', compact('producto', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'marca' => 'required|max:255',
            'modelo' => 'required|max:255',
            'color' => ['required', 'max:40'],
            'stock' => 'required|numeric|min:0',
        ]);
        /*
        $producto->marca = $request->marca;
        $producto->modelo = $request->modelo;
        $producto->color = $request->color;
        $producto->stock = $request->stock;
        $producto->save();
        */

        $producto->update($request->except('_token', '_method')); // Actualizar los campos del producto
        $producto->categorias()->sync($request->input('categorias', [])); // Sincronizar las categorías
        // $producto::where('id', $producto->id)->update($request->except('_token', '_method'));

        return redirect()->route('productos.edit', $producto)->with('producto', 'editado');
        // return redirect()->route('productos.edit', $producto)->with('exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        // redirige a la ruta productos.index despues de mostrar el mensaje
        return redirect()->route('productos.index')->with('producto', 'eliminado');
    }

    public function realizarConsulta()
    {
        $productos = Producto::all();

        // Devolver la respuesta en formato JSON
        return response()->json($productos);
    }

    // Método para pasar los productos a la vista en inicio.catalogo

    public function catalogo()
    {
        $productos = Producto::all();
        return view('inicio.catalogo', compact('productos')); 
    }
}
