<?php

    require_once("../includes/config.php");
 //   require_once(ROOT_PATH . "includes/tuner.php");

    $pageTitle = "Guitar Tuner";
    $section = "tuner";
    include(ROOT_PATH . "includes/header.php");
?>



<script type="text/javascript" language="JavaScript">
    // create array of images of different tunings
    var imageList = [];
    var mapList = [];

    for (var i = 0; i < 10; i++)
    {
        imageList[i] = new Image(500, 250);
        imageList[i].src = <?php echo BASE_URL ?> + "img/tuner/tune0" + i + ".png";
        mapList[i] = "#Map" + i;
    }
</script>

<div class="tuner page">
    <div class="wrapper">
        <h2>Guitar Tuner</h2>
        <div class="form select">
            <form action="" name="keySelect">
                    <label for="tuning">Select a key for different tunings:</label>
                    <select name="tuning" id="tuning" onchange="switchImage();">
                        <option value="0" selected="selected">Standard</option>
                        <option value="1">Drop D</option>
                        <option value="2">Open D</option>
                        <option value="3">D Modal</option>
                        <option value="4">Open C</option>
                        <option value="5">Low C</option>
                        <option value="6">Open G</option>
                        <option value="7">Open G Minor</option>
                        <option value="8">Half Step Down</option>
                        <option value="9">Whole Step Down</option>
                    </select>
            </form>
        </div>
        <span id="sound"></span>
                <img src="<?php echo BASE_URL . 'img/tuner/tune00.png';?>"  name="guitarTuner" alt="Guitar Tuner" usemap="#Map0" />
    </div>
</div>



<?php include(ROOT_PATH . "includes/footer.php");?>

<script type="text/javascript" language="JavaScript">
    // Switch image between different dropdown value selected
    function switchImage()
    {
        var selectedImage = document.keySelect.tuning.options[document.keySelect.tuning.selectedIndex].value;
        document.guitarTuner.src = imageList[selectedImage].src;
        document.guitarTuner.useMap = mapList[selectedImage];
    }

</script>

<!-- mappings of each image for each tuning -->

<!--standard -->
<map name="Map0" id="Map0">
    <area shape="rect" coords="299,0,356,38" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/standard/String6E.mp3')" alt="E String">
    <area shape="rect" coords="300,44,355,79" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/standard/String5A.mp3')" alt="A String">
    <area shape="rect" coords="299,81,355,121" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/standard/String4D.mp3')"alt="D String">
    <area shape="rect" coords="300,126,355,163" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/standard/String3G.mp3')" alt="G String">
    <area shape="rect" coords="300,170,356,206" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/standard/String2B.mp3')" alt="B String">
    <area shape="rect" coords="299,207,356,247" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/standard/String1E.mp3')" alt="E String">
</map>

<!--DropD -->
<map name="Map1" id="Map1">
    <area shape="rect" coords="299,0,356,38" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/dropD/LowD.mp3')" alt="D String">
    <area shape="rect" coords="300,44,355,79" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/dropD/String5A.mp3')" alt="A String">
    <area shape="rect" coords="299,81,355,121" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/dropD/String4D.mp3')"alt="D String">
    <area shape="rect" coords="300,126,355,163" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/dropD/String3G.mp3')" alt="G String">
    <area shape="rect" coords="300,170,356,206" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/dropD/String2B.mp3')" alt="B String">
    <area shape="rect" coords="299,207,356,247" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/dropD/String1E.mp3')" alt="E String">
</map>

<!--Open D -->
<map name="Map2" id="Map2">
    <area shape="rect" coords="299,0,356,38" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenD/String6D.mp3')" alt="D String">
    <area shape="rect" coords="300,44,355,79" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenD/String5A.mp3')" alt="A String">
    <area shape="rect" coords="299,81,355,121" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenD/String4D.mp3')"alt="D String">
    <area shape="rect" coords="300,126,355,163" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenD/String3Fsharp.mp3')" alt="F# String">
    <area shape="rect" coords="300,170,356,206" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenD/String2A.mp3')" alt="A String">
    <area shape="rect" coords="299,207,356,247" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenD/String1D.mp3')" alt="D String">
</map>

<!--D Modal -->
<map name="Map3" id="Map3">
    <area shape="rect" coords="299,0,356,38" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/DModal/String6D.mp3')" alt="D String">
    <area shape="rect" coords="300,44,355,79" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/DModal/String5A.mp3')" alt="A String">
    <area shape="rect" coords="299,81,355,121" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/DModal/String4D.mp3')"alt="D String">
    <area shape="rect" coords="300,126,355,163" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/DModal/String3G.mp3')" alt="G String">
    <area shape="rect" coords="300,170,356,206" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/DModal/String2A.mp3')" alt="A String">
    <area shape="rect" coords="299,207,356,247" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/DModal/String1D.mp3')" alt="D String">
