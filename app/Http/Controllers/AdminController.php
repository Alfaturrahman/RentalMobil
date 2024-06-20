<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Car;
use App\Models\User;
use App\Models\Rent;

class AdminController extends Controller
{
    public function index()
    {
        // Assuming the models are Car, User, and Rent
        $carCount = Car::count();
        $userCount = User::count();
        $ongoingRentCount = Rent::where('payement_status', 'berhasil')->count(); // Adjust the condition as per your requirements

        return view('admin.index', compact('carCount', 'userCount', 'ongoingRentCount'));
    }

}
