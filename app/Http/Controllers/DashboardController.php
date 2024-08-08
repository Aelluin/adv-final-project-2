<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function userview() {
    if (auth()->check()) {
        return view('dashboard.userview');
    }
    return view('userview');
   }

}
