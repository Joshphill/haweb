<?php 
    function feature($id, $icon, $iconColour, $title, $subtitle, $description)
    {
        echo "
            <div class='col-xs-12'>
                <div class='media' data-toggle='collapse' data-target='#collapse$id' data-parent='#accordion'>
                    <div class='media-left'>
                        <span class='fa-stack fa-2x'>
                            <i class='fa fa-circle fa-stack-2x text-$iconColour'></i>
                            <i class='fa fa-$icon fa-stack-1x' style='color:rgb(238, 238, 238)'></i>
                        </span>
                    </div>
                    <div class='media-body'>
                        <h4 class='media-heading text-uppercase'>$title</h4>
                        <p>$subtitle</p>
                        <div class='collapse text-justify' style='padding-right:15px' id='collapse$id'>
                            <p>$description</p>
                        </div>
                    </div>
                </div><br />
            </div>
        ";
    }
?>

<div class="container" id="features">
    <br /><br /><br />
    <div class="row">
        <div class="col-xs-12 text-xs-center">
            <h1 class="display-4 titleline">Technical Support You Can Trust!</h1>
            <h4>No Pressure! No Sales! Great Service! Affordable Prices!</h4>
            <br /><br /><br />
            <h1 class="display-4 noclick">
                Why Choose Us?
            </h1>
            <br />
        </div>
        <br /><br /><br />
        <div class="row" style="width:100%; margin:0">
            <div class="col-xs-12 col-sm-6">
                <?= feature(
                    1, 
                    "ban", 
                    "danger", 
                    "No Sales", 
                    "Securely manage your loans from anywhere", 
                    "Your data is securly stored in the cloud, meaning that you are able to access it from anything, anywhere, at any time (provided your internet address is on our whitelist). Nosco is accessible via web browser, meaning you are able to manage your loans from your laptop, tablet and smartphone."
                ); ?>
                <?= feature(
                    3, 
                    "balance-scale", 
                    "warning", 
                    "Fair & honest", 
                    "Step by step, from loan in, to loan out", 
                    "Our system is designed to make your life (and your collectors) a breeze. We have taken out all the nitty gritty aspects of entering and managing a loan and done it all for you."
                ); ?>
            </div>
            <div class="col-xs-12 col-sm-6">
                <?= feature(
                    2, 
                    "money", 
                    "primary", 
                    "Affordable", 
                    "Your data is our concern", 
                    "Your data is remotely backed up daily to ensure that <em>if</em> in the event of say - a fire, there would always be something to fall back to. All data is encrypted over a secure socket layer (SSL) using the SHA256-G2 Algorithm."
                ); ?>
                <?= feature(
                    4, 
                    "user", 
                    "success", 
                    "Customer before profit", 
                    "No delays or chin wagging", 
                    "The software is powered by an Intel Xeon E3-1225v2 Quad Core running at 3.6Ghz with 8GB of RAM. Combined with the advance power of the Yii Framework, our system is incredibly fast!"
                ); ?>
            </div>
        </div>
    </div>
</div>
        <br /><br />