<!DOCTYPE html>
<html>

<head>
    <title>Booking Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #fff;
            padding: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f9f9f9;
        }

        .thank-you {
            text-align: center;
            margin-top: 30px;
        }

        .thank-you p {
            font-size: 18px;
            color: #555;
        }

        .btn-container {
            text-align: center;
            margin-top: 40px;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            background-color: #0077b6;
            color: #fff;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #005583;
        }
    </style>
</head>

<body>
    <?php
    $name = isset($_REQUEST['name']) ? htmlspecialchars($_REQUEST['name']) : '';
    $email = isset($_REQUEST['email']) ? htmlspecialchars($_REQUEST['email']) : '';
    $phone = isset($_REQUEST['phone']) ? htmlspecialchars($_REQUEST['phone']) : '';
    $checkInDate = isset($_REQUEST['check-in-date']) ? htmlspecialchars($_REQUEST['check-in-date']) : '';
    $checkInTime = isset($_REQUEST['check-in-time']) ? htmlspecialchars($_REQUEST['check-in-time']) : '';
    $checkOutDate = isset($_REQUEST['check-out-date']) ? htmlspecialchars($_REQUEST['check-out-date']) : '';
    $checkOutTime = isset($_REQUEST['check-out-time']) ? htmlspecialchars($_REQUEST['check-out-time']) : '';
    $persons = isset($_REQUEST['persons']) ? htmlspecialchars($_REQUEST['persons']) : '';
    $selectedRoom = isset($_REQUEST['room']) ? htmlspecialchars($_REQUEST['room']) : '';

    ?>


    <div class="container">
        <h1>Booking Confirmation</h1>
        <table>
            <tr>
                <th>Name:</th>
                <td>
                    <?php echo $name; ?>
                </td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>
                    <?php echo $email; ?>
                </td>
            </tr>
            <tr>
                <th>Contact Number:</th>
                <td>
                    <?php echo $phone; ?>
                </td>
            </tr>
            <tr>
                <th>Check-in Date:</th>
                <td>
                    <?php echo $checkInDate; ?>
                </td>
            </tr>
            <tr>
                <th>Check-in Time:</th>
                <td>
                    <?php echo $checkInTime; ?>
                </td>
            </tr>
            <tr>
                <th>Check-out Date:</th>
                <td>
                    <?php echo $checkOutDate; ?>
                </td>
            </tr>
            <tr>
                <th>Check-out Time:</th>
                <td>
                    <?php echo $checkOutTime; ?>
                </td>
            </tr>
            <tr>
                <th>Number of Persons:</th>
                <td>
                    <?php echo $persons; ?>
                </td>
            </tr>
            <tr>
                <th>Rooms Type:</th>
                <td>
                    <?php echo $selectedRoom; ?>
                </td>
            </tr>
        </table>
        <div class="thank-you">
            <p>Thank you for choosing our services!</p>
        </div>
        <div class="btn-container">
            <a href="#" class="btn" onclick="goBack()">Cancel</a>
            <a href="#" class="btn" onclick="confirmBooking()">Confirm</a>
        </div>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }

        function confirmBooking() {
            var url = "display.php";
            url += "?name=" + encodeURIComponent("<?php echo $name; ?>");
            url += "&email=" + encodeURIComponent("<?php echo $email; ?>");
            url += "&phone=" + encodeURIComponent("<?php echo $phone; ?>");
            url += "&check-in-date=" + encodeURIComponent("<?php echo $checkInDate; ?>");
            url += "&check-in-time=" + encodeURIComponent("<?php echo $checkInTime; ?>");
            url += "&check-out-date=" + encodeURIComponent("<?php echo $checkOutDate; ?>");
            url += "&check-out-time=" + encodeURIComponent("<?php echo $checkOutTime; ?>");
            url += "&persons=" + encodeURIComponent("<?php echo $persons; ?>");
            url += "&room=" + encodeURIComponent("<?php echo $selectedRoom; ?>");

            window.location.href = url;
            alert("Booking confirmed successfully!");
        }
    </script>
</body>

</html>