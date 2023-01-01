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
        ])
        ->from('juchus as j')
        ->join('kyakusakis as k', function($query){
            $query->on('j.kyakusaki_id', '=', 'k.id');
        });
    }
}
