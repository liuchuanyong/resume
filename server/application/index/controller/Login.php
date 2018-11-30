<?php
namespace app\index\controller;

use think\facade\Cookie;
use think\facade\Log;
use think\facade\Request;
use think\facade\Session;
use app\index\model\User;

class Login
{

    public function login()
    {
       $input = input('post.');

       if ($input['username'] == '') {
           return json(['code' => 3,'msg' => '用户名不能为空','data' => []]);
       }

       if ($input['password'] == '') {
           return json(['code' => 4,'msg' => '密码不能为空','data' => []]);
       }
       // dump($input);exit;
       $user_model = new User();
       $res = $user_model->checkUser(['uname' => $input['username']]);
       if ($res) {
           if ($res['passwd'] != hash('sha256',$input['password'])) {
               return json(['code' => 2,'msg' => '密码错误','data' => []]);
           }
           unset($res['passwd']);
           Session::set('user_info',$res);
           return json(['code' => 0,'msg' => '登录成功','data' => $res]);
       }
       else{
           return json(['code' => 1,'msg' => '用户不存在','data' => []]);
       }
       
    }

}
