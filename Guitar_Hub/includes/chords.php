<?php

function get_chords_search($s){
    $results = array();
    $all = get_chords_all();

    for ($row = "a"; $row < "c"; $row++){
        $count = count($all[$row]);
        for ($column = 0; $column < $count; $column++){
            if (stripos($all[$row][$column]["name"], $s) !== false){
                $results[] = $all[$row][$column];
            }
        }
    }

    return $results;
}

function get_chords_all() {
    $chords = array();
    $chords["a"] = array(
        array("name" => "a", "image" => "img/chords/A.png", "sound" => "sounds/chords/A.mp3"),
        array("name" => "a flat", "image" => "img/chords/Aflat.png", "sound" => "sounds/chords/Aflat.mp3"),
        array("name" => "a sharp", "image" => "img/chords/Asharp.png", "sound" => "sounds/chords/Asharp.mp3"),
        array("name" => "a minor", "image" => "img/chords/Am.png", "sound" => "sounds/chords/Am.mp3"),
        array("name" => "a sharp minor", "image" => "img/chords/Asharpm.png", "sound" => "sounds/chords/Asharpm.mp3"),
        array("name" => "a flat minor", "image" => "img/chords/Aflatm.png", "sound" => "sounds/chords/Aflatm.mp3"),
        array("name" => "a4", "image" => "img/chords/A4.png", "sound" => "sounds/chords/A4.mp3"),
        array("name" => "a7", "image" => "img/chords/A7.png", "sound" => "sounds/chords/A7.mp3"),
        array("name" => "a minor 7", "image" => "img/chords/Am7.png", "sound" => "sounds/chords/Am7.mp3"),
        array("name" => "a major 7", "image" => "img/chords/Amaj7.png", "sound" => "sounds/chords/Amaj7.mp3"),
        array("name" => "a minor 7 sus4", "image" => "img/chords/Am7sus4.png", "sound" => "sounds/chords/Am7sus4.mp3"),
        array("name" => "a9", "image" => "img/chords/A9.png", "sound" => "sounds/chords/A9.mp3"),
        array("name" => "a minor 9", "image" => "img/chords/Am9.png", "sound" => "sounds/chords/Am9.mp3"),
        );
    $chords["b"] = array(
        array("name" => "b", "image" => "img/chords/B.png", "sound" => "sounds/chords/B.mp3"),
        array("name" => "b minor", "image" => "img/chords/Bm.png", "sound" => "sounds/chords/Bm.mp3"),
        array("name" => "b7", "image" => "img/chords/B7.png", "sound" => "sounds/chords/B7.mp3"),
        array("name" => "b minor 7", "image" => "img/chords/Bm7.png", "sound" => "sounds/chords/Bm7.mp3"),
        array("name" => "b minor sus9", "image" => "img/chords/Bmsus9.png", "sound" => "sounds/chords/Bmsus9.mp3"),
        array("name" => "b major", "image" => "img/chords/Bmaj.png", "sound" => "sounds/chords/Bmaj.mp3"),
        array("name" => "b major 7", "image" => "img/chords/Bmaj7.png", "sound" => "sounds/chords/Bmmaj7.mp3"),
        array("name" => "b flat 6", "image" => "img/chords/Bflat6.png", "sound" => "sounds/chords/Bflat6.mp3"),
        array("name" => "b9", "image" => "img/chords/B9.png", "sound" => "sounds/chords/B9.mp3"),
        array("name" => "b flat 9", "image" => "img/chords/Bflat9.png", "sound" => "sounds/chords/Bflat9.mp3"),
        array("name" => "b flat 11", "image" => "img/chords/Bflat11.png", "sound" => "sounds/chords/Bflat11.mp3"),
    );

    return $chords;
}

