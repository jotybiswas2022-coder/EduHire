<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preferred_class;
use App\Models\Account;


class SiteController extends Controller
{
    public function index()
    {
        // Fetch all preferred classes for the homepage
        $preferred_classes = Preferred_class::all();
        $account = Account::first(); 

        // Return the index view with preferred classes
        return view('frontend.index', compact('preferred_classes', 'account'));
    }
}