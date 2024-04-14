<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showCandidates()
    {
        $users = User::with(['resume', 'UserSkills'])
            ->where('account_status', 'candidate')
            ->get();
        return view('pages.staff', compact('users'));
    }
    public function showEmployee()
    {
        $users = User::with(['resume', 'UserSkills'])
            ->where('account_status', 'active')
            ->get();
        return view('pages.employee', compact('users'));
    }
}
