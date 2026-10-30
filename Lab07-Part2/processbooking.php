<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Booking Confirmation</title>
</head>
<body>
	<h1>Rohirrim Tour Booking Confirmation</h1>
    <?php
    function bookingValue($name)
    {
        if (isset($_POST[$name]) && is_scalar($_POST[$name])) {
            $value = trim((string) $_POST[$name]);
            if ($value !== '') {
                return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
            }
        }

        return 'Not filled';
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo '<p>Welcome, ' . bookingValue('firstname') . ' ' . bookingValue('lastname') . '.</p>';
        echo '<h2>Booking details</h2>';
        echo '<ul>';
        echo '<li>First name: ' . bookingValue('firstname') . '</li>';
        echo '<li>Last name: ' . bookingValue('lastname') . '</li>';
        echo '<li>Age: ' . bookingValue('age') . '</li>';
        echo '<li>Species: ' . bookingValue('species') . '</li>';
        echo '<li>Accommodation: ' . (isset($_POST['accom']) ? 'Selected' : 'Not filled') . '</li>';
        echo '<li>4 Day Tour: ' . (isset($_POST['4day']) ? 'Selected' : 'Not filled') . '</li>';
        echo '<li>10 Day Tour: ' . (isset($_POST['10day']) ? 'Selected' : 'Not filled') . '</li>';
        echo '<li>Menu preference: ' . bookingValue('food') . '</li>';
        echo '<li>Date: ' . bookingValue('bookday') . '</li>';
        echo '<li>Number of travellers: ' . bookingValue('partysize') . '</li>';
        echo '</ul>';
    } else {
        echo '<p>No booking was submitted.</p>';
    }
    ?>
</body>
</html>
