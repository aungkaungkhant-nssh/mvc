<?php
namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller{
    public function handleSubmit(Request $request){
        $body=$request->getBody();
        var_dump($body);
    }
    public function home(){
        $params=[
            "name"=>"aungkaungkhat"
        ];
        return $this->render("home",$params);
    }
}