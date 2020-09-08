<?php


namespace App\Http\Repositories;


use App\Dish;
use Illuminate\Support\Facades\DB;

class DishRepository
{
    protected $dish;
    public function __construct(Dish $dish)
    {
        $this->dish = $dish;
    }
    public function getAll()
    {
        return $this->dish->all();
    }
    public function getDesc()
    {
        return $this->dish->select('*')->orderBy('id', 'desc')->paginate(5);
    }
    public function save($dish)
    {
        $dish->save();
    }
    public function show($id)
    {
        return $this->dish->findOrFail($id);
    }
    public function destroy($id)
    {
        $this->dish->destroy($id);
    }
    public function getTrash()
    {
        return Dish::withTrashed()->paginate(5);
    }
    public function pay($id)
    {
        $dishes = $this->dish->findOrFail($id);
        $dishes->delete();
    }
}
