<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index() {
        return Trip::with('logs')->get();
    }

    public function show( $id ) {
        return Trip::with('logs')->findOrFail( $id );
    }

    public function store( Request $request ) {
        $trip = new Trip();
        $trip->save();
        return $trip;
    }
}
