<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIGUIDE| Study Organization Constitution and By-Laws</title>
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
  height: 220px;
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
  height: 290px;
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
  height:200px;
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
  height: 300px;
  transition: all 0.3s;
  margin-top:2%;
  margin-right:21%;
}

#blog-slider-6 {
  width: 95%;
  position: relative;
  max-width: 800px;
  margin: auto;
  background: #fbffe8;
  box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
  padding: 25px;
  border-radius: 25px;
  height:380px;
  transition: all 0.3s;
  margin-top:2%;
  margin-right:21%;
}

#blog-slider-7 {
  width: 95%;
  position: relative;
  max-width: 800px;
  margin: auto;
  background: #fbffe8;
  box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
  padding: 25px;
  border-radius: 25px;
  height:390px;
  transition: all 0.3s;
  margin-top:2%;
  margin-right:21%;
}

#blog-slider-8 {
  width: 95%;
  position: relative;
  max-width: 800px;
  margin: auto;
  background: #fbffe8;
  box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
  padding: 25px;
  border-radius: 25px;
  height:320px;
  transition: all 0.3s;
  margin-top:2%;
  margin-right:21%;
}

#blog-slider-9 {
  width: 95%;
  position: relative;
  max-width: 800px;
  margin: auto;
  background: #fbffe8;
  box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
  padding: 25px;
  border-radius: 25px;
  height:300px;
  transition: all 0.3s;
  margin-top:2%;
  margin-right:21%;
}

#blog-slider-10 {
  width: 95%;
  position: relative;
  max-width: 800px;
  margin: auto;
  background: #fbffe8;
  box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
  padding: 25px;
  border-radius: 25px;
  height:280px;
  transition: all 0.3s;
  margin-top:2%;
  margin-right:21%;
}

#blog-slider-11 {
  width: 95%;
  position: relative;
  max-width: 800px;
  margin: auto;
  background: #fbffe8;
  box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
  padding: 25px;
  border-radius: 25px;
  height:390px;
  transition: all 0.3s;
  margin-top:2%;
  margin-right:21%;
}

#blog-slider-12 {
  width: 95%;
  position: relative;
  max-width: 800px;
  margin: auto;
  background: #fbffe8;
  box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
  padding: 25px;
  border-radius: 25px;
  height:400px;
  transition: all 0.3s;
  margin-top:2%;
  margin-right:21%;
}

#blog-slider-13 {
  width: 95%;
  position: relative;
  max-width: 800px;
  margin: auto;
  background: #fbffe8;
  box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
  padding: 25px;
  border-radius: 25px;
  height: 315px;
  transition: all 0.3s;
  margin-top:2%;
  margin-right:21%;
}

#blog-slider-14 {
  width: 95%;
  position: relative;
  max-width: 800px;
  margin: auto;
  background: #fbffe8;
  box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
  padding: 25px;
  border-radius: 25px;
  height: 315px;
  transition: all 0.3s;
  margin-top:2%;
  margin-right:21%;
}

#blog-slider-15 {
  width: 95%;
  position: relative;
  max-width: 800px;
  margin: auto;
  background: #fbffe8;
  box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
  padding: 25px;
  border-radius: 25px;
  height: 300px;
  transition: all 0.3s;
  margin-top:2%;
  margin-right:21%;
}
#blog-slider-16 {
  width: 95%;
  position: relative;
  max-width: 800px;
  margin: auto;
  background: #fbffe8;
  box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
  padding: 25px;
  border-radius: 25px;
  height: 280px;
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
  z-index: 20;
  right: 15px;
  width: 18px !important;
  text-align: center;
  left: auto !important;
  top: 10%;
  bottom: 2% !important;
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
        <a href="SBO-sboc.php">
            <img class="sidebar-item-img" src="icons/constitution.png" alt="Image 1">
            <div class="sidebar-item-text">Student Body Organizations Constitution</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="#">
            <img class="sidebar-item-img" src="icons/law.png" alt="Image 2">
            <div class="sidebar-item-text">By-Laws</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="#">
            <img class="sidebar-item-img" src="icons/elect.png" alt="Image 2">
            <div class="sidebar-item-text">Uniform Election Rules & Guidelines of the DMMMSU-SBO</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="#">
            <img class="sidebar-item-img" src="icons/standard.png" alt="Image 2">
            <div class="sidebar-item-text">Code of Conduct & Ethical Standards</div>
        </a>
    </div>
