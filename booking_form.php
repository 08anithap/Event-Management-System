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
<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <div class="form-header">
                        <h1>Make your reservation</h1>
                    </div>
                    <form>
                        <div class="form-group"> <input class="form-control" type="text" placeholder="Enter your full name" required> <span class="form-label"></span> </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> <input class="form-control" type="text" required placeholder="Enter your username"> <span class="form-label"></span> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <input class="form-control" type="text" required placeholder="Enter your email id"> <span class="form-label">Check out</span> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group"> <select class="form-control" required>
                                        <option value="" selected hidden>Events</option>
                                        <option>Wedding</option>
                                        <option>Naming Ceremony</option>
                                        <option>Engagement</option>
                                        <option>Birthday</option>
                                        <option>Baby Shower</option>
                                        <option>Party</option>
                                        <option>Corporate Events </option>
                                    </select> <span class="select-arrow"></span> <span class="form-label">Events</span> </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group"> <select class="form-control" required>
                                        <option value="" selected hidden>Venues</option>
                                        <option>Mantra - The Luxury</option>
                                        <option>White Nirvana</option>
                                        <option>Shakesbierre Brewpub and Kitchen</option>
                                        <option>The Ritz-Carlton</option>
                                        <option>The Falcon's Den Meeting Room</option>
                                        <option>Others</option>
                                    </select> <span class="select-arrow"></span> <span class="form-label">Venues</span> </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group"> <select class="form-control" required>
                                        <option value="" selected hidden>Food Style</option>
                                        <option >South Indian</option>
                                        <option >North Indian</option>
                                        <option >Italian</option>
                                        <option >Continenta</option>
                                        <option >Mexican</option>
                                        <option >Chinese</option>
                                        <option >Others</option>
                                    </select> <span class="select-arrow"></span> <span class="form-label">Food Style</span> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group"> <select class="form-control" required>
                                        <option value="" selected hidden>Serving Style</option>
                                        <option >SILVER </option>
                                        <option >AMERICAN </option>
                                        <option >BUFFET </option>
                                        <option >FRENCH </option>
                                        <option >RUSSIAN </option>
                                        <option >TRAY SERVICE </option>
                                        <option >SELF SERVICE</option>
                                    </select> <span class="select-arrow"></span> <span class="form-label">Food Style</span> </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group"> <select class="form-control" required>
                                        <option value="" selected hidden>Caterer</option>
                                        <option >Pai hotels</option>
                                        <option >Leela palace</option>
                                        <option >Iyer Caterers</option>
                                        <option >Meraki kitchen</option>
                                        <option >Heera caterers</option>
                                        <option >Hotel basant</option>
                                        <option >Oberoi Hotels</option>
                                    </select> <span class="select-arrow"></span> <span class="form-label">Caterer</span> </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group"> <select class="form-control" required>
                                        <option value="" selected hidden>Themes</option>
                                        <option >Floral</option>
                                        <option >Pastel</option>
                                        <option >Contemporary</option>
                                        <option >Coastal</option>
                                        <option >Classic</option>
                                        <option >Balloon</option>
                                        <option >Others</option>
                                    </select> <span class="select-arrow"></span> <span class="form-label">Caterer</span> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"> <select class="form-control" required>
                                        <option value="" selected hidden>Budget</option>
                                        <option >Rs.250 per head</option>
                                        <option >Rs.380 per head</option>
                                        <option >Rs.410 per head</option>
                                        <option >Rs.450 per head</option>
                                        <option >Rs.500 per head</option>
                                    </select> <span class="select-arrow"></span> <span class="form-label">Caterer</span> 
                              </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group"> <input class="form-control" type="date" required> <span class="form-label">Event Date</span> </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group"> <input class="form-control" type="number" placeholder="Number of heads"> <span class="form-label">capacity</span> </div>
                              </div>
                        <div class="col-md-6">
                        <div class="form-group"> <input class="form-control" type="tel" placeholder="Enter your Contact number"> <span class="form-label">Phone</span> </div>
                        </div>
                        <div class="form-btn"> <button class="submit-btn">Book Now</button> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