</map>

<!--Open C -->
<map name="Map4" id="Map4">
    <area shape="rect" coords="299,0,356,38" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenC/String6C.mp3')" alt="C String">
    <area shape="rect" coords="300,44,355,79" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenC/String5G.mp3')" alt="G String">
    <area shape="rect" coords="299,81,355,121" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenC/String4C.mp3')"alt="C String">
    <area shape="rect" coords="300,126,355,163" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenC/String3G.mp3')" alt="G String">
    <area shape="rect" coords="300,170,356,206" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenC/String2C.mp3')" alt="C String">
    <area shape="rect" coords="299,207,356,247" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenC/String1E.mp3')" alt="E String">
</map>

<!--Low C -->
<map name="Map5" id="Map5">
    <area shape="rect" coords="299,0,356,38" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/LowC/String6C.mp3')" alt="C String">
    <area shape="rect" coords="300,44,355,79" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/LowC/String5G.mp3')" alt="G String">
    <area shape="rect" coords="299,81,355,121" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/LowC/String4D.mp3')"alt="D String">
    <area shape="rect" coords="300,126,355,163" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/LowC/String3G.mp3')" alt="G String">
    <area shape="rect" coords="300,170,356,206" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/LowC/String2A.mp3')" alt="A String">
    <area shape="rect" coords="299,207,356,247" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/LowC/String1D.mp3')" alt="D String">
</map>

<!--Open G -->
<map name="Map6" id="Map6">
    <area shape="rect" coords="299,0,356,38" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenG/String6D.mp3')" alt="D String">
    <area shape="rect" coords="300,44,355,79" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenG/String5G.mp3')" alt="G String">
    <area shape="rect" coords="299,81,355,121" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenG/String4D.mp3')"alt="D String">
    <area shape="rect" coords="300,126,355,163" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenG/String3G.mp3')" alt="G String">
    <area shape="rect" coords="300,170,356,206" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenG/String2B.mp3')" alt="B String">
    <area shape="rect" coords="299,207,356,247" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenG/String1D.mp3')" alt="D String">
</map>

<!--Open G Minor -->
<map name="Map7" id="Map7">
    <area shape="rect" coords="299,0,356,38" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenGMinor/String6D.mp3')" alt="D String">
    <area shape="rect" coords="300,44,355,79" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenGMinor/String5G.mp3')" alt="G String">
    <area shape="rect" coords="299,81,355,121" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenGMinor/String4D.mp3')"alt="D String">
    <area shape="rect" coords="300,126,355,163" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenGMinor/String3G.mp3')" alt="G String">
    <area shape="rect" coords="300,170,356,206" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenGMinor/String2Bflat.mp3')" alt="Bb String">
    <area shape="rect" coords="299,207,356,247" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/OpenGMinor/String1D.mp3')" alt="D String">
</map>

<!--Half Step Down -->
<map name="Map8" id="Map8">
    <area shape="rect" coords="299,0,356,38" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/HalfStepDown/String6Eflat.mp3')" alt="Eb String">
    <area shape="rect" coords="300,44,355,79" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/HalfStepDown/String5Aflat.mp3')" alt="Ab String">
    <area shape="rect" coords="299,81,355,121" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/HalfStepDown/String4Dflat.mp3')"alt="Db String">
    <area shape="rect" coords="300,126,355,163" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/HalfStepDown/String3Gflat.mp3')" alt="Gb String">
    <area shape="rect" coords="300,170,356,206" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/HalfStepDown/String2Bflat.mp3')" alt="Bb String">
    <area shape="rect" coords="299,207,356,247" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/HalfStepDown/String1Eflat.mp3')" alt="Eb String">
</map>

<!--Whole Step Down -->
<map name="Map9" id="Map9">
    <area shape="rect" coords="299,0,356,38" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/WholeStepDown/String6D.mp3')" alt="D String">
    <area shape="rect" coords="300,44,355,79" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/WholeStepDown/String5G.mp3')" alt="G String">
    <area shape="rect" coords="299,81,355,121" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/WholeStepDown/String4C.mp3')"alt="C String">
    <area shape="rect" coords="300,126,355,163" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/WholeStepDown/String3F.mp3')" alt="F String">
    <area shape="rect" coords="300,170,356,206" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/WholeStepDown/String2A.mp3')" alt="A String">
    <area shape="rect" coords="299,207,356,247" onclick="playNote('<?php echo BASE_URL;?>sounds/tunings/WholeStepDown/String1D.mp3')" alt="D String">
</map>

<script type="text/javascript" language="JavaScript">
    // function to play sound
    function playNote(sound)
    {
        document.getElementById("sound").innerHTML=
        "<embed src=\""+sound+"\" hidden=\"true\" autostart=\"true\" loop=\"false\" type=\"audio/mp3\" />";
    }
</script>