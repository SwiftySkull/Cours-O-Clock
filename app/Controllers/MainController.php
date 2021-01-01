<?php

namespace OCours\Controllers;

use OCours\Models\Episode;
use OCours\Models\Saison;

class MainController{

    public function home($params){

        $viewVars = [
            'baseURI' => $params['baseURI']
        ];

        $this->show('home', $viewVars);
    }

    public function cours($params){
        
        $seasons = new Saison();
        
        $saisons = $seasons->findAll();

        $viewVars = [
            'baseURI' => $params['baseURI'],
            'saisons' => $saisons
        ];

        $this->show('cours', $viewVars);

    }

    public function lessons($params){

        $lesson = new Episode();
        $idl = $params['lessons']['lessons'];

        $episode = $lesson->find($idl);
        dump($episode);
        
        $viewVars = [
            'baseURI' => $params['baseURI'],
            'episode' => $episode
        ];

        $this->show('lessons', $viewVars);

    }

    public function test($params){
        
        $viewVars = [
            'baseURI' => $params['baseURI']
        ];

        $this->show('test', $viewVars);

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