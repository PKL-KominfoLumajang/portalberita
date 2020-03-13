<?php

use \modules\controllers\MainController;

class HomeController extends MainController {

    public function index() {

        $data = $_SESSION["login"];

        $this->model('user');
        $this->model('artikel');
        $this->model('kategori');
        $this->model('kontak');


        $this->template('home', array('userData' => $data, 'total' => array(

            'user' => $this->user->rows(),
            'artikel' => $this->artikel->rows(),
            'kategori' => $this->kategori->rows(),
            'kontak' => $this->kontak->rows()

        )));
    }
}
?>