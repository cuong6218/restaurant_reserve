<?php


namespace App\Http\Repositories;


use App\Guest;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
        return Guest::withTrashed()->paginate(5);
//        return $this->guest->select('*')->orderBy('id', 'desc')->paginate(5);
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
        $guest = Guest::find($id);
        $guest->delete();
    }
    public function detailTable($id)
    {

        return Guest::where('table_id', $id)->paginate(5);
    }
}
