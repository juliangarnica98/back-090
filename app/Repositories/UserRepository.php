<?php
namespace App\Repositories;

use App\Models\Store;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;

Class UserRepository
{
    public function index()
    {
        // return User::with('roles')->with('store')->get();
        return User::with('roles')->whereHas('roles', function ($query) { return $query->where('name', '=', 'Generalist');})->get();
    }
    public function index2()
    {
        return User::with('roles')->whereHas('roles', function ($query) { return $query->where('name', '=', 'Boss');})->with('store')->get();
    }
    public function update(User $user,Store $store,array $userData)
    {
        // return $store;
        $user->update([
            'name' =>$userData['name'],
            'last_name' =>$userData['last_name'],
            'email' =>$userData['email'],
            'password' => bcrypt($userData['password']),
        ]);
        $user->store()->associate($store);
        $user->save();
        return $user;
        
    }
    public function delete(User $user)
    {
        $user->delete();
    }
    public function findById($id)
    {
        return User::findOrFail($id);
    }
}