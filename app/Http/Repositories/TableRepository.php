<?php


namespace App\Http\Repositories;


use App\Table;

class TableRepository
{
    protected $table;
    public function __construct(Table $table)
    {
        $this->table = $table;
    }
    public function getAll()
    {
        return $this->table->all();
    }
    public function getDesc()
    {
        return $this->table->select('*')->orderBy('id', 'desc')->paginate(5);
    }
    public function save($table)
    {
        $table->save();
    }
    public function destroy($id)
    {
        $this->table->destroy($id);
    }
}
