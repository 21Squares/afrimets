<?php
// Database configuration
$db_host = 'localhost';
$db_user = 'gsagov_afrimets_secretariat';
$db_pass = 'Itgeng4Life';
$db_name = 'gsagov_afrimets_registration';

// $db_host = 'localhost';
// $db_user = 'root';
// $db_pass = '';
// $db_name = 'gsagov_afrimets_registration';

// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and validate input data
    $title = isset($_POST['title']) ? $conn->real_escape_string($_POST['title']) : '';
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $passport_number = $conn->real_escape_string($_POST['passport_number']);
    $nationality = $conn->real_escape_string($_POST['nationality']);
    $institution = $conn->real_escape_string($_POST['institution']);
    $position = $conn->real_escape_string($_POST['position']);
    $country = $conn->real_escape_string($_POST['country']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $dietary_preferences = isset($_POST['dietary_preferences']) ? $conn->real_escape_string($_POST['dietary_preferences']) : '';
    $attendance_type = $conn->real_escape_string($_POST['attendance_type']);
    
    // Process checkbox arrays
    $tc_meetings = isset($_POST['tc_meetings']) ? implode(', ', $_POST['tc_meetings']) : '';
    $other_meetings = isset($_POST['other_meetings']) ? implode(', ', $_POST['other_meetings']) : '';
    
    $require_visa = $conn->real_escape_string($_POST['require_visa']);
    $preferred_hotel = $conn->real_escape_string($_POST['preferred_hotel']);
    
    // Check if email already exists
    $check_email = $conn->prepare("SELECT id FROM registrations WHERE email = ?");
    $check_email->bind_param("s", $email);
    $check_email->execute();
    $check_email->store_result();
    
    if ($check_email->num_rows > 0) {
        // Email already exists
        header("Location: error.php?message=This email is already registered");
        exit();
    }
    
    // Insert data into database
    $stmt = $conn->prepare("INSERT INTO registrations (
        title, first_name, last_name, passport_number, nationality, 
        institution, position, country, email, phone, dietary_preferences, 
        attendance_type, tc_meetings, other_meetings, require_visa, preferred_hotel
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    $stmt->bind_param(
        "ssssssssssssssss", 
        $title, $first_name, $last_name, $passport_number, $nationality,
        $institution, $position, $country, $email, $phone, $dietary_preferences,
        $attendance_type, $tc_meetings, $other_meetings, $require_visa, $preferred_hotel
    );
    
    if ($stmt->execute()) {
        // Registration successful
        header("Location: congratulations.php?name=" . urlencode($first_name . ' ' . $last_name));
        exit();
    } else {
        // Error occurred
        header("Location: error.php?message=Registration failed. Please try again.");
        exit();
    }
    
    $stmt->close();
    $check_email->close();
}

$conn->close();
?>