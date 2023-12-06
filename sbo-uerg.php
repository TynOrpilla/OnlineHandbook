<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIGUIDE| Uniform Election Rules & Guidelines of the DMMMSU-SBO </title>
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
  height: 300px;
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
  height: 450px;
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
  height: 200px;
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

#blog-slider-6 {
  width: 95%;
  position: relative;
  max-width: 800px;
  margin: auto;
  background: #fbffe8;
  box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
  padding: 25px;
  border-radius: 25px;
  height: 230px;
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
    <h2>UNIFORM ELECTION RULES AND/OR GUIDELINES OF THE DON MARIANO MARCOS MEMORIAL STATE UNIVERSITY STUDENT BODY ORGANIZATION (DMMMSU-SBO)<br><br></h2>
</div>

<p><i>Be it resolved by the University Student Council of the Don Mariano Marcos Memorial State University assembled:</i></p>

<h2>Article I QUALIFICATIONS AND DISQUALIFICATIONS OF OFFICERS</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-1">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. A candidate for officership shall not have a grade of "74 or lower," and/or "INC" and/or "DRP" mark in his academic subjects for the last two (2) semesters preceding the election or appointment, except for barangay officers. A student with "INC" grade may be allowed to run for officership provided that the completion requirements were satisfied prior to the filing of candidacy. NSTP shall not be included in the determination whether or not a candidate is qualified.</div>
        </div>
      </div>

      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 2. A prospective candidate who had been meted out suspension or any graver penalty by a competent authority shall be barred from filing his candidacy.</div>
        </div>
      </div>

       <!-- Thrid Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 3. A candidate shall be a bona fide undergraduate student in the campus where he is seeking for election for at least two (2) semesters immediately preceding the said election.</div>
        </div>
      </div>

       <!-- Fourth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 4. One who seeks office must have a regular load of at least 15 units; provided, that a lesser number of units shall be allowed if it is the regular load prescribed by the curriculum for the semester. Moreover, a candidate for CBSO officer may come from different colleges/institutes.</div>
        </div>
      </div>

       <!-- Fifth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 5. A first-semester graduating student shall be barred to run for office but shall be allowed to cast his vote.</div>
        </div>
      </div>

       <!-- Sixth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 6. A candidate who did not win in the election is barred to run again in any office within the academic year to give chance to other student leaders.</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
</div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article II CAMPAIGN</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-2">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. All candidates shall be in proper or prescribed uniform and wearing a valid ID during campaign.</div>
        </div>
      </div>

      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 2. The political party or group concerned, in behalf of its official candidates, shall secure a permit from the Chancellor and Campus COMELEC Chairperson to campaign.</div>
        </div>
      </div>

       <!-- Thrid Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 3. Candidates will be given the opportunity to campaign and present their platform for a given period of time. When face-to-face campaign will be possible, each political party shall be given a maximum period of 15 minutes to campaign in every classroom. This includes intermission number if any.</div>
        </div>
      </div>

       <!-- Fourth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 4. Campaign Paraphernalia <br>a) Campaign paraphernalia shall include but not limited to posters, a short clip (which consists of the name of the party, picture of candidates, name, course and year and their advocacies), pamphlets, sample ballots, stickers and media which consists of the name of the party, picture of the candidates, name, course and year and their advocacies. The use of posters and media shall be covered by the rules in the preceding subsections. <br>
        <br>b) Campaign posters shall have a maximum size of 4 feet by 5 feet to be posted only in a COMELEC designated area (onsite or online).</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">c) The use of mass media like social media, official web pages, and mobile texting is allowed however the following limitations shall be observed: <br>
          <br>  i. Derogatory remarks, malicious statements, defaming and demoralizing words against his/her fellow candidates is not allowed. <br>
          <br>  ii. The contents of the campaign must be limited to the position running for, credentials, platforms and experiences in leadership and public service. <br>
          <br>  iii. The use of media shall not violate existing laws of the land like the Cyber Crime Law and Related Crimes under the Revised Penal Code.</div>
        </div>
      </div>

       <!-- Fifth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 5. Mutilating, defacing, removing, or covering any campaign poster of another candidate shall be considered as an election offense.</div>
        </div>
      </div>

       <!-- Sixth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 6. Black propaganda or attack on the personal life of any candidate, virtual intimidation, cyber bullying and harassment by another candidate or party shall be banned to promote a high-level campaign; provided, that any charge proven to be based on truth or accuracy shall not be considered as black propaganda under this section, in as much as the electorate shall be clothed with the right to know about the fitness or quality of every candidate for the position he is running for.</div>
        </div>
      </div>

       <!-- Seventh Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 7. Campaign shall be limited within the premises or territorial jurisdiction of the school.</div>
        </div>
      </div>

       <!-- Eight Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 8. There shall be a campus grand rally, sponsored by the COMELEC, a day before the election.</div>
        </div>
      </div>

      <!-- Nineth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 9. There shall be no campaigning on the Election Day.</div>
        </div>
      </div>

      <!-- Tenth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 10. Any candidate or party who shall be recommended, endorsed, or sponsored by a faculty or staff member or any administration official or personnel shall be barred from electoral process.</div>
        </div>
      </div>

      <!-- Eleventh Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 11. Any candidate who shall be found guilty of deliberately violating any of the above provisions shall be summarily disqualified from running in any office.﻿</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
</div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article III VOTING</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-3">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. Casting of votes shall start at 8:00am and ends at 3:00pm. Voting precinct shall be the classroom.</div>
        </div>
      </div>

      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 2. Block or party voting shall not be permitted.</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
