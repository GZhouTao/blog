<?php
namespace app\admin\controller;
use think\Controller;
class Admin extends Controller
{

//    负责请求的处理
function login ()
{

    return $this->fetch('/login');
}

}