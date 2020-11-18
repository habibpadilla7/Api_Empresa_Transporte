<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Statu;
class StatuController extends Controller
{
    public function index()
    {

        $status = Statu::all();
        return response()->json(['data' => $status]);
    }

    public function store(Request $reques)
    {
        
        $data = request()->validate([
            'name' => ''
        ]);
        $status = Status::create($data);
        return $status;

    }
    public function show(Statu $statu){
   
        return compact('statu');
    }
    public function update(Statu $statu){
   
        $data = request()->validate([
            'names' => ''
        ]);
        $statu->update($data);
    }
    public function destroy(Statu $statu){
   
        $statu->delete();
    }
}
