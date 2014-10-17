<?php

    function __autoload($class) {
        include "stdlib.php";
    }

    function initialise_site(csite $site) {
        $site->addHeader("header.php");
        $site->addFooter("footer.php");
    }