<?php

    require_once("../includes/config.php");

    $search_term = "";
    if (isset($_GET["s"])){
        $search_term = trim($_GET["s"]);
        if ($search_term != ""){
            require_once(ROOT_PATH . "includes/chords.php");
            $chords = get_chords_search($search_term);
        }
    }

    $pageTitle = "Chord Search";
    $section = "search";
    include(ROOT_PATH . "includes/header.php");
?>

<div class="search-page">
    <div class="wrapper">
        <h2>Chord Search</h2>
        <form method="get" action="./">
            <input type="text" name="s" placeholder="search" value="<?php if (isset($search_term)) { echo htmlspecialchars($search_term); } ?>">
            <input type="submit" value="Go">
        </form>

        <?php
            if ($search_term != "") {
                if (!empty($chords)) {
                    echo '<ul class="chords">';
                    foreach($chords as $chord) {
                            include(ROOT_PATH . "includes/partial-chord-search-list-view.html.php");
                        }
                    echo '</ul>';
                } else {
                    echo '<p>No chords were found</p>';
                  }
            }
        ?>
    </div>
</div>

<?php include(ROOT_PATH . "includes/footer.php"); ?>