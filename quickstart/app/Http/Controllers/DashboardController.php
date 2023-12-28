<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
    
    $users = [
        [
            'name' => 'Alex',
            'age' => 30,
        ],
        [
            'name' => 'Dan',
            'age' => 25,
        ],
        [
            'name' => 'John',
            'age' => 16,
        ]
    ];

        return view('dashboard', 
    [
        'users' => $users
    ]);
    }

    public function coba() {

    
            dump(Idea::all());

            return view('dashboard', 
        [
            'ideas' => Idea::orderBy('created_at', 'DESC')->paginate(4),
        ]);
    }
}
