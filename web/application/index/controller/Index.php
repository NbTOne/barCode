<?php
namespace app\index\controller;
use think\View;
class Index
{

//登录页
    public function login(){
        $staus=login();
        if ($staus==true){
            header("location:order");
            die();
        }
        return view();
    }
//登录页数据处理
    public function loginCheck(){
        $staus=login();
        if ($staus==false){
            return false;
        }
        if ($staus==true){
            return true;
        }
    }
//返回新增数据，主动推送
    public function data(){
        $staus=login();
        if ($staus==false){
            return view("login");
            die();
        }
        $id=input("post.id");
        $db = db('userOrder');
        $view=new View();
        $list = $db->where('id', '>=',$id)->order('id desc')->paginate(10);
        $page = $list->render();
        $view->page=$page;
        $view->list=$list;
        $view->total=$list->total();
        return $view->fetch();
    }



//列表单
    public function order()
    {
        $staus=login();
        if ($staus==false){
            return view("login");
            die();
        }
        $db = db('userOrder');
        $view=new View();
        $list = $db->order('id desc')->paginate(10);
        $page = $list->render();
        $view->page=$page;
        $view->list=$list;
        $view->total=$list->total();
        return $view->fetch();
    }
//入库接口 添加数据
    public function inOrder(){
        $code=input('get.code');
        $db = db('userOrder');
        $number=$db->where('code',$code)->value('number');
        if($number){
            $db->where('code', $code)->setInc('number');
        }
        else{
            $data = ['code' => $code];
            $id=$db->insertGetId($data);
            send($id);
        }
    }
//出库接口
    public function ouOrder(){
        $code=input('get.code');
        db('userOrder')->where('code', $code)->setDec('number');
    }

//数据删除
    public function deleteOrder(){
        $staus=login();
        if ($staus==false){
            return view("login");
            die();
        }
        $id=input('post.id/a');
        db('userOrder')->delete($id);
    }
//更新数据
    public function upOrder(){
        $staus=login();
        if ($staus==false){
            return view("login");
            die();
        }
        $id=input('post.id');
        $dataName=input('post.dataName');
        $data=input('post.data');
        db('userOrder')->where('id',$id)->setField($dataName,$data);
    }
}
