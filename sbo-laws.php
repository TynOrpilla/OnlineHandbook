<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIGUIDE| By-Laws</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/time.css">
    <link rel="stylesheet" href="css/calendar.css">
    <link rel="stylesheet" href="css/acad.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
 .navbar {
		background-color: #46E068;
		padding: 5px 5px;
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
            weight: 700;
        }

        .dropdown {
            float: left;
            overflow: hidden;
            font-family: 'Futura Md BT', sans-serif; 
            weight: 700;
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
            weight: 700;
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
            margin-right: 30px;
            margin-left: 250px;
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
			width: 250px;
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
			padding: 53px;
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

        .middle-title{
            margin-left:425px;
            margin-bottom: 15px;
        }
        #statement{
            text-align:justify;
            width:80%;
        }

#blog-slider-1 {
  width: 95%;
  position: relative;
  max-width: 800px;
  margin: auto;
  background: #fbffe8;
  box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
  padding: 25px;
  border-radius: 25px;
  height: 250px;
  transition: all 0.3s;
  margin-top:2%;
  margin-right:21%;
}

#blog-slider-2 {
  width: 95%;
  position: relative;
  max-width: 800px;
  margin: auto;
  background: #fbffe8;
  box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
  padding: 25px;
  border-radius: 25px;
  height: 310px;
  transition: all 0.3s;
  margin-top:2%;
  margin-right:21%;
}

#blog-slider-3 {
  width: 95%;
  position: relative;
  max-width: 800px;
  margin: auto;
  background: #fbffe8;
  box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
  padding: 25px;
  border-radius: 25px;
  height: 450px;
  transition: all 0.3s;
  margin-top:2%;
  margin-right:21%;
}

#blog-slider-4 {
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

#blog-slider-5 {
  width: 95%;
  position: relative;
  max-width: 800px;
  margin: auto;
  background: #fbffe8;
  box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
  padding: 25px;
  border-radius: 25px;
  height: 370px;
  transition: all 0.3s;
  margin-top:2%;
  margin-right:21%;
}

@media screen and (max-width: 992px) {
  .blog-slider {
    max-width: 680px;
    height: 400px;
  }
}
@media screen and (max-width: 768px) {
  .blog-slider {
    min-height: 500px;
    height: auto;
    margin: 180px auto;
  }
}
@media screen and (max-height: 500px) and (min-width: 992px) {
  .blog-slider {
    height: 350px;
  }
}
.blog-slider__item {
  display: flex;
  align-items: center;
}



