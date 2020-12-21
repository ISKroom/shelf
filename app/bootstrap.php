<?php
  // Load Config
  require_once 'config/config.php';

  // Load Libraries
  // require_once 'libraries/Core.php';
  // require_once 'libraries/Controller.php';
  // require_once 'libraries/Database.php';

  // Autoload Core Libraries (上でコメントアウトしたようなファイルを必要に応じて自動でrequrie_onceしてくれる)
  // Every time you call a new ClassName in your code, PHP calls spl_autoload_register, it will push your ClassName into it as a parameter and it will run your defined callback function.
  // 未定義のClassが登場したら、自動でspl_autoload_registerが呼ばれる→ファイルを自動で探してrequire_onceをしてくれる
  spl_autoload_register(function($className){
    require_once 'libraries/' . $className . '.php';
  })

?>
