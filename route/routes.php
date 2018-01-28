<?php
if (APPMODE == 'debug') {
    $server->addClass('TestController', '/');
}
$server->addClass('LineServiceController', '/line');
$server->addThemeClass('RootThemeController');
$server->addThemeClass('AdminThemeController');
$server->addThemeClass('SystemThemeController');
$server->addClass('AdminController', '/admin');  // fortest
$server->addClass('SystemController', '/system');  // fortest
$server->addClass('GentableController', '/gen');  // fortest
$server->addClass('QuestionController', '/api/v1/q');  // fortest
$server->addClass('AnswerController', '/api/v1/answer'); // fortest
$server->addClass('UserController', '/api/users'); // fortest
$server->addClass('RoleController', '/role'); // fortest
$server->addClass('PermissController', '/permiss'); // fortest
$server->addClass('RController', '/rbac'); // fortest
$server->addClass('TController', '/t'); // fortest
$server->addClass('AppController', '/api/v1'); // fortest
$server->addClass('TlenController', '/tlen'); // fortest
$server->addClass('AdminlteController', '/admin'); // fortest
$server->addClass('JwtController', ''); // fortest
if(file_exists(__DIR__.'/routebygen.php')) require_once __DIR__.'/routebygen.php';
