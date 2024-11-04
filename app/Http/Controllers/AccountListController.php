<?php

namespace App\Http\Controllers;

use App\Models\Account;

class AccountListController extends Controller
{
    public function __invoke()
    {
        $accounts = Account::all();
        return view('index', ['accounts' => $accounts]);
    }
}
