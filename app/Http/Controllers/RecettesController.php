<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recette;

class RecettesController extends Controller
{
    public function getSpeRecettes(Request $request)
    {
        if ($request->has('search')) {
            $recettes = Recette::where("titre", "LIKE", "%" . $request->search . "%")->get();
            return response()->json($recettes);
        }
    }

    public function delete($id)
    {
        $recette = Recette::find($id);
        $ok = $recette->delete();
        if ($ok) {
            return response()->json(["status" => 1, "message" => "recette recette"], 200);
        } else {
            return response()->json(["status" => 0, "message" => "problème lors de la suppression"], 400);
        }
    }

    public function modif(Request $request, $id){
    $recette = Recette::find($id);
    $recette->titre = $request->titre;
    $recette->ingredients = $request->ingredients;
    $recette->photo = $request->photo;
    $ok = $recette->save();
    if ($ok) {
        return response()->json(["status" => 1, "message" => "recette modifié"], 200);
    } else {
        return response()->json(["status" => 0, "message" => "problème lors de la modification"], 400);
}
}

}