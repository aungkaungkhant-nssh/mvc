<?php
namespace app\core;

class Application{
    public Router $router;
    public Request $request;
    public Response $response;
    public static $ROOT_PATH;
    public static Application $app;
    public Controller $controller;
    public function __construct($rootPath)
    {
        self::$ROOT_PATH=$rootPath;
        $this->response=new Response;
        $this->request=new Request;
        self::$app=$this;
        $this->controller=new Controller;
        $this->router=new Router($this->request,$this->response);
    }
    public function run(){
       $this->router->resolve();
    }
  
}