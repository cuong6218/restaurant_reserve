<?php


namespace App\Http\Services;


use App\Dish;
use App\Http\Repositories\DishRepository;
use Illuminate\Support\Facades\Storage;
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
        $data = $request->all();
        //upload file
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $data['image'] = $path;
        //fill data
        $dish->fill($data);
        $this->dishRepo->save($dish);
        }
    }
    public function show($id)
    {
        return $this->dishRepo->show($id);
    }
    public function update($request, $id)
    {
        $dish = $this->dishRepo->show($id);
        $data = $request->all();
        //update image
        if ($request->hasFile('image')) {
            // delete current image
            $currentImg = $dish->image;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }
            //update new image
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $data['image'] = $path;
        }
        $dish->fill($data);
        $this->dishRepo->save($dish);
    }
    public function destroy($id)
    {
        $this->dishRepo->destroy($id);
    }
    public function pay($id)
    {
        $this->dishRepo->pay($id);
    }
}