</div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article IV CANVASSING OF VOTES</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-4">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. Only COMELEC members or personnel, class advisers, and class captains shall be qualified to hold and/or handle the ballots and/or ballot boxes for the counting votes.</div>
        </div>
      </div>

      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 2. Only ballots bearing the registered name or names of the candidate in the certificate of candidacy shall be counted in his favor.</div>
        </div>
      </div>

       <!-- Thrid Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 3. Family or first name only shall be counted if the candidate is the sole bearer of the name in that position.</div>
        </div>
      </div>

       <!-- Fourth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 4. Minor error in the spelling of the name of the candidate shall not be a ground to consider the ballot void.</div>
        </div>
      </div>

       <!-- Fifth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 5. Mutilated, defaced or vandalized ballots shall be considered void.</div>
        </div>
      </div>

       <!-- Sixth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 6. Each party shall have at least one watcher in every precinct during the counting period.</div>
        </div>
      </div>

       <!-- Seventh Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 7. A candidate with no opponent shall garner at least 20% from the total votes casted to be declared winner.</div>
        </div>
      </div>

       <!-- Eight Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 8. In case of tie, the concerned candidates shall decide on how to break the deadlock with the guidance of the COMELEC.</div>
        </div>
      </div>

      <!-- Nineth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 9. A tally sheet shall be executed or signed by the COMELEC member or personnel, the class adviser and the class captain at the precinct level. Said tally sheet shall be delivered without delay to the college or provincial COMELEC for the certificate of canvass to be signed by the provincial COMELEC composed of department representatives. The certificates of canvass from the colleges shall be tallied for the campus official result which shall be executed by the chairman and members of the campus COMELEC.</div>
        </div>
      </div>

      <!-- Tenth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 10. Campuses can automate their SBO Elections provided that the following conditions shall be met: <br>
          <br>  a. An implementing rules and regulations or manual of the system shall be prepared and disseminated a month before the conduct of the election. <br>
          <br> b. The system shall undergo pilot testing or dry run to ensure its validity and reliability.</div>
        </div>
      </div>

      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">c. Computers, gadgets and internet connectivity are adequate to accommodate the number of voters per precinct. <br>
          <br>d. Training shall be provided by the system provider or developer to the COMELEC Officers and Members and Class Captains.</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
</div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article V PROCLAMATION AND PROTEST</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-5">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. Proclamation shall be done by the COMELEC 24 hours after the campus COMELEC shall have finished tallying the certificates of canvass from the colleges. Nonetheless, if a pre-proclamation protest is filed, the proclamation of the concerned candidate or candidates may be delayed depending upon the disposition of the issue or issues involved, but in no case that the resolution of the complaint or complaints go beyond twenty-four hours from the time of filing.</div>
        </div>
      </div>

      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 2. Any protest concerning the result of the canvassing or counting shall be in writing with all relevant evidence appended thereon, duly signed by the aggrieved party or candidate and filed with the campus COMELEC within 24 hours after the conclusion of tally by said campus COMELEC. An anonymous complaint shall be treated as a mere scrap of paper.</div>
        </div>
      </div>

       <!-- Thrid Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 3. The campus COMELEC sitting en banc shall decide summarily and speedily on the merits of election complaints and protests, without compromising due process of all parties involved.</div>
        </div>
      </div>

       <!-- Fourth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 4. All complaints related to the election of officers filed after the proclamation of the winner or winners shall be forever barred.</div>
        </div>
      </div>

       <!-- Fifth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 5. Lawyers or attorneys-at-law shall not be allowed to intervene in COMELEC proceedings.</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
</div>
<!-- END SLIDE -->
<div class="space"></div>

<h2>Article VI GENERAL PROVISIONS</h2>

<!-- START SLIDE -->
<div class="blog-slider" id="blog-slider-6">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 1. The campus COMELEC shall motu proprio or at the behest of the SAS Head, elect a faculty adviser or consultant who shall aid the poll body in the interpretation and implementation of these rules and guidelines for the smooth, orderly, and peaceful conduct of the balloting.</div>
        </div>
      </div>

      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 2. No campus or college or department official, faculty member or non- teaching staff shall be permitted to intercede, mediate, or get involved in the elections or other official activities or proceedings of the COMELEC.</div>
        </div>
      </div>

       <!-- Thrid Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 3. These rules and guidelines shall operate to repeal or supersede all existing ones, ad hoc or otherwise, in the three campuses of the Don Mariano Marcos Memorial State University, insofar as they run counter to or contradict this instant piece of legislation.</div>
        </div>
      </div>

       <!-- Fourth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 4. Any proposed amendment to these uniform election rules and/or guidelines shall be submitted to the Executive Secretary by any voting member of the USC. The amendment proposal may come from any sector of the SBO, but it shall be sponsored by at least a voting member of the USC to be acted upon by the council.</div>
        </div>
      </div>

       <!-- Fifth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 5. It shall take a majority vote of the USC members present and voting to pass and approve any amendment to this measure.</div>
        </div>
      </div>

       <!-- Sixth Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 6. Should any provision of this measure or any part thereof be declared invalid, the other provisions, so far as they are separable, shall remain enforced.</div>
        </div>
      </div>

       <!-- Seventh Slide for the Second Slider -->
       <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 7. This measure shall be effective starting from the Student Body Organization elections of School Year 2022-2023.</div>
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
