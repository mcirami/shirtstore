<?php
    // constants used to create root-relative web addresses and
    // absolute server paths throughout all code

    define("BASE_URL", "/ShirtStore/");
    define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/ShirtStore/");

    // constants to connect to database
    define("DB_HOST", "localhost");
    define("DB_NAME", "shirts4mike");
    define("DB_PORT", "8889");
    define("DB_USER", "root");
    define("DB_PASS", "root");