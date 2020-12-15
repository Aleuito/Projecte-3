<?php
//pàgina principal
 include('session.php');
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Inici - Fitness Center</title>
    <link rel="stylesheet" href="./css/styles.css" type="text/css">
    <link rel="icon" href="./media/images/favicon.png" type="image/png" />
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
</head>
<body>
    <header>
            <span class="boto-menu" style="font-size:30px;cursor:pointer" onclick="openNav()"><i style="color: #fff; font-size: 1.5em;" class="fas fa-bars">&nbsp;</i>&nbsp;</span>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <br /><br />
                <a href="inicial.php"><i style="color: #fff; font-size: 1.2em;" class="fas fa-home">&nbsp;</i>INICI</a>
                <a href="welcome.php"><i style="color: #fff; font-size: 1.2em;" class="fas fa-id-card">&nbsp;</i>PERFIL</a>
                <a href="logout.php"><i style="color: #fff; font-size: 1.2em;" class="fas fa-sign-out-alt">&nbsp;</i>SORTIR</a>
            </div>
    </header>
    <div class="content">
      <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6">
       <div class="calendari">
        <h2 class="calendari-titol"><i style="color: #fff; font-size: 1.2em;" class="far fa-calendar-alt">&nbsp;</i>Calendari d'activitats</h2>
        <iframe src="https://calendar.google.com/calendar/embed?src=fcenterdam%40gmail.com&ctz=Europe%2FMadrid" style="border: 0" width="94%" height="600" frameborder="0" scrolling="no"></iframe>
       </div>
       </div>
          <div class="col-sm-12 col-md-6 col-lg-6">
             <div class="sections-menu">
              <a href="welcome.php" target=""><img src="./media/images/zone1.jpg" style="width: 30%;"/></a>&nbsp;&nbsp;&nbsp;&nbsp;<img src="./media/images/zone2.jpg" style="width: 30%;" /><br /><br />
              <a href="logout.php" target=""><img src="./media/images/zone3.jpg" style="width: 30%;"/></a>&nbsp;&nbsp;&nbsp;&nbsp;<img src="./media/images/zone2.jpg" style="width: 30%;" /><br /><br />
              <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
              <div><p id="date"></p></div>
          </div>
       </div>
        </div>
    </div>
    <footer>
        <p>Copyright - Fitness Center®</p>
    </footer>
     <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

    </script>
    <script src="https://kit.fontawesome.com/0414f73769.js" crossorigin="anonymous"></script>
    <script>
        function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 24;
    }
    
    if(h > 24){
        h = h - 24;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
    
        }

        showTime();
        </script>
        <script>
            n =  new Date();
            y = n.getFullYear();
            m = n.getMonth() + 1;
            d = n.getDate();
            document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
    </script>
</body>
</html>