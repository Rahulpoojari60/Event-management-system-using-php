<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TATVA 2024</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #000;
            margin: 0;
            padding: 0;
        }
        .bgImage {
            background-image: url('images/clg.jpg');
            background-size: cover;
            background-position: center center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
        .navbar {
            background: rgba(0, 0, 0, 0.5);
            padding: 10px;
            position: absolute;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
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
            font-size: 48px;
            color: #fff;
        }
        .main-content {
            padding: 20px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }
        .header-content {
            text-align: center;
            margin-bottom: 10px;
        }
        .header-content h1 {
            font-size: 32px;
            margin: 0 0 10px;
            color: #fff;
        }
        .event-table {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #007bff;
            color: #fff;
        }
        .event-table th, .event-table td {
            background-color: gray;

            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .event-table th {
            color: #fff;
            font-weight: bold;
        }
        .event-table td {
            padding: 6px;
        }
    </style>
</head>
<body>
    <header class="bgImage"> 
        <nav class="navbar">
            <div class="navbar-brand">
                <h2>TATVA 2024</h2>
            </div>
            <div class="nav-links">
                <a href="index.php"><strong>Home</strong></a>
                <a href="register.php"><strong>Register</strong></a>
                <a href="contact.php"><strong>Contact Us</strong></a>
                <a href="aboutus.php"><strong>About us</strong></a>
                <a class="btnlogout" href="login_form.php">Login</a>
            </div>
        </nav>
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
                        <th>Size of members(Max)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Cryptohunt</td>
                        <td>1</td>
                        <td>100</td>
                        <td>11</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Search-it</td>
                        <td>2</td>
                        <td>50</td>
                        <td>11</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Technical-Quiz</td>
                        <td>3</td>
                        <td>50</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Competitive-Coding</td>
                        <td>4</td>
                        <td>50</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Pubg</td>
                        <td>5</td>
                        <td>50</td>
                        <td>16</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Counter-Strike</td>
                        <td>6</td>
                        <td>100</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Fashion-Show</td>
                        <td>7</td>
                        <td>200</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Dance</td>
                        <td>8</td>
                        <td>100</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Singing</td>
                        <td>9</td>
                        <td>50</td>
                        <td>23</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Svit-Idol</td>
                        <td>10</td>
                        <td>100</td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Cooking-Without-Fire</td>
                        <td>11</td>
                        <td>50</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Short-Movie</td>
                        <td>12</td>
                        <td>200</td>
                        <td>13</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Mehandi</td>
                        <td>13</td>
                        <td>100</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Rangoli</td>
                        <td>14</td>
                        <td>50</td>
                        <td>10</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </header>
</body>
</html>
