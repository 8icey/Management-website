<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Demande;
use Illuminate\Support\Facades\Auth;

class DemandeController extends Controller
{

    

    public function filterByDatefibre(Request $request)
    {
        $query = Demande::query();
        $query->where('Type_demande', 'Idoom Fibre offer');
    
        if ($request->has('start_date') && $request->has('end_date')) {
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');
            $query->whereBetween('created_at', [$start_date, $end_date]);
        }
    
        $demandefibres = $query->get();
    
        return view('demande.fibre', ['demandefibres' => $demandefibres]);
    }

    public function filterByDatefixe(Request $request)
    {
        $query = Demande::query();
        $query->where('Type_demande', 'Idoom Fixe offer');
    
        if ($request->has('start_date') && $request->has('end_date')) {
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');
            $query->whereBetween('created_at', [$start_date, $end_date]);
        }
    
        $demandefixes = $query->get();
    
        return view('demande.fixe', ['demandefixes' => $demandefixes]);
    }

    public function filterByDatequatreg(Request $request)
    {
        $query = Demande::query();
        $query->where('Type_demande', 'Idoom 4G LTE offer');
    
        if ($request->has('start_date') && $request->has('end_date')) {
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');
            $query->whereBetween('created_at', [$start_date, $end_date]);
        }
    
        $demandequatreg = $query->get();
    
        return view('demande.quatreg', ['demandequatreg' => $demandequatreg]);
    }

    public function filterByDateadsl(Request $request)
    {
        $query = Demande::query();
        $query->where('Type_demande', 'Idoom ADSL offer');
        if ($request->has('start_date') && $request->has('end_date')) {
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');
            $query->whereBetween('created_at', [$start_date, $end_date]);
        }
    
        $demandeadsls = $query->get();
    
        return view('demande.adsl', ['demandeadsls' => $demandeadsls]);
      
    }





    public function fibre(Request $request)
    {
        $email = $request->input('Email');
        $user = User::where('Email', $email)->first();
        $user = session('user');
        if (!$user) {
            return redirect()->route('login');
        }

        $demandefibres = Demande::where('Type_demande', 'Idoom Fibre offer')->get();
        return view('demande.fibre', ['demandefibres' => $demandefibres]);
    }

    public function quatreg(Request $request)
    {
        $email = $request->input('Email');
        $user = User::where('Email', $email)->first();
        $user = session('user');
        if (!$user) {
            return redirect()->route('login');
        }
        $demandequatreg = Demande::where('Type_demande', 'Idoom 4G LTE offer')->get();
        return view('demande.quatreg', ['demandequatreg' => $demandequatreg]);
    }

    public function adsl(Request $request)
    {
        $email = $request->input('Email');
        $user = User::where('Email', $email)->first();
        $user = session('user');
        if (!$user) {
            return redirect()->route('login');
        }
        $demandeadsls = Demande::where('Type_demande', 'Idoom ADSL offer')->get();
        return view('demande.adsl', ['demandeadsls' => $demandeadsls]);
    }

    public function fixe(Request $request)
    {
        $email = $request->input('Email');
        $user = User::where('Email', $email)->first();
        $user = session('user');
        if (!$user) {
            return redirect()->route('login');
        }
        $demandefixes = Demande::where('Type_demande', 'Idoom Fixe offer')->get();
        return view('demande.fixe', ['demandefixes' => $demandefixes]);
    }
    
    // public function homepage(Request $request)
    // {
      
    //         return view('homepage');
        
    // }

    // public function destroy(Demande $demande)
    // {
    //     $demande->delete();
    //     return redirect()->route('demande.adsl')->with('success', 'demande deleted successfully.');
    // }


