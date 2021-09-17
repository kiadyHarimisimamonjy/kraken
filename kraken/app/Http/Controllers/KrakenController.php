<?php

namespace App\Http\Controllers;

use App\Models\Kraken;
use App\Models\Pouvoir;
use App\Models\Tentacule;
use Exception;
use Illuminate\Http\Request;

class KrakenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Kraken::all()->toJson(JSON_PRETTY_PRINT);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kraken=Kraken::create($request->all());
        $kraken->pouvoirs()->attach(1);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kraken  $kraken
     * @return \Illuminate\Http\Response
     */
    public function show(Kraken $kraken)
    {
        $allpouvoirs= Pouvoir::all();
        $kraken->pouvoirs;
        $kraken->tentacules;
        return array('info'=>$kraken,'allpouvoirs'=>$allpouvoirs) ;
        //
    }
    public function updateTentacule(Request $request, Kraken $kraken)
    {
        $kraken->tentacules()->delete();
        $inputs= $request->all();
        foreach ($inputs as $value) {
            $tentacule = new Tentacule($value);
            $tentacule->kraken()->associate($kraken);
            if(! $tentacule->save()){
                return response()->json(
                    $tentacule
                   ,500            );
            }
        }
        return response()->json(
            $kraken
           ,200            );

    }
    public function updatePouvoir(Request $request, Kraken $kraken)
    {

       // $kraken->pouvoirs()->detach();
       try {
        $kraken->pouvoirs()->detach();

        $inputs= $request->all();
        foreach ($inputs as $value) {
            $kraken->pouvoirs()->attach($value['id']);

        }
        return response()->json(
            $request
           ,200            );
       }
       catch(Exception $e){
         return response()->json(
            $e
           ,500            );
       }


    }

}
