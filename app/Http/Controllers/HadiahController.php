<?php

namespace App\Http\Controllers;

use App\Models\Hadiah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HadiahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(Hadiah::with(['tipe_hadiah'])->get(), 200);
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
    public function show(Hadiah $hadiah)
    {
        //
        return response()->json($hadiah->load(['tipe_hadiah']), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hadiah $hadiah)
    {
        // return $request->all();
        //
        $validator = Validator::make($request->all(), [
            'penerimaan' => 'required|numeric|min:0|max:1',
            'tgl_penerimaan' => 'required|date_format:Y-m-d H:i:s',
            'alasan_tolak' => 'string',
        ]);

        if ( $validator->fails() ){
            return response()->json(['success' => false, 'msg' => $validator->errors()]);
        }

        $hdh = $hadiah->update($request->all());
        return response()->json(['success' => true, 'msg' => "success add data"], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hadiah $hadiah)
    {
        //
    }
}
