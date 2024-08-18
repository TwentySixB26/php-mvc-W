<?php

    class About extends Controller {
        public function index($nama="oniel" , $gen=8) {
            $data["nama"] = $nama ; 
            $data["gen"]  = $gen ; 
            $data["judul"] = "About" ;
            $this->view('templates/header',$data) ;
            $this->view('about/index',$data) ;
            $this->view('templates/footer') ;
        }

        public function page() {
            $data["judul"] = "pages" ;
            $this->view('templates/header',$data) ;
            $this->view('about/page') ;
            $this->view('templates/footer') ;
        }
    }