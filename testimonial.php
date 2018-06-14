<?php 
    function quote($person, $link, $position, $image, $text)
    {
        echo "
            <div class='card card-block'>
                <p class='card-text text-muted'>
                    $text 
                </p>
                <div class='row'>
                    <div class='col-xs-8'>
                        <i class='fa fa-quote-left text-danger'></i>&nbsp;&nbsp;
                            <em>
                                <a href='$link' target='_blank'>$person</a>
                            </em>
                        <br />
                        <small class='text-muted' style='font-size:0.8em'>$position</small>
                    </div>
                    <div class='col-xs-4'>";
                        if ($image) echo "<a href='$link' target='_blank'><img src='images/testimonial/$image' class='img-responsive img-circle' height='64px' width='64px'></a>";
                    echo "</div>
                </div>
            </div>
        ";
    }
?>
<div class="container" id="testimonial">
    <br /><br />
    <div class="row">
        <div class="col-xs-12 text-xs-center">
            <h1 class="display-4 noclick">TESTIMONIALS</h1>
        </div>
        <br /><br /><br /><br />
        <div class="card-columns">
            <?= quote(
                "Jason Freeman", 
                "https://www.powerflowexhausts.co.uk/",
                "Powerflow Exhausts", 
                "powerflow.png", 
                "We needed a new system to manage CRM and bookings in our network of almost seventy branches. We also needed to have our existing data migrated. Nosco did it. Great people to work with."
            ); ?>
            <?= quote(
                "Dave Horne", 
                "http://www.expressimaging.co.uk", 
                "Director, Express Imaging", 
                "expressimaging.png", 
                "Nosco quickly understood what we wanted, and delivered the solution at a very good price."
            ); ?>
            <?= quote(
                "Marcus Smart", 
                "http://www.smart-accounts.co.uk/", 
                "Senior Partner", 
                "smart.png", 
                "Super Uploader allows our clients to send us whole folders with their book-keeping paperwork in seconds. We are delighted with the system, and very happy with the price!"
            ); ?>
            <?= quote(
                "Prof. Peter Elwood OBE", 
                "http://www.betterthananypill.co.uk/", 
                "Medical Researcher", 
                null, 
                "I am delighted with our new website, and it was a pleasure working with the Nosco team."
            ); ?>
            <?= quote(
                "Peter Cranstone", 
                "https://www.longlife.co.uk/",
                "Director, Longlife", 
                "longlife.png", 
                "Nosco took the time to understand my business, and it made all the difference! We have seen a big improvement in sales with our new website."
            ); ?>
        </div>
    </div>
</div>