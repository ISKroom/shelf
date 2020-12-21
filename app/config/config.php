<?php

// ☆☆☆
// 追加で public\.htaccess の ルートURLも変更するように気をつける
// ☆☆☆

// ☆☆☆
// session_helper.php の以下も変更しました（フォーム再送信の確認の回避のため）
// session_start();
// header('Expires:-1');
// header('Cache-Control:');
// header('Pragma:');
// ☆☆☆


  // DB Params
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '');
  define('DB_NAME', 'SharePosts');

  // App Root
  // __FILE__ → config.phpのファイルパス
  // dirname(__FILE__) → config.php が存在するディレクトリのファイルパス
  // dirname(dirname(__FILE__)) → app フォルダのファイルパス
  define('APPROOT',dirname(dirname(__FILE__)));

  // URL ROOT
  define('URLROOT', 'http://localhost/shelf');

  // Site Name
  define('SITENAME', 'SharePosts');

  // App version
  define('APPVERSION', '1.0.0');

?>
