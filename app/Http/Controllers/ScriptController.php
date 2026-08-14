<?php

namespace App\Http\Controllers;

use App\Models\Script;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ScriptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('script/characterSelect');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $play = $request->play;
        $character = $request->character;
        $response = Http::get("https://www.folgerdigitaltexts.org/{$play}/witScript/{$character}.html");
        if ($response->successful()) {
            return view('script/characterScript', ['content' => $response, 'play' => $play, 'character' => $character]);
        }
        else {
            return view('script/characterScript', ['content' => 'Error: Script creation failed', 'play' => 'None', 'character' => 'None']);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Script $script)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Script $script)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Script $script)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Script $script)
    {
        //
    }
}
