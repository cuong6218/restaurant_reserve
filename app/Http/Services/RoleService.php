<?php


namespace App\Http\Services;


use App\Http\Repositories\RoleRepository;
use App\Role;

class RoleService
{
    protected $roleRepo;
    public function __construct(RoleRepository $roleRepo)
    {
        $this->roleRepo = $roleRepo;
    }
    public function getAll()
    {
        return $this->roleRepo->getAll();
    }
    public function store($request)
    {
        $role = new Role();
        $role->name = $request->name;
        $this->roleRepo->save($role);
    }
    public function show($id)
    {
        return $this->roleRepo->show($id);
    }
    public function update($request, $id)
    {
        $role = $this->roleRepo->show($id);
        $role->name = $request->name;
        $this->roleRepo->save($role);
    }
    public function destroy($id)
    {
        $this->roleRepo->destroy($id);
    }
}
