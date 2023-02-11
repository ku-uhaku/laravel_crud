<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class CumputersController extends Controller
{

    // private static function getData()
    // {
    //     return [
    //         [
    //             "id" => 1,
    //             "name" => 'HP',
    //             "model" => 'HP 15',
    //             "price" => 1000,

    //         ],
    //         [
    //             "id" => 2,
    //             "name" => 'Lenovo',
    //             "model" => 'Lenovo 15',
    //             "price" => 2000,

    //         ],
    //         [
    //             "id" => 3,
    //             "name" => 'Dell',
    //             "model" => 'Dell 15',
    //             "price" => 3000,
    //         ],
    //         [
    //             "id" => 4,
    //             "name" => 'Asus',
    //             "model" => 'Asus 15',
    //             "price" => 4000,
    //         ],
    //         [
    //             "id" => 5,
    //             "name" => 'Acer',
    //             "model" => 'Acer 15',
    //             "price" => 5000,
    //         ],
    //         [
    //             "id" => 6,
    //             "name" => 'Apple',
    //             "model" => 'Apple 15',
    //             "price" => 6000,
    //         ]
    //     ];
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('computers.index', [
            "data" => Computer::all(),
            // "data"=> self::getData()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "price" => "required | int",
            "model" => "required"
        ]);
        $computer = new Computer();

        $computer->name = strip_tags($request->input("name"));
        $computer->price = strip_tags($request->input("price"));
        $computer->model = strip_tags($request->input("model"));

        $computer->save();
        return redirect()->route('computers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $index = Computer::findOrFail($id);

        return view('computers.show', [
            "data" => $index
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('computers.edit', [
            "data" => Computer::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $computer)
    {
        $request->validate([
            "name" => "required",
            "price" => "required | int",
            "model" => "required"
        ]);
        $to_update = Computer::findOrFail($computer);

        $to_update->name = strip_tags($request->input("name"));
        $to_update->price = strip_tags($request->input("price"));
        $to_update->model = strip_tags($request->input("model"));

        $to_update->save();
        return redirect()->route('computers.show', $computer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $to_delete = Computer::findOrFail($id);
        $to_delete->delete();
        return redirect()->route('computers.index');
    }
}
