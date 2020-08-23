<?php


namespace App\Http\Repositories;


use App\Dish;

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
}
