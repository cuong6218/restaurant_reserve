<?php

namespace App\Http\Controllers;

use App\Http\Services\GuestService;
use App\Http\Services\TableService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\CreateGuestRequest;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    protected $guestService;
    protected $tableService;
    public function __construct(GuestService $guestService,
                                TableService $tableService)
    {
        $this->guestService = $guestService;
        $this->tableService = $tableService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guests = $this->guestService->getDesc();
        return view('guests.index', compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $table = $this->tableService->show($id);
        return view('guests.create', compact('table'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGuestRequest $request, $id)
    {
        $table = $this->tableService->show($id);
        $table_id = $table->id;
        $this->tableService->booking($id);
        $this->guestService->store($request, $table_id);
        return redirect()->route('tables.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guest = $this->guestService->show($id);
        return view('guests.edit', compact('guest'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateGuestRequest $request, $id)
    {
        $this->guestService->update($request, $id);
        return redirect()->route('guests.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->tableService->empty($id);
        $this->guestService->destroy($id);
        return redirect()->route('tables.list');
    }
}
