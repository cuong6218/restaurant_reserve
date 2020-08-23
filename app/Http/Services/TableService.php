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
}
