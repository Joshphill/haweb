<?php 
    function person($name, $image, $title, $class = null) 
    {
        if (!$class) $class = "col-xs-12 col-sm-4 col-md-3";
        echo "
            <div class='$class text-xs-center' style='margin-bottom: 20px'>
                <img src='$image' class='img-circle' height='150px' width='150px'><br />
                <strong>$name</strong><br />
                <span class='text-muted'>$title</span>
            </div>
        ";
    }
?>
<br /><br />
<div style="width: 100%; background: #ddd;">
    <div class="container" id="about">
        <br /><br />
        <div class="row">
            <div class="col-xs-12 text-xs-center">
                <h1 class="display-4 noclick">ABOUT US</h1>
            </div>
            <br /><br /><br /><br />
            <div class="col-xs-12">
                <div class="row">
                    <?= person("Clive Dann", "images/team/clive.jpg", "Technical Director", "col-xs-12 col-sm-4") ?>
                    <?= person("Luke Scowen", "images/team/luke.jpg", "IT Director", "col-xs-12 col-sm-4") ?>
                    <?= person("Steven Stafford", "images/team/steve.jpg", "Senior Software Developer", "col-xs-12 col-sm-4") ?>
                    <?= person("Josh Phillips", "images/team/josh.jpg", "Technical Support") ?>                
                    <?= person("Oliver Bird", "images/team/oliver.jpg", "Technical Support") ?>                
                    <?= person("Julie Rafferty", "images/team/julie.png", "Support &amp; Administration<br /><small>(The Real Boss)</small>") ?>                
                    <?= person("Lauren Gunning", "images/team/lauren.jpg", "Support &amp; Administration") ?>
                    <div class="col-xs-12">
                        <p class="text-justify">
                            We are a small team based in the beautiful town of Pontypridd. We pride ourselves on our relationships with our customers, making you our top priority. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
</div>