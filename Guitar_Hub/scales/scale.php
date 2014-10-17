<?php
    require_once("../includes/config.php");
    require_once(ROOT_PATH . "includes/scales.php");

    $scale_name = $_GET["id"];
    $scales = get_scale($scale_name);

    $section = "scales";

    include(ROOT_PATH . "includes/header.php");
?>

    <div class="scales">
        <div class="wrapper">
            <div class="breadcrumb">
                <a href="<?php echo BASE_URL; ?>scales/">Back to all scales</a>
            </div>
            <div class="scales-pics">
                <span>
                    <h2><?php echo $scale_name;?></h2>
                    <?php foreach($scales as $scale): ?>
                        <img src="<?php echo BASE_URL . $scale;?>" alt="<?php echo $scale["name"];?>">
                    <?php endforeach ?>
                </span>
            </div>
        </div>
    </div>

<?php include(ROOT_PATH . "includes/footer.php"); ?>

