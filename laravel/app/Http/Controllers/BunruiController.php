<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juchu;

class BunruiController extends Controller
{
    public function index()
    {
        $juchus = Juchu::select([
            'j.id',
            'j.kyakusaki_id',
            'j.bunbougu_id',
            'j.kosu',
            'j.joutai',
            'j.user_id',
            'k.name as kyakusaki_name',
            'b.name as bunbougu_name',
            'u.name as user_name',
        ])
        ->from('juchus as j')
        ->join('kyakusakis as k', function($query){
            $query->on('j.kyakusaki_id', '=', 'k.id');
        })
        ->join('bunbougus as b', function($query){
            $query->on('j.bunbougu_id', '=', 'b.id');
        })
        ->join('users as u', function($query){
            $query->on('j.user_id', '=', 'u.id');
        })
        ->orderBy('j.id', 'DESC')
        ->paginate(5);

        return view('juchu.index', compact('juchus'))
            ->with('user_name', \Auth::user()->name)
            ->with('page_id', request()->page)
            ->with('i', (request()->input('page', 1)-1)*5);
    }
}
