<?php


namespace App\Http\Repositories;


use App\Role;

class RoleRepository
{
    protected $role;
    public function __construct(Role $role)
    {
        $this->role = $role;
    }
    public function getAll()
    {
        return $this->role->all();
    }
    public function save($role)
    {
        $role->save();
    }
    public function show($id)
    {
        return $this->role->findOrFail($id);
    }
    public function destroy($id)
    {
        $this->role->destroy($id);
    }
}
