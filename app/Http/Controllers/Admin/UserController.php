<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(){
        return view('admin.user.index');
    }

    public function userAdd(Request $request){
        $id = $request->get('id',null);

        if (empty($id)){
            $user = new User();
        }else{
            $user = User::find($id);
        }
        if (is_null($user)){
            return $this->error('参数错误');
        }
        return view('admin.user.userAdd',['results'=>$user]);
    }

    public function userList(Request $request){
        $limit = $request->get('limit',10);
        $mobile = $request->get('mobile',null);
        $users = new User();
        if(!empty($mobile)){
            $users = $users->where('mobile','like','%'.$mobile.'%');
        }
        $users = $users->orderBy('id','desc')->paginate($limit);
        return $this->layuiData($users);
    }


    public function postAdd(Request $request){
        $id = $request->get('id',null);
        $mobile = $request->get('mobile',null);
        $password = $request->get('password',null);
        //自定义验证错误信息
        $messages  = [
            'password.regex'       => '密码必须为6-25位',
            'mobile.required'           => '用户名必须填写',
        ];

        //验证
        $validator = Validator::make($request->all(), [
            'password' => 'regex:/^.{6,25}$/', //正则验证 如有多条不能用| 必须是数组 ['required','regex:/^[a-zA-Z0-9]$/']
            'mobile'   => 'required',
        ], $messages);

        //如果验证不通过
        if ($validator->fails()) {
            return $this->error($validator->errors()->first());
        }
        $user = User::where('mobile',$mobile)->first();
        if (empty($id) && !empty($user)){
            return $this->error('该用户已存在');
        }
        if(empty($id)){
            $user = new User();
        }else{
            $user = User::find($id);
        }
        try{
            $user->mobile = $mobile;
            $user->nickname = $mobile;
            $user->password = $user::setPass($password);
            $user->created_at = Carbon::now();
            $user->avatar = Factory::create()->imageUrl(480,480);
            $user->type = 1;

            $user->save();
            return $this->success('操作成功');
        }catch (\Exception $exception){
            return $this->error($exception->getMessage());
        }

    }

    public function delete(Request $request){
        $id = $request->get('id');
        if (empty($id)){
            return $this->error('参数错误');
        }
        $user = User::find($id);
        try{
            $user->delete();
            return $this->success('删除成功');
        }catch (\Exception $exception){
            return $this->error($exception->getMessage());
        }

    }


}
