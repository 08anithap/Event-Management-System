<?php
require_once 'classes/Booking.php';
require_once 'classes/BookingTable.php';
require_once 'classes/Connection.php';
require_once 'validateBooking.php';

$formdata = array();
$errors = array();

validateBooking(INPUT_POST, $formdata, $errors);

if (empty($errors)) {
    $FullName = $formdata['FullName'];
    $Username = $formdata['Username'];    
    $Email = $formdata['Email'];
    $Events = $formdata['Events'];
    $Venue = $formdata['Venue'];
    $Budget = $formdata['Budget'];
    $EventDate = $formdata['EventDate'];
    $NoOfHeads = $formdata['NoOfHeads'];

    $booking = new Booking(-1, $FullName, $Username, $Email, $Events, $Venue, $Budget, $EventDate, $NoOfHeads);

    $connection = Connection::getInstance();

    $gateway = new BookingTable($connection);

    $id = $gateway->insert($booking);

    header('Location: homeIn.php');
}
else {
    require 'addBookingForm.php';
}
