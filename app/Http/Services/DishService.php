<?php


namespace App\Http\Services;


use App\Dish;
use App\Http\Repositories\DishRepository;

class DishService
{
    protected $dishRepo;
    public function __construct(DishRepository $dishRepo)
    {
        $this->dishRepo = $dishRepo;
    }
    public function getAll()
    {
        return $this->dishRepo->getAll();
    }
    public function getDesc()
    {
        return $this->dishRepo->getDesc();
    }
    public function store($request)
    {
        $dish = new Dish();
        $dish->name = $request->name;
        $dish->price = $request->price;
        $this->dishRepo->save($dish);
    }
    public function show($id)
    {
        return $this->dishRepo->show($id);
    }
    public function update($request, $id)
    {
        $dish = $this->dishRepo->show($id);
        $dish->name = $request->name;
        $dish->price = $request->price;
        $this->dishRepo->save($dish);
    }
    public function destroy($id)
    {
        $this->dishRepo->destroy($id);
    }
}
