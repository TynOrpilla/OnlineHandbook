<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIGUIDE| Code of Conduct & Ethical Standards </title>
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
  height: 150px;
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
  height: 270px;
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
  height: 300px;
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
  height: 300px;
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
  height: 550px;
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
  height: 300px;
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
  height: 300px;
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
    <h2>CODE OF CONDUCT AND ETHICAL STANDARDS FOR THE OFFICERS OF THE DMMMSU- SBO, ENUMERATIONG NORMS OF CONDUCT AND DUTIES OF OFFICERS AND MECHANICS AND/OR GUIDELINES FOR RECALL OR IMPEACHMENT, AND FOR OTHER PURPOSES<br><br></h2>
</div>

<p><i>Be it resolved by the University Student Council of the Don Mariano Marcos Memorial State University assembled:</i></p>

<h2>Sec. 1 TITLE.</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-1">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">This measure shall be known as the "Code of Conduct and Ethical Standards for Officers of the DMMMSU---SBO" a.k.a. "E.S.O. Code".</div>
        </div>
      </div>
    </div>
</div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Sec. 2 DECLARATION OF POLICY.</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-2">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">It is primordial policy of the DMMMSU-SBO to promote a high standard of ethics in its officialdom for student service that is beyond reproach. DMMMSU-SBO officers shall at all times be accountable to the students and shall discharge their duties with utmost responsibility, integrity, competence, and loyalty, act with social responsibility and justice, lead by example, and uphold students' interest over personal interest.</div>
        </div>
      </div>
    </div>
</div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Sec. 3 NORMS OF CONDUCT FOR DMMMSU-SBO OFFICERS.</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-3">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text"><h4>Every officer of the DMMMSU SBO shall observe the following standards of personal conduct in the discharge and execution of official duties:</h4>a) Commitment to students' interest. Officers shall uphold the common good of students over and above personal interest. All SBP resources and powers of respective offices of officers must be employed and used efficiently, effectively, honestly and economically to avoid wastage of SBO funds and revenues.</div>
        </div>
      </div>

      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">b) Proficiency. DMMMSU SBO officers shall perform and discharge their duties with the highest degree of excellence, professionalism, intelligence and skill. They shall enter student service with utmost dedication to duty. They shall endeavor to discourage wrong perceptions of their roles as dispensers or peddlers of undue patronage.</div>
        </div>
      </div>

       <!-- Thrid Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">c) Justness and sincerity. DMMMSU SBO officers shall remain true to the students at all times. They must act with justness and sincerity and shall not discriminate against anyone. They shall at all times respect the rights of others, and shall refrain from doing acts contrary to law, good morals, good customs, public policy, public order, public safety and public interest.</div>
        </div>
      </div>

       <!-- Fourth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">d) Political neutrality. DMMMSU SBO officers shall provide service to anyone without unfair discrimination and regardless of party affiliation or preference.</div>
        </div>
      </div>

       <!-- Fifth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">e) Responsiveness to students' needs. DMMMMSU SBO officers shall extend prompt, courteous, and adequate service to students in the delivery of basic services that the SBO offers. Unless, otherwise, provided information on their policies and procedures in clear and understandable language, ensure transparency of information, public consultations and hearings wherever appropriate, and encourage suggestions and feedbacks.</div>
        </div>
      </div>

       <!-- Sixth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">f) Nationalism and patriotism. DMMMSU SBO officers shall at all times be loyal to the Republic and to the Filipino people, promote the use of locally produced goods, resources and technology and encourage appreciation and pride of country and people.</div>
        </div>
      </div>

       <!-- Seventh Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">g) Simplicity and modesty. DMMMSU SBO officers shall comport themselves simply or modesty. They shall not indulge in extravagant or ostentatious display of power and influence in any form.</div>
        </div>
      </div>

       <!-- Eight Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">h) The Ethical Standards Officer or E.S.O. shall adopt positive measure to promote (1) observance of these standards, and (2) continuing research and experimentation or measures which provide positive motivation to DMMMSU SBO officers in raising the general level of observance of the standards.</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
</div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Sec. 4 DUTIES OF DMMMSU-SBO OFFICERS</h2>

