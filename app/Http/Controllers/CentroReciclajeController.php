<?php   
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CentroReciclaje;

class CentroReciclajeController extends Controller
{
    public function buscar(Request $request)
    {
        $ubicacion = $request->input('ubicacion');
        $material = $request->input('material');

        $query = CentroReciclaje::query();

        if ($ubicacion) {
            $query->where('ubicacion', 'LIKE', '%' . $ubicacion . '%');
        }

        if ($material) {
            $query->where('materiales_aceptados', 'LIKE', '%' . $material . '%');
        }

        $centros = $query->get();

        return view('buscador', compact('centros'));
    }
}
