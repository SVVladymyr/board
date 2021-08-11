<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Http\Requests\ApplicationRequest;
use App\Repositories\Interfaces\ApplicationRepositoryInterface;

class ApplicationController extends Controller
{
    
    private $repository;

    /**
     * Permissions to access.
     *
     * @param ApplicationRepositoryInterface $repository
     * @return \Illuminate\Http\Response
     */
    function __construct(ApplicationRepositoryInterface $repository)
    {
         $this->middleware('permission:applications-list|applications-create|applications-edit|applications-delete', ['only' => ['index','show']]);
         $this->middleware('permission:applications-create', ['only' => ['create','store']]);
         $this->middleware('permission:applications-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:applications-delete', ['only' => ['destroy']]);

         $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd("Tuta");
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
    public function store(ApplicationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(ApplicationRequest $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        //
    }
}
