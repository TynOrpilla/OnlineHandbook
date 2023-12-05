<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIGUIDE| Study Organization Constitution and By-Laws</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet">
    <link href="sbo-sboc.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <h2>DMMMSU STUDENT BODY ORGANIZATION CONSTITUTION AND BY-LAWS<br><br></h2>
</div>

<h1>PREAMBLE</h1>

<p>We, the students of the Don Mariano Marcos Memorial State University, imploring the aid of Almighty God, in order </p>
<p>to establish a student organization that shall embody our love of democratic ideals and aspirations, promote the</p>
<p>common good and interest in the realization of camaraderie and help uplift students welfare in the attainment of the </p>
<p>conceived goals and mission of the University, do ordain and promulgate this Constitution.</p>

<br><br><br> <h2>Article I</h2>
<br><br> <h3>NAME AND ADDRESS OF THE ORGANIZATION</h3>

  <!-- START SLIDE -->
  <div class="blog-slider">
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

<br><br><br> <h2>Article II</h2>
<br><br> <h3>DECLARATION OF OBJECTIVES</h3>
  
<!-- START SLIDE -->
  <div class="blog-slider">
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

<br><br><br><h2>Article III</h2>
<br><br> <h3>BILL OF RIGHTS</h3>

<!-- START SLIDE -->
<div class="blog-slider">
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

    <!-- Tenth A. Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">Section 10.
            a. A bona fide student shall not be divested of the right of petition against an erring administration official, faculty member and/or non-teaching personnel of the University.</div>
        </div>
      </div>

    <!-- Tenth B. Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">b. The right of the student to seek support and protection from the DMMMSU-SBO shall be upheld.</div>
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

<br><br><br><h2>Article IV</h2>
<h3>MEMBERSHIP <br><br></h3>
<br><br> <p>Section 1. All bona fide students in the undergraduate courses or programs are members upon approval of the registration by the College Dean or Institute Director as the case may be.</p>

<br><br><br><h2>Article V</h2>
<br><br><h3>THE UNIVERSITY STUDENT COUNCIL</h3>

  <!-- START SLIDE -->
  <div class="blog-slider">
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
    <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">
          Section 5. The University SAS Director and the CSBO Adviser of the campus of origin of the elected President of the USC shall, in ex-officio capacities, act as moderator and adviser, respectively. They shall study proposals adopted by the USC in line with policies of the University for endorsement to proper authorities for approval. They shall also advise the USC on matters concerning the administration and policies of the university.</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->



</body>
</html>
