<?php

namespace App\Http\Controllers;

use App\Exceptions\layout;
use App\Models\Contact;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{

    public function index(){
        return view('index', [
            'menu' => Layout::getMenu(),
            'logo' => Layout::getLogo(),
            'displays' => Layout::getDisplays(),
            'contact' => Layout::getContact(),
        ]);
    }

    public function form(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        $contact_form = new ContactForm($request->all());

        if ($contact_form->save()){
            return response()->json([
                'error' => false,
            ]);
        }

        return response()->json(['error' => true]);
    }
}