@media screen and (max-width: 768px) {
  .blog-slider__item {
    flex-direction: column;
  }
}
.blog-slider__item.swiper-slide-active .blog-slider__img img {
  opacity: 1;
  transition-delay: 0.3s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > * {
  opacity: 1;
  transform: none;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(1) {
  transition-delay: 0.3s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(2) {
  transition-delay: 0.4s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(3) {
  transition-delay: 0.5s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(4) {
  transition-delay: 0.6s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(5) {
  transition-delay: 0.7s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(6) {
  transition-delay: 0.8s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(7) {
  transition-delay: 0.9s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(8) {
  transition-delay: 1s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(9) {
  transition-delay: 1.1s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(10) {
  transition-delay: 1.2s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(11) {
  transition-delay: 1.3s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(12) {
  transition-delay: 1.4s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(13) {
  transition-delay: 1.5s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(14) {
  transition-delay: 1.6s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(15) {
  transition-delay: 1.7s;
}
.blog-slider__img {
  width: 195px;
  flex-shrink: 0;
  height: 195px;
  background-image: linear-gradient(147deg, #37ec5b 0%, #c6ffcd 74%);
  box-shadow: 4px 13px 30px 1px rgba(81, 168, 117, 0.2);
  border-radius: 20px;
  transform: translateX(-70px);
  overflow: hidden;
}
.blog-slider__img:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
 
  border-radius: 20px;
  opacity: 0.8;
}
.blog-slider__img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  opacity: 0;
  border-radius: 20px;
  transition: all 0.3s;
}
@media screen and (max-width: 768px) {
  .blog-slider__img {
    transform: translateY(-50%);
    width: 90%;
  }
}
@media screen and (max-width: 576px) {
  .blog-slider__img {
    width: 95%;
  }
}
@media screen and (max-height: 500px) and (min-width: 992px) {
  .blog-slider__img {
    height: 270px;
  }
}
.blog-slider__content {
  padding-right: 25px;
  margin-bottom: 10px;
  
}
@media screen and (max-width: 768px) {
  .blog-slider__content {
    margin-top: -80px;
    text-align: center;
    padding: 0 30px;
  }
}
@media screen and (max-width: 576px) {
  .blog-slider__content {
    padding: 0;
  }
}
.blog-slider__content > * {
  opacity: 0;
  transform: translateY(25px);
  transition: all 0.4s;
  width: 650px;
  margin-left: 40px;
  margin-top: 50px;
}
.blog-slider__code {
  color: #7b7992;
  margin-bottom: 15px;
  display: block;
  font-weight: 500;
}
.blog-slider__title {
    font-size: 13px;
    font-weight: 700;
    color: #0d0925;
    margin-bottom: 20px;
    text-align: justify;
}
.blog-slider__text {
  margin-bottom: 10px;
  line-height: 1.5em;
  font-size: 20px;
  text-align: justify;
}
.blog-slider__button {
  display: inline-flex;
  background-image: linear-gradient(147deg, #39fe3f 0%, #25c557 74%);
  padding: 15px 35px;
  border-radius: 50px;
  color: #fff;
  box-shadow: 0px 14px 80px rgba(106, 249, 70, 0.4);
  text-decoration: none;
  font-weight: 500;
  justify-content: center;
  text-align: center;
  letter-spacing: 1px;
}
@media screen and (max-width: 576px) {
  .blog-slider__button {
    width: 100%;
  }
}
.blog-slider .swiper-container-horizontal > .swiper-pagination-bullets, .blog-slider .swiper-pagination-custom, .blog-slider .swiper-pagination-fraction {
  bottom: 10px;
  left: 0;
  width: 100%;
}
.blog-slider__pagination {
  position: absolute;
  z-index: 21;
  right: 20px;
  width: 11px !important;
  text-align: center;
  left: auto !important;
  top: 10%;
  bottom: 5% !important;
  transform: translateY(-1%);
  z-index: 4;
}

@media screen and (max-width: 768px) {
  .blog-slider__pagination {
    transform: translateX(-50%);
    left: 50% !important;
    top: 205px;
    width: 100% !important;
    display: flex;
    justify-content: center;
    align-items: center;
  }
}
.blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
  margin: 8px 0;
}
@media screen and (max-width: 768px) {
  .blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
    margin: 0 5px;
  }
}
.blog-slider__pagination .swiper-pagination-bullet {
  width: 11px;
  height: 11px;
  display: block;
  text-align:center;
  border-radius: 10px;
  background: #062744;
  opacity: 0.2;
  transition: all 0.3s;
}
.blog-slider__pagination .swiper-pagination-bullet-active {
  opacity: 1;
  background: #1df46f;
  height: 30px;
  box-shadow: 0px 0px 20px rgba(252, 56, 56, 0.3);
}
@media screen and (max-width: 768px) {
  .blog-slider__pagination .swiper-pagination-bullet-active {
    height: 11px;
    width: 30px;
  }
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
        <a href="sbo-sboc1.php">
            <img class="sidebar-item-img" src="icons/constitution.png" alt="Image 1">
            <div class="sidebar-item-text">Student Body Organizations Constitution</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="sbo-laws.php">
            <img class="sidebar-item-img" src="icons/law.png" alt="Image 2">
            <div class="sidebar-item-text">By-Laws</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="sbo-uerg.php">
            <img class="sidebar-item-img" src="icons/elect.png" alt="Image 2">
            <div class="sidebar-item-text">Uniform Election Rules & Guidelines of the DMMMSU-SBO</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="sbo-ethical.php">
            <img class="sidebar-item-img" src="icons/standard.png" alt="Image 2">
            <div class="sidebar-item-text">Code of Conduct & Ethical Standards</div>
        </a>
    </div>
</div>

<div class="timeline">
    <h2>BY-LAWS<br><br></h2>
</div>

<h2>Article I FEES AND DUTIES</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-1">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. All bonafide members of the DMMMSU-SBO shall pay a total of two hundred pesos (Php 200.00) as SBO fee per school year, or one hundred pesos (Php 100.00) per semester.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 2. Out of the one hundred pesos (Php100.00) paid by a college student per semester, fifty pesos (Php50.00) shall accrue to the Regional SBO, thirty pesos (Php30.00) to the Provincial SBO and the remaining twenty pesos (Php20.00) shall be remitted to the DMMMSU-SBO.</div>
        </div>
      </div>
    </div>
    <div class="blog-slider__pagination"></div>
</div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article II ELECTION AND APPOINTMENT OF OFFICERS AND TENURE OF OFFICE</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-2">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. The Barangay Officers shall be elected annually in every class or section two (2) weeks after the start of classes</div>
        </div>
      </div>

      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 2. A new set of barangay officers in the college level maybe elected during the second semester as the need arises.</div>
        </div>
      </div>

    <!-- Third Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 3. The Regional, Provincial and Municipal Officers shall be elected by secret ballot. Municipal Officers shall be elected by the students from their departments. The provincial officers shall be elected by the students from the College or Institute, and the Regional Officers shall be voted upon by the students of the campus at large.</div>
        </div>
      </div>

    <!-- Fourth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 4. The election of Regional, Provincial and Municipal Officers shall be done simultaneously within the second week of September. The assumption of office, however, shall take place after the day of declaration and confirmation of the winning candidates.</div>
        </div>
      </div>

    <!-- Fifth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 5. The campaign period in all levels shall take place one week prior to the Election Day.</div>
        </div>
      </div>

    <!-- Sixth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 6. The DMMMSU-SBO officers except the cabinet secretaries and ex-officio members shall be elected through secret ballot in a convention called for this purpose within three (3) days after the regional elections. They shall be chosen by the elected CSBO officers.</div>
        </div>
      </div>

    <!-- Seventh Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 7. Unless removed or shall have resigned, a DMMMSU-SBO officer shall serve a
term of one year, that is from the date of his election until his successor have been elected in the next regular election, and eligible for one re- election to the same post. In case an elected officer graduates before his term ends, his term of office expires upon graduation.</div>
        </div>
      </div>

    <!-- Eight Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 8. The appointment of Cabinet Secretaries shall be co-terminous with the tenure of the appointing officer and they shall serve at the pleasure of the said officer.</div>
        </div>
      </div>

    <!-- Nineth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 9. The Cabinet Secretaries shall be appointed by the USC President. If any vacant position subsequently arises, the USC President has the power to reappoint.</div>
        </div>
      </div>

    <!-- Tenth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 10. All positions shall have a term of two (2) consecutive terms only except for the USC President.</div>
        </div>
      </div>
    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article III POWER, DUTIES AND RESPONSIBILITIES OF DMMMSU-SBO OFFICERS <br> AND ADVISERS</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-3">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 1. The President. The President shall:</h4> 
            a) Act as the Chief Executive Officer (CEO) of the organization; <br>
        <br>b) Implement the DMMMSU-SBO Constitution and By-laws and the rules and regulations promulgated by the USC; <br>
        <br>c) Call or preside over meetings of the USC. In his absence, the Vice President shall act as the presiding officer. In case both officers are absent, any USC Officer can be delegated to the chair by the general membership;<br></div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><br>d) Approve all financial transactions;
          e) Appoint the cabinet member after he takes his oath of office and create committees when the need arises; <br>
          <br>f) Initiate the planning of the annual leadership training anytime within the academic year;<br>
          <br>g) Present the periodic report to the USC in any of its regular meetings and an end-of-the-year report after termination of his term.</div>
        </div>
      </div>

    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><br>h) Represent the DMMMSU-SBO to the governing Board as provided for in the Higher Education Modernization Act (RA 8292); and <br>
          <br>i) Perform other duties and functions assigned to him by duly constituted authorities.</div>
        </div>
      </div>

    <!-- Second Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 2. The Vice President. The Vice President shall:</h4>a) Act as the presiding officer in the absence of or upon the request of the President;<br>
          <br>b) Assist the President in implementing the rules and regulations promulgated by the USC;<br>
          <br>c) Perform other duties and functions assigned to him by duly constituted authorities.
</div>
        </div>
      </div>

    <!-- Thrid Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 3. The Ethical Standards Officer (ESO). The ESO shall:</h4>a) Presided in all impeachment trials; <br>
          <br>b) Be guided by the Ethical Standards Manual.</div>
        </div>
      </div>

    <!-- Fourth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 4. The Executive Secretary. The Executive Secretary shall:</h4>a) Act as the custodian of all records; <br>
          <br>b) Coordinate with all secretaries; <br>
          <br>c) Take down notes during USC Meetings and reproduce copies of the minutes of meetings for the USC Members; <br>
          <br>d) Take other duties and functions assigned to him by the President.</div>
        </div>
      </div>

    <!-- Fifth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 5. The Secretary of Budget and Finance. The Secretary of Budget and Finance shall:</h4>a) Prepare the budgetary proposal of the organization; <br>
          <br>b) Disburse funds as approved by the President and the advisers of their organization;<br>
          <br>c) Prepare a financial report to be submitted to the USC during the annual meeting;</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><br>d) See to it that the USC Fund from the CSBO fund shall be remitted to the USC;<br> 
          <br>e) Certify the availability of funds in every resolution; <br>
          <br>f) Perform other duties and functions assigned to him by the President.</div>
        </div>
      </div>

    <!-- Sixth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 6. The Audit Commissioner. The Audit Commissioner shall:</h4>
          a) Examine the financial records and transactions of the organization and maintain an independent review and examination of the financial records of the USC; <br>
          <br>b) Conduct a quarterly inventory of all the properties and valuables of the USC; <br>
          <br>c) Perform other duties and functions assigned to him by the President.</div>
        </div>
      </div>

    <!-- Seventh Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 7. The Secretary of Information. The Secretary of Information shall:</h4>a) Shall issue press releases on matters pertaining to the organization; <br>
          <br>b) Coordinate with the Campus Student Publication Unit as well as the national and local media on matters relevant to the press releases of the organization; <br>
          <br>c) Shall perform other duties and functions assigned to him by the President.</div>
        </div>
      </div>

    <!-- Eight Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 8. Secretary of Student Affairs and Services (SAS). The SAS shall:</h4>a) Coordinate with the SAS Director about the activities of the students inside and outside the University;<br>
          <br>b) Assist in the coordination of activities of legitimate student organizations;<br>
          <br>c) Perform other duties and functions assigned to him by the President.</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><br>d) See to it that the USC Fund from the CSBO fund shall be remitted to the USC;<br> 
          <br>e) Certify the availability of funds in every resolution; <br>
          <br>f) Perform other duties and functions assigned to him by the President.</div>
        </div>
      </div>

      <!-- Nineth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 9. The Secretary of Sports and Youth Development. The Secretary of Sports and Youth Development shall:</h4>a) Plan and initiate the management of sports. <br>
          <br>c) Represent the students in the Sports Committee of the University;<br>
          <br>d) Perform other duties and functions assigned to him by the President.</div>
        </div>
      </div>

      <!-- Tenth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 10. The Secretary of Environmental Affairs shall:</h4>a) Plan, initiate and implement activities related to environment and sanitation; <br>
          <br>b) Perform other duties and functions assigned to him by the President.</div>
        </div>
      </div>

      <!-- Eleventh Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 11. The Secretary of Health and Wellness shall:</h4>a) create and implement projects, programs and activities related to health and wellness program and good well-being. <br>
          <br>b) Perform other duties and functions assigned to him by the President.</div>
        </div>
      </div>

      <!-- Twelveth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 12. The Secretary of Ways and Means shall:</h4>a) act on laws, policies, rules and procedures abiding the approved Constitution and By Laws of the organization in the university and all campuses. <br>
          <br>b) Perform other duties and functions assigned to him by the President.</div>
        </div>
      </div>

      <!-- Thirteenth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 13. The Secretary on Gender and Development shall:</h4>a) create and implement projects, programs and activities related to gender and development advocacies and become the voice of all genders at all matters in the university. <br>
          <br>b) Perform other duties and functions assigned to him by the President.</div>
        </div>
      </div>

      <!-- Fourteenth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 14. The Secretary on Linkages shall:</h4>a) create and look for partnerships and linkages with other organizations for projects, programs and activities. <br>
          <br>b) Perform other duties and functions assigned to him by the President.</div>
        </div>
      </div>

      <!-- Fifteenth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 15. The Ex-Officio Members shall:</h4>a) report students' concerns and accomplishments to their advisers; <br>
          <br>b) disseminate information or announcements regarding DMMMSU-SBO activities, programs and projects in their respective campuses; <br>
          <br>c) Perform other duties and functions assigned to him by the President.</div>
        </div>
      </div>

      <!-- Sixteenth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 16. The USC Advisers shall:</h4>a) supervise the smooth flow of USC-related students' activities, programs and projects; <br>
          <br>b) advise and suggests for the betterment of the organization, provide guidance, help and support to the organization, and give advice on matters concerning the administration and policies of the university;<br>
          <br>c) study proposals and projects adopted by the USC in line with policies of the University for endorsement to proper authorities for approval; and <br>
          <br>d) act as moderators in times of disagreements and unpleasant situations.</div>
        </div>
      </div>
      

    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article IV POWERS, DUTIES AND RESPONSIBILITIES OF REGIONAL OFFICERS</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-4">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 1. The Chairperson. The Chairperson shall:</h4>a) Act as the Chief Executive Officer (CEO) of the organization;<br>
          <br>b) Implement the DMMMSU SBO Constitution and By-laws and the rules and regulations promulgated by the CSC;<br>
          <br>c) Call or preside over meetings of the CSC. In his absence, the Vice President shall act as the presiding officer. In case both officers are absent, any CSC Officer can be delegated to the chair by the general membership;</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">d) Approve all financial transactions;<br>
          <br>e) Appoint the Committee Heads after he takes his oath of office and create additional committees when the need arises; <br>
          <br>f) Initiate the planning of the annual leadership training anytime within the period of midyear term;</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">g) Present the periodic report to the CSC in any of its regular meetings and an end-of-the-year report after termination of his term. <br>
          <br>h) Perform other duties and functions assigned to him by duly constituted authorities.</div>
        </div>
      </div>

      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 2. The Vice Chairperson. The Vice Chairperson shall:</h4>a) Act as the presiding officer in the absence of or upon the request of the Chairperson; <br>
          <br>b) Assist the Chairperson in implementing the rules and regulations promulgated by the CSC; <br>
          <br>c) Perform other duties and functions assigned to him/her by duly constituted authorities.</div>
        </div>
      </div>

       <!-- Third Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 3. The Secretary. The Secretary shall:</h4>a) Act as the custodian of all records; <br>
          <br>b) Coordinate with all secretaries;<br>
          <br>c) Take down notes during CSC Meetings and reproduce copies of the minutes of meetings for the CSC Members;<br>
          <br>d) Take other duties and functions assigned to him by the Chairperson.</div>
        </div>
      </div>

       <!-- Fourth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 4. The Treasurer. The Treasurer shall:</h4>a) Prepare the budgetary proposal of the organization;<br>
          <br>b) Disburse funds as approved by the Chairperson and the advisers of their organization;<br>
          <br>c) Make a financial report to be submitted to the CSC during the annual meeting; </div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">d) See to it that the CSC Fund from the CSBO fund shall be remitted to the CSC; <br>
          <br>e) Certify the availability of funds in every resolution; <br>
          <br>f) Perform other duties and functions assigned to him by the Chairperson.</div>
        </div>
      </div>

       <!-- Fifth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 5. The Auditor. The Auditor shall:</h4>a) Examine the financial records and transactions of the organization and maintain an independent review and examination of the financial records of the CSC; <br>
          <br>b) Conduct a quarterly inventory of all the properties and valuables of the CSC; <br>
          <br>c) Perform other duties and functions assigned to him/her by the Chairperson.</div>
        </div>
      </div>

       <!-- Sixth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 6. The Press Relation Officer (PRO). The PRO shall:</h4>a) Issue press releases on matters pertaining to the organization; <br>
          <br>b) Coordinate with the Campus Student Publication Unit as well as the national and local media on matters relevant to the press releases of the organization; <br>
          <br>c) Shall perform other duties and functions assigned to him by the Chairperson. </div>
        </div>
      </div>

       <!-- Seventh Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 7. The Business Manager. The Business Manager shall:</h4>Business Manager shall:
          a) Plan and initiate all business transactions of the organization;<br>
          <br>b) Coordinate with the Treasurer in all financial transactions of the organization; <br>
          <br>c) Perform other duties and functions assigned to him by the Chairperson.</div>
        </div>
      </div>

       <!-- Eight Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 8. The Supreme Governor. The Supreme Governor shall:</h4>a) Represent his co-governors in his campus of residence to the USC;<br>
          <br>b) Perform other duties and functions assigned to him by the Chairperson.</div>
        </div>
      </div>

       <!-- Nineth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 9. The Committee Heads. </h4> The CSC Committee Heads shall perform the duties assigned to them by the Chairperson to whom they are accountable. <br>
        <br> <i>Note: If the chairman is a graduating student, automatically the vice-chairman will take over the office during academic year. However, if the Vice Chairman is also a graduating student, the CSC will appoint among them to be the acting Chairman and Vice Chairman through a resolution. This will also be applicable to Provincial and Municipal Officers.</i></div>
        </div>
      </div>
      
    </div>
    <div class="blog-slider__pagination"></div>
