<?php
namespace App\Repositories;
use App\Models\Regional;

class RegionalRepository{
    public function index()
    {
        return Regional::all();
    }
    public function create(array $regionalData)
    {
        return Regional::create($regionalData);
    }
    public function update(Regional $regional, array $regionalData)
    {
        $regional->update($regionalData);
        return $regional;
    }
    public function delete(Regional $regional)
    {
        $regional->delete();
    }
    public function findById($id)
    {
        return Regional::findOrFail($id);
    }
}