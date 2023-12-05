<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIGUIDE| Statement of Objectives</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/time.css">
    <link rel="stylesheet" href="css/calendar.css">
    <link rel="stylesheet" href="css/acad.css">
    <link rel="stylesheet" href="css/sas-sas.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        .navbar {
  background-color: #46E068;
  padding: 20px 10px;
  text-align: center;
  display: flex;
  line-height: 2.3;
  border-bottom: 3px solid #bcf3c8;
  z-index: 6; /* set a higher z-index than the banner */
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  width: 100%;
  margin: 0;
  box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.3); /* Add box shadow */
}


      .navbar a {
          float: left;
          display:flex;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
          font-family: 'Futura Md BT', sans-serif;
          font-weight: 700;
      }

      .dropdown {
          float: left;
          overflow: hidden;
          font-family: 'Futura Md BT', sans-serif; 
          font-weight: 700;
          line-height: 2.3; /* increase spacing above label */
          box-sizing: border-box;    
      }

      .dropdown .dropbtn {
          font-size: 17px;
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
          font-family: 'Futura Md BT', sans-serif;
          font-weight: 700;
          line-height: 2.3; /* increase spacing above label */
          box-sizing: border-box;    
      }

      .navbar a:hover, .dropdown:hover .dropbtn {
          color: #acffbe;
      }

      .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
      }

      .dropdown-content a {
          float: none;
          color: #46E068;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
      }

      .dropdown:hover .dropdown-content {
          display: block;
      }

      .navlogo {
          position: relative;
          width: 100px; /* set the width of the logo container */
          height: 70px; /* set the height of the logo container */
          margin-right: 380px;
          margin-left:60px;
      }

      .navlogo img {
          position: absolute;
          top: 0;
          left: 0;
          max-width: 78%;
          height: auto;
      }
    
            /* New styles for the side navbar */
            .sidenavbar {
                position: fixed;
                top: 0;
                left: 0;
                height: 100%;
                width: 280px;
                background-color: #46E068;
                z-index: -6;
                display: flex;
                flex-direction: column;
                justify-content: center;
                overflow-y: auto; /* Add the overflow-y property to make the sidebar scrollable */
            }
    
            /* Customizing the scrollbar */
            .sidenavbar::-webkit-scrollbar {
                width: 6px; /* Set the width of the scrollbar */
                border-radius: 4px; /* Add border radius to the scrollbar */
            }
    
            .sidenavbar::-webkit-scrollbar-track {
                background-color: #f1f1f1; /* Set the background color of the scrollbar track */
                border-radius: 4px; /* Add border radius to the scrollbar track */
            }
    
            .sidenavbar::-webkit-scrollbar-thumb {
                background-color: #0eab38; /* Set the color of the scrollbar thumb */
                border-radius: 4px; /* Add border radius to the scrollbar thumb */
            }
    
            .sidenavbar::-webkit-scrollbar-thumb:hover {
                background-color: #0eab38; /* Set the color of the scrollbar thumb when hovered */
            }
    
            .sidebar-item {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 33px;
                cursor: pointer;
                position: relative;
                transition: background-color 0.3s ease; /* Add transition for smooth effect */
            }
    
            .sidebar-item-img {
                width: 50px;
                height: 50px;
                margin-bottom: 5px;
                transition: opacity 0.3s ease;
                position: relative;
                z-index: 1;
            }
    
            .sidebar-item:hover {
                background-color: #0eab38; /* Change the background color on hover */
            }
    
            .sidebar-item:hover .sidebar-item-img {
                opacity: 0;
            }
    
            .sidebar-item-text {
                color: white;
                font-family: 'Futura Md BT', sans-serif;
                text-align: center;
                display: none;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 2;
            }
    
            .sidebar-item:hover .sidebar-item-text {
                display: block;
            }
    
            .label{
                float: left;
                display:flex;
                color: white;
                padding-left: 20px;
                padding-right: 300px;
                text-align: center;
                text-decoration: none;
                font-size: 13px;
                font-family: 'Futura Md BT', sans-serif;
                weight: 700;
            }
            .space {
                margin-bottom: 50px;
                margin-top: 50px;
            }

            .blog-slider {
                width: 95%;
                position: relative;
                max-width: 800px;
                margin: auto;
                background: #fbffe8;
                box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
                padding: 25px;
                border-radius: 25px;
                height: 350px;
                transition: all 0.3s;
                margin-top:2%;
                margin-right:21%;
            }
    
        </style>
    
