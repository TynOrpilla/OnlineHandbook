<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIGUIDE| Rationale</title>
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
        p {
            margin-right: 150px;
        }
        h3 {
            font-family: 'Futura Md BT', sans-serif;
            font-weight: bold;
            color: #0eab38;
            text-align: justify;
            margin-right: 150px;
        }
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
			width: 235px;
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
			padding: 50px;
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
			margin-top: 25px;
		}

        p {
            margin-right: 120px;
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
        <a href="sascp-ratio.php">
            <img class="sidebar-item-img" src="icons/rationale.png" alt="Image 1">
            <div class="sidebar-item-text">Rationale</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="sascp-obj.php">
            <img class="sidebar-item-img" src="icons/statement.png" alt="Image 2">
            <div class="sidebar-item-text">Statement of Objectives</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="sascp-perso.php">
            <img class="sidebar-item-img" src="icons/personnel.png" alt="Image 2">
            <div class="sidebar-item-text">Personnel Involved</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="sascp-servi.php">
            <img class="sidebar-item-img" src="icons/continuity.png" alt="Image 2">
            <div class="sidebar-item-text">Continuity Plan for Student Services</div>
        </a>
    </div>
</div>

<div class="timeline">
    <h2>RATIONALE<br><br></h2>
</div>

<p>The Don Mariano Marcos Memorial State University is one of the premier higher educational institutions in the Ilocos Region. It caters several students coming from various provinces outside La Union who want to pursue careers in education, management, information technology, engineering, arts and sciences, food trades, criminal justice education, agriculture, forestry, veterinary medicine, among others.</p>
<p>At DMMMSU, the Office of the Student Affairs and Services ensures the delivery of efficient and effective services. Based on the enrolment data for School Year 2020- 2021, there were 18,348 enrolled students distributed in the different campuses.</p>
<p>Since March 2020, the academic life of our students has been halted due to the threats brought by the COVID-19 pandemic. Also, it has restricted students' access to student services offered by the university. Despite of this, the Office of the Student Affairs and Services reached out to its clienteles through major social media platforms.</p>
<p>In April 2020, various activities were done in the different campuses. In Mid La Union Campus, it has extended its mental health program entitled "Kamusta Ka? Touch Your Feeling" to monitor students as to the effect of the enhanced community quarantine (ECQ) to them. Several interventions were launched through the official student publication - MLUC Voice, Campus SBO Facebook Pages, as well as various College Guidance Counselors Facebook Pages.</p>
<p>As we shifted from ECQ to Modified General Community Quarantine (MGCQ) as of this writing, we deemed it necessary to come up with a continuity plan in the delivery of the student development services for the incoming School Year 2022-2023. This plan emphasizes the need for digitalization of process and digitization of resources in the Student Affairs and Services.</p>
<p>Digitalization of processes refers to the adaption of existing technology as an alternative mode in the delivery of student services. This involves the utilization of offline and online strategies to ensure that students can still access services offered by the university. Services can be made available through the cloud or Internet using computers or mobile technology. As an example, the usual enrolment registration can be digitalized through online registration. Feedback surveys can be completed via Google Forms. Inquiries can be fully online instead of visiting the office personally.</p>
<p>Digitization describes the conversion of available data and information into computer-readable format which can be used by personnel of the Office of the Student Affairs and Services and students of the university. This is vital to support the digitalization of processes for student development services. The Student Handbook can be made available online or through Google Classroom. Student publications can be shared through Google Sites. Duly signed FHE forms can be scanned to minimize storage spaces in the offices.</p>
<p>Keeping the Office of the Student Affairs and Services accessible to students is very important in this time of pandemic. As the emphasis on learning to continue in the university through flexible learning modalities, the same is through with the delivery of student development services. There is a need to ensure accessibility and availability of services even though they are on-campus or in an online learning environment.</p>
<p>We, at the Office of the Student Affairs and Services, crafted this Continuity Plan as part of our directive to provide efficient and effective student services mandated by CHED Memo No. 8 Series of 2021.</p>



<br><br><br><br><br><br>

</body>
</html>
