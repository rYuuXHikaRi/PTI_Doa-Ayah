<?php

namespace App\Http\Controllers;

use App\Models\ListRequestLetter;
use App\Http\Requests\StoreListRequestLetterRequest;
use App\Http\Requests\UpdateListRequestLetterRequest;

class ListRequestLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Admin.DaftarPermohonan.index");
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
    public function store(StoreListRequestLetterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ListRequestLetter $listRequestLetter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ListRequestLetter $listRequestLetter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateListRequestLetterRequest $request, ListRequestLetter $listRequestLetter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ListRequestLetter $listRequestLetter)
    {
        //
    }
}
