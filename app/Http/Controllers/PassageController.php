<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passage;
use App\Http\Requests\PassageRequest;
use App\Repositories\Interfaces\PassageRepositoryInterface;

class PassageController extends Controller
{
    
    private $repository;

    /**
     * Permissions to access.
     *
     * @param PassageRepositoryInterface $repository
     * @return \Illuminate\Http\Response
     */
    function __construct(PassageRepositoryInterface $repository)
    {
        $this->middleware('permission:passages-list|passages-create|passages-edit|passages-delete', ['only' => ['index','show']]);
        $this->middleware('permission:passages-create', ['only' => ['create','store']]);
        $this->middleware('permission:passages-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:passages-delete', ['only' => ['destroy']]);

        $this->repository = $repository;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passages = $this->repository->all();

        dd($passages);

        dd("Passages-list");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd("Passages-create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PassageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Passage  $passage
     * @return \Illuminate\Http\Response
     */
    public function show(Passage $passage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Passage  $passage
     * @return \Illuminate\Http\Response
     */
    public function edit(Passage $passage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Passage  $passage
     * @return \Illuminate\Http\Response
     */
    public function update(PassageRequest $request, Passage $passage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Passage  $passage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Passage $passage)
    {
        //
    }
}
