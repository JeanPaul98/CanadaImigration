<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\candidat;

class CandidatController extends Controller
{
    //
    public function store(Request $request){

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'email' => 'required|email|unique:candidat',
            'niveau_one' => 'nullable',
            'province_one' => 'nullable',
            'province_two' => 'nullable',
            'province_tree' => 'nullable',
            'autorisation' => 'nullable',
            'fichier_one' => 'nullable|array',
            'fichier_one.*' => 'nullable|mimes:jpeg,png,pdf|max:2048',
            'fichier_two' => 'nullable|array',
            'fichier_two.*' => 'nullable|mimes:jpeg,png,pdf|max:2048',
            'fichier_tree' => 'nullable|array',
            'fichier_tree.*' => 'nullable|mimes:jpeg,png,pdf|max:2048',
            'fichier_four' => 'nullable|array',
            'fichier_four.*' => 'nullable|mimes:jpeg,png,pdf|max:2048',
        ]);


          // Créer un nouvel utilisateur avec les données validées
          $candidat = new candidat();

          $candidat->nom = $validatedData['nom'];
          $candidat->prenom = $validatedData['prenom'];
          $candidat->telephone = $validatedData['telephone'];
          $candidat->email = $validatedData['email'];


          $candidat->niveau_one = $request->has('niveau_one');
          $candidat->niveau_two = $request->has('niveau_two');
          $candidat->niveau_tree = $request->has('niveau_tree');
          $candidat->niveau_four = $request->has('niveau_four');
          $candidat->province_one = $request->has('province_one');
          $candidat->province_two = $request->has('province_two');
          $candidat->province_tree = $request->has('province_tree');
          $candidat->autorisation = $request->has('autorisation');
   

        // Gérer les fichiers téléchargés
        if ($request->hasFile('fichier_one')) {
            $uploadedFiles = [];
            foreach ($request->file('fichier_one') as $file) {
                $filename = $file->store('uploads');
                $uploadedFiles[] = $filename;
            }
            $candidat->files = json_encode($uploadedFiles);
        } 
        // Gérer les fichiers téléchargés
        if ($request->hasFile('fichier_two')) {
            $uploadedFiles = [];
            foreach ($request->file('fichier_two') as $file) {
                $filename = $file->store('uploads');
                $uploadedFiles[] = $filename;
            }
            $candidat->files = json_encode($uploadedFiles);
        } 
        // Gérer les fichiers téléchargés
        if ($request->hasFile('fichier_tree')) {
            $uploadedFiles = [];
            foreach ($request->file('fichier_tree') as $file) {
                $filename = $file->store('uploads');
                $uploadedFiles[] = $filename;
            }
            $candidat->files = json_encode($uploadedFiles);
        } 
        // Gérer les fichiers téléchargés
        if ($request->hasFile('fichier_four')) {
            $uploadedFiles = [];
            foreach ($request->file('fichier_four') as $file) {
                $filename = $file->store('uploads');
                $uploadedFiles[] = $filename;
            }
            $candidat->files = json_encode($uploadedFiles);
        } 
   
        // Sauvegarder l'utilisateur
        $candidat->save();
    
         // Rediriger l'utilisateur ou afficher un message de succès
         return redirect()->back()->with('success', 'Formulaire soumis avec succès !');
        //  return redirect('/formulaire')->with('success', 'Formulaire soumis avec succès !');
    }
    
}
