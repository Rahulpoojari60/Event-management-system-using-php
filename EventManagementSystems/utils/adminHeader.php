<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TATVA 2024</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #fff;
            margin: 0;
            padding: 0;
        }
        .bgImage {
            background-image: url(images/clg.jpg);
            background-size: cover;
            background-position: center center;
            height: 650px;
            position: relative;
            color: #fff;
        }
        .navbar {
            background: rgba(0, 0, 0, 0.5);
            padding: 10px;
        }
        .navbar a {
            color: #fff;
            padding: 10px;
            text-decoration: none;
        }
        .navbar a:hover {
            color: #ddd;
        }
        .navbar .navbar-brand h2 {
            margin: 0;
            font-size: 72px; /* Increased font size */
            color: #fff;
            text-align: center; /* Center text */
            width: 100%; /* Take full width */
        }
        .main-content {
            padding: 20px;
            position: absolute;
            top: 50px;
            left: 20px;
            right: 20px;
        }
        .header-content {
            text-align: center;
            margin-bottom: 10px;
        }
        .header-content h1 {
            font-size: 32px; /* Font size for Explore Your Favorite Event */
            margin: 0 0 10px;
            color: #fff;
        }
        .event-table {
            width: 40%;
            border-collapse: collapse;
            background-color: #007bff; /* Blue background color */
            color: #fff;
            float: right;
            margin-top: -10px; /* Adjusted margin to move table slightly higher */
            margin-left: 10px; /* Added margin-left for spacing */
            border: 2px solid yellow; /* Yellow border */
            padding: 10px; /* Padding inside the box */
        }
        .event-table th, .event-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .event-table th {
            background-color: #0056b3; /* Darker blue for header */
            color: #fff; /* White text */
            font-weight: bold;
        }
        .event-table td {
            padding: 6px; /* Reduced padding for tighter spacing */
        }
    </style>
</head>
<body>
    <header class="bgImage"> 
        <nav class="navbar">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand">
                        <h2>TATVA 2024</h2>
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><strong>Home</strong></a></li>
                    <li><a href="register.php"><strong>Register</strong></a></li>
                    <li><a href="contact.php"><strong>Contact Us</strong></a></li>
                    <li><a href="aboutus.php"><strong>About us</strong></a></li>
                    <li class="btnlogout"><a class="btn btn-default navbar-btn" href="login_form.php">Login <span class="glyphicon glyphicon-log-in"></span></a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="main-content">
                <div class="header-content">
                    <h1><strong>Explore Your Favorite Event</strong></h1>
                </div>
                <table class="event-table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Event Name</th>
                            <th>Event ID</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Cryptohunt</td>
                            <td>1</td>
                            <td>100</td>
                        </tr>
                        <!-- Rest of your table content -->
                    </tbody>
                </table>
            </div>
        </div>
    </header>
</body>
</html>
