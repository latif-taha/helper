<?php
// Dans App\Http\Controllers\DemandeController.php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Demande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemandeController extends Controller
{
    public function showEmptyPage3() {
        $userId = Auth::id();

        // Debugging: Check if the user ID is being retrieved correctly


        $demandes = Demande::where('user_id_partenaire', $userId)->get();

        // Debugging: Check what is being retrieved


        return view('expert.empty-page3', compact('demandes'));
    }

    public function update(Request $request, $id) {
        $demande = Demande::findOrFail($id);
        $demande->statut = $request->statut;
        $demande->save();

        return back()->with('success', 'Statut mis à jour avec succès.');
    }


}
