<?php
    include ("stdlib.php");

    $site = new csite();

    initialise_site($site);

    $page = new cpage("Welcome to The Guitar Hub!");
    $site ->setPage($page);

    $content = "Welcome to my personal web site!";
    $page->setContent($content);

    $site->render();

