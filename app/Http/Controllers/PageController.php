<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trains;

class PageController extends Controller
{
    public function index()
    {

        $arrCities = array('Milano', 'Verona', 'Pavia', 'Varese', 'Roma', 'Venezia', 'Bergamo', 'Trento', 'Torino');
        $arrTime = array('11:30', '8:30', '23:45', '12:34', '16:55', '18:05', '19:30', '11:10', '14:15', '21:22');
        $arrTrains = array(1, 2, 3, 4, 5, 6, 7, 8);

        $train = new Trains();
        $train->Departure_station = $arrCities[array_rand($arrCities, 1)];
        $train->Arrival_station = $arrCities[array_rand($arrCities, 1)];
        $train->Departure_time = $arrTime[array_rand($arrTime, 1)];
        $train->Arrival_time = $arrTime[array_rand($arrTime, 1)];
        $train->Train = $arrTrains[array_rand($arrTrains, 1)];
        $train->save();

        $trains = Trains::all();
        // dd($trains);
        return view('home', compact('trains'));
    }
}
