<?php
namespace Admin\Controller;
use Think\Controller;
header("Content-Type:text/html; charset=utf-8");
class IndexController extends Controller {
    public function index(){
    		echo "我有一个小毛炉<br>";
    		echo "从来也不骑<br>";
    		echo "有一天，我心血来潮骑它去赶集<br>";
    		echo "dsadfadad<br>";
    		
    }

    //可以查询出数据
    public function data1(){

 
    	//连接数据库
    		$model = M('users');//表
    		//查询数据
    		$data = $model->select();
    		//分配数据
    		$this->assign('data',$data);
    		//展示数据
    		$this->display("data.html");
    		  //var_dump($data);
    }

    // 验证码
    public function yzm(){
    	$Verify = new \Think\Verify();
    	$Verify->entry();
    }
}