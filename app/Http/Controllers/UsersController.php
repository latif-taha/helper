<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Service;
use Illuminate\Http\Request;


class UsersController extends Controller
{

    public function login(Request $request) {

        $incomingFields = $request->validate([
        'email' => 'required',
        'password' => 'required'

        ]);

        if(auth()->attempt(['email' => $incomingFields['email'], 'password' => $incomingFields['password'] ])) {

        $request->session()->regenerate();
        $user = auth()->user();
        $request->session()->put([
            'nom' => $user->nom,
            'id' => $user->id,
            'prenom' => $user->prenom,
            'email' => $user->email,
            'telephone' => $user->telephone,
            'image' => $user->image


        ]);

        if ($user->role === 'admin') {
             return redirect('/dash'); 
        }
        elseif($user->role === 'expert'){
            return redirect('/dash'); 
        }
        elseif($user->role === 'client'){
            return redirect('/dash'); 
        }
         else {
             return redirect()->back()->with('failure', 'Email ou mot de passe incorrect');
        }


    } 
}



    public function registerExpert(Request $request)
{
    // Validez les données du formulaire
    $validatedData = $request->validate([
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'tel' => 'required',
        'adresse' => 'required|string|max:255',
        'ville' => 'required|string|max:255',
        'password' => 'required|min:4',
        'categorie' => 'required|exists:categories,id',
     
    ]);


    //$user = User::create($validatedData);
    // Créez un nouvel utilisateur
    
    $user = new User([
        'nom' => $validatedData['lastname'],
        'prenom' => $validatedData['firstname'],
        'email' => $validatedData['email'],
        'telephone' => $validatedData['tel'],
        'adresse' => $validatedData['adresse'],
        'ville' => $validatedData['ville'],
        'password' => bcrypt($validatedData['password']),
        'categorie_id' => $validatedData['categorie'], 
        'role' => 'expert',
    ]);   

    // Enregistrez l'utilisateur dans la base de données
    $user->save();

// Récupérez les valeurs des services sélectionnés depuis le formulaire
$selectedServices = $request->input('services');

// Parcourez les valeurs sélectionnées et enregistrez-les dans la base de données
foreach ($selectedServices as $selectedService) {
    // Créez un nouvel objet Service avec les données nécessaires
    $service = new Service([
        'nom' => $selectedService, // Nom du service
        'user_id' => $user->id, // ID de l'utilisateur
        'categorie_id' => $validatedData['categorie'], // ID de la catégorie
        // Ajoutez d'autres champs si nécessaire
    ]);

    // Enregistrez le service dans la base de données
    $service->save();
}
    // Redirigez l'utilisateur vers une autre page après l'enregistrement
    return redirect('/register')->with('success', 'Expert registered successfully!');

}




public function registerClient(Request $request){
    // Validez les données soumises
    $validatedData = $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|email|unique:users',
        'tel' => 'required',
        'password' => 'required|min:5', 
    ]);

    // Créez un nouvel utilisateur avec les données validées
    $user = new User([
        'nom' => $validatedData['firstname'],
        'prenom' => $validatedData['lastname'],
        'email' => $validatedData['email'],
        'telephone' => $validatedData['tel'],
        'password' => bcrypt($validatedData['password']),
        'role' => 'client',
    ]); 

    // Enregistrez l'utilisateur dans la base de données
    $user->save();
    return redirect('/register')->with('success', 'Your registration has been submitted successfully. Thank you!');
    
}





}
