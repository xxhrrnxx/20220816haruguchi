<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'last_name'     => 'required',
            'first_name'     => 'required',
            'email'    => 'required|email',
            'gender'   => 'required',
            'postcode'   => 'required',
            'address'   => 'required',
            'building_name'   => 'nullable',
            'opinion' => 'required',
        ]);

        $inputs = $request->all();

        return view('contacts.confirm', ['inputs' => $inputs]);
    }

    public function process(Request $request)
    {
        $action = $request->get('action', 'return');
        $input  = $request->except('action');

        if($action === 'submit') {

            $contact = new Contact();
            $contact->fill($input);
            $contact->save();

            return redirect()->route('complete');
        } else {
            return redirect()->route('contact')->withInput($input);
        }
    }

    public function complete()
    {
        return view('contacts.complete');
    }
}