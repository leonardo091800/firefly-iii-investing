<?php
// important variables to find files easily using relative path
require_once('/var/www/html/firefly-iii-investing/php/root.php');

// uncomment to show all errors in php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

session_start();

require_once($rootMysqlDir.'/checkDb.php');
?>

<html>
<head>
<?php
require_once($rootDirPublic.'/head.php');

?>
</head>
<body>

<?php

require_once($rootDirPHP.'/loginCheck.php');


require_once($rootDirPublic.'/dashboard.php');

?>

</body>
</html>
