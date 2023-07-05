<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamus;
use App\Models\Dtl_indo_prc;
use App\Models\Contoh_indo;
use App\Models\Katalain_indo;
use App\Models\Contoh_katalain_indo;
use Illuminate\Support\Facades\DB;

class KamusController extends Controller
{
    //
    public function kamus(){
        // $kamuss = Kamus::all();

        // $users = DB::table('kamus')->get();
        $kamuses = [];
        return view('dictionarys', ['kamuses' => $kamuses]);
        // echo '<pre>';print_r('asd');die;


    }

    public function huruf(Request $request,$huruf = null) {
        // echo '<pre>';print_r($huruf);die;
        if ($huruf == null) {
            return view('dictionarys',['kamuses' => $huruf, 'huruf' => '0']);
        }
        $kamuses = Kamus::where('indonesia', 'like', $huruf.'%')->get();
        // echo '<pre>';print_r($kamuses);die;
        return view('dictionarys', ['kamuses' => $kamuses,'huruf' => $huruf]);
    }

    public function dictionary($id){
        $kamus = Kamus::find($id);

        $ff = DB::table('dtl_indo_prc')
        ->join('contoh_indo', 'dtl_indo_prc.id', '=', 'contoh_indo.dtl_indo_prc_id')
        ->where('dtl_indo_prc.kamus_id', $id)
        ->select('dtl_indo_prc.*', 'contoh_indo.*', 'contoh_indo.arti_prc as arti_prc_from_indo', 'dtl_indo_prc.arti_prc')
        ->get();

        $groupedData = [];
        foreach ($ff as $item) {
            $artiPrc = $item->arti_prc;
            if (!isset($groupedData[$artiPrc])) {
                $groupedData[$artiPrc] = [];
            }
            $groupedData[$artiPrc][] = $item;
            echo $item->arti_prc_from_indo;
        }

        //done
        $ee = DB::table('katalain_indo')
        ->join('contoh_katalain_indo', 'katalain_indo.id', '=', 'contoh_katalain_indo.katalain_indo_id')
        ->where('katalain_indo.kamus_id', 1)
        ->select('katalain_indo.*', 'contoh_katalain_indo.*')
        ->get();

        $groupdatakl = [];
        foreach ($ee as $set) {
            $kl_indo = $set->kl_indo;
            if (!isset($groupdatakl[$kl_indo])) {
                $groupdatakl[$kl_indo] = [];
            }
            $groupdatakl[$kl_indo][] = $set;
        }

        echo '<pre>';print_r($ee);print_r($groupdatakl);die;


        echo $id;die;
    }
}


