<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class contactController extends Controller
{
    public function getContacts() {
        $contacts = Contact::all();
        return response($contacts, 200);
    }
}
