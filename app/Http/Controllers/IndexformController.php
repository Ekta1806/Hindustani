<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Indexform;
use App\Models\Father;
use App\Models\Mother;
use App\Models\Child;
Use Illuminate\Support\Facades\DB;

class IndexformController extends Controller
{
    function show(){
        $person= Indexform::paginate(7);
        return view('indexlist',['per'=>$person]);
    }
    function fullform(){
        $person= Indexform::paginate(7);
        return view('showdetails',['per'=>$person]);
    }
    function insert(Request $req)
    {
        $req->validate(['name'=>"required",
                        'adhar'=>"required"
                        ]);
        $person=new Indexform;
        $person->id=$req->id;
        $person->name=$req->name;
        $person->adhar=$req->adhar;
        $person->bdate=$req->bdate;
        $person->father=$req->father;
        $person->mother=$req->mother;
        $person->children=$req->children;
        $person->save();
        return view('fatherform',['per'=>$person]);
    }
    function insertf(Request $req){
        $person=new Father;
        $person->id=$req->id;
        $person->father=$req->father;
        $person->f_occupation=$req->f_occupation;
        $person->f_adhar=$req->f_adhar;
        $person->f_mobile=$req->f_mobile;
        $person->save();
        return view('motherform',['per'=>$person]);

    }
    function insertm(Request $req){
        $person=new Mother;
        $person->id=$req->id;
        $person->mother=$req->mother;
        $person->m_occupation=$req->m_occupation;
        $person->m_adhar=$req->m_adhar;
        $person->m_mobile=$req->m_mobile;
        $person->save();
        return view('childrenform',['per'=>$person]);

    }
    function insertc(Request $req){
        $person=new Child;
        $person->id=$req->id;
        $person->children=$req->children;
        $person->c_occupation=$req->c_occupation;
        $person->c_adhar=$req->c_adhar;
        $person->c_mobile=$req->c_mobile;
        $person->save();
        return view('profile',['per'=>$person]);
    }
    function fatherlist($id){
        $person= DB::table('fathers')
        ->join('indexforms','fathers.id',"=",'indexforms.id')
        ->where(['fathers.id'=> $id])
        ->select('fathers.*')
        ->get();
        return view('fatherlist',['per'=>$person]);
    }
    function motherlist($id){
        $person= DB::table('mothers')
        ->join('indexforms','mothers.id',"=",'indexforms.id')
        ->where(['mothers.id'=> $id])
        ->select('mothers.*')
        ->get();
        return view('motherlist',['per'=>$person]);
    }
    function childrenlist($id){
        $person= DB::table('children')
        ->join('indexforms','children.id',"=",'indexforms.id')
        ->where(['children.id'=> $id])
        ->select('children.*')
        ->get();
        return view('childrenlist',['per'=>$person]);
    }
}
