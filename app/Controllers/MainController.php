<?php

namespace OCours\Controllers;

use OCours\Models\Episode;
use OCours\Models\Saison;

class MainController
{

    public function home($params)
    {

        $viewVars = [
            'baseURI' => $params['baseURI']
        ];

        $this->show('home', $viewVars);
    }

    public function cours($params)
    {

        $Seasons = new Saison();

        if ($params['infos']) {

            $lessons = $params['infos']['lessons'];
            $saison = $Seasons->find($lessons);
            $Episodes = new Episode();
            $episodes = $Episodes->findAllInSeason($lessons);

            $viewVars = [
                'baseURI' => $params['baseURI'],
                'saisons' => $saison,
                'episodes' => $episodes
            ];
        } else {

            $saisons = $Seasons->findAll();
            $episodes = [];
            $viewVars = [
                'baseURI' => $params['baseURI'],
                'saisons' => $saisons,
                'episodes' => $episodes
            ];
        }

        $this->show('cours', $viewVars);
    }
    
    public function lessons($params){

        $lesson = new Episode();
        $classe = $params['infos']['classe'];
        
        $Seasons = new Saison();
        $lessons = $params['infos']['lessons'];
        $saison = $Seasons->find($lessons);

        $episode = $lesson->find($classe, $lessons);

        $allEpisodes = $lesson->findAllInSeason($lessons);

        $viewVars = [
            'baseURI' => $params['baseURI'],
            'episode' => $episode,
            'saison' => $saison,
            'allEpisodes' => $allEpisodes
        ];

        $this->show('lessons', $viewVars);

    }

    public function test($params)
    {
        $viewVars = [
            'baseURI' => $params['baseURI']
        ];

        $this->show('test', $viewVars);
    }

    public function clicker($params)
    {

        $viewVars = [
            'baseURI' => $params['baseURI']
        ];

        $this->show('clicker', $viewVars);
    }

    public function show($viewName, $viewVars = [])
    {
        global $router;
        require __DIR__ . '/../views/partials/header.tpl.php';
        require __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require __DIR__ . '/../views/partials/footer.tpl.php';
    }
}
