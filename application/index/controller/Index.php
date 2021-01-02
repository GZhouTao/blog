<?php
namespace app\index\controller;

use think\Controller;
//        负责请求的处理
class Index extends Controller
{
    public function index()
    {


        return $this->fetch('/index');
    }
}