</div>

<div class="timeline">
    <h2>DMMMSU STUDENT BODY ORGANIZATION CONSTITUTION<br><br></h2>
</div>

<br><h1 class="middle-title">PREAMBLE<br></h1>

<p id="statement">We, the students of the Don Mariano Marcos Memorial State University, imploring the aid of Almighty God, in order to establish a student organization that shall embody our love of democratic ideals and aspirations, promote the 
    common good and interest in the realization of camaraderie and help uplift students welfare in the attainment of the conceived goals and mission of the University, do ordain and promulgate this Constitution.</p>

<br><br> <h2>Article I NAME AND ADDRESS OF THE ORGANIZATION</h2>

  <!-- START SLIDE -->
  <div class="blog-slider" id="blog-slider-1">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. The organization shall be known as the Don Mariano Marcos Memorial State University Student Body Organization (DMMMSU-SBO), composed of the University Student Council (USC), Campus Student Body Organizations (CSBO) and the Campus Student Councils (CSC).</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">
          Section 2. The DMMMSU-SBO is a non-stock, non-profit and non-sectarian organization of the students enrolled in DMMMSU.</div>
        </div>
      </div>

        <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 3. The main address and office shall be the Don Mariano Marcos Memorial State University-Central Administration, Bacnotan, La Union and there shall be sub- offices from the three (3) campuses and the OUS.</div>
        </div>
      </div>
    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article II DECLARATION OF OBJECTIVES</h2>
  