<p>In the performance of their duties and/or functions as laid down in the Constitution and By-Laws, all DMMMSU SBO officers <br> are under obligation to:</p>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-4">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">a) Act promptly on letters and requests. All DMMMSU SBO officers shall, within ten (10) school days from receipt thereof, respond to letters, e-mails or other means of communication sent by the students. The reply must contain the action taken on the request.</div>
        </div>
      </div>

      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">b) Submit annual performance reports. All department mayors, college governors, campus chairpersons, the Supreme Governor and the University Student Council president shall, within thirty (30) school days from the last day of the DMMMSU SBO unit calendar, render a performance report of the DMMMSU SBO unit concerned. Such report shall be open to the student body within regular school hours.</div>
        </div>
      </div>

       <!-- Thrid Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">c) Process documents, papers, and resolutions expeditiously. All official papers and documents including resolutions must be processed and completed within a reasonable time from the preparation thereof and must contain, as far as practicable, not more than two (2) signatories therein. In the absence of duly authorized signatories, the officer next-in- rank of officer-in-charge shall sign for and in their behalf.</div>
        </div>
      </div>

       <!-- Fourth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">d) Act immediately on the students' personal transactions. All DMMMSU SBO officers must attend to any student who wants to avail for himself the services of their offices and must, at all times, act promptly and expeditiously.</div>
        </div>
      </div>

       <!-- Fifth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">e) Make documents accessible to students in general. All DMMMSU SBO documents must be made accessible to and readily available for inspection by the students within reasonable class hours.</div>
        </div>
      </div>

       <!-- Sixth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">f) Stand for or represent student constituents in legitimate issues involving interest or common good of students. All DMMMSU SBO officers are under sworn duty to take up the cudgels for their constituents in all legitimate issues where general interest and/or common good of students are at stake or, at the least, involved.</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
</div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Sec. 5 PENALTIES</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-5">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Any officer of the DMMMSU SBO committing any violation of the Code shall be punished after lawful hearing with recall or impeachment under the grounds or on the basis of the nomenclature of offenses provided for under the article on recall or impeachment laid down in the DMMMSU SBO Constitution and By-Laws; provided, that in case of unwarranted absences during meetings, only officers and/or members of the University Student Council shall be punishable by recall or impeachment in case they shall have incurred the prohibited number of unexcused absences during regular and/or special meetings of said Council; Provided further, that there is nothing in this Code which shall prohibit Regional, Provincial and Municipal levels of the DMMMMSU SBO from instituting measures or legislating rules and policies which compel attendance during meetings; provided furthermore, that nothing in this provision shall be constructed as a deprivation of the right of each level of the DMMMSU SBO to discipline its officers for disorderly behavior.</div>
        </div>
      </div>
    </div>
</div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Sec. 6 PROMULGATION OF RULES AND REGULATIONS, ADMINISTRATION <br> AND ENFORCEMENT OF THIS CODE</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-6">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">The Ethical Standards Officer shall have the primary responsibility for the administration and enforcement of this Code. He is hereby authorized to promulgate rules and regulations necessary to carry out the provisions of this Code. He may institute such actions and disciplinary measures against any officer or member of the University Student Council as may be warranted in accordance with this Code or the DMMMSU SBO Constitution and By-Laws; provided, however, that the USC may hold</div>
        </div>
      </div>

    </div>
</div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Sec. 7 PRESIDING OFFICER DURING RECALL OR IMPEACHMENT PROCEEDINGS</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-7">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">As provided for in the DMMMSU SBO Constitution and By-Laws, the Ethical Standards Officer shall preside over recall or impeachment proceedings. However, in his/her absence, disqualification or incapacity, or in case he or she is the one being proceeded against, then the President, or the Vice President, or any elective member of the Council chosen by the majority of members, in that order, shall preside.</div>
        </div>
      </div>

    </div>
</div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Sec. 8 DISQUALIFICATION OF COMPLAINANT OR SPONSOR FROM <br> TAKING THE RECALL OF IMPEACHMENT VOTE</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-8">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Any officer or member of the University Student Council who shall be complainant or sponsor of an impeachment or recall complaint being heard by said Council shall be barred from participating in the recall or impeachment vote. This is in compliance to the rule of equity or public policy that the complainant cannot be the judge at the same time. In case the recall or impeachment case is filed by a student who is not an officer or member of the University Student Council and no one from the Council shall agree to be the sponsor, then the Ethical Standards Officer shall allow the complaining student to prosecute his or her during recall or impeachment proceedings of the Council.</div>
        </div>
      </div>

    </div>
</div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Sec. 9 SEPARABILITY CLAUSE</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-2">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">If any position of this Code or the application of such provision to any person or circumstance is declared invalid, the remainder of the Code or the application of such provision to other persons or circumstances shall not be affected by such declaration.</div>
        </div>
      </div>

    </div>
</div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Sec. 10 REPEALING CLAUSE</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-1">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">All rules, regulations and promulgations or parts thereof inconsistent herewith are deemed repealed or modified accordingly, unless the same provide for a heavier penalty.</div>
        </div>
      </div>

    </div>
</div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Sec. 11 EFFECTIVITY CLAUSE</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-1">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">This Code shall take effect simultaneously with the effectivity of the amended DMMMSU-SBO Constitution and By-Laws.</div>
        </div>
      </div>

    </div>
</div>
<!-- END SLIDE -->
<div class="space"></div>

<div class="space"></div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="js/standards.js"></script>
</body>
</html>
