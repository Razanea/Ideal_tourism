<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="aboutriyadhstylesheet.css" rel="stylesheet">
<link href="menuefooter.css" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<title>About Riyadh</title>

</head>
<body>
<!----------------------Menue---------------------------->

<div class="nav-color">
 <div class="w3-bar"> 
  <div class="w3-bar-item w3-left logo">
   <h3>Ideal Tourism in <span> Riyadh </span></h3> 
  </div>
   <div class="link-1"><a href="admin.php" class="w3-bar-item w3-button w3-right"><i class="fa fa-user w3-right" ></i></a></div>
   <?php
    if(isset($_SESSION['userid']))
    {
    ?> 
   <div class="link-1"><a href="log_out.php" class="w3-bar-item w3-button w3-right">Log out</a></div>
   <?php 
    }
   ?>
   <div class="link-2"><a href="home.php" class="w3-bar-item w3-button Mcenter" > Home </a></div>
   <div class="link-3"><a href="explore.php" class="w3-bar-item w3-button w3-left">Explore Riyadh</a></div>
   <div class="link-4"><a href="aboutriyadh.php" class="w3-bar-item w3-button w3-left">About Riyadh</a></div>
   <div class="link-5"><a href="recommendations.php" class="w3-bar-item w3-button w3-left">Recommendations</a></div>
  </div>
</div>
<!--------------------------About Riyadh Contents------------------------------------>    
    <div class = "main_Contents"><br><br>
      <h1>Riyadh City</h1>
      <p>
        Riyadh City is the capital of Saudi Arabia where its population has shown an increase of 6.5 
        million over the past forty years where 64 percent are Saudi citizens. 
        Riyadh has a unique diversity culture where international workers from all over the world 
        are visiting and living in Riyadh. Many expatriates from all over the world who are engaged 
        to new infrastructure projects. Riyadh is becoming one of the most dynamic cities in the region.
      </p><br><br><br><br>
      <div class = "current_local_time">
        <img class = "weather_image" src = "Photos/sun.png"/> 
        <div class="clock">
         <div id="hour">00</div>
         <span>:</span>
         <div id="minute">00</div>
         <span>:</span>
         <div id="seconds">00</div>
        </div>
        <script src="time_function.js"></script>
        <div class = "today_date">
         <h2 id="date"></h2>
         <script src="current_date.js"></script>
        </div>  
       </div>
    </div>
