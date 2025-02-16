<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;


class ContactController extends Controller
{
    public function list()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('contacts.list', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }


    public function importXML(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'xml_file' => 'required|mimes:xml',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        

        $xml = simplexml_load_file($request->file('xml_file'));

        foreach ($xml->contact as $contact) {
            Contact::create([
                'name' => (string)$contact->name,
                'phone' => (string)$contact->phone,
            ]);
        }

        return redirect()->route('contacts-list')->with('success', 'Contacts imported successfully.');
    }

    public function delete($id)
    {
        $contact = Contact::find($id);
        if($contact){
            $contact->delete();
            return redirect()->route('contacts-list')->with('success', 'Contact deleted successfully.');
        }
        return redirect()->route('contacts-list')->with('warning', 'Contact not found!');
    }
}
