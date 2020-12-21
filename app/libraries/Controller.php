<?php
  /**
   * Base Controller
   * Load the Models and views
   */
  class Controller {

    // Load Model
    public function model($model){
        // Require Model file
        require_once '../app/models/' . $model . '.php';

        // Instantiate Model
        return new $model();
    }

    // Load view
    public function view($view, $data = []){

      // Check for the view
      if(file_exists('../app/views/' . $view . '.php')){

        // require_once でファイルをとりこむということは、ここにそのファイルのコードが記述されるのと同義。そのコードの中で $data を使用している。
        require_once '../app/views/' . $view . '.php';

      } else {

        // View doesn't exists
        die('View does not exist');
      }
    }

  }



?>
