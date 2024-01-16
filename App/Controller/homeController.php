<?php
namespace App\Controller;

class homeController {
    public static function index()
    {
        echo 'im from homeController';
    }
    
    public function movies()
    {
        $movies = [
            'movie_title' => 'spider man',
            'Genre' => 'action',
            'year' => '2009',
            'Gross' => '$3434334',
        ];
        view('movie.list',$movies);
    }
}