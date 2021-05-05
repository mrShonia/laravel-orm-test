<?php

namespace App\Http\Controllers;

use App\FlightsModel;
use Illuminate\Http\Request;

class FlightsController extends Controller
{

    public function allFlights(){

        return view('add-flights', [
            'flights' => FlightsModel::all()
        ]);
    }





    public function saveFlight(Request $request){

        FlightsModel::create([
            'description' => $request->post('description'),
            'from'        => $request->post('from'),
            'to'          => $request->post('to'),
            'when'        => $request->post('when'),
        ]);

        return redirect('/flights');
    }


    public function updateFlights(Request $request){


        if(FlightsModel::where('id',$request->post('id'))->count() == 0){

            echo 'Result not found';

        }else{

            FlightsModel::where('id',$request->post('id'))->update([
                'description' => $request->post('description'),
                'from'        => $request->post('from'),
                'to'          => $request->post('to'),
                'when'        => $request->post('when'),
            ]);

            return redirect('/flights');
        }


    }


    public function editFlight($id){

        return view('add-flights', [
            'flights' => FlightsModel::all(),
            'edit_resource' => FlightsModel::where('id',$id)->first(),
        ]);
    }

    public function deleteFlight($id){

        if(FlightsModel::where('id',$id)->count() == 0){

            echo 'Result not found';

        }else{

            FlightsModel::where('id',$id)->delete();
            return redirect('/flights');
        }

    }
}
