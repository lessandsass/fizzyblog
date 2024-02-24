<?php

namespace App\Http\Controllers;

use App\Models\Fizzy;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{

    public function index() :View {

        return view('dashboard', [
            'fizzies' => Fizzy::orderBy('created_at', 'DESC')->paginate(5)
        ]);
    }

}
