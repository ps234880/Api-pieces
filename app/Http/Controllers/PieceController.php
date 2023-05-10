<?php

namespace App\Http\Controllers;

use App\Models\Piece;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class PieceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('name'))
            return Piece::where('name', 'like', '%' . $request->name . '%')->get();

        if ($request->has('sort'))
            return Piece::orderBy($request->sort)->get();

        return Piece::All();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'composer' => 'required',
            'link' => 'required',
        ]);

        if ($validator->fails()) {
            // Log::notice('gebruiker:', ['ip' => $request->ip()]);
            // Log::error('validatie fout:', $request->all());
            return response('{"Foutmelding":"Data niet correct"}', 400)
                ->header('Content-Type', 'application/json');
        } else return
        //     Log::notice('gebruiker:', ['ip' => $request->ip()]);
        // Log::info('heeft aangemaakt:', [$request->name, $request->composer, $request->link]);
        Piece::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Piece $piece)
    {
        return $piece;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Piece $piece)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'composer' => 'required',
            'link' => 'required',
        ]);
        if ($validator->fails()) {
            return response('{"Foutmelding":"Data niet correct"}', 400)
                ->header('Content-Type', 'application/json');
        } else return $piece;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Piece $piece)
    {
        Log::notice('gebruiker:', ['ip' => $request->ip()]);
        Log::info('heeft piece verwijderd:', [$piece->id, $piece->name]);
        $piece->delete();
    }

    public function indexGenre(Request $request, $id)
    {
        if ($request->has('sort'))
            return Piece::where('genre_id', $id)->orderBy($request->sort)->get();

        if ($request->has('offset'))
            return Piece::where('genre_id', $id)->skip($request->offset)->take($request->limit)->get();

        if ($request->has('limit'))
            return Piece::where('genre_id', $id)->take($request->limit)->get();

        return Piece::where('genre_id', $id)->get();
    }

    public function destroyGenre($id)
    {
        Piece::where('genre_id', $id)->delete();
    }
}