<!-- START SLIDE -->
  <div class="blog-slider" id="blog-slider-2">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. The organization shall endeavour to uphold and protect students' rights and welfare.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 2. The organization shall uphold the ideals, dignity and prestige of the university.</div>
        </div>
      </div>

        <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 3. Good moral values, personal discipline, love of country, civic consciousness, efficiency in all disciplines and comprehensive knowledge of the students on the basic law with respect to citizenship shall be fostered with outmost importance.</div>
        </div>
      </div>

          <!-- Fourth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 4. Harmonious relationship of students and duly constituted authorities shall be observed.</div>
        </div>
      </div>

          <!-- Fifth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 5. The practice of democratic living and legitimate group action shall be upheld.</div>
        </div>
      </div>

          <!-- Six Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 6. The training of students as future leaders of our country shall be undertaken as a fundamental activity.</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article III BILL OF RIGHTS</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-3">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. Every bona fide member of the DMMMSU-SBO shall enjoy the freedom of speech and expression subject to the limitations as may be provided by the rules and regulations of the University and the Constitution of the Philippines.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 2. The right to use school facilities or equipment which is of relevance to the total development of the students subject to prior approval of concerned school authorities shall never be undermined.</div>
        </div>
      </div>

        <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 3. Every student has the right to suggest improvement and procurement of necessary school facilities and equipment.</div>
        </div>
      </div>

          <!-- Fourth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 4. The right to express ideas freely through the use of school publication subject to the limitations as may be provided by the University rules and policies and the Campus Journalism Act (Republic Act No, 7079) shall never be abridged.</div>
        </div>
      </div>

          <!-- Fifth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 5. Members of the association shall be accorded with the right to be consulted and informed before the implementation of different programs and activities of the University together with the right of participation.</div>
        </div>
      </div>

          <!-- Sixth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 6. The right to assemble and petition for redress of grievances through just and democratic means subject to limitations provided by law shall not be impaired.</div>
        </div>
      </div>

    <!-- Seventh Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 7. The right to form or join organizations not contrary to the existing laws of the University and the country shall not be denied to any member of the association.</div>
        </div>
      </div>

    <!-- Eight Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 8. The free exercise and enjoyment of religious practice and worship, without discrimination or preference, shall forever be allowed. No religious test shall be required for the exercise of the students' rights.</div>
        </div>
      </div>

    <!-- Nineth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 9. The right of the students to be secured in their persons, papers and effects while within the University premises against unreasonable searches and seizures of whatever nature and for any purpose shall be inviolable.</div>
        </div>
      </div>

    <!-- Tenth  Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 10.</h4>
            a. A bona fide student shall not be divested of the right of petition against an erring administration official, faculty member and/or non-teaching personnel of the University. <br>
        <br>b. The right of the student to seek support and protection from the DMMMSU-SBO shall be upheld.</div>
        </div>
      </div>

    <!-- Eleventh Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 11. The right to be informed and the right of free access to personal and/or official records, school policies, and all such other matters directly or indirectly affecting the students shall never be impaired.</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article IV MEMBERSHIP</h2>
  <!-- START SLIDE -->
  <div class="blog-slider" id="blog-slider-4">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. All bona fide students in the undergraduate courses or programs are members <br> upon approval of the registration by the College Dean or Institute Director as the case may be.</div>
        </div>
      </div>
    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article V THE UNIVERSITY STUDENT COUNCIL</h2>

  <!-- START SLIDE -->
  <div class="blog-slider" id="blog-slider-5">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. The USC shall be the supreme policy-making body of the DMMMSU-SBO.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">
          Section 2. The USC Officers shall be the President, Vice President, the Ethical Standards Officer (ESO) and the appointed secretaries.</div>
        </div>
      </div>

        <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 3. In addition to the aforementioned USC Officers, the elected Regional Officers shall constitute the membership of the USC. The term membership as contemplated herein shall be taken to mean as officers with voting power.</div>
        </div>
      </div>

    <!-- Fourth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">
          Section 4. The cabinet shall be composed of the Executive Secretary and the secretaries of Student Affairs and Services, Environmental Affairs, Student Information and Communications Technology, Sports and Youth Development, Budget and Finance, Health and Wellness, Ways and Means, Gender and Development, and an Audit Commissioner. In case the cabinet member is not a Regional Officer as contemplated by Section 3 herein, said appointee shall not be eligible to vote.</div>
        </div>
      </div>

    <!-- Fifth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide" id="slider-5">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">
          Section 5. The University SAS Director and the CSBO Adviser of the campus of origin of the elected President of the USC shall, in ex-officio capacities, act as moderator and adviser, respectively. They shall study proposals adopted by the USC in line with policies of the University for endorsement to proper authorities for approval. They shall also advise the USC on matters concerning the administration and policies of the university.</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article VI THE CAMPUS STUDENT BODY ORGANIZATION (CSBO)</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-6">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. There shall be a CSBO in every campus including the OUS.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">
          Section 2. All bona fide students of the undergraduate courses or programs shall compose the CSBO in their respective campuses.</div>
        </div>
      </div>

        <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 3. The officers of the CSBO shall be the Regional Officers.</div>
        </div>
      </div>

    <!-- Fourth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">
          Section 4. The elective Regional Officers shall be the Chairperson, Vice Chairperson, Secretary, Treasurer, Auditor, Press Relation Officer (P.R.O.), Business Manager and elected Supreme Governor.</div>
        </div>
      </div>

    <!-- Fifth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">
          Section 5. There shall be nine (9) working committees in the CSBO, namely: a) Student Affairs and Services, b) Student Information, c) Sports and Development, d) Budget and Finance, e) Environmental Affairs, f) Ways and Means, g) Health and Wellness, h) Gender and Development, and i) Linkages, to be chaired by a Committee Head who shall be appointed by the CSBO Chairperson. In case the Committee Head is not a Regional Officer, a Provincial Governor or a Municipal Mayor, the appointee shall not be eligible to vote. In the exigency of governance, the CSBO Chairperson may form motu proprio or upon the recommendation of the CSC adhoc committee or committees.</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article VII THE PROVINCIAL, MUNICIPAL AND BARANGAY OFFICERS</h2>

  <!-- START SLIDE -->
  <div class="blog-slider" id="blog-slider-7">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. The Provincial Officers shall be the Governor, Vice Governor, Secretary, Treasurer, Auditor, Press Relation Officer (P.R.O.), Business Manager and two (2) Peace Officers.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">
          Section 2. A Supreme Governor shall be elected by the governors among themselves.</div>
        </div>
      </div>

        <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 3. The Municipal officers shall be the Mayor, Vice Mayor, Secretary, Treasurer, Auditor, Press Relation Officer (P.R.O.), Business Manager and two (2) Peace Officers.</div>
        </div>
      </div>

    <!-- Fourth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">
          Section 4. The Barangay Officers shall be composed of the classroom captain, three (3) Kagawads, a Secretary, a Treasurer and an Auditor.</div>
        </div>
      </div>

    <!-- Fifth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide" id="slider-7">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">
          Section 5. There shall be one (1) department adviser to be chosen by the Municipal Officers from among the faculty members of the department. In the same vein, the College SBO Adviser shall be elected by the Provincial Officers from the ranks of the college's faculty members. In any case, the elected faculty adviser must be with a permanent status and not one with designation to perform administrative function; provided that the prerogative to elect herein by the Municipal and Provincial Officers shall be exclusive. No prior or concurrent advisership shall be required as condition precedent for advisership under this section.</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article VIII THE CAMPUS STUDENT COUNCIL</h2>

  <!-- START SLIDE -->
  <div class="blog-slider" id="blog-slider-8">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. There shall be a CSC in every CSBO, including OUS.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">
          Section 2. The CSC shall be the legislative body of the CSBO, which shall be composed of the elective Regional Officers, appointed Committee Heads, Provincial Governors and Municipal Mayors.</div>
        </div>
      </div>

        <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide" id="slider-8">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 3. There shall be two advisers of the Regional Officers and the Campus Student Council, one to be chosen among the provincial SBO Advisers by the elective CSC Members and the other shall be the SAS Head. Any proposal to be adopted by the CSBO in line with the policies of the University shall be endorsed by the advisers to the proper authorities for approval. The term of office of the elected CSBO or CSC adviser is coterminous with the elective CSC Members.</div>
        </div>
      </div>
    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article IX QUALIFICATIONS AND DISQUALIFICATION OF OFFICERS</h2>

  <!-- START SLIDE -->
  <div class="blog-slider" id="blog-slider-9">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. A candidate for officership shall have no grade of 74 and lower and/or "INC" and/or "DRP" mark in his academic subjects for the last two (2) semesters attended preceding the election or appointment, except for the barangay officers. A student with "INC" grade may be allowed to run for officership provided that he has completed the requirements prior to the filing of his candidacy. NSTP shall not be included in the determination of whether or not a candidate is qualified.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 2. The DMMMSU-SBO is a non-stock, non-profit and non-sectarian organization of the students enrolled in DMMMSU.</div>
        </div>
      </div>

        <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 3. A candidate shall be a bona fide undergraduate student in the campus where he is seeking for election for at least two (2) semesters immediately preceding the election.</div>
        </div>
      </div>

    <!-- Fourth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 4. One who seeks office must have a regular load of at least 15 units; provided, that a lesser number of units shall be allowed if it is the regular load prescribed by the curriculum in the semester.</div>
        </div>
      </div>

    <!-- Fifth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 5. A first semester graduating student shall be barred to run as candidate but shall be allowed to cast his vote.</div>
        </div>
      </div>

    <!-- Sixth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 6. A candidate shall be prohibited to run or be appointed for more than one post in any Barangay, Municipal, Provincial, and Regional elections in a school year.</div>
        </div>
      </div>

    <!-- Seventh Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 7. A candidate who did not win in the election is barred to run again in any office within the academic year to give chance to other student leaders.</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article X COMMISION ON ELECTIONS (COMELEC)</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-10">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. The University COMELEC shall be composed of the Regional COMELEC Chairpersons and shall be elected among them. The other three (3) shall act as Commissioners.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 2. The Regional COMELEC shall be composed of one representative from each department of a College or Institute and a Regional COMELEC Chairperson shall be elected among them.</div>
        </div>
      </div>

        <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 3. The COMELEC shall adopt the Uniform Election Rules and/or Guidelines of the DMMMSU-SBO.</div>
        </div>
      </div>

          <!-- Fourth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 4. The COMELEC shall enforce and administer all laws relative to the conduct of election.</div>
        </div>
      </div>

          <!-- Fifth Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 5. The COMELEC shall announce the result of the election and proclaim the official winners.</div>
        </div>
      </div>

          <!-- Six Slide for the Second Slider -->
          <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 6. The COMELEC shall be the sole judge of all contests relative to the election return.</div>
        </div>
      </div>

    <!-- Seventh Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 7. The COMELEC officers shall have the same qualifications as those elective CSBO Officers and shall be selected by the SAS Head and/or SAS Facilitator.</div>
        </div>
      </div>

    <!-- Eight Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 8. The USC University and the Regional COMELEC Chairs and Commissioners shall continuously hold offices unless they graduate, resign, or impeached as the case may be.</div>
        </div>
      </div>

    <!-- Nineth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 9. A COMELEC officer shall not be allowed to hold appointment or run for any post in the SBO unless he resigns from the poll body prior to said candidacy or appointment.</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article XI VACANCIES AND SUCCESSION</h2>

  <!-- START SLIDE -->
  <div class="blog-slider" id="blog-slider-11">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. In case of permanent vacancy in the positions of the President, Regional Chairperson, Provincial Governor and Municipal Mayor due to election to higher office, refusal to assume office, disqualification, death or permanent incapacity to discharge the function of the office, the Vice President, Vice Chairperson, Vice Governor, and Vice Mayor as case may
            be, shall assume the unexpired term of the former.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 2. In case of permanent vacancy in the position of Vice President, Vice Chairperson, Vice Governor, and Vice Mayor as the case may be, a special election shall be conducted among the officers within the specific SBO level within five school days after the vacancy shall have taken place.</div>
        </div>
      </div>

        <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 3. In case of permanent vacancy in the posts of both President and Vice President, Chairperson and Vice Chairperson, Governor and Vice Governor, Mayor and Vice Mayor as the case may be, the Executive Secretary of the USC and the respective secretaries in the Regional, Provincial, Municipal levels shall act as pro tempore presiding officer and a special election shall be conducted within five school days after the occurrence of the vacancy.</div>
        </div>
      </div>

    <!-- Fourth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 4. In case of permanent void in other elective positions due to the abovementioned reasons, a special election shall be called promptly for the purpose of filing the same.</div>
        </div>
      </div>

    <!-- Fifth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 5. In the event of an elected Municipal Officer shall change his course of study during the period of his incumbency, a permanent vacancy shall be construed to have arisen from his post, and as such, the pertinent provision of Article XI shall apply. The rule shall be applicable, by analogy, to an elected provincial officer who shall shift to another college or a regional officer who shall change campus.</div>
        </div>
      </div>
      
    <!-- Sixth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 6. In case an incumbent officer goes out for on-the-job training, he shall file a leave of absence on or before the first day of such on-the-job training; otherwise, permanent vacancy shall be construed to have occurred and, as such, the pertinent provision of Article XI shall apply; provided, that on- the-job training is intended to be a generic term which necessarily includes practice teaching, practicum, off-campus training, and such other terms employed by DMMMSU Colleges or Institutes to denote off-University training, practice, or other activities intended towards gaining actual experience.</div>
        </div>
      </div>  

    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article XII ACCOUNTABILITY OF OFFICERS</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-12">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. Advocating the principle of special trust and confidence, the officers of DMMMSU-SBO shall serve with the highest degree of responsibility, integrity, loyalty, and efficiency and shall be accountable to the students of the University.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 2. The officers of the DMMMSU-SBO, by majority vote of all regular members of the USC, be removed from office by an impeachment trial presided by the Ethical Standards Officer or ESO.</div>
        </div>
      </div>

        <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 3. The grounds for impeachment or recall are loss of confidence, disloyalty to the organization, culpable violation of DMMMSU-SBO Constitution and By- Laws, dishonesty, oppression, misconduct in office and neglect of duties, incompetence, grave offenses involving moral turpitude and acts of lasciviousness, abuse of authority, misuse of organization funds, culpable violation of the Constitution and By-Laws and the Code of Conduct and Ethical Standards for the Officers of the DMMMSU-SBO and unauthorized absences for 3 consecutive or 5 cumulative regular meetings and SBO activities.</div>
        </div>
      </div>

    <!-- Fourth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 4. The following rules shall govern impeachment or recall proceedings:</h4> 
            <br>a. The impeachment or recall proceedings against an officer/s of the municipal, provincial, or regional levels, whichever is applicable, shall be initiated by way of a written petition or resolution signed by at least twenty-five percent (25%) of the voting members of the CSC as the case may be depending upon where the office sought to be removed are incumbent and shall be addressed to the ESO. Should the member/s or otherwise the officer/s sought to be removed belong to the USC, the petition or resolution shall be signed by at least thirty (30%) of voting members of the USC.</div>
        </div>
      </div>

    <!-- Fourth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><br>b. The ESO shall then convene a USC Meeting to consider the impeachment or recall of an elected officer. <br>
            <br>c. The officer against whom the impeachment or recall charge has been filed shall be given ample opportunity for defense before any impeachment or recall vote is taken.</div>
        </div>
      </div>
      
    <!-- Fourth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"> <br>d. A DMMMSU SBO officer impeached or recalled shall ipso facto be considered resigned or ousted from office and shall no longer assume any position in the student government and student organization at any level after the impeachment. <br>
            <br>e. The decision of the USC on the impeachment or recall charge is final and executory once the vote is finally taken.</div>
        </div>
      </div>  

    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article XIII MEETINGS</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-13">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. The DMMMSU-SBO shall have two types of meetings, namely regular and special.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 2. Regular meetings shall be held every month. The venues of meetings shall be designated or agreed upon during the first assembly immediately after the election of officers.</div>
        </div>
      </div>

        <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide" id="slider-8">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Section 3. Special Meetings</h4> <br>a. Special meetings of the USC may be called upon by the USC President or at least three (3) members of the USC and/or upon the request of at least two (2) Chairpersons as the need arises. <br>
        <br>b. Special meetings of the CSC may be called upon by at least three members of the CSC and/or upon the discretion of the chairperson if necessity so dictates.</div>
        </div>
      </div>

    <!-- Fourth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
       
       <div class="blog-slider__content">
   
         <div class="blog-slider__text">Section 4. Appointed members of the USC and CSC shall be allowed to participate in the discussion and deliberation although they are not eligible to vote on official issues taken up by the Council.</div>
       </div>
     </div>


    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article XIV QUORUM</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-14">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. If and whenever majority of all members in good standing is not obtained, the members voting and present may move and adopt themselves as quorum by a unanimous vote; provided however that the three (3) campuses and the OUS are represented by at least one-third of the number of officers in their respective Campus Student Body Organization.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 2. In case there is no quorum for two (2) consecutive meetings in the USC, and the same campus caused such absence of quorum, then the next meeting shall proceed as if quorum has been obtained.</div>
        </div>
      </div>

        <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide" id="slider-8">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 3. In meetings of Regional, Provincial, Municipal and Barangay Officers, a majority of the officers in good standing shall constitute a quorum to transact valid business. Less than a quorum can do no more than adjourn.</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article XV AMENDMENTS</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-15">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. Any proposed amendment to this Constitution and By-laws shall be submitted to the Executive Secretary by any voting member of the USC. The amendment proposal may come from any sector of the SBO, but it shall be sponsored by at least a voting member of the USC in order that it shall be acted upon by the Council.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 2. It shall take at least two-thirds vote of the USC members present and voting to pass and approve any amendment, provided there is a quorum.</div>
        </div>
      </div>

        <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide" id="slider-8">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 3. In case there is no quorum, the members may create a special committee to approve and pass any overture or proposition for amendment.</div>
        </div>
      </div>

    <!-- Fourth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide" id="slider-8">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 4. The USC, by vote of two-thirds of its members present and voting, and duly convened in a regular or special meeting, may transform itself into a constituent assembly to amend or change the Constitution and By-laws.</div>
        </div>
      </div>

    <!-- Fifth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide" id="slider-8">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 5. All subsequent amendments to this Constitution and By-laws shall take effect only upon the ratification by the Campus Student Councils and Class Captains all over the University campuses in a referendum/plebiscite called for the purpose. The quantum of vote needed to ratify shall be simple majority.</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article XVI MISCELLENEOUS PROVISIONS</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-16">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. Vested Rights. No right or remedy in favor of or against the DMMMSU-SBO, its members or officers nor any liability by the organization, its member or officers, shall be removed or impaired either by subsequent dissolutions of said organization or by any subsequent amendments or repeal of this Constitution and B-laws or any part thereof.</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 2. Repealing Clause. Except as expressly provided by this constitution, all previous constitution of this organization or any parts thereof inconsistent with any provision of this Constitution shall be deemed repealed.</div>
        </div>
      </div>

        <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 3. Separability Provision. Should any provision of this Constitution or any part thereof be declared invalid, the other provisions, so far as they are separable, shall remain enforced.</div>
        </div>
      </div>

        <!-- Fourth Slide for the Second Slider -->
        <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 4. Authority on Interpretation. When doubts and/or questions on the interpretation and application of this Constitution and By-laws arise, the USC shall interpret.</div>
        </div>
      </div>  

        <!-- Fifth Slide for the Second Slider -->
        <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 5. Delimitation on Future Amendments. Future amendments to this Charter and By-laws shall be no sooner than three (3) years after the most recent amendment.</div>
        </div>
      </div>

        <!-- Sixth Slide for the Second Slider -->
        <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 6. Effectivity Clause. This Constitution and By-laws or any amendment thereof shall take effect upon ratification in a general referendum/plebiscite by undergraduate students of the University who comprise the constituents or body politic of the DMMMSU SBO.</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->
<div class="space"></div>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="js/standards.js"></script>
</body>
</html>
