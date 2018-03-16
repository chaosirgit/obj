<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function adminUser(){
        return view('admin.adminUser');
    }

    public function adminUserList(Request $request){
        $limit = $request->get('limit',10);
        $results = Admin::orderBy('id','desc')->paginate($limit);
        return $this->layuiData($results);
    }

    public function adminUserAdd(Request $request){
        $id = $request->get('id',null);

        if (empty($id)){
            $admin = new Admin();
        }else{
            $admin = Admin::find($id);
        }
        if (is_null($admin)){
            return $this->error('参数错误');
        }
        return view('admin.adminUserAdd',['results'=>$admin]);

    }

    public function delete(Request $request){
        $id = $request->get('id',null);
        if (empty($id)){
            return $this->error('参数错误');
        }
        $admin = Admin::find($id);
        try{
            $admin->delete();
            return $this->success('删除成功');
        }catch (\Exception $exception){
            return $this->error($exception->getMessage());
        }
    }

    public function postAdd(Request $request){
        $id = $request->get('id',null);
        $username = $request->get('username',null);
        $password = $request->get('password',null);
        //自定义验证错误信息
        $messages  = [
            'password.regex'       => '密码必须为6-25位',
            'username.required'           => '用户名必须填写',
        ];

        //验证
        $validator = Validator::make($request->all(), [
            'password' => 'regex:/^.{6,25}$/', //正则验证 如有多条不能用| 必须是数组 ['required','regex:/^[a-zA-Z0-9]$/']
            'username'   => 'required',
        ], $messages);

        //如果验证不通过
        if ($validator->fails()) {
            return $this->error($validator->errors()->first());
        }
        $admin = Admin::where('username',$username)->first();
        if (empty($id) && !empty($admin)){
            return $this->error('该用户已存在');
        }
        if(empty($id)){
            $admin = new Admin();
        }else{
            $admin = Admin::find($id);
        }
        try{
        $admin->username = $username;
        $admin->password = Admin::setPass($password);
        $admin->created_at = Carbon::now();

            $admin->save();
            return $this->success('操作成功');
        }catch (\Exception $exception){
            return $this->error($exception->getMessage());
        }

    }
}
