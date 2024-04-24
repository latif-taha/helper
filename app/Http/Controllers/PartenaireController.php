<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PartenaireController extends Controller
{
    public function updateexpert(Request $request){
        
        // // Validate the form data
        // $validatedData = $request->validate([
        //     'prenom' => 'required',
        //     'nom' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'telephone' => 'required',
        //     'adresse' => 'required', 
        // ]);
    
        // // // Get the authenticated user
        $user = User::find(auth()->id());
    
        // // // Update user data
        $user->nom = $request['nom'];
        $user->prenom = $request['prenom'];
        $user->adresse = $request['adresse'];
        $user->telephone = $request['telephone'];
        $user->email = $request['email'];
        $user->image = $request['image'];
    
        // $user->nom = $validatedData['nom'];
        // $user->prenom = $validatedData['prenom'];
        // $user->adresse = $validatedData['adresse'];
        // $user->telephone = $validatedData['telephone'];
        // $user->email = $validatedData['email'];
        
        
        $user->save();
    
        $request->session()->put([
            'nom' => $user->nom,
            'id' => $user->id,
            'prenom' => $user->prenom,
            'email' => $user->email,
            'telephone' => $user->telephone,
            'image' => $user->image
        ]);
    
        
        
        
        // Redirect back with a success message
        return redirect('/empty-page')->with('success', 'Information updated successfully.');
    }
}
