<?php
namespace App\Repositories;

use App\Models\Regional;
use App\Models\Store;

class StoreRepository{
    public function index($regional)
    {
        return Store::where('regional_id',$regional)->with('regional')->orderBy('id','asc')->paginate(15);
    }
    // public function index2($regional)
    // {
    //     return Store::where('regional_id',$regional)->where('status',1)->with('regional')->orderBy('id','asc')->paginate(15);
    // }
    public function create(Regional $regional,array $storeData)
    {
        $store = $regional->stores()->create($storeData);
        return $store;
    }
    public function update(Store $store, array $storeData)
    {
        $store->update($storeData);
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
        return Store::with('regional')->where('status',1)->where('regional_id',$regional->id)->get();
    }
}