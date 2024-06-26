<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Derangement;
use App\Models\User;
use Illuminate\Support\Facades\Log;


class DerangementController extends Controller
{
   
    public function filterByDate(Request $request)
    {
        $query = Derangement::query();
    
        if ($request->has('start_date') && $request->has('end_date')) {
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');
            $query->whereBetween('created_at', [$start_date, $end_date]);
        }
    
        $derangement = $query->get();
    
        return view('derangement.index', ['derangement' => $derangement]);
    }


        public function derangement (Request $request){
            
            $email = $request->input('Email');
        // $password = $request->input('Password');
        $user = User::where('Email', $email)->first();




        $user = session('user');

        if (!$user) {
            return redirect()->route('login');
        }

        
       $derangement = Derangement::all();
    
        return view('derangement.index', ['derangement' => $derangement , 'user'=> $user]);
    }

    public function edit(Derangement $derangement,Request $request)

    {
       
        $email = $request->input('Email');
        // $password = $request->input('Password');
        $user = User::where('Email', $email)->first();




        $user = session('user');

        if (!$user) {
            return redirect()->route('login');
        }
        return view('derangement.edit', compact('derangement'));
    }




    public function update(Request $request, Derangement $derangement)
    {

      


        $request->validate([
            
            'Status_Derangement' => 'required|max:50',
            
        ]);

     
        \DB::table('derangements')
            ->where('ID_Derangement', $derangement->ID_Derangement)
            ->update(['Status_Derangement' => $request->Status_Derangement]);
       
            
    // $derangement->Status_Derangement = $request->input('Status_Derangement');
            // $request->Status_Derangement = $derangement->Status_Derangement;
            // dd($derangement->Status_Derangement);
            // $derangement->save();
           
        return redirect()->route('derangement.index')->with('success', 'derangement updated successfully.');
    }

    





    public function destroy(Derangement $derangement , Request $request)
{
        $email = $request->input('Email');
        // $password = $request->input('Password');
        $user = User::where('Email', $email)->first();


        $user = session('user');

        if (!$user) {
            return redirect()->route('login');
        }

    \DB::table('Derangements')->where('ID_Derangement', $derangement->ID_Derangement)->delete();
    return redirect()->route('derangement.index')->with('success', 'Derangement deleted successfully.');
}

    

    
    
    












    
public function filterByDatefr(Request $request)
{
    $query = Derangement::query();

    if ($request->has('start_date') && $request->has('end_date')) {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $query->whereBetween('created_at', [$start_date, $end_date]);
    }

    $derangement = $query->get();

    return view('derangement.indexfr', ['derangement' => $derangement]);
}

public function derangementfr(Request $request)
{
    $email = $request->input('Email');
    $user = User::where('Email', $email)->first();
    $user = session('user');

    if (!$user) {
        return redirect()->route('login');
    }

    $derangement = Derangement::all();

    return view('derangement.indexfr', ['derangement' => $derangement, 'user' => $user]);
}

public function editfr(Derangement $derangement, Request $request)
{
    $email = $request->input('Email');
    $user = User::where('Email', $email)->first();
    $user = session('user');

    if (!$user) {
        return redirect()->route('login');
    }
    return view('derangement.editfr', compact('derangement'));
}

public function updatefr(Request $request, Derangement $derangement)
{
    $request->validate([
        'Status_Derangement' => 'required|max:50',
    ]);

    \DB::table('derangements')
        ->where('ID_Derangement', $derangement->ID_Derangement)
        ->update(['Status_Derangement' => $request->Status_Derangement]);

    return redirect()->route('derangement.indexfr')->with('success', 'Derangement mise à jour avec succès');
}

public function destroyfr(Derangement $derangement, Request $request)
{
    $email = $request->input('Email');
    $user = User::where('Email', $email)->first();
    $user = session('user');

    if (!$user) {
        return redirect()->route('login');
    }

    \DB::table('derangements')->where('ID_Derangement', $derangement->ID_Derangement)->delete();
    return redirect()->route('derangement.indexfr')->with('success', 'Derangement supprimée avec succès');
}
}
