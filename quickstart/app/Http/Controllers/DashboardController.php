<?php

namespace App\Http\Controllers;

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
    
        $users = [
            [
                'name' => 'Alex D',
                'age' => 30,
            ],
            [
                'name' => 'Dan A',
                'age' => 25,
            ],
            [
                'name' => 'John Doe',
                'age' => 16,
            ]
        ];
    
            return view('dashboard', 
        [
            'users' => $users
        ]);
        }
}
