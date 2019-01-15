<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Session;
// 应用公共文件

//登录验证
function login(){
    if (Session::has('name')&&Session::has('password')){
        return true;
    }
    else{
        $name=input("post.username");
        $password=input("post.password");
        $map['name']=$name;
        $map['password']=$password;
        $data=db('user')->where($map)->find();
        if ($data){
            Session::set('name',$name);
            Session::set('password',$password);
            return true;
        }
        else{
            return false;
        }
    }
}

//WebSocket主动推送
function send($id){
    // 指明给谁推送，为空表示向所有在线用户推送
    $to_uid = "123";
    // 推送的url地址，使用自己的服务器地址
    $push_api_url = "http://127.0.0.1:2121/";
    $post_data = array(
        "type" => "publish",
        "content" => $id,
        "to" => $to_uid,
    );
    $ch = curl_init ();
    curl_setopt ( $ch, CURLOPT_URL, $push_api_url );
    curl_setopt ( $ch, CURLOPT_POST, 1 );
    curl_setopt ( $ch, CURLOPT_HEADER, 0 );
    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt ( $ch, CURLOPT_POSTFIELDS, $post_data );
    curl_setopt ($ch, CURLOPT_HTTPHEADER, array("Expect:"));
    $return = curl_exec ( $ch );
    curl_close ( $ch );
    var_export($return);
}
