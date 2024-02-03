<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DBModel;
class ProductController extends Controller
{
    public function index($id = null)
    {
        if($id){
            $data = DBModel::where('id',$id)->get();
        }else{
            $data = DB::table('thuvien')->get();
            //$data = DBModel::all();
        }
        return view('form', ['data' => $data]);
    }


    public function getadd(){
        return view('addview');
    }

    public function postadd(Request $req){
        $validate = $req->validate([
            'tens' => 'required||string',
            'gias' => 'required||string',
            'phuk' => 'required||string',
        ],[
            'tens.required' => 'vui long khong de trong!',
            'gias.required' => 'vui long khong de trong!',
            'phuk.required' => 'vui long khong de trong!',
        ]);

        /*$thuvien = new DBModel();
        $thuvien->tensach = $req->tens;
        $thuvien->giasach = $req->gias;
        $thuvien->phukien = $req->phuk;
        $thuvien->save();*/
        DB::table('thuvien')->insert([
            'tensach' => $req->tens,
            'giasach' => $req->gias,
            'phukien' => $req->phuk
        ]);
        return redirect('product');
    }

    public function delete($id){
    /*    $thuvien = new DBModel();
        $data = $thuvien->find($id);
        $data->delete();*/
        DB::table('thuvien')->where('id',$id)->delete();

        return redirect('product');
    }

    public function edit($id){
       /* $thuvien = new DBModel();
        $data = $thuvien->find($id);*/
        $data = DB::table('thuvien')->find($id);

        return view('edit',['data' => $data]);
    }

    public function update(Request $req){
        $validate = $req->validate([
            'tens' => 'required|string',
            'gias' => 'required|string',
            'phuk' => 'required|string',
        ],[
            'tens.required' => 'vui long khong de trong!',
            'gias.required' => 'vui long khong de trong!',
            'phuk.required' => 'vui long khong de trong!',
        ]);

    /*    $thuvien = new DBModel();
        $data = $thuvien->find($req->id);

        if($data){
            $thuvien->tensach = $req->tens;
            $thuvien->giasach = $req->gias;
            $thuvien->phukien = $req->phuk;
            $thuvien->save();
        }*/
        DB::table('thuvien')->where('id',$req->id)->update([
            'tensach' => $req->tens,
            'giasach' => $req->gias,
            'phukien' => $req->phuk
        ]);
        return redirect('product');
    }

}
