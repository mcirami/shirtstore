<?php

    require_once("../includes/config.php");
    require_once(ROOT_PATH . "includes/chords.php");

    $pageTitle = "Guitar Chords";
    $section = "chords";
    include(ROOT_PATH . "includes/header.php");

    $chords = get_chords_all();

?>

    <div class="chord-chart">
        <div class="wrapper">
            <h2>Guitar Chords</h2>
            <ul class="chords">
                <?php
                for ($row = "a"; $row < "c"; $row++){
                    $count = count($chords[$row]);
                    for ($column = 0; $column < $count; $column++) {
                        include(ROOT_PATH . "includes/partial-chord-chart-list-view.html.php");
                    }
                }
                ?>
            </ul>
        </div>
    </div>

<?php include(ROOT_PATH . "includes/footer.php"); ?>