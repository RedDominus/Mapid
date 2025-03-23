<?php
// File path to store reports
$filePath = 'reports.json';

// Get form data from POST request
$username = $_POST['username'] ?? '';
$evidence = $_POST['evidence'] ?? '';
$details = $_POST['details'] ?? '';

// Validate input
if (!empty($username) && !empty($evidence) && !empty($details)) {
    $newReport = [
        'username' => htmlspecialchars($username),
        'evidence' => htmlspecialchars($evidence),
        'details' => htmlspecialchars($details)
    ];

    // Read existing reports and append new one
    $existingReports = file_exists($filePath) ? json_decode(file_get_contents($filePath), true) : [];
    $existingReports[] = $newReport;

    // Save the updated reports list
    file_put_contents($filePath, json_encode($existingReports, JSON_PRETTY_PRINT));

    echo "Report successfully submitted! <a href='submit_groomers.html'>Go back</a>";
} else {
    echo "All fields are required! <a href='submit_groomers.html'>Try again</a>";
}
?>