/*
 * {name: "C", image: "../img/chords/C.png", sound:"../sounds/chords/C.mp3"},
    {name: "C minor", image: "../img/chords/Cm.png", sound:"../sounds/chords/Cm.mp3"},
    {name: "C minor 7", image: "../img/chords/Cm7.png", sound:"../sounds/chords/Cm7.mp3"},
    {name: "C major", image: "../img/chords/Cmaj.png", sound:"../sounds/chords/Cmaj.mp3"},
    {name: "C major 7", image: "../img/chords/Cmaj7.png", sound:"../sounds/chords/Cmaj7.mp3"},
    {name: "C sharp", image: "../img/chords/Csharp.png", sound:"../sounds/chords/Csharp.mp3"},
    {name: "C sharp minor", image: "../img/chords/Csharpm.png", sound:"../sounds/chords/Csharpm.mp3"},
    {name: "C sharp minor 7", image: "../img/chords/Csharpm7.png", sound:"../sounds/chords/Csharpm7.mp3"},
    {name: "C sharp add 9", image: "../img/chords/Csharpadd9.png", sound:"../sounds/chords/Csharpadd9.mp3"},
    {name: "C sus 2", image: "../img/chords/Csus2.png", sound:"../sounds/chords/Csus2.mp3"},

    {name: "D", image: "../img/chords/D.png", sound:"../sounds/chords/D.mp3"},
    {name: "D sharp", image: "../img/chords/Dsharp.png", sound:"../sounds/chords/Dsharp.mp3"},
    {name: "D sharp 4", image: "../img/chords/Dsharp4.png", sound:"../sounds/chords/Dsharp4.mp3"},
    {name: "D minor", image: "../img/chords/Dm.png", sound:"../sounds/chords/Dm.mp3"},
    {name: "D minor 7", image: "../img/chords/Dm7.png", sound:"../sounds/chords/Dm7.mp3"},
    {name: "D6", image: "../img/chords/D6.png", sound:"../sounds/chords/D6.mp3"},
    {name: "D7", image: "../img/chords/D7.png", sound:"../sounds/chords/D7.mp3"},
    {name: "D major 7", image: "../img/chords/Dmaj7.png", sound:"../sounds/chords/Dmaj7.mp3"},
    {name: "D9", image: "../img/chords/D9.png", sound:"../sounds/chords/D9.mp3"},
    {name: "D minor 9", image: "../img/chords/Dm9.png", sound:"../sounds/chords/Dm9.mp3"},

    {name: "E", image: "../img/chords/E.png", sound:"../sounds/chords/E.mp3"},
    {name: "E minor", image: "../img/chords/Em.png", sound:"../sounds/chords/Em.mp3"},
    {name: "E minor add 9", image: "../img/chords/Emadd9.png", sound:"../sounds/chords/Emadd9.mp3"},
    {name: "E5", image: "../img/chords/E5.png", sound:"../sounds/chords/E5.mp3"},
    {name: "E6", image: "../img/chords/E6.png", sound:"../sounds/chords/E6.mp3"},
    {name: "E minor 6", image: "../img/chords/Em6.png", sound:"../sounds/chords/Em6.mp3"},
    {name: "E7", image: "../img/chords/E7.png", sound:"../sounds/chords/E7.mp3"},
    {name: "E minor 7", image: "../img/chords/Em7.png", sound:"../sounds/chords/Em7.mp3"},
    {name: "E major 7", image: "../img/chords/Emaj7.png", sound:"../sounds/chords/Emaj7.mp3"},
    {name: "E sus", image: "../img/chords/Esus.png", sound:"../sounds/chords/Esus.mp3"},

    {name: "F", image: "../img/chords/F.png", sound:"../sounds/chords/F.mp3"},
    {name: "F/A", image: "../img/chords/F_A.png", sound:"../sounds/chords/F/A.mp3"},
    {name: "F sharp", image: "../img/chords/Fsharp.png", sound:"../sounds/chords/Fsharp.mp3"},
    {name: "F sharp 9", image: "../img/chords/Fsharp9.png", sound:"../sounds/chords/Fsharp9.mp3"},
    {name: "F sharp plus", image: "../img/chords/Fsharpplus.png", sound:"../sounds/chords/Fsharpplus.mp3"},
    {name: "F minor", image: "../img/chords/Fm.png", sound:"../sounds/chords/Fm.mp3"},
    {name: "F minor 7", image: "../img/chords/Fm7.png", sound:"../sounds/chords/Fm7.mp3"},
    {name: "F major 7", image: "../img/chords/Fmaj7.png", sound:"../sounds/chords/Fmaj7.mp3"},
    {name: "F7", image: "../img/chords/F7.png", sound:"../sounds/chords/F7.mp3"},
    {name: "F9", image: "../img/chords/F9.png", sound:"../sounds/chords/F9.mp3"},

    {name: "G", image: "../img/chords/G.png", sound:"../sounds/chords/G.mp3"},
    {name: "G add 9", image: "../img/chords/Gadd9.png", sound:"../sounds/chords/Gadd9.mp3"},
    {name: "G minor", image: "../img/chords/Gm.png", sound:"../sounds/chords/Gm.mp3"},
    {name: "G minor 7", image: "../img/chords/Gm7.png", sound:"../sounds/chords/Gm7.mp3"},
    {name: "G major 7", image: "../img/chords/Gmaj7.png", sound:"../sounds/chords/Gmaj7.mp3"},
    {name: "G major 9", image: "../img/chords/Gmaj9.png", sound:"../sounds/chords/Gmaj9.mp3"},
    {name: "G4", image: "../img/chords/G4.png", sound:"../sounds/chords/G4.mp3"},
    {name: "G7", image: "../img/chords/G7.png", sound:"../sounds/chords/G7.mp3"},
    {name: "G7 sus 4", image: "../img/chords/G7sus4.png", sound:"../sounds/chords/G7sus4.mp3"},
    {name: "G9", image: "../img/chords/G9.png", sound:"../sounds/chords/G9.mp3"}
 */