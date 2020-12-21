<?php

// ☆☆☆
// 追加で public\.htaccess の ルートURLも変更するように気をつける
// ☆☆☆

  // DB Params
  define('DB_HOST', 'localhost');
  define('DB_USER', '_YOUR_USER');
  define('DB_PASS', '_YOUR_PASS');
  define('DB_NAME', '_YOUR_DBNAME_');

  // App Root
  // __FILE__ → config.phpのファイルパス
  // dirname(__FILE__) → config.php が存在するディレクトリのファイルパス
  // dirname(dirname(__FILE__)) → app フォルダのファイルパス
  define('APPROOT',dirname(dirname(__FILE__)));

  // URL ROOT
  define('URLROOT', '_YOUR_URL_');

  // Site Name
  define('SITENAME', '_YOUR_SITENAME_');

?>
