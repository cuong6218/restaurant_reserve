<?php


namespace App\Http\Services;


use App\Guest;
use App\Http\Repositories\GuestRepository;
use Carbon\Carbon;

class GuestService
{
    protected $guestRepo;
    public function __construct(GuestRepository $guestRepo)
    {
        $this->guestRepo = $guestRepo;
    }
    public function getAll()
    {
        return $this->guestRepo->getAll();
    }
    public function getDesc()
    {
        return $this->guestRepo->getDesc();
    }
    public function store($request, $id)
    {
        $guest = new Guest();
        $guest->fill($request->all());
        if (!$request->time_end)
        {
            $time_start = Carbon::parse($request->time_start);
            $guest->time_end = $time_start->addHour(2);
        }
        $this->guestRepo->save($guest);
//        $guest->table()->sync($table_id);
    }
    public function show($id)
    {
        return $this->guestRepo->show($id);
    }
    public function update($request, $id)
    {
        $guest = $this->guestRepo->show($id);
        $guest->fill($request->all());

        $this->guestRepo->save($guest);
    }

    public function destroy($id)
    {
       $this->guestRepo->destroy($id);
    }
    public function detailTable($id)
    {
        return $this->guestRepo->detailTable($id);
    }
}
