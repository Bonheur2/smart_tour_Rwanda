<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="irw1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="mainn.js"></script>
    <title>Document</title>
</head>
<body>
  <div class="sliderbar">
    <div class="log"></div>
    <ul class="main">
        <li class="active">
            <a href="userdash.html">
            <i class="fa-solid fa-chart-line"></i>
            <span>Dashboard</span></a>
        </li>
        <li>
            <a href="profile.html">
            <i class="fas fa-user"></i>
            <span>Profile</span>
            </a>
        </li>
        <li>
            <a href="userstatistic.html">
            <i class="fas fa-chart-bar"></i>
            <span>Statistic</span></a>
        </li>
        <li>
            <a href="userbook.html">
            <i class="fas fa-tachometer-alt"></i>
            <span>Booking</span>
        </a>
        </li>
        <li>
            <a href="usersetting.html">
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
            <span>
                <?php
            require "connect.php"; 
                $result = mysqli_query ($conn, "SELECT *FROM signup");
                
            $row = mysqli_fetch_assoc($result);
                {
                    echo "<tr> <td>".$row['username']."</tr>";
                }
                ?>
            </span>
            <h2>Dashboard</h2>
        </div>
        <div class="userinformation">
            <div class="searchbox">
            <i class="fa-solid fa-search"></i>
            <input type="text" placeholder="Search">
        </div>
            <img src="../profile.png" alt="User Profile">
    </div>
    </div>            

<main class="dodo">
    <header>
        <h1>Welcome, 
            <span>
                <?php
                require "connect.php"; 
                $result = mysqli_query ($conn, "SELECT *FROM signup");
                
            $row = mysqli_fetch_assoc($result);
                {
                    echo "<tr> <td>".$row['username']."</tr>";
                }
                ?>
            </span>
        </h1>
        <!-- <button onclick="logout()" id="logout">Logout</button> -->
    </header>
</main>

    <nav>
    <div class="container input-search">
        <form>
           
                <div class="row"> 
                    <input type="text" id="input-box" placeholder="Books your destination here" autocomplete="off"> 
                </div>
                <div class="result-box"></div>        
                <div class="row">
                     <input type="text" id="input-box2" placeholder="Books hotel" autocomplete="off"> 
                </div>
                <div class="result-box2"></div>
            <label for=""> Start travel date:
            <input type="date" name="day" placeholder="Today" required/>    
            </label>
            <label for="">End travel date:
            <input type="date" name="day" placeholder="Tomorrow" required/>    
            </label>
            <input type="number" name="people" form="0" to="50" placeholder="Number of tourist" value="" required/>    
            <button>search</button>
    </form>
    </div>
    </div>
     <script type="text/javascript" src="dash.js"></script>
    </nav>

</body>
</html>
  
 
