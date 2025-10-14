<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ensenyament;

class EnsenyamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ensenyaments = Ensenyament::paginate(10);
        return view("ensenyament", compact("ensenyaments"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ensenyament = new Ensenyament;
        $title = __("Afegir ensenyament");
        $textButton = __("Afegir");
        $route = route("ensenyament.store");
        $ensenyaments = Ensenyament::all();
        return view("ensenyament.create", compact("ensenyament", "title", "textButton", "route", "ensenyaments"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "nom" => "required",
        ]);
        Ensenyament::create($request->all());
        return redirect(route("ensenyament.index"))
            ->with("success", __("El ensenyament " . $request->nom . " s'ha afegit correctament!"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ensenyament $ensenyament)
    {
        $update = true;
        $title = __("Editar ensenyament");
        $textButton = __("Actualitzar");
        $route = route("ensenyament.update", ["ensenyament" => $ensenyament]);
        $ensenyaments = Ensenyament::all();
        return view("ensenyament.edit", compact("ensenyament", "update", "title", "textButton", "route", "ensenyaments"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ensenyament $ensenyament)
    {
        $this->validate($request, [
            "nom" => "required",
        ]);
        $ensenyament->update($request->all());
        return back()
            ->with("success", __("El ensenyament " . $request->nom . " s'ha actualitzat correctament!"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ensenyament $ensenyament)
    {
        $ensenyament->delete();
        return back()->with("success", __("El ensenyament " . $ensenyament->nom . " s'ha eliminat correctament"));
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
}
