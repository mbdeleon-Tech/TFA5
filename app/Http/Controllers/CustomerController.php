<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CustomerController extends Controller
{
    public function index(): View
    {
        // Temporary static data source required by TFA5. All records are fictional.
        $customers = [
            ['id' => 'CUS-001', 'name' => 'Andrea Santos', 'email' => 'andrea.santos@example.com', 'phone' => '0917 000 1001', 'city' => 'Quezon City', 'status' => 'Active'],
            ['id' => 'CUS-002', 'name' => 'Miguel Reyes', 'email' => 'miguel.reyes@example.com', 'phone' => '0917 000 1002', 'city' => 'Manila', 'status' => 'Active'],
            ['id' => 'CUS-003', 'name' => 'Sofia Cruz', 'email' => 'sofia.cruz@example.com', 'phone' => '0917 000 1003', 'city' => 'Makati', 'status' => 'Inactive'],
            ['id' => 'CUS-004', 'name' => 'Gabriel Mendoza', 'email' => 'gabriel.mendoza@example.com', 'phone' => '0917 000 1004', 'city' => 'Pasig', 'status' => 'Active'],
            ['id' => 'CUS-005', 'name' => 'Isabella Garcia', 'email' => 'isabella.garcia@example.com', 'phone' => '0917 000 1005', 'city' => 'Taguig', 'status' => 'Active'],
            ['id' => 'CUS-006', 'name' => 'Daniel Flores', 'email' => 'daniel.flores@example.com', 'phone' => '0917 000 1006', 'city' => 'Mandaluyong', 'status' => 'Inactive'],
        ];

        return view('customers.index', compact('customers'));
    }
}
