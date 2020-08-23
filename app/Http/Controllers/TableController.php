<?php

namespace App\Http\Controllers;

use App\Http\Services\DishService;
use App\Http\Services\TableService;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTableRequest;
class TableController extends Controller
{
    protected $tableService;
    protected $dishService;
    public function __construct(TableService $tableService,
                                DishService $dishService)
    {
        $this->tableService = $tableService;
        $this->dishService = $dishService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = $this->tableService->getDesc();
        return view('tables.index', compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tables.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTableRequest $request)
    {
        $this->tableService->store($request);
        return redirect()->route('tables.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateTableRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function list()
    {
        $tables = $this->tableService->getAll();
        return view('tables.list', compact('tables'));
    }
    public function booking($id)
    {
        $this->tableService->booking($id);
        return redirect()->route('tables.list');
    }
    public function seated($id)
    {
        $dishes = $this->dishService->getAll();
        $this->tableService->seated($id);
        return view('tables.add-dish', compact('dishes', 'id'));
    }
    public function empty($id)
    {
        $this->tableService->empty($id);
        return redirect()->route('tables.list');
    }
    public function showBooking()
    {
        $tables = $this->tableService->showBooking();
        return view('tables.list', compact('tables'));
    }
    public function showSeated()
    {
        $tables = $this->tableService->showSeated();
        return view('tables.list', compact('tables'));
    }
    public function showEmpty()
    {
        $tables = $this->tableService->showEmpty();
        return view('tables.list', compact('tables'));
    }
    public function addDish(Request $request, $id)
    {
        $this->tableService->addDish($request, $id);
        return redirect()->route('tables.list');
    }
    public function detailSeated($id)
    {
        $table = $this->tableService->show($id);
        return view('tables.detail-seated', compact('table'));
    }
    public function detailBooking($id)
    {
        $table = $this->tableService->show($id);
        return view('tables.detail-booking', compact('table'));
    }

}
