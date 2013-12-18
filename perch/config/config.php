<?php

    define('PERCH_LICENSE_KEY', 'P21209-GPF214-VRR268-BRJ184-DFM015');

    define("PERCH_DB_USERNAME", 'root');
    define("PERCH_DB_PASSWORD", 'qazwsx89');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "helpinghands");
    define("PERCH_DB_PREFIX", "perch2_");
    
    define('PERCH_TZ', 'Europe/London');

    define('PERCH_EMAIL_FROM', 'jackfurness@gmail.com');
    define('PERCH_EMAIL_FROM_NAME', 'Jack Furness');

    define('PERCH_LOGINPATH', '/helpinghands/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', dirname(__FILE__)));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
  
?>