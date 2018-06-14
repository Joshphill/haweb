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
                            We are a small team based in the beautiful town of Pontypridd. We pride ourselves on our relationships with our customers, making you our top priority. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
</div>