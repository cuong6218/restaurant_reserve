<?php


namespace App\Http\Repositories;


use App\Guest;

class GuestRepository
{
    protected $guest;
    public function __construct(Guest $guest)
    {
        $this->guest = $guest;
    }
    public function getAll()
    {
        return $this->guest->all();
    }
    public function getDesc()
    {
        return $this->guest->select('*')->orderBy('id', 'desc')->paginate(5);
    }
    public function save($guest)
    {
        $guest->save();
    }
    public function show($id)
    {
        return $this->guest->findOrFail($id);
    }
    public function destroy($id)
    {
        $this->guest->destroy($id);
    }
}
