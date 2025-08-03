<?php
$name = $_GET['name'];
$email = $_GET['email'];
$number = $_GET['phone'];
$checkInDate = $_GET['check-in-date'];
$checkInTime = $_GET['check-in-time'];
$checkOutDate = $_GET['check-out-date'];
$checkOutTime = $_GET['check-out-time'];
$persons = $_GET['persons'];
$selectedRoom = $_GET['room'];

echo "<table style='border-collapse: collapse; width: 100%;'>
    <tr>
        <th style='border: 1px solid #ddd; padding: 10px; background-color: #f9f9f9;'>Name</th>
        <th style='border: 1px solid #ddd; padding: 10px; background-color: #f9f9f9;'>E-mail</th>
        <th style='border: 1px solid #ddd; padding: 10px; background-color: #f9f9f9;'>Phone Number</th>
        <th style='border: 1px solid #ddd; padding: 10px; background-color: #f9f9f9;'>Check-In-Date</th>
        <th style='border: 1px solid #ddd; padding: 10px; background-color: #f9f9f9;'>Check-In-Time</th>
        <th style='border: 1px solid #ddd; padding: 10px; background-color: #f9f9f9;'>Check-Out-Date</th>
        <th style='border: 1px solid #ddd; padding: 10px; background-color: #f9f9f9;'>Check-Out-Time</th>
        <th style='border: 1px solid #ddd; padding: 10px; background-color: #f9f9f9;'>Persons</th>
        <th style='border: 1px solid #ddd; padding: 10px; background-color: #f9f9f9;'>Room</th>
    </tr>
    <tr>
        <td style='border: 1px solid #ddd; padding: 10px; text-align: center;'>$name</td>
        <td style='border: 1px solid #ddd; padding: 10px; text-align: center;'>$email</td>
        <td style='border: 1px solid #ddd; padding: 10px; text-align: center;'>$number</td>
        <td style='border: 1px solid #ddd; padding: 10px; text-align: center;'>$checkInDate</td>
        <td style='border: 1px solid #ddd; padding: 10px; text-align: center;'>$checkInTime</td>
        <td style='border: 1px solid #ddd; padding: 10px; text-align: center;'>$checkOutDate</td>
        <td style='border: 1px solid #ddd; padding: 10px; text-align: center;'>$checkOutTime</td>
        <td style='border: 1px solid #ddd; padding: 10px; text-align: center;'>$persons</td>
        <td style='border: 1px solid #ddd; padding: 10px; text-align: center;'>$selectedRoom</td>
    </tr>
</table>";
?>