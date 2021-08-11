<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use App\Http\Requests\StatusRequest;
use App\Repositories\Interfaces\StatusRepositoryInterface;

class StatusController extends Controller
{
    
    private $repository;

    /**
     * Permissions to access.
     *
     * @param StatusRepositoryInterface $repository
     * @return \Illuminate\Http\Response
     */
    function __construct(StatusRepositoryInterface $repository)
    {
        $this->middleware('permission:statuses-list|statuses-create|statuses-edit|statuses-delete', ['only' => ['index','show']]);
        $this->middleware('permission:statuses-create', ['only' => ['create','store']]);
        $this->middleware('permission:statuses-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:statuses-delete', ['only' => ['destroy']]);

        $this->repository = $repository;
    }

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(StatusRequest $request, Status $status)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {
        //
    }
}
