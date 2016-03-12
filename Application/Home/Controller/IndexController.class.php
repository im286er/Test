<?php
namespace Home\Controller;
use Think\Controller;
use Think\Exception;
use Think\Log;


class IndexController extends Controller {
    public function index(){
        $this->redirect('Pay/doalipay');
    }
}