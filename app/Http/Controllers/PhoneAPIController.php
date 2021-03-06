<?php

namespace App\Http\Controllers;

use App\Phone;
use App\Http\Resources\PhoneCollection;
use App\Http\Resources\PhoneResource;
 
class PhoneAPIController extends Controller
{
    public function index()
    {
        return new PhoneCollection(Phone::paginate());
    }
 
    public function show(Phone $phone)
    {
        return new PhoneResource($phone->load(['customer']));
    }

    public function store(Request $request)
    {
        return new PhoneResource(Phone::create($request->all()));
    }

    public function update(Request $request, Phone $phone)
    {
        $phone->update($request->all());

        return new PhoneResource($phone);
    }

    public function destroy(Request $request, Phone $phone)
    {
        $phone->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}