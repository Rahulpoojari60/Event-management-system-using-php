<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta http-equiv="Content-Type" text/html; charset=UTF-8">
    <title>Tavta</title>
    <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
</head>
<body>
    <?php require 'utils/header.php'; ?>
    <div class="content"><!--body content holder-->
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <form method="POST" action="">
                    <label>Student USN:</label><br>
                    <input type="text" name="usn" class="form-control" required><br><br>

                    <label>Student Name:</label><br>
                    <input type="text" name="name" class="form-control" required><br><br>

                    <label>Branch:</label><br>
                    <input type="text" name="branch" class="form-control" required><br><br>

                    <label>Semester:</label><br>
                    <input type="text" name="sem" class="form-control" required><br><br>

                    <label>Email:</label><br>
                    <input type="email" name="email" class="form-control" required><br><br>

                    <label>Phone:</label><br>
                    <input type="text" name="phone" class="form-control" required><br><br>

                    <label>College:</label><br>
                    <input type="text" name="college" class="form-control" required><br><br>

                    <label>Event ID:</label><br>
                    <input type="text" name="event_id" class="form-control" required><br><br>

                    <button type="submit" name="update">Submit</button><br><br>
                    <a href="usn.php"><u>Already registered?</u></a>
                </form>
            </div>
        </div>
    </div>

    <?php require 'utils/footer.php'; ?>
</body>
</html>

<?php
if (isset($_POST["update"])) {
    $usn = $_POST["usn"];
    $name = $_POST["name"];
    $branch = $_POST["branch"];
    $sem = $_POST["sem"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $college = $_POST["college"];
    $event_id = $_POST["event_id"];

    if (!empty($usn) && !empty($name) && !empty($branch) && !empty($sem) && !empty($email) && !empty($phone) && !empty($college) && !empty($event_id)) {
        include 'classes/db1.php';

        // Check if the USN is already in the participent table
        $checkParticipentQuery = $conn->prepare("SELECT * FROM participent WHERE usn = ?");
        $checkParticipentQuery->bind_param("s", $usn);
        $checkParticipentQuery->execute();
        $resultParticipent = $checkParticipentQuery->get_result();

        if ($resultParticipent->num_rows == 0) {
            // If not already in participent table, insert into participent table
            $insertParticipent = $conn->prepare("INSERT INTO participent (usn, name, branch, sem, email, phone, college) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $insertParticipent->bind_param("sssisss", $usn, $name, $branch, $sem, $email, $phone, $college);

            if (!$insertParticipent->execute()) {
                echo "<script>
                    alert('Error inserting into participent table. Please try again.');
                    window.location.href='register.php';
                    </script>";
                exit();
            }
            $insertParticipent->close();
        }

        // Check if the USN is already registered for the same event
        $checkRegisteredQuery = $conn->prepare("SELECT * FROM registered WHERE usn = ? AND event_id = ?");
        $checkRegisteredQuery->bind_param("si", $usn, $event_id);
        $checkRegisteredQuery->execute();
        $resultRegistered = $checkRegisteredQuery->get_result();

        if ($resultRegistered->num_rows == 0) {
            // If not already registered, insert into the registered table
            $insertRegistered = $conn->prepare("INSERT INTO registered (usn, event_id) VALUES (?, ?)");
            $insertRegistered->bind_param("si", $usn, $event_id);

            if ($insertRegistered->execute()) {
                echo "<script>
                    alert('Registered Successfully!');
                    window.location.href='usn.php';
                    </script>";
            } else {
                echo "<script>
                    alert('Error inserting into registered table. Please try again.');
                    window.location.href='register.php';
                    </script>";
            }
            $insertRegistered->close();
        } else {
            echo "<script>
                alert('Already registered for this event.');
                window.location.href='register.php';
                </script>";
        }
        $checkRegisteredQuery->close();
        $checkParticipentQuery->close();
        $conn->close();
    } else {
        echo "<script>
            alert('All fields are required');
            window.location.href='register.php';
            </script>";
    }
}
?>
