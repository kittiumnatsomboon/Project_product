<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class Registercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user = User::all();
        return response()->json(['status' => 'error', 'message' => 'error 404 dis playpage'], 422);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'fullname' => 'required',
            'dateofbrith' => 'required',
            'telephone' => 'required',
            'housenumber' => 'required',
            'VillageNumber' => 'required',
            'Alley' => 'required',
            'Road' => 'required',
            'Subdistrict' => 'required',
            'District' => 'required',
            'province' => 'required',
            'PostalCode' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        
        User::create([
            'fullname' => $request-> fullname,
            'dateofbirth' => $request->dateofbrith,
            'telephone_number'=> $request->telephone,
            'user_type'=> '0',
            'housenumber' => $request->housenumber,
            'VillageNumber'=> $request->VillageNumber,
            'Alley'=> $request->Alley,
            'Road'=> $request->Road,
            'Subdistrict' => $request->Subdistrict,
            'District'=> $request->District,
            'Province'=> $request->province,
            'Postal Code'=> $request->PostalCode,
            'email'=> $request->email,            
            'password' => Hash::make($request->password),
        ]);
        
        return redirect('/login')->with('success', 'Registration successful! Please log in.');
        
        
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
