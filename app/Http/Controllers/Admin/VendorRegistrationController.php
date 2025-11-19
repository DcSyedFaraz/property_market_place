<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Information;

class VendorRegistrationController extends Controller
{
    public function index()
    {
        $registrations = Information::latest()->paginate(20);
        return view('admin.vendor_registrations.index', compact('registrations'));
    }

    public function show(Information $vendor_registration)
    {
        return view('admin.vendor_registrations.show', [
            'registration' => $vendor_registration,
        ]);
    }
}
