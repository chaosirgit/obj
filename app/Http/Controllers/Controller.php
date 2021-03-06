<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function success($msg){
        return response()->json(['error'=>0,'msg'=>$msg]);
    }

    public function error($msg){
        return response()->json(['error'=>1,'msg'=>$msg]);
    }

    public function layuiData($paginateObj){
        return response()->json(['code'=>0,'msg'=>'','count'=>$paginateObj->total(),'data'=>$paginateObj->items()]);
    }
}
