

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- <script src="mainn.js"></script> -->
    <title>Document</title>
</head>
<body>
  <div class="sliderbar">
    <div class="log"></div>
    <ul class="main">
        <li class="active">
            <a href="indexdash.html">
            <i class="fa-solid fa-chart-line"></i>
            <span>Dashboard</span></a>
        </li>
        <li>
            <a href="statistics.html">
            <i class="fas fa-chart-bar"></i>
            <span>Statistic</span></a>
        </li>
        <li>
            <a href="usermanagement.html">
              <i class="fa-solid fa-user-check"></i>
            <span>User management</span></a>
        </li>
        <li>
            <a href="bookingd.php">
            <i class="fas fa-tachometer-alt"></i>
            <span>Booking Management</span>
        </a>
        </li>
        <li>
            <a href="notification.html">
            <i class="fas fa-question-circle"></i>
            <span>Notification</span></a>
        </li>
        <li>
            <a href="analytics.php">
            <i class="fas fa-chart-pie"></i>
            <span>Analytics</span></a>
        </li>
        <li>
            <a href="setting.html">
            <i class="fas fa-cog"></i>
            <span>Settings</span></a>
        </li>
        <li class="logout">
            <a href="../login.html">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
        </li>
    </ul>
  </div> 
  <div class="maincontent">
    <div class="headerwrapper">
        <div class="headertitle">
            <span>Admin, </span>
            <h2>Dashboard</h2>
        </div>
        <div class="userinformation">
            <div class="searchbox">
            <i class="fa-solid fa-search"></i>
            <input type="text" placeholder="Search">
        </div>
            <img src="profile.jpg" alt="User Profile">
    </div>

    </div>
    <div class="cardcontainer">
        <div>
    <!-- <script src="dash.js"></script> -->


    <div class="user-maincontent">
        <h2>User Credentials</h2>
        <table id="userTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Passport /Identification</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Password</th>
                    <th>Birthdate</th>
                    <th>Position</th>
                    <th>Campany</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <?php
require "connect.php"; 
$result = mysqli_query ($conn, "SELECT *FROM signup");

while($row = mysqli_fetch_assoc($result))
{
    echo "<tr> <td>".$row['ID']."<td>".$row['username']."<td>".$row['Passport']." <td>".$row['email']."<td>".$row['phone']."<td>".$row['passwd']."<td>".$row['birthdate']." <td>".$row['position']." <td>".$row['campany']." <td>".$row['Gender']."</tr>";
}
?>
            <tbody>
            </tbody>
        </table>
    </div>

</body>
</html>

        
    