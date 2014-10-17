<?php

function get_scale($name) {
    $scale_name = array();
    $all = get_scales_all();
    foreach ($all[$name] as $scale){
        $scale_name[] = $scale;
    }

    return $scale_name;
}

function get_scales_all() {
    $scales = array();
    $scales["A-Major"] = array(
        "img/scales/A-Maj-01.jpg",
        "img/scales/A-Maj-02.jpg",
        "img/scales/A-Maj-03.jpg",
        "img/scales/A-Maj-04.jpg");
    $scales["A-minor"] = array(
        "img/scales/A-min-01.jpg",
        "img/scales/A-min-02.jpg",
        "img/scales/A-min-03.jpg",
        "img/scales/A-min-04.jpg");
    $scales["B-Major"] = array(
        "img/scales/B-Maj-01.jpg",
        "img/scales/B-Maj-02.jpg",
        "img/scales/B-Maj-03.jpg");
    $scales["B-minor"] = array(
        "img/scales/B-min-01.jpg",
        "img/scales/B-min-02.jpg",
        "img/scales/B-min-03.jpg",
        "img/scales/B-min-04.jpg");
    $scales["C-Major"] = array(
        "img/scales/C-Maj-01.jpg",
        "img/scales/C-Maj-02.jpg",
        "img/scales/C-Maj-03.jpg",
        "img/scales/C-Maj-04.jpg");
    $scales["C-minor"] = array(
        "img/scales/C-min-01.jpg",
        "img/scales/C-min-02.jpg",
        "img/scales/C-min-03.jpg",
        "img/scales/C-min-04.jpg");
    $scales["D-Major"] = array(
        "img/scales/D-Maj-01.jpg",
        "img/scales/D-Maj-02.jpg",
        "img/scales/D-Maj-03.jpg",
        "img/scales/D-Maj-04.jpg");
    $scales["D-minor"] = array(
        "img/scales/D-min-01.jpg",
        "img/scales/D-min-02.jpg",
        "img/scales/D-min-03.jpg",
        "img/scales/D-min-04.jpg");
    $scales["E-Major"] = array(
        "img/scales/E-Maj-01.jpg",
        "img/scales/E-Maj-02.jpg",
        "img/scales/E-Maj-03.jpg",
        "img/scales/E-Maj-04.jpg");
    $scales["E-minor"] = array(
        "img/scales/E-min-01.jpg",
        "img/scales/E-min-02.jpg",
        "img/scales/E-min-03.jpg",
        "img/scales/E-min-04.jpg");
    $scales["F-Major"] = array(
        "img/scales/F-Maj-01.jpg",
        "img/scales/F-Maj-02.jpg",
        "img/scales/F-Maj-03.jpg",
        "img/scales/F-Maj-04.jpg");
    $scales["F-minor"] = array(
        "img/scales/F-min-01.jpg",
        "img/scales/F-min-02.jpg",
        "img/scales/F-min-03.jpg",
        "img/scales/F-min-04.jpg");
    $scales["G-Major"] = array(
        "img/scales/G-Maj-01.jpg",
        "img/scales/G-Maj-02.jpg",
        "img/scales/G-Maj-03.jpg",
        "img/scales/G-Maj-04.jpg");
    $scales["G-minor"] = array(
        "img/scales/G-min-01.jpg",
        "img/scales/G-min-02.jpg",
        "img/scales/G-min-03.jpg",
        "img/scales/G-min-04.jpg");

    foreach($scales as $scale_name => $scale){
        $scales[$scale_name]["name"] = $scale_name;
    }

    return $scales;
}