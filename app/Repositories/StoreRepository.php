<?php
namespace App\Repositories;

use App\Models\Regional;
use App\Models\Store;

class StoreRepository{
    public function index()
    {
        return Store::with('regional')->orderBy('id','desc')->get();
    }
    public function create(Regional $regional,array $storeData)
    {
        $store = $regional->stores()->create($storeData);
        return $store;
    }
    public function update(Store $store, Regional $regional, array $storeData)
    {
        $store->update($storeData);
        $store->regional()->associate($regional);
        return $store;
    }
    public function delete(Store $store)
    {
        $store->delete();
    }
    public function findById($id)
    {
        return Store::with('regional')->findOrFail($id);
    }
    public function getStores($regional)
    {
        $regional= Regional::where('description',$regional)->first();
        return Store::with('regional')->where('regional_id',$regional->id)->get();
    }
}