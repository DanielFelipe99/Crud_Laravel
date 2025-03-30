<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class Users extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = User::paginate(5);
        return view('modules/users/index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modules/users/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {



        $item = new User();
        $item->name = $request->name;
        $item->email = $request->email;
        $item->edad = $request->edad;
        $item->telefono = $request->telefono;
        $item->direccion = $request->direccion;
        $item->ciudad = $request->ciudad;
        $item->save();
        return to_route('index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = User::find($id); // Encuentra un usuario específico.
        //pasa la variable $item a la vista
        return view('modules/users/show', compact('item')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = User::find($id);
        return view('modules/users/edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = User::find($id);
        $item->name = $request->name;
        $item->email = $request->email;
        $item->edad = $request->edad;
        $item->telefono = $request->telefono;
        $item->direccion = $request->direccion;
        $item->ciudad = $request->ciudad;
        $item->save();
        return to_route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = User::find($id);
        $item->delete();
        return to_route('index');
    }
}
