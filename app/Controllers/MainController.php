<?php

namespace OCours\Controllers;

class MainController{

    public function home($params){

        $viewVars = [
            'baseURI' => $params['baseURI']
        ];

        $this->show('home', $viewVars);
    }

    public function cours($params){
        
        $viewVars = [
            'baseURI' => $params['baseURI']
        ];

        $this->show('cours', $viewVars);

    }

    public function clicker($params){
        
        $viewVars = [
            'baseURI' => $params['baseURI']
        ];

        $this->show('clicker', $viewVars);

    }

    public function show($viewName, $viewVars = []){

        require __DIR__ . '/../views/partials/header.tpl.php';
        require __DIR__ . '/../views/'.$viewName.'.tpl.php';
        require __DIR__ . '/../views/partials/footer.tpl.php';
    }
}