    public function destroy(Request $request, Demande $demande)
{

    $email = $request->input('Email');
    $user = User::where('Email', $email)->first();
    $user = session('user');
    if (!$user) {
        return redirect()->route('login');
    }


    $type_demande = $request->input('Type_demande');
    $demande->delete();
    switch ($type_demande) {
        case 'fibre':
            return redirect()->route('demande.fibre')->with('success', 'FIBRE Demande deleted successfully.');
        case 'quatreg':
            return redirect()->route('demande.quatreg')->with('success', '4G Demande deleted successfully.');
        case 'fixe':
            return redirect()->route('demande.fixe')->with('success', 'FIXE Demande deleted successfully.');
        case 'adsl':
            return redirect()->route('demande.adsl')->with('success', 'ADSL Demande deleted successfully.');
    }
}


public function edit(Demande $demande,Request $request)
{
    $email = $request->input('Email');
    $user = User::where('Email', $email)->first();
    $user = session('user');
    if (!$user) {
        return redirect()->route('login');
    }

    return view('demande.edit', compact('demande'));
}




public function update(Request $request, Demande $demande )
{


   


    $request->validate([
        
        'Status_demande' => 'required|alpha|max:10',
        
    ]);

 
    \DB::table('demandes')
        ->where('ID_demande', $demande->ID_demande)
        ->update(['Status_demande' => $request->Status_demande]);
   
        

       
        switch ($demande->Type_demande) {
            case 'Idoom Fibre offer':
                return redirect()->route('demande.fibre')->with('success', 'Demande updated successfully.');
            case 'Idoom 4G LTE offer':
                return redirect()->route('demande.quatreg')->with('success', 'Demande updated successfully.');
            case 'Idoom Fixe offer':
                return redirect()->route('demande.fixe')->with('success', 'Demande updated successfully.');
            case 'Idoom ADSL offer':
                return redirect()->route('demande.adsl')->with('success', 'Demande updated successfully.');
            default:
                return redirect()->back()->with('error', 'Invalid demande type.');
        }
}























public function filterByDatefibrefr(Request $request)
{
    $query = Demande::query();
    $query->where('Type_demande', 'Idoom Fibre offer');

    if ($request->has('start_date') && $request->has('end_date')) {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $query->whereBetween('created_at', [$start_date, $end_date]);
    }

    $demandefibres = $query->get();

    return view('demande.fibrefr', ['demandefibres' => $demandefibres]);
}

public function filterByDatefixefr(Request $request)
{
    $query = Demande::query();
    $query->where('Type_demande', 'Idoom Fixe offer');

    if ($request->has('start_date') && $request->has('end_date')) {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $query->whereBetween('created_at', [$start_date, $end_date]);
    }

    $demandefixes = $query->get();

    return view('demande.fixefr', ['demandefixes' => $demandefixes]);
}

public function filterByDatequatregfr(Request $request)
{
    $query = Demande::query();
    $query->where('Type_demande', 'Idoom 4G LTE offer');

    if ($request->has('start_date') && $request->has('end_date')) {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $query->whereBetween('created_at', [$start_date, $end_date]);
    }

    $demandequatreg = $query->get();

    return view('demande.quatregfr', ['demandequatreg' => $demandequatreg]);
}

public function filterByDateadslfr(Request $request)
{
    $query = Demande::query();
    $query->where('Type_demande', 'Idoom ADSL offer');
    if ($request->has('start_date') && $request->has('end_date')) {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $query->whereBetween('created_at', [$start_date, $end_date]);
    }

    $demandeadsls = $query->get();

    return view('demande.adslfr', ['demandeadsls' => $demandeadsls]);
}

public function fibrefr(Request $request)
{
    $email = $request->input('Email');
    $user = User::where('Email', $email)->first();
    $user = session('user');
    if (!$user) {
        return redirect()->route('login');
    }

    $demandefibres = Demande::where('Type_demande', 'Idoom Fibre offer')->get();
    return view('demande.fibrefr', ['demandefibres' => $demandefibres]);
}

public function quatregfr(Request $request)
{
    $email = $request->input('Email');
    $user = User::where('Email', $email)->first();
    $user = session('user');
    if (!$user) {
        return redirect()->route('login');
    }
    $demandequatreg = Demande::where('Type_demande', 'Idoom 4G LTE offer')->get();
    return view('demande.quatregfr', ['demandequatreg' => $demandequatreg]);
}

public function adslfr(Request $request)
{
    $email = $request->input('Email');
    $user = User::where('Email', $email)->first();
    $user = session('user');
    if (!$user) {
        return redirect()->route('login');
    }
    $demandeadsls = Demande::where('Type_demande', 'Idoom ADSL offer')->get();
    return view('demande.adslfr', ['demandeadsls' => $demandeadsls]);
}

public function fixefr(Request $request)
{
    $email = $request->input('Email');
    $user = User::where('Email', $email)->first();
    $user = session('user');
    if (!$user) {
        return redirect()->route('login');
    }
    $demandefixes = Demande::where('Type_demande', 'Idoom Fixe offer')->get();
    return view('demande.fixefr', ['demandefixes' => $demandefixes]);
}

public function destroyfr(Request $request, Demande $demande)
{
    $email = $request->input('Email');
    $user = User::where('Email', $email)->first();
    $user = session('user');
    if (!$user) {
        return redirect()->route('login');
    }

    $type_demande = $request->input('Type_demande');
    $demande->delete();
    switch ($type_demande) {
        case 'fibre':
            return redirect()->route('demande.fibrefr')->with('success', 'Demande Fibre supprimée avec succès');
        case 'quatreg':
            return redirect()->route('demande.quatregfr')->with('success', 'Demande 4G supprimée avec succès');
        case 'fixe':
            return redirect()->route('demande.fixefr')->with('success', 'Demande fixe supprimée avec succès');
        case 'adsl':
            return redirect()->route('demande.adslfr')->with('success', 'Demande Adsl supprimée avec succès');
    }
}

public function editfr(Demande $demande, Request $request)
{
    $email = $request->input('Email');
    $user = User::where('Email', $email)->first();
    $user = session('user');
    if (!$user) {
        return redirect()->route('login');
    }

    return view('demande.editfr', compact('demande'));
}

public function updatefr(Request $request, Demande $demande)
{
    $request->validate([
        'Status_demande' => 'required|alpha|max:10',
    ]);

    \DB::table('demandes')
        ->where('ID_demande', $demande->ID_demande)
        ->update(['Status_demande' => $request->Status_demande]);

    switch ($demande->Type_demande) {
        case 'Idoom Fibre offer':
            return redirect()->route('demande.fibrefr')->with('success', 'Demande mise à jour avec succès');
        case 'Idoom 4G LTE offer':
            return redirect()->route('demande.quatregfr')->with('success', 'Demande mise à jour avec succès');
        case 'Idoom Fixe offer':
            return redirect()->route('demande.fixefr')->with('success', 'Demande mise à jour avec succès');
        case 'Idoom ADSL offer':
            return redirect()->route('demande.adslfr')->with('success', 'Demande mise à jour avec succès');
        default:
            return redirect()->back()->with('error', 'Type de demande invalide.');
    }
}






    
}
