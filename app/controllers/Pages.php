<?php
  class Pages extends Controller {

    function __construct(){
    }

    public function index(){

      // if (isLoggedIn()) {
        // redirect('posts');
      // }

      $data = [
        'title'=>'SharePosts',
        'description' => 'Simple social network built on the TraversyMVC PHP framework'
      ];
      
      // class Controller を継承してるから view() を呼べる
      $this->view('pages/index',$data);
    }

    public function about(){
      $data = [
        'title'=>'About',
        'description' => 'App to share posts with other users.'
      ];
      $this->view('pages/about', $data);
    }
  }




?>
