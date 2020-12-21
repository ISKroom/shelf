<?php

  /*
  * App Core Class
  * Creates URL & laads core controller
  * URL FORMAT - /controller/method/param
  */
  class Core {

    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    // Constructor
    public function __construct(){

      $url = $this->getUrl();

      // Check for first part of URL
      if (isset($url[0])) {

        // public/index.phpから見たファイルパスであることに注意　　 ucwords → 先頭文字を大文字化
        if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')){

          // If exists, set as controller
          $this->currentController = ucwords($url[0]);

          // Unset 0 index
          unset($url[0]);
        }
      }

      // Require the controller
      require_once '../app/controllers/' . $this->currentController . '.php';

      // Instantiate controller class
      // $Post = new Post; でクラス生成してる
      $this->currentController = new $this->currentController;

      // Check for second part of URL
      if (isset($url[1])) {

        // Check to see if method exists in controller
        if (method_exists($this->currentController, $url[1])) {

          $this->currentMethod = $url[1];

          // Unset 1 index
          unset($url[1]);
        }
      }

      // Get params　上で $url[0] と $url[1] をunset しているので、Array([2]=>url[2])しか残っていなく、$this->params に Array([0]=>$url[2]) の値として格納されてる（array_values($url) により）
      $this->params = $url ? array_values($url) : [];

      // Call a callback with array of params
      // $this->currentController クラスの $this->currentMethodメソッドに 引数 $this->params を渡す（$key, $value でいうところの $value が渡される）
      call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

    }

    public function getUrl(){

      // /traversymvc/edit/post/1 とURLに打ち込めば、$_GET['url'] には「post/edit/1」が入る
      if(isset($_GET['url'])){

        // URL末尾のスラッシュを取り除く
        $url = rtrim($_GET['url'], '/');

        // URLが持ってはいけない文字列を取り除く（サニタイジング）
        $url = filter_var($url, FILTER_SANITIZE_URL);

        // スラッシュを基点に文字列をアレイに分解
        $url = explode('/', $url);

        return $url;
      }
    }

  }



?>
