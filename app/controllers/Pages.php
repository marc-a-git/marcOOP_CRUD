<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){

      if(isLoggedIn()){
        redirect('posts');
      }
      $data = [
        'title' => 'MARCMIN',
        'description' => 'a Udemy helped CRUD made to learn about PHP'
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'CRUD to learn PHP with'
      ];

      $this->view('pages/about', $data);
    }
  }