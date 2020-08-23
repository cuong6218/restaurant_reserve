<?php


namespace App\Http\Services;


use App\Http\Repositories\TableRepository;
use App\Table;

class TableService
{
    protected $tableRepo;
    public function __construct(TableRepository $tableRepo)
    {
        $this->tableRepo = $tableRepo;
    }
    public function getAll()
    {
        return $this->tableRepo->getAll();
    }
    public function getDesc()
    {
        return $this->tableRepo->getDesc();
    }
    public function store($request)
    {
        $table = new Table();
        $table->name = $request->name;
        $table->status = 'empty';
        $this->tableRepo->save($table);
    }
    public function show($id)
    {
        return $this->tableRepo->show($id);
    }
    public function update($request, $id)
    {
        $table = $this->tableRepo->show($id);
        $table->name = $request->name;
        $table->status = 'empty';
        $this->tableRepo->save($table);
    }
    public function destroy($id)
    {
        $this->tableRepo->destroy($id);
    }
    public function booking($id)
    {
        $table = $this->tableRepo->show($id);
        $table->status = 'booking';
        $this->tableRepo->save($table);
    }
    public function seated($id)
    {
        $table = $this->tableRepo->show($id);
        $table->status = 'seated';
        $this->tableRepo->save($table);
    }
    public function empty($id)
    {
        $table = $this->tableRepo->show($id);
        $table->status = 'empty';
        $this->tableRepo->save($table);
    }
    public function showBooking()
    {
        return $this->tableRepo->showBooking();
    }
    public function showSeated()
    {
        return $this->tableRepo->showSeated();
    }
    public function showEmpty()
    {
        return $this->tableRepo->showEmpty();
    }
    public function addDish($request,$id)
    {
        $table = $this->tableRepo->show($id);
        $table->dishes()->sync($request->dish);
    }

}
