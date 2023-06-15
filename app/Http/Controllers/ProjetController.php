<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projet;
use App\Models\Projetencours;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProjetController extends Controller
{
    public function traitement_add(Request $request)
    {
        $user = Auth::user();

        // Créer un nouveau projet et associer l'utilisateur
        $projet = new Projet();
        $projet->libelle = $request->input('libelle');
        $projet->description = $request->input('description');
        $projet->datedebut = $request->input('datedebut');

        // Associer le projet à l'utilisateur
        $projet->user_id = $user->id;

        $projet->save();

        return redirect('/addtask')->with('message', 'Projet crée avec succès! Retrouver votre projet dans la section liste des projets');
    }

    public function form_listtask()
    {
        // Récupérer l'utilisateur actuellement connecté
        $user = Auth::user();

        // Récupérer les projets associés à l'utilisateur
        $projets = $user->projets;
        return view('/listtask', compact('projets'));
    }

    public function destroy($id)
    {
        $element = Projet::findOrFail($id);
        $element->delete();
        return redirect()->back()->with('success', 'Projet supprimé avec succès');
    }

    public function begintask($id)
    {
        $projet = Projet::find($id);

        // Vérifiez si le projet existe
        if ($projet) {
            // Créez un nouvel enregistrement dans la table "projet_en_cours"
            projetencours::create([
                'id' => $projet->id,
                'libelle' => $projet->libelle,
                'description' => $projet->description,
                'datedebut' => $projet->datedebut,
            ]);

            // Supprimez le projet de la table "projets"
            $projet->delete();
        }

        // Redirigez vers la page d'origine ou une autre page appropriée
        return redirect()->back();
    }
}
