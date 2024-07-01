<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Client;
use App\Models\Demande;
use App\Models\Derangement;








class StatController extends Controller
{
    public function index(Request $request)
    {
        $email = $request->input('Email');
        $user = User::where('Email', $email)->first();

       
        $user = session('user');
        if (!$user) {
            return redirect()->route('login');
        }

       
        $totalDemands = Demande::count();

        
        $totalBreakdowns = Derangement::count();

        
        $adminsByWilaya = User::where('Role', 'Admin')->groupBy('Wilaya_user')->selectRaw('Wilaya_user, count(*) as count')->get();
        $dotsByWilaya = User::where('Role', 'Dot')->groupBy('Wilaya_user')->selectRaw('Wilaya_user, count(*) as count')->get();

        
        $totalClients = Client::count();

        
        $demandsNotDone = Demande::where('Status_demande', 'Not Done')->count();
        $demandsDone = Demande::where('Status_demande', 'Done')->count();
        $ratioDemande = ($demandsDone / ($demandsNotDone + $demandsDone)) * 100;
      

       
        $derangementsNotDone = Derangement::where('Status_Derangement', 'Not Done')->count();
        $derangementsDone = Derangement::where('Status_Derangement', 'Done')->count();
        $ratioDerangement = ($derangementsDone / $derangementsDone+ $derangementsNotDone) * 100;

        return view('homepage', compact(
            'totalDemands', 'totalBreakdowns', 'adminsByWilaya', 'dotsByWilaya',
            'totalClients', 'demandsNotDone', 'demandsDone', 'user',
            'ratioDemande', 'derangementsNotDone', 'derangementsDone', 'ratioDerangement'
        ));
    }

    public function indexfr(Request $request)
    {
        $email = $request->input('Email');
        $user = User::where('Email', $email)->first();

       
        $user = session('user');
        if (!$user) {
            return redirect()->route('login');
        }

        
        $totalDemands = Demande::count();

        
        $totalBreakdowns = Derangement::count();

       
        $adminsByWilaya = User::where('Role', 'Admin')->groupBy('Wilaya_user')->selectRaw('Wilaya_user, count(*) as count')->get();
        $dotsByWilaya = User::where('Role', 'Dot')->groupBy('Wilaya_user')->selectRaw('Wilaya_user, count(*) as count')->get();

        
        $totalClients = Client::count();

        
        $demandsNotDone = Demande::where('Status_demande', 'Not Done')->count();
        $demandsDone = Demande::where('Status_demande', 'Done')->count();
        $ratioDemande = ($demandsDone / $demandsNotDone) * 100;

       
        $derangementsNotDone = Derangement::where('Status_Derangement', 'Not Done')->count();
        $derangementsDone = Derangement::where('Status_Derangement', 'Done')->count();
        $ratioDerangement = ($derangementsDone / $derangementsNotDone) * 100;

        return view('homepagefr', compact(
            'totalDemands', 'totalBreakdowns', 'adminsByWilaya', 'dotsByWilaya',
            'totalClients', 'demandsNotDone', 'demandsDone', 'user',
            'ratioDemande', 'derangementsNotDone', 'derangementsDone', 'ratioDerangement'
        ));
    }
}
