<?php
require_once 'utils/header.php';
require_once 'utils/styles.php';

$usn = $_POST['usn'] ?? '';

if (empty($usn)) {
    echo "<script>
            alert('USN is required');
            window.location.href='usn.php';
          </script>";
    exit();
}

include_once 'classes/db1.php';

$sql = "SELECT e.event_title, st.st_name, s.name as staff_name, ef.Date, ef.time, ef.location
        FROM registered r
        JOIN events e ON r.event_id = e.event_id
        JOIN event_info ef ON e.event_id = ef.event_id
        JOIN staff_coordinator s ON e.event_id = s.event_id
        JOIN student_coordinator st ON e.event_id = st.event_id
        WHERE r.usn = '$usn'";

$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit();
}

if (mysqli_num_rows($result) > 0) {
    echo "<div class='content'>";
    echo "<div class='container'>";
    echo "<h1>Registered Events</h1>";
    echo "<table class='table table-hover'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Event Name</th>";
    echo "<th>Student Coordinator</th>";
    echo "<th>Staff Coordinator</th>";
    echo "<th>Date</th>";
    echo "<th>Time</th>";
    echo "<th>Location</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['event_title'] . "</td>";
        echo "<td>" . $row['st_name'] . "</td>";
        echo "<td>" . $row['staff_name'] . "</td>";
        echo "<td>" . $row['Date'] . "</td>";
        echo "<td>" . $row['time'] . "</td>";
        echo "<td>" . $row['location'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    echo "</div>";
} else {
    echo "<div class='content'>";
    echo "<div class='container'>";
    echo "<h1>Registered Events</h1>";
    echo "<p>Not Yet Registered for any events</p>";
    echo "</div>";
    echo "</div>";
}

include 'utils/footer.php';
?>
