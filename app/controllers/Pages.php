<?php
  class Pages extends Controller {

    function __construct(){
    }

    public function index(){
      $data = [
        'title'=>'TraversyMVC',
      ];

      // class Controller を継承してるから view() を呼べる
      $this->view('pages/index',$data);
    }

    public function about(){
      $data = ['title'=>'About'];
      $this->view('pages/about', $data);
    }
  }




?>
