<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        // Display records only; these do not provide login credentials.
        $users = [
            ['id' => 'USR-001', 'name' => 'Alex Rivera', 'email' => 'alex.rivera@example.com', 'role' => 'Administrator', 'branch' => 'Main Branch', 'status' => 'Active'],
            ['id' => 'USR-002', 'name' => 'Bea Villanueva', 'email' => 'bea.villanueva@example.com', 'role' => 'Manager', 'branch' => 'Main Branch', 'status' => 'Active'],
            ['id' => 'USR-003', 'name' => 'Carlo Ramos', 'email' => 'carlo.ramos@example.com', 'role' => 'Cashier', 'branch' => 'North Branch', 'status' => 'Active'],
            ['id' => 'USR-004', 'name' => 'Diana Torres', 'email' => 'diana.torres@example.com', 'role' => 'Cashier', 'branch' => 'Main Branch', 'status' => 'Inactive'],
            ['id' => 'USR-005', 'name' => 'Ethan Lim', 'email' => 'ethan.lim@example.com', 'role' => 'Inventory Clerk', 'branch' => 'North Branch', 'status' => 'Active'],
            ['id' => 'USR-006', 'name' => 'Faith Navarro', 'email' => 'faith.navarro@example.com', 'role' => 'Cashier', 'branch' => 'North Branch', 'status' => 'Active'],
        ];

        return view('users.index', compact('users'));
    }
}
