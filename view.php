<?php
$filePath = 'reports.json';  // JSON file path containing the reports
$reports = file_exists($filePath) ? json_decode(file_get_contents($filePath), true) : [];

echo "<h2>Submitted Groomer Reports</h2>";

if (!empty($reports)) {
    foreach ($reports as $report) {
        echo "<div style='border:1px solid #ccc; padding:10px; margin-bottom:10px;'>";
        echo "<strong>Reported Username:</strong> " . htmlspecialchars($report['username']) . "<br>";
        echo "<strong>Evidence:</strong> " . htmlspecialchars($report['evidence']) . "<br>";
        echo "<strong>Details:</strong> " . htmlspecialchars($report['details']) . "<br>";
        echo "</div>";
    }
} else {
    echo "<p>No reports available.</p>";
}
?>
