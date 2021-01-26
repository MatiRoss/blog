<?php
echo "aaaaaaaaaaaaaa";

if (isset($_GET['action'])) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
    if ($action == 'database') {
        require(__DIR__ . '/config/database.php');
    } else if ($action == '') {
        require(__DIR__ . '');
    } else {
        require(__DIR__ . '/pages/404.php');
    }

} else {
    require '';
}

