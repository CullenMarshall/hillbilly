<?php
require_once("Controller.php");


$req = $_REQUEST['route'] ?? '';
$reservationMessage = '';

switch ($req) {
    case 'createReservation':
        $reservationData = [
            'customer_name' => $_REQUEST["customer_name"],
            'contact_number' => $_REQUEST["contact_number"],
            'reservation_date' => $_REQUEST["reservation_date"],
            'reservation_time' => $_REQUEST["reservation_time"],
            'number_of_guests' => $_REQUEST["number_of_guests"]
        ];

        $reservationMessage = createReservation($reservationData);
        echo json_encode($reservationMessage);
        break;
    default:
        echo "can't find route $req";
        break;
}
