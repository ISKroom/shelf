<?php

  session_start();
  header('Expires:-1');
  header('Cache-Control:');
  header('Pragma:');

  // Flash message helper （第3引数はBootstrapのクラス）
  // 例えば、
  // 1. Controllerで Call - flash('register_success', 'You are now registered');
  // 2. VIEWでCall - echo flash('register_success');
  function flash($name = '', $message = '', $class = 'alert alert-success'){

    // Controller で Call → セッションにメッセージとクラスをセット
    if(!empty($name)){

      if(!empty($message) && empty($_SESSION[$name])){

        if(!empty($_SESSION[$name. '_class'])){
          unset($_SESSION[$name. '_class']);
        }

        $_SESSION[$name] = $message;
        $_SESSION[$name. '_class'] = $class;

    // VIEW で Call → セッションからメッセージとクラスを取得して echo した後にセッションを破棄
      } elseif(empty($message) && !empty($_SESSION[$name])){

        $class = !empty($_SESSION[$name. '_class']) ? $_SESSION[$name. '_class'] : '';
        echo '<div class="'.$class.'" id="msg-flash">'.$_SESSION[$name].'</div>';
        unset($_SESSION[$name]);
        unset($_SESSION[$name. '_class']);
      }
    }
  }


  function isLoggedIn(){
    if (isset($_SESSION['user_id'])) {
      return true;
    } else {
      return false;
    }
  }
?>
