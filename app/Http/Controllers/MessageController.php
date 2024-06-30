<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;

class MessageController extends Controller
{
    
    
    public function sendMessageForm()
    {
        $user = session('user');
        if (!$user) {
            return redirect()->route('login'); // or wherever you want to redirect
        }
        return view('msg.send');
    }
    public function sendMessage(Request $request)
    {
        // Retrieve user from session
        $user = session('user');
        if (!$user) {
            return redirect()->route('login'); // or wherever you want to redirect
        }

        // Validate request
       
       
        $request->validate([
            'receiver_id' => 'required|exists:users,ID_user',
            'subject' => 'required',
            'message' => 'required',
        ], [
            'receiver_id.required' => 'Please enter an email addres that exists.',
            'receiver_id.exists' => 'The selected receiver email is invalid.',
            'subject.required' => 'Please enter a subject for your message.',
            'message.required' => 'Please enter a message to send.',
        ]);





        $message = new Message();
        $message->sender_id = $user->ID_user;
        $message->receiver_id = $request->receiver_id;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();
        return redirect()->back()->with('success', 'Message sent successfully!');
    }

   
    public function getMessages()
    {
        // Retrieve user from session
        $user = session('user');
        if (!$user) {
            return redirect()->route('login'); // or wherever you want to redirect
        }

        // Retrieve messages where the current user is either sender or receiver
        $messages = Message::with(['sender', 'receiver'])
                            ->where('sender_id', $user->ID_user)
                            ->orWhere('receiver_id', $user->ID_user)
                            ->orderBy('created_at', 'desc')
                            ->get();

        // Return messages to the view or do whatever you want
        return view('msg.index', compact('messages'));
    }

    public function filterByDate(Request $request)
    {
        $query = Message::query();
    
        if ($request->has('start_date') && $request->has('end_date')) {
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');
            $query->whereBetween('created_at', [$start_date, $end_date]);
        }
    
        $messages = $query->get();
    
        return view('msg.index', ['messages' => $messages]);
    }








    public function sendMessageFormfr()
    {
        $user = session('user');
        if (!$user) {
            return redirect()->route('login'); // or wherever you want to redirect
        }
        return view('msg.sendfr');
    }
    
    public function sendMessagefr(Request $request)
    {
        // Retrieve user from session
        $user = session('user');
        if (!$user) {
            return redirect()->route('login'); // or wherever you want to redirect
        }
    
        // Validate request
        $request->validate([
            'receiver_id' => 'required|exists:users,ID_user',
            'subject' => 'required',
            'message' => 'required',
        ], [
           'receiver_id.required' => 'Veuillez entrer une adresse e-mail qui existe.',
'receiver_id.exists' => 'L\'adresse e-mail du destinataire sélectionné n\'est pas valide.',
'subject.required' => 'Veuillez entrer un sujet pour votre message.',
'message.required' => 'Veuillez entrer un message à envoyer.',
        ]);
       
        // Create a new message
        $message = new Message();
        $message->sender_id = $user->ID_user;
        $message->receiver_id = $request->receiver_id;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();
    
        // Redirect back or return a response
        return redirect()->back()->with('success', 'Message envoyé avec succès!');
    }
    
    public function getMessagesfr()
    {
        // Retrieve user from session
        $user = session('user');
        if (!$user) {
            return redirect()->route('login'); // or wherever you want to redirect
        }
    
        // Retrieve messages where the current user is either sender or receiver
        $messages = Message::with(['sender', 'receiver'])
                            ->where('sender_id', $user->ID_user)
                            ->orWhere('receiver_id', $user->ID_user)
                            ->orderBy('created_at', 'desc')
                            ->get();
    
        // Return messages to the view or do whatever you want
        return view('msg.indexfr', compact('messages'));
    }
    
    public function filterByDatefr(Request $request)
    {
        $query = Message::query();
    
        if ($request->has('start_date') && $request->has('end_date')) {
            $start_date = $request->input('start_date');
            $end_date = $request->input('end_date');
            $query->whereBetween('created_at', [$start_date, $end_date]);
        }
    
        $messages = $query->get();
    
        return view('msg.indexfr', ['messages' => $messages]);
    }



    public function getEmails(Request $request)
    {
        $search = $request->input('search');
        $emails = User::where('Email', 'like', "{$search}%") // Changed to search emails that start with the entered characters
                      ->pluck('Email', 'ID_user');
    
        return response()->json($emails);
    }
}
