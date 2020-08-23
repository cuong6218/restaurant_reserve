<?php


namespace App\Http\Repositories;


use App\Table;
use Illuminate\Support\Facades\DB;

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
    public function show($id)
    {
        return $this->table->findOrFail($id);
    }
    public function destroy($id)
    {
        $this->table->destroy($id);
    }
    public function showBooking()
    {
        return DB::table('tables')->where('status', 'booking')->get();
    }
    public function showSeated()
    {
        return DB::table('tables')->where('status', 'seated')->get();
    }
    public function showEmpty()
    {
        return DB::table('tables')->where('status', 'empty')->get();
    }
}
