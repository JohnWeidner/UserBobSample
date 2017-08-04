
<?php

include_once './autoload.php';
$notices = [];
if (UserBob\config::getApiKey() == '<USERBOB_API_KEY>') {
    $notices[] = 'Please set UserBob API Key in file: userbob/config.php';
}
if (UserBob\config::getClientId() == '<USERBOB_CLIENT_ID>') {
    $notices[] = 'Please set UserBob client id in file: userbob/config.php';
}
if (\Database\config::getDatabase() == '<DB_NAME>') {
    $notices[] = 'Please set database name in file: database/config.php';
}
if (\Database\config::getUser() == '<DB_USERNAME>') {
    $notices[] = 'Please set database user in file: database/config.php';
}
if (\Database\config::getPassword() == '<DB_PASSWORD>') {
    $notices[] = 'Please set database password in file: database/config.php';
}