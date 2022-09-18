<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerIndexController extends Controller
{
    public function __invoke()
    {
        return view('customers.index', [
            'customers' => Customer::select('id', 'first_name', 'last_name')
                                    ->latest()
                                    ->paginate(100),
        ]);
    }
}
