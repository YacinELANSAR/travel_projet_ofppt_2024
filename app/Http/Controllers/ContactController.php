<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getFormContact()
    {
        return view('showMessageContact');
    }
    public function getFormContactForConnectedClient(){
        $user = session('user');        
       return view('clients.home',compact('user')); 
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages=Contact::all();
        
        return view('admin.MessagesClients',compact('messages'));
    }
    public function showMessageAdmin()
    {
        $user = session('user'); 
        
        $messages=User::where('id',$user->id)->get();
        
        return view('clients.MessagesAdmin',compact('messages'));
    }
    public function reponseMessage(Request $request)
{
     $request->validate([
        'messageReponse' => 'required|string',
    ]);

    $contact = Contact::where('user_id', $request->user_id)->firstOrFail();

    $contact->delete();

    $user = User::find($request->user_id);

    $user->messageParAdmin = $request->messageReponse;
    $user->save();

    return redirect()->back()->with('success', 'Message de réponse envoyé au client avec succès.');
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId=$request->userId;
        $contact=new Contact;
        $contact->user_id=$userId;
        $contact->subject=$request->subject;
        $contact->content=$request->content;
        $isSaved=$contact->save();
        if($isSaved){
            return redirect()->route('showMessageContactForConnectedClt', ['userId' => $userId])->with('success', 'Votre message a été envoyée avec succès. ');

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
