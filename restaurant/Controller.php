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
function isWithinOpeningHours($time)
{
    $openingHours = [
        'Tuesday' => ['11:30', '14:30', '17:00', '22:30'],
        'Wednesday' => ['11:30', '14:30', '17:00', '22:30'],
        'Thursday' => ['11:30', '14:30', '17:00', '22:30'],
        'Friday' => ['11:30', '14:30', '17:00', '22:30'],
        'Saturday' => ['11:30', '14:30', '17:00', '22:30'],
        'Sunday' => ['11:30', '14:30', '17:00', '22:30']
    ];

    $day = dayOfWeek($time);
    $reservationTime = date('H:i', strtotime($time));

    // Checking if the time is within any of the defined ranges for the given day
    for ($i = 0; $i < count($openingHours[$day]); $i += 2) {
        $begin = strtotime($openingHours[$day][$i]);
        $end = strtotime($openingHours[$day][$i + 1]);

        if (strtotime($reservationTime) >= $begin && strtotime($reservationTime) <= $end) {
            return true;
        }
    }

    return false;
}



function isMoreThanTwoWeeksInAdvance($date)
{
    // Function to check if the reservation is more than two weeks in advance
    // Implement logic to compare the reservation date with the current date
    $currentDate = date('Y-m-d');
    $reservationDate = strtotime($date);
    $twoWeeksAhead = strtotime('+2 weeks', strtotime($currentDate));

    if ($reservationDate > $twoWeeksAhead) {
        return true;
    }

    return false;
}

function fitsTable($numberOfGuests)
{
    // Function to check if the number of guests fits any table
    // Implement logic to check table capacities
    $tables = [
        ['min' => 3, 'max' => 7],
        ['min' => 2, 'max' => 5],
        ['min' => 2, 'max' => 5],
        ['min' => 2, 'max' => 5],
        ['min' => 2, 'max' => 2]
    ];

    foreach ($tables as $table) {
        if ($numberOfGuests >= $table['min'] && $numberOfGuests <= $table['max']) {
            return true;
        }
    }

    return false;
}
function generateRandomCode()
{
    // Function to generate a random 8-character alphanumeric code
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $code = '';
    $max = strlen($characters) - 1;

    for ($i = 0; $i < 8; $i++) {
        $code .= $characters[random_int(0, $max)];
    }

    return $code;
}



function createReservation($reservationData)
{
    // Check if $reservationData is valid before accessing its elements
    if ($reservationData !== null && is_array($reservationData)) {
        $code = generateRandomCode();
        $reservationData['code'] = $code;

        // Assuming you have a function saveReservation in model.php
        $reservationId = saveReservation($reservationData);

        if ($reservationId) {
            // Create message with reservation details and the code
            $message = "Reservation created successfully! Your code: $code. Details: ";
            $message .= "Name: {$reservationData['customer_name']}, ";
            $message .= "Contact Number: {$reservationData['contact_number']}, ";
            $message .= "Date: {$reservationData['reservation_date']}, ";
            $message .= "Time: {$reservationData['reservation_time']}, ";
            $message .= "Number of Guests: {$reservationData['number_of_guests']}.";

            return ['status' => 'success', 'message' => $message];
        } else {
            return ['status' => 'error', 'message' => 'Failed to create reservation.'];
        }
    } else {
        return ['status' => 'error', 'message' => 'Invalid reservation data provided.'];
    }
}


//         if ($result) {
//             if ($result) {
//                 $_SESSION['message'] = "Reservation created successfully! Please don't lose this code: $code. Use this code for any reservation updates.";
//             } else {
//                 $_SESSION['message'] = "Failed to create reservation.";
//             }
//         }
//     } else {
//         // Handle the case when $reservationData is not properly fetched
//         $_SESSION['message'] = "Invalid reservation data provided.";
//     }
// }










// function deleteReservation($reservationData)
// {
//     // Check if $reservationId is valid before accessing its elements
//     if ($reservationData !== null && is_numeric($reservationData)) {
//         // Assuming you have a function deleteReservation in model.php
//         $result = deleteReservation($reservationData);

//         if ($result) {
//             // Return a message with the reservation details and the code
//             return "Reservation deleted successfully!";
//         } else {
//             return "Failed to delete reservation.";
//         }
//     } else {
//         // Handle the case when $reservationId is not properly fetched
//         return "Invalid reservation ID provided.";
//     }
// }
