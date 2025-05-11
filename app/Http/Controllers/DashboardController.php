<!--NO UTILIZADO AÚN->

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function index()
{
    $user = Auth::user();

    if ($user->role === 'creator') {
        return view('creator.dashboard');
    } else {
        return view('user.dashboard');
    }
}
}
