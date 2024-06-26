<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;
use App\Models\Derangement;
use App\Models\Client;

class FormController extends Controller
{
    public function index()
    {
        return view('form.index');
    }

   

     public function submitdemande(Request $request)
 {
    $request->validate([
        'Type_demande' => 'required',
        'Type_client' => 'required',
        'Nom_client' => 'required',
         'Prenom_client' => 'required',
        // 'Prenom_client' => $request->input('Type_client') === 'Personal' ? 'required' : '',
          'Prenom_client' => 'required' ,
        'Fixe' => 'required',
        'Wilaya_client' => 'required',
        'Adresse' => 'required',
        'Mobile' => 'required',
        'Email' => 'required|email',
        'ICD' => 'required',
        'Issuer_authority' => 'required',
        'Birthday_date' => 'required',
        'Date_issue_id' => 'required',
    ]);

   
    $demande = Demande::create([
        'Type_demande' => $request->input('Type_demande'),
        'Status_demande' => 'Not Done',
    ]);
// dd($demande);
    if ($request->filled('Type_client', 'Nom_client', 'Prenom_client', 'Fixe', 'Wilaya_client', 'Adresse', 'Mobile', 'Email','ICD','Issuer_authority','Birthday_date','Date_issue_id')) {
        $client = new Client();
        $client->Type_client = $request->input('Type_client');
        $client->Nom_client = $request->input('Nom_client');
        $client->Prenom_client = $request->input('Prenom_client');
        $client->Mobile = $request->input('Mobile');
        $client->Fixe = $request->input('Fixe');
        $client->Wilaya_client = $request->input('Wilaya_client');
        $client->Adresse = $request->input('Adresse');
        $client->Email = $request->input('Email');
        $client->ICD = $request->input('ICD');
        $client->Issuer_authority = $request->input('Issuer_authority');
        $client->Birthday_date = $request->input('Birthday_date');
        $client->Date_issue_id = $request->input('Date_issue_id');
        $client->save();

        $demande->IDclient = $client->ID_client;
        $demande->save();
        
    }
    if($demande){
    return redirect()->route('form.index')->with('successdm', 'form de demande was sent successfully!');}
else {
    return redirect()->route('form.index')->with('errordm', 'form de demande was unable to sent.');
}

        
}



public function submitderangement(Request $request)
{

    $request->validate([
        'Type_derangement' => 'required',
        'Type_client' => 'required',
        'Nom_client' => 'required',
        'Prenom_client' => 'required',
        'Fixe' => 'required',
        'Wilaya_client' => 'required',
        'Adresse' => 'required',
        'Mobile' => 'required',
        'Email' => 'required|email',
    ]);
    
    $derangement = Derangement::create([
        'Type_derangement' => $request->input('Type_derangement'),
        'Status_Derangement' => 'Not Done',
    ]);
// dd($derangement);
    if ($request->filled('Type_client', 'Nom_client', 'Prenom_client', 'Fixe', 'Wilaya_client', 'Adresse', 'Mobile', 'Email')) {
        $client = new Client();
        $client->Type_client = $request->input('Type_client');
        $client->Nom_client = $request->input('Nom_client');
        $client->Prenom_client = $request->input('Prenom_client');
        $client->Mobile = $request->input('Mobile');
        $client->Fixe = $request->input('Fixe');
        $client->Wilaya_client = $request->input('Wilaya_client');
        $client->Adresse = $request->input('Adresse');
        $client->Email = $request->input('Email');
        $client->save();

        $derangement->IDclient = $client->ID_client;
        $derangement->save();
    }
    if($derangement){
    return redirect()->route('form.index')->with('successdr', 'form de derangement was sent successfully!');}
else {
    return redirect()->route('form.index')->with('errordr', 'form de derangement was unable to sent.');
}


}
}