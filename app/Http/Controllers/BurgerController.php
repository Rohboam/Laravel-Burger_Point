<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Burger;

class BurgerController extends Controller
{
    public function index() {

        $burgers = Burger::all();

        return view('burgers.index', [
            'burgers' => $burgers,
        ]);
    }

    public function show($id) {

        $burger = Burger::findorFail($id);

        return view('burgers.show', ['burger' => $burger]);
    }

    public function create() {
        return view('burgers.create');
    }

    public function store() {

        
        $burger = new Burger();

        $burger->name = request('name');
        $burger->type = request('type');
        $burger->patty = request('patty');

        $burger->save();

        return redirect('/')->with('msg', 'Thanks for your Order');
    }

    public function destroy($id) {
        $burger = Burger::findorFail($id);
        $burger->delete();

        return redirect('/burgers');
    }
}