</head>
<body>
    <div class="navbar">
        <a href="home.php">HOME</a>
        <div class="dropdown">
            <button class="dropbtn">ABOUT US <span>&#9660;</span></button>
            <div class="dropdown-content">
                <a href="#">UNIVERSITY HISTORY</a>
                <a href="#">SCHOOL HYMN</a>
                <a href="#">3D VIEW RULES & REG.</a>
                <a href="#">MAP</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">GAMES <span>&#9660;</span></button>
            <div class="dropdown-content">
                <a href="#">Quiz Bee</a>
                <a href="#">Matching Type</a>
                <a href="#">GAME3</a>
                <a href="#">GAME4</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">COURSES <span>&#9660;</span></button>
            <div class="dropdown-content">
                <a href="#">COURSE1</a>
                <a href="#">COURSE2</a>
                <a href="#">COURSE3</a>
                <a href="#">COURSE4</a>
                <a href="#">COURSE5</a>
                <a href="#">COURSE6</a>
                <a href="#">COURSE7</a>
            </div>
        </div>
		<div class="navlogo">
            <a href="home.php"><img src="images/logo.png" alt="Logo"></a>
        </div>
    </div>


	<div class="sidenavbar">
	<div class="space"> </div>
    <div class="sidebar-item">
        <a href="ssafap-goals-objectives.php">
            <img class="sidebar-item-img" src="icons/goals.png" alt="Image 1">
            <div class="sidebar-item-text">Goals and Objectives</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="ssafap-personnel.php">
            <img class="sidebar-item-img" src="icons/group.png" alt="Image 2">
            <div class="sidebar-item-text">Personnel</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="ssafap-services.php">
            <img class="sidebar-item-img" src="icons/services.png" alt="Image 2">
            <div class="sidebar-item-text">Services</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="ssafap-grants-scholarship.php">
            <img class="sidebar-item-img" src="icons/scholar.png" alt="Image 2">
            <div class="sidebar-item-text">Grants and Scholarships</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="ssafap-student-assistanship.php">
            <img class="sidebar-item-img" src="icons/assist.png" alt="Image 2">
            <div class="sidebar-item-text">Student Assistantship Program</div>
        </a>
    </div>
</div>

<div class="timeline">
    <h2>SERVICES<br><br></h2>
</div>

<!-- START SLIDE -->
<div class="blog-slider">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">
            <h2>INFORMATION</h2>
                <p>&#x2022; Orientation of various scholarships and educational grants offered to students</p>
                <p>&#x2022; Conduct of enrichment activities</p>
          </div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">
            <h2>SCREENING, SELECTION AND PROCESSING</h2>
                <p>&#x2022; Interview [possible scholars for recommendation to prospective benefactors.</p>
                <p>&#x2022; Evaluates documents submitted by scholars.</p>
                <p>&#x2022; Consolidates requirements of scholars and submit to benefactors when necessary.</p>
          </div>
        </div>
    </div>

        <!-- Third Slide for the Second Slider -->
        <div class="blog-slider__item swiper-slide">
       
            <div class="blog-slider__content">
        
              <div class="blog-slider__text">
                <h2>SCHOLARSHIP CONSOLTAION AND REFERAL</h2>
                    <p>&#x2022; Schedule consultaion time for scholars with problems and other concerns.</p>
                    <p>&#x2022; Coordinates with Program Chairpersons and Guidance  Counselors benefactors and tother concerned campus or university official for referral of scholars.</p>
              </div>
            </div>
        </div>

        <!-- Fourth Slide for the Second Slider -->
        <div class="blog-slider__item swiper-slide">
       
            <div class="blog-slider__content">
        
              <div class="blog-slider__text">
                <h2>MONITORING</h2>
                    <p>&#x2022; Conduct meetngs of scholars for monitoring and follow-up</p>
              </div>
            </div>
        </div>

    <div class="blog-slider__pagination"></div>
</div>
<!-- END SLIDE -->


<br><br><br><br><br><br>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/standards.js"></script>

</body>
</html>
