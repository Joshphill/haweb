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
            <h1 class="display-4 titleline">Home Collected Credit and Loan Software </h1>
            <h4>Software built for Home Credit Lenders, High Cost Short Term Lenders and Vehicle Finance Vendors</h4>
            <br /><br /><br />
            <h1 class="display-4 noclick">
                FEATURES
            </h1>
            <br />
        </div>
        <br /><br /><br />
        <div class="row" style="width:100%; margin:0">
            <div class="col-xs-12 col-sm-6">
                <?= feature(
                    1, 
                    "cloud", 
                    "danger", 
                    "Cloud Based", 
                    "Securely manage your loans from anywhere", 
                    "Your data is securly stored in the cloud, meaning that you are able to access it from anything, anywhere, at any time (provided your internet address is on our whitelist). Nosco is accessible via web browser, meaning you are able to manage your loans from your laptop, tablet and smartphone."
                ); ?>
                <?= feature(
                    3, 
                    "keyboard-o", 
                    "warning", 
                    "Simple &amp; Intuitive", 
                    "Step by step, from loan in, to loan out", 
                    "Our system is designed to make your life (and your collectors) a breeze. We have taken out all the nitty gritty aspects of entering and managing a loan and done it all for you."
                ); ?>
                <?= feature(
                    5, 
                    "phone", 
                    "info", 
                    "Unparallel Support", 
                    "Direct UK support with the developers", 
                    "Tired of being transferred across departments only to end up back where you started? Yeah. So are we. When you contact us for support, you speak to us directly (not that you would ever need to contact us). If you have a problem, you will be speaking directly to one of our developers who know the system better than your collectors know your customers."
                ); ?>
                <?= feature(
                    7, 
                    "code", 
                    "default", 
                    "Advanced Software", 
                    "Use of responsive modern technologies", 
                    "Nosco is made using the latest and most up to date technologies, we pride ourselves on being in the know. Nosco is designed using Twitter Bootstrap, to give it an easy to use interface. The back-end is powered by the Yii Framework, a high-performance component-based PHP framework. Yii is an open source project with over 250 contributors."
                ); ?>
            </div>
            <div class="col-xs-12 col-sm-6">
                <?= feature(
                    2, 
                    "lock", 
                    "primary", 
                    "Safe &amp; Secure", 
                    "Your data is our concern", 
                    "Your data is remotely backed up daily to ensure that <em>if</em> in the event of say - a fire, there would always be something to fall back to. All data is encrypted over a secure socket layer (SSL) using the SHA256-G2 Algorithm."
                ); ?>
                <?= feature(
                    4, 
                    "fighter-jet", 
                    "success", 
                    "Fast &amp; Reliable", 
                    "No delays or chin wagging", 
                    "The software is powered by an Intel Xeon E3-1225v2 Quad Core running at 3.6Ghz with 8GB of RAM. Combined with the advance power of the Yii Framework, our system is incredibly fast!"
                ); ?>
                <?= feature(
                    6, 
                    "search", 
                    "muted", 
                    "Credit Referencing", 
                    "Powered by Experian and Lend Protect", 
                    "Get full credit reports and shared credit account information from both Experian (CAIS) and Lend Protect, to gain comprehensive data from both main-stream credit bureau records and under-banked specialists."
                ); ?>
                <?= feature(
                    8, 
                    "check", 
                    "violet", 
                    "Aids Compliance", 
                    "Facilitates Compliance (including GABRIEL)", 
                    "Nosco helps to facilitate compliance with FCA regulatory requirements, by producing a full Audit Trail, and functions such as live customer notes and a document archive. Now with GABRIEL report generator. Nosco is compliant in accordance with the CCA."
                ); ?>
            </div>
        </div>
    </div>
</div>
        <br /><br />