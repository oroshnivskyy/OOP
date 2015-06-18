<?php
Use Symfony\Component\HttpFoundation\Request;
class Index {
    public function __construct(Request $request){
        $this->request = $request;
    }
    public function indexAction(){
        return new \Symfony\Component\HttpFoundation\Response($this->request->getPathInfo());
    }
    
    public function listAction(){
        return new \Symfony\Component\HttpFoundation\Response("List");
    }
    
}