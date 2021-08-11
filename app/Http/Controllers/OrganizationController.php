<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;
use App\Http\Requests\OrganizationRequest;
use App\Repositories\Interfaces\OrganizationRepositoryInterface;

class OrganizationController extends Controller
{
    
    private $repository;

    /**
     * Permissions to access.
     *
     * @param OrganizationRepositoryInterface $repository
     * @return \Illuminate\Http\Response
     */
    function __construct(OrganizationRepositoryInterface $repository)
    {
        $this->middleware('permission:organizations-list|organizations-create|organizations-edit|organizations-delete', ['only' => ['index','show']]);
        $this->middleware('permission:organizations-create', ['only' => ['create','store']]);
        $this->middleware('permission:organizations-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:organizations-delete', ['only' => ['destroy']]);

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
    public function store(OrganizationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(OrganizationRequest $request, Organization $organization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        //
    }
}
