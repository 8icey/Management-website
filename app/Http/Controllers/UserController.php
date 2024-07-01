<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
class UserController extends Controller
{
    
    


    public function index(Request $request)
    {
        $user = session('user');

       
        if (!$user || $user->Role !== 'admin') {
            return view('errordot');
        }

        $users = User::where('Role', 'dot')->get();
        return view('dot.index', compact('users'));
    }

    public function create(Request $request)
    {
        $user = session('user');

        if (!$user || $user->Role !== 'admin') {
            return view('errordot');
        }

        return view('dot.create');
    }

    public function store(Request $request)
    {
        $user = session('user');

        
        if (!$user || $user->Role !== 'admin') {
            return view('errordot');
        }

        $request->validate([
            'Email' => [
                'required',
                'email',
                'max:50',
                Rule::unique('Users', 'Email'),
            ],
            'Password' => 'required|max:50',
            'Nom_user' => 'required|max:50',
            'Prenom_user' => 'required|max:50',
            'Wilaya_user' => 'required|max:50',
        ], [
            'Email.unique' => 'The email belongs to another user',
        ]);

        $user = new User();
        $user->Email = $request->Email;
        $user->Password = bcrypt($request->Password); 
        $user->Role = 'dot'; 
        $user->Nom_user = $request->Nom_user;
        $user->Prenom_user = $request->Prenom_user;
        $user->Wilaya_user = $request->Wilaya_user;
        $user->save();

        return redirect()->route('dot.index')->with('success', 'User created successfully.');
    }

    public function edit(User $dot, Request $request)
    {
        $user = session('user');

        
        if (!$user || $user->Role !== 'admin') {
            return view('errordot');
        }

        return view('dot.edit', compact('dot'));
    }

    public function update(Request $request, User $dot)
    {
        $user = session('user');

        
        if (!$user || $user->Role !== 'admin') {
            return view('errordot');
        }

        $request->validate([
           
            // 'Password' => 'required|max:50',
            'Nom_user' => 'required|alpha|max:10',
        'Prenom_user' => 'required|alpha|max:10',
            'Wilaya_user' => 'required|max:50',
        ]);

        // $dot->Email = $request->Email;
        if ($request->Password) {
            $dot->Password = bcrypt($request->Password); 
        }
        $dot->Nom_user = $request->Nom_user;
        $dot->Prenom_user = $request->Prenom_user;
        $dot->Wilaya_user = $request->Wilaya_user;
        $dot->save();

        return redirect()->route('dot.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $dot)
    {
        $user = session('user');

        
        if (!$user || $user->Role !== 'admin') {
            return view('errordot');
        }

        $dot->delete();
        return redirect()->route('dot.index')->with('success', 'User deleted successfully.');
    }


    public function settings (){

        return view('settings');




    }




    public function dotfilter(Request $request)
    {
        $query = User::where('Role', 'dot');
        
        if ($request->has('start_date') && $request->has('end_date')) {
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');
            $query->whereBetween('created_at', [$start_date, $end_date]);
        }
        
        $users = $query->get();
        
        return view('dot.index', ['users' => $users]);
    }
    


























    public function indexfr(Request $request)
{
    $user = session('user');

    
    if (!$user || $user->Role !== 'admin') {
        return view('errordot');
    }

    $users = User::where('Role', 'dot')->get();
    return view('dot.indexfr', compact('users'));
}

public function createfr(Request $request)
{
    $user = session('user');

   
    if (!$user || $user->Role !== 'admin') {
        return view('errordot');
    }

    return view('dot.createfr');
}

public function storefr(Request $request)
{
    $user = session('user');

    
    if (!$user || $user->Role !== 'admin') {
        return view('errordot');
    }

    $request->validate([
        'Email' => [
            'required',
            'email',
            'max:50',
            Rule::unique('Users', 'Email'),
        ],
        'Password' => 'required|max:50',
        'Nom_user' => 'required|max:50',
        'Prenom_user' => 'required|max:50',
        'Wilaya_user' => 'required|max:50',
    ], [
        'Email.unique' => 'Email appartient à un autre utilisateur',
    ]);

    $user = new User();
    $user->Email = $request->Email;
    $user->Password = bcrypt($request->Password); 
    $user->Role = 'dot'; 
    $user->Nom_user = $request->Nom_user;
    $user->Prenom_user = $request->Prenom_user;
    $user->Wilaya_user = $request->Wilaya_user;
    $user->save();

    return redirect()->route('dot.indexfr')->with('success', 'Utilisateur créé avec succès.');
}

public function editfr(User $dot, Request $request)
{
    $user = session('user');

   
    if (!$user || $user->Role !== 'admin') {
        return view('errordot');
    }

    return view('dot.editfr', compact('dot'));
}

public function updatefr(Request $request, User $dot)
{
    $user = session('user');

    
    if (!$user || $user->Role !== 'admin') {
        return view('errordot');
    }

    $request->validate([
       
        // 'Password' => 'required|max:50',
        'Nom_user' => 'required|alpha|max:10',
        'Prenom_user' => 'required|alpha|max:10',
        'Wilaya_user' => 'required|max:50',
    ]);

    // $dot->Email = $request->Email;
    if ($request->Password) {
        $dot->Password = bcrypt($request->Password); 
    }
    $dot->Nom_user = $request->Nom_user;
    $dot->Prenom_user = $request->Prenom_user;
    $dot->Wilaya_user = $request->Wilaya_user;
    $dot->save();

    return redirect()->route('dot.indexfr')->with('success', 'Utilisateur a mis à jour avec succès.');
}

public function destroyfr(User $dot)
{
    $user = session('user');

    
    if (!$user || $user->Role !== 'admin') {
        return view('errordot');
    }

    $dot->delete();
    return redirect()->route('dot.indexfr')->with('success', 'Utilisateur supprimé avec succès.');
}

public function settingsfr()
{
    return view('settingsfr');
}

public function dotfilterfr(Request $request)
{
    $query = User::where('Role', 'dot');
    
    if ($request->has('start_date') && $request->has('end_date')) {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $query->whereBetween('created_at', [$start_date, $end_date]);
    }
    
    $users = $query->get();
    
    return view('dot.indexfr', ['users' => $users]);
}

}









