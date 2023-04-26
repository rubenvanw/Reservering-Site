<?php

namespace App\Http\Controllers;

use App\Models\Reservering;
use Illuminate\Http\Request;

class ReserveringController extends Controller
{
    
    public function index(){

        $reserveringen = Reservering::all();

        return view('reserveringen.index', ['reserveringen' => $reserveringen]);
    }

    public function create(){
        return view('reserveringen.create');
    }

    public function store(){
        // error_log(request('tijdblok'));
        // error_log(request('aantal'));
        // error_log(request('opmerking'));

        $reservering = new Reservering();

        $reservering->tijdblok = request('tijdblok');
        $reservering->aantal = request('aantal');
        $reservering->opmerking = request('opmerking');

        $reservering->save();

        return redirect('/reserveringen/create')->with('message', 'Uw reservering is verwerkt!');
    }
}
