<?php
include_once 'dbconnect.php';



function saveReservation($reservationData)
{
    global $pdo; //makes pdo in the function 
    try {
        $stmt = $pdo->prepare("INSERT INTO reservations (customer_name, contact_number, reservation_date, reservation_time, number_of_guests, code) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([
            $reservationData['customer_name'],
            $reservationData['contact_number'],
            $reservationData['reservation_date'],
            $reservationData['reservation_time'],
            $reservationData['number_of_guests'],
            $reservationData['code']
        ]);
        return $pdo->lastInsertId();
    } catch (PDOException $e) {
        error_log('Database Error: ' . $e->getMessage());
        return null;
    }
}
