<?php

require_once __DIR__ . '/inc/all.inc.php';

$page = $_GET['page'] ?? 'home';
$validPages = ['home', 'login', 'about', 'contactus', 'services', 'termscondition', 'refundpolicy', 'privacypolicy'];
if (!in_array($page, $validPages)) {
  http_response_code(404);
  require_once __DIR__ . '/views/pages/notfound.php';

  exit;
}
render($page, []);
