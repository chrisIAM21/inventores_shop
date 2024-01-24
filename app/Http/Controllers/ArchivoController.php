<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArchivoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        $archivos = Archivo::all();
        return view('archivos.indexArchivo', compact('archivos', 'productos'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'archivos' => 'required|array',
            'archivos.*' => 'mimes:jpg,jpeg,png,pdf|max:5120',
        ]);
        if ($request->hasFile('archivos')) {
            foreach ($request->file('archivos') as $archivo) {
                if ($archivo->isValid()) {
                    $ruta = $archivo->store('archivos', 'public');
                    
                    // Crear registro en tabla archivos
                    Archivo::create([
                        'hash' => $ruta,
                        'nombre' => pathinfo($archivo->getClientOriginalName(), PATHINFO_FILENAME),
                        'extension' => $archivo->extension(),
                        'mime' => $archivo->getMimeType(),
                    ]);
                }
            }
            return redirect()->route('archivos.index')->with('archivo', 'subido');
        }
    }

    public function destroy(Archivo $archivo)
    {
        Storage::delete($archivo->hash);
        $archivo->delete();

        return redirect()->route('archivos.index')->with('archivo', 'eliminado');
    }

    public function descargar(Archivo $archivo)
    {
        //$rutaArchivo = storage_path('app/public/' . $archivo->hash);
        return response()->download('storage/' . $archivo->hash, $archivo->nombre . '.' . $archivo->extension, [
            'Content-Type' => $archivo->mime
        ]);
    }

    public function relacionar(Request $request, Archivo $archivo)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
        ]);

        $archivo->producto_id = $request->producto_id;
        $archivo->save();

        return redirect()->route('archivos.index');
    }

    public function desenlazar(Archivo $archivo)
    {
        $archivo->producto_id = null;
        $archivo->save();

        return redirect()->route('archivos.index');
    }

    public function reemplazar(Request $request, Archivo $archivo)
    {
        $request->validate([
            'archivo' => 'required|file',
        ]);
    
        if ($request->hasFile('archivo') && $request->file('archivo')->isValid()) {
            // Eliminar el archivo anterior
            Storage::delete($archivo->hash);
    
            // Subir el nuevo archivo
            $ruta = $request->archivo->store('archivos', 'public');
    
            // Actualizar los atributos del archivo
            $archivo->hash = $ruta;
            $archivo->nombre = pathinfo($request->archivo->getClientOriginalName(), PATHINFO_FILENAME);
            $archivo->extension = $request->archivo->getClientOriginalExtension();
            $archivo->mime = $request->archivo->getMimeType();
            $archivo->save();
    
            return redirect()->route('archivos.index');
        }
    
        return redirect()->route('archivos.index');
    }
}