</div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article V POWER, DUTIES AND RESPONSIBILITIES OF PROVINCIAL/MUNICIPAL OFFICERS</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-5">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 1. The Governor/Mayor. The Governor/Mayor shall:</h4>a) Act as the Chief Executive Officer (CEO) of the organization;<br>
          <br>b) Implement the DMMMSU SBO Constitution and By-laws and the rules and regulations promulgated by their organization;</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">c) Call or preside over meetings. In his absence, the Vice Governor/Vice Mayor shall act as the presiding officer. In case both officers are absent, any CSC Provincial/Municipal can be delegated to the chair by the general membership;<br>
          <br>d) Approve all financial transactions;<br>
          <br>e) Initiate the planning of the annual leadership training anytime within the period of summer vacation;</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">f) Present the periodic report to the CSC in any of its regular meetings and a year-end report after the termination of his term. <br>
          <br>g) Perform other duties and functions assigned to him/her by duly constituted authorities.</div>
        </div>
      </div>

      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 2. The Vice Governor/Vice Mayor. The Vice Governor/Vice Mayor shall:</h4>a) Act as the presiding officer in the absence of or upon the request of the Governor/Mayor;<br>
          <br>b) Assist the Governor/Mayor in implementing the rules and regulations promulgated by their organization;<br>
          <br>c) Perform other duties and functions assigned to him/her by duly constituted authorities.</div>
        </div>
      </div>

       <!-- Thrid Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 3. The Secretary. The Secretary shall:</h4>a) Act as the custodian of all records;<br>
          <br>b) Coordinate with all secretaries;<br>
          <br>c) Take down notes during meetings and reproduce copies of the minutes of meetings for the Members of the organization;<br>
          <br>d) Take other duties and functions assigned to him by the Governor/Mayor.</div>
        </div>
      </div>

       <!-- Fourth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 4. The Treasurer. The Treasurer shall:</h4>a) Prepare the budgetary proposal of the organization;<br>
          <br>b) Disburse funds as approved by the Governor/Mayor and the advisers of their organization;<br>
          <br>c) Prepare the financial report to be submitted to the organization during the annual meeting;</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">d) See to it that the organization fund from the CSBO fund shall be remitted to the organization;<br>
          <br>e) Certify the availability of funds in every resolution;<br>
          <br>f) Perform other duties and functions assigned to him by the Governor/Mayor.</div>
        </div>
      </div>

       <!-- Fifth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 5. The Auditor. The Auditor shall:</h4>a) Examine the financial records and transactions of the organization and maintain an independent review and examination of the financial records of the organization;<br>
          <br>b) Conduct a quarterly inventory of all the properties and valuables of the organization;<br>
          <br>c) Perform other duties and functions assigned to him by the Governor/Mayor.</div>
        </div>
      </div>

       <!-- Sixth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 6. The Press Relation Officer (PRO). The PRO shall:</h4>a) Issue press releases on matters pertaining to the organization;<br>
          <br>b) Coordinate with the Campus Student Publication Unit as well as the national and local media on matters relevant to the press releases of the organization; <br>
          <br>c) Shall perform other duties and functions assigned to him by the Governor/Mayor.</div>
        </div>
      </div>

       <!-- Seventh Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 7. The Business Manager. The Business Manager shall:</h4>a) Plan and initiate all business transactions of the organization;<br>
          <br>b) Coordinate with the Treasurer in all financial transactions of the organization;<br>
          <br>c) Perform other duties and functions assigned to him by the Governor/Mayor.</div>
        </div>
      </div>

       <!-- Eight Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 8. The Peace Officers. The Peace Officers shall:</h4>a) Maintain peace and order in his organization;<br>
          <br>b) Perform other duties and functions assigned to him by the Governor/Mayor.</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
</div>
<!-- END SLIDE -->
<div class="space"></div>


<div class="space"></div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="js/standards.js"></script>
</body>
</html>