<!------------------------Accordian--------------------------------------->

  <div class = "accordion_contents">
    <h1><b>Get to know More About Riyadh !</b></h1> <br>
    <button class="accordion">Riyadh Location</button>
    <div class="panel">
     <p>
      Riyadh sets on the center of Saudi Arabia in an area called Najd by 1950 feet above sea level, 
      and it’s bordered from the east by the eastern region, from the west by Makkah region and part 
      of Al Madinah Al Munawrah, from the north by the eastern region and Al-Qassiem, from the south by Najran and Aseer.
     </p>
   </div><br>

    <button class="accordion">Riyadh as a Business Capital</button>
    <div class="panel">
    <p>
     Riyadh as a working capital, has the base of all government ministries and all
     other related authorities as well to the head quarter (HQ) of several local and 
     international companies. Which leave Riyadh with lots of constrictions because of 
     the economic growth taking a place in the country.
    </p> 
    </div><br>

    <button class="accordion">Riyadh Tourism</button>
    <div class="panel">
    <p>
    Riyadh is considered to be a business destination, however the city of Riyadh is a 
    fascinating mixed of modern development, traditional culture, and as such there are many of 
    interesting things to see and visit in Riyadh. Riyadh is a place to numerous of historical sites, 
    including the City of Old Diriyah, the Al Murabba'a Historical Palace, and the Al Musmak Castle. 
    Saudi Arabia is known for its high heat, however, there are many opportunities for outdoor activities 
    in Riyadh, including 4x4 desert trips, football, and golf. These are great places to visit in Riyadh, 
    but you should consider that many of the most attractions keep hours widely different to Western businesses’ 
    hours; For example: they open early in the morning, and then open again from afternoon to late evening 
    around 12:00 AM, and some places, and historical sites are closed on Fridays or Saturdays. Families might only 
    visit during designated 'family hours' so it is better to check ahead before visiting.
    </p>  
    </div><br>

    <button class="accordion">Transportation in Riyadh</button>
    <div class="panel">
    <ul>
     <li>Car</li>
      <p>
      The road network in Saudi Arabia is quiet decent, specially around  Riyadh, 
      its capital city. It is highly recommended to hire a private driver to drive 
      inside and outside the city, because the traffic is chaotic. The minimum age to 
      rent a car in the country is usually from 25 years.  
      </p>

     <li>Taxis</li>
      <p>
      Taxis are the most used and practical transportation option in the city and in the whole 
      country. It is recommended to negotiate the price of the trip with the taxi driver before
      you start the route, so then you are sure that there won’t be any surprise. Most of the 
      raxis in Riyadh  are white.
      </p>

    <li>Bus</li>
      <p>
      In Riyadh  there are two types of bus lines, the SAPTCO, the government buses, 
      and the private buses. The SAPTCO  have some specific routes throughout the city 
      and also in the rest of the country. Most of the vehicles have air conditioning 
      but the seats are a bit uncomfortable, but it is probably one of the cheapest options to travel around.
      </p>

    <li>Train</li>
      <p>
      To move around Saudi Arabia is one of the safest and comfortable options. Most of 
      the trains have air conditioningand it is divided into the first, second and third class.
      </p>
   </ul>
   </div><br>

   <button class="accordion">Education in Riyadh</button>
    <div class="panel">
      <p>
        The education in Riyadh is provided by government and private sectors across 
        all level on the general education for both genders, technical and vocational training 
        up to higher education’s level. Government higher education provided by 3 universities in 
        the city. Private higher education provided by a few collages in Riyadh. Technical education 
        and vocational training collages with seven collages under six technical institutes and 328 
        private centers. Riyadh also has many international schools for all different levels.
      </p> 
    </div><br>

    <button class="accordion">Accommodations in Riyadh</button>
    <div class="panel">
      <p>
        Hotels is a fine option where the city is rich with so many choices, with an excellent, 
        reasonable market rates. Many hotels has a fine dining areas, support with a sport facilities 
        for guests and non-guests. Compounds come as a perfect option for expatriates living away from home, 
        and they want a bit of privacy of their living lifestyle. Riyadh has many compounds resorts facilitated 
        with gardens, gyms, and swimming pools and other utilities with day to day maintenance services and high 
        security level. Diplomatic Quarter or “DQ” home of foreign embassies, and other international organizations 
        with a residential areas. DQ is one of the greenest area in Riyadh with various sport facilities. In addition 
        you may find other furnished/unfurnished apartments or villas for selling or renting.
      </p> 
    </div>
  <script src = "aboutriyadhaccordion.js"></script>
 </div>
<hr>
<!------------------------IFrame--------------------------------------->
<div class="w3-panel r_contents">
 <div class="w3-container">
  <h1><b>Riyadh Season!</b></h1>  
   <p class="subTitle">You can find more about it by visiting the Riyadh season Official Website. <a href="https://riyadhseason.sa/"> click her to know more </a> </p>
   <iframe src="https://riyadhseason.sa/" class="iframe1" name="iframe_a" ></iframe> 
 </div><br> 
</div>
<!--------------------------Footer------------------------------------>
  <section id="footer">
    <footer class="footer-distributed">
      <div class="footer-left"> 

        <h3>Ideal Tourism in <span> Riyadh </span></h3>
        <p class="footer-links">
          <a href="#">Home</a>
          ·
          <a href="#">Explore Riyadh</a>
          ·
          <a href="#">About Riyadh</a>
          ·
          <a href="#">Contact</a>
        </p>
 
        <p class="footer-company-name">Ideal Tourism in Riyadh &copy; 2022</p>
      </div>
     
      <div class="footer-center">
         <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Riyadh </span> SA(Saudi Arabia)</p>
        </div>
        <div>
          <i class="fa fa-phone"></i>
          <p>+966 000000000</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="#">IdealTourism@gmail.com</a></p>
        </div>
      </div>
 
      <div class="footer-right">
        <div class="footer-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>
    </footer>
  </section>
</body>
</html> 