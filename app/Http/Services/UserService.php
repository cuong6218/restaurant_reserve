<?php


namespace App\Http\Services;


use App\Http\Repositories\UserRepository;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected $userRepo;
    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }
    public function getAll()
    {
        return $this->userRepo->getAll();
    }
    public function getDesc()
    {
        return $this->userRepo->getDesc();
    }
    public function store($request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $this->userRepo->save($user);
    }
    public function show($id)
    {
        return $this->userRepo->show($id);
    }
    public function update($request, $id)
    {
        $user = $this->userRepo->show($id);
        $user->fill($request->all());
        $this->userRepo->save($user);
    }
    public function destroy($id)
    {
        $this->userRepo->destroy($id);
    }
}
