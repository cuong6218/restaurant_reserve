<?php

namespace App\Http\Controllers;

use App\Http\Services\DishService;
use App\Http\Services\GuestService;
use App\Http\Services\TableService;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTableRequest;
use Illuminate\Support\Facades\Redirect;

class TableController extends Controller
{
    protected $tableService;
    protected $dishService;
    protected $guestService;
    public function __construct(TableService $tableService,
                                DishService $dishService,
                                GuestService $guestService)
    {
        $this->tableService = $tableService;
        $this->dishService = $dishService;
        $this->guestService = $guestService;
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
        $guests = $this->guestService->detailTable($id);
        $table = $this->tableService->show($id);
        return view('tables.detail', compact('table', 'guests'));
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
        $guests = $this->guestService->getAll();
        $tables = $this->tableService->getAll();
        return view('tables.list', compact('tables', 'guests'));
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
    public function showBill($id)
    {
        $table = $this->tableService->show($id);
        $totalPrice = 0;
        foreach($table->dishes as $dish)
        {
            $totalPrice += $dish->price;
        }
        return view('tables.bill', compact('table', 'totalPrice'));
    }


    public function booking($id)
    {
        $this->tableService->booking($id);
        return redirect()->route('tables.list');
    }
    public function seated($id)
    {
        $table = $this->tableService->show($id);
        $dishes = $this->dishService->getAll();
        return view('tables.add-dish', compact('dishes', 'table'));
    }
    public function empty($id)
    {
        $this->tableService->empty($id);
        return redirect()->route('tables.list');
    }

    public function addDish(Request $request, $id)
    {
        $this->tableService->seated($id);
        $this->tableService->addDish($request, $id);
        return redirect()->route('tables.list');
    }

    public function pay($id)
    {
        $this->tableService->empty($id);
        $this->dishService->pay($id);
        return redirect()->route('tables.list');
    }
}
