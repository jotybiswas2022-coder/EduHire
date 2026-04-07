<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Contact;
use App\Models\Profile;

class DashboardController extends Controller
{
    public function index()
    {
        // Counts
        $accountsCount = Account::count();
        $contactsCount = Contact::count();
        $teachersCount = Profile::count();

        // Recent Contacts
        $contacts = Contact::latest()->take(5)->get();

        // Recent Teachers
        $teachers = Profile::latest()->take(10)->get();

        return view('backend.index', compact(
            'accountsCount',
            'contactsCount',
            'teachersCount',
            'contacts',
            'teachers'
        ));
    }
}