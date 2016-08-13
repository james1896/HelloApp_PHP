<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
//    $this->adb(2);
    }

    public function adb($str1,$str2){
        $table = M('user');

        echo 'adb = '.$str1.'|'.$str2;

//        $data['name'] = 'james';
//        $data['password'] = md5('123456');
//      $result = $table->add($data);
//
//        echo 'result:'.$result;
//        $user = $table->where('id=1')->select();
//        echo 'userName: '.$user[0]['name'];
//        dump('userName: '.$user);
    }

    public function loginAction($name,$pwd){

        if(I('get.name') && I('get.pwd')){
            echo 'get :name:'.$name.'||pwd:'.$pwd;
        }else if(I('post.name') && I('post.pwd')){
            echo 'post :name:'.$name.'||pwd:'.$pwd;
        }
    }

    public function userInfo($ip,$login_time,$login_device){


    }
}