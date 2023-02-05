<?php

namespace App\Http\Controllers;

use App\Models\DetailUser;
use App\Http\Requests\StoreDetailUserRequest;
use App\Http\Requests\UpdateDetailUserRequest;

class DetailUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDetailUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetailUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailUser  $detailUser
     * @return \Illuminate\Http\Response
     */
    public function show(DetailUser $detailUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailUser  $detailUser
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailUser $detailUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetailUserRequest  $request
     * @param  \App\Models\DetailUser  $detailUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetailUserRequest $request, DetailUser $detailUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailUser  $detailUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailUser $detailUser)
    {
        //
    }
}
