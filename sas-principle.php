<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIGUIDE| Principles and Objectives</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/time.css">
    <link rel="stylesheet" href="css/calendar.css">
    <link rel="stylesheet" href="css/acad.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
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
			padding: 83px;
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
			padding-left: 13px;
			padding-right: 300px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            font-family: 'Futura Md BT', sans-serif;
            weight: 700;
		}
		.space {
			margin-bottom: 40px;
			margin-top: 40px;
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
        <a href="sas-principle.php">
            <img class="sidebar-item-img" src="icons/principle.png" alt="Image 1">
            <div class="sidebar-item-text">Principles and Objectives</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="sas-objectives.php">
            <img class="sidebar-item-img" src="icons/objective.png" alt="Image 2">
            <div class="sidebar-item-text">Objectives of the SAS Program</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="sas-sas.php">
            <img class="sidebar-item-img" src="icons/affairs.png" alt="Image 2">
            <div class="sidebar-item-text">Student Affairs and Services</div>
        </a>
    </div>
</div>
    

<div class="timeline">
    <h2>PRINCIPLES AND OBJECTIVES<br><br></h2>
</div>

<p>As we move forward in shaping the minds of our 21st century learners in the country and around the world, Don Mariano Marcos Memorial State University strives to deliver higher quality of services to its clienteles,  with a universal appeal. It is committed to develop world-class professionals in the field of education, engineering, information and communications technology, arts and sciences, management, agriculture and forestry, fisheries and veterinary medicine, psychology, and criminal justice.</p>

<p>The Office of the Student Affairs and Services (OSAS) is one of the most important avenues of public service in the University. It plays a major role in the transformation of human resources into productive, self-reliant citizens, and responsible leaders. In addition, it is established to coordinate and supervise services and programs that are concerned with non-academic experiences to attain total student development. Likewise, it provides an array of services devoted in serving the studentry to ensure that the loving and learning environment help students attain their academic goals. Lastly, it aims to enhance each student's experience with extra-curricular activities.</p>

<p>Student services and programs in the University are carried in a manner that is unified, meaningful, and collaborative with the academic support experiences of students to attain holistic student development. Academic support services include activities that relate to student welfare, student development and those that relate to institutional programs and services. These services are accessible to all who are qualified regardless of their demographic and personal characteristics.</p>

<p>Most importantly, student affairs and services professionals continuously strive to become globally competitive implementers of student services and programs through national and international training workshops and seminars. Collaborative partnerships with other professionals locally and abroad enable them to have greater perspectives of the best practices in the student affairs and services community. This is integral in the formulation of student-centered activities and programs of its 21st century clienteles.</p>

</body>
</html>
