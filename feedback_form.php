<?php
require_once 'functions.php';
require_once 'classes/Location.php';
require_once 'classes/LocationTableGateway.php';
require_once 'classes/Connection.php';

$connection = Connection::getInstance();
$gateway = new LocationTableGateway($connection);

$locations = $gateway->getLocations();

if (!isset($formdata)) {
    $formdata = array();
}

if (!isset($errors)) {
    $errors = array();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Event Booking </title> 
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
<div id="feedback" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="feedback-form">
                    <form>
                    <div class="feedback">
                    <h3 text-align = "center"><b>Dear Customer,</b><br></h3>
                    <h4>Thank you for getting your event services at our company. We would like to know how we performed. 
                    Please spare some moments to give us your valuable feedback as it will help us in improving our service.</h4>
                    
                    <h4 text-align = "center">Please rate your service experience for the following parameters</h4>
                    
                    <form method="post" action="#action-url">
                    <label>1. Your overall experience with us ?</label><br>
                    
                    <span class="star-rating">
                    <input type="radio" name="rating1" value="1"><i></i>
                    <input type="radio" name="rating1" value="2"><i></i>
                    <input type="radio" name="rating1" value="3"><i></i>
                    <input type="radio" name="rating1" value="4"><i></i>
                    <input type="radio" name="rating1" value="5"><i></i>
                    </span>
                    
                    <div class="clear"></div> 
                    <hr class="survey-hr">
                    <label>2. How likely are you going to suggest us to your friends and famliy?</label><br>
                    <span class="star-rating">
                    <input type="radio" name="rating2" value="1"><i></i>
                    <input type="radio" name="rating2" value="2"><i></i>
                    <input type="radio" name="rating2" value="3"><i></i>
                    <input type="radio" name="rating2" value="4"><i></i>
                    <input type="radio" name="rating2" value="5"><i></i>
                    </span>
                    
                    
                    <div class="clear"></div> 
                    <hr class="survey-hr">
                    <label>3. Friendliness and courtesy shown to you in our services </label><br><br/>
                    <div style="color:black">
                        <span style="float:left">
                        POOR
                        </span>
                        <span style="float:right">
                        BEST
                        </span>
                        
                    </div>
                    <span class="scale-rating">
                    <label value="1">
                    <input type="radio" name="rating" >
                    <label style="width:100%;"></label>
                    </label>
                    <label value="2">
                    <input type="radio" name="rating" >
                    <label style="width:100%;"></label>
                    </label>
                    <label value="3">
                    <input type="radio" name="rating">
                    <label style="width:100%;"></label>
                    </label>
                    <label value="4">
                    <input type="radio" name="rating">
                    <label style="width:100%;"></label>
                    </label>
                    <label value="5">
                    <input type="radio" name="rating">
                    <label style="width:100%;"></label>
                    </label>
                    <label value="6">
                    <input type="radio" name="rating">
                    <label style="width:100%;"></label>
                    </label>
                    <label value="7">
                    <input type="radio" name="rating">
                    <label style="width:100%;"></label>
                    </label>
                    <label value="8">
                    <input type="radio" name="rating">
                    <label style="width:100%;"></label>
                    </label>
                    <label value="9">
                    <input type="radio" name="rating">
                    <label style="width:100%;"></label>
                    </label>
                    <label value="10">
                    <input type="radio" name="rating" value="10">
                    <label style="width:100%;"></label>
                    </label>
                    </span> 
                    <label for="m_3189847521540640526commentText">4. Any Other suggestions:</label>
                    <textarea cols="68" name="commentText" rows="5" style="100%"></textarea>
                    <div class="clear"></div><br>
                    <input style="background:#43a7d5;color:#fff;padding:12px;border:0" type="submit" value="Submit your review"> 
                    </form>
                    </div>
</div>
</body>
</html>
