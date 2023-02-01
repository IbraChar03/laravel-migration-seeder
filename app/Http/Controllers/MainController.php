<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trains;
use App\Models\Travels;

class MainController extends Controller
{
    public function trains()
    {
        $trains = new Trains();
        $trains->agency = "AgencyName";
        $trains->carriages_number = 7;
        $trains->code = "KSDF74";
        $trains->in_time = true;
        $trains->cancelled = false;
        $trains->departure_time = "2023-01-01 12:32:00";
        $trains->arrival_time = "2023-01-02 15:30:00";
        $trains->save();
        $trains = Trains::all();

        $data = [
            "trains" => $trains
        ];
        return view("pages.trains", $data);
    }
    public function travels()
    {
        $travels = new Travels();
        $travels->price_per_person = "3000";
        $travels->place = "Barcellona";
        $travels->code = "FDR4G24";
        $travels->description = "Travel to Barcellona";
        $travels->vote = 5;
        $travels->departure_date = "2023-01-01 12:32:00";
        $travels->arrival_date = "2023-01-02 15:30:00";
        $travels->save();
        $travels = Travels::all();

        $data = [
            "travels" => $travels
        ];
        return view("pages.travels", $data);
    }
}