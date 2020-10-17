<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shoe;  //collegamento al model

class ShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //posso includere il model
        $shoes = Shoe::all();
        return view('index', compact('shoes')); //gli passo alla view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //richiamo la create che vedo nella rotta
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data=$request->all();  //prendo sotto forma di array i dati
        $request->validate([
        'modello' => 'required|max:100|min:3',
        'marca' => 'required|max:100',
        'taglia' => 'required|numeric|max:50',
        ]);
        $shoeNew = new Shoe;
        $shoeNew->fill($data); // metodo colleagato al modello fillable nel file model in qst caso : shoe.php
        $saved = $shoeNew->save();

        if ($saved) {
            return redirect()->route('shoes.index'); //mi reindirizza alla pagina index usando la rotta
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function show(Shoe $shoe)  //stesso raggionamento di : public function store(Request $request)
     {
        return view('show',compact('shoe'));
     }

     //metodo precedente per show:
    // public function show($id)
    // {
    //     $shoe =Shoe::find($id);
    //     return view('show',compact('shoe'));  //mi restituisce solo quel articolo con quel id
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
