<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIGUIDE| Academic Policies</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/time.css">
    <link rel="stylesheet" href="css/calendar.css">
    <link rel="stylesheet" href="css/acad.css">
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
			width: 270px;
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
			padding: 85px;
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
			padding-left: 9px;
			padding-right: 390px;
            text-align: center;
            text-decoration: none;
            font-size: 17px;
            font-family: 'Futura Md BT', sans-serif;
            weight: 700;
		}
		.space {
			margin-bottom: 50px;
			margin-top: 50px;
		}
        
        .space1{
            margin-bottom: 20px;
			margin-top: 20px;
        }

        .space2{
            margin-bottom: 10px;
			margin-top: 10px;
        }

        .space3{
            margin-bottom: 10px;
        }
        .row {
        display: flex;
        }

        .column {
        padding: 10px;
        box-sizing: border-box;
        text-align: justify;
        }

        .column-left {
            flex: 1; /* Adjust the proportion of the left column */
        }

        .column-right {
            flex: 1.4; /* Adjust the proportion of the right column */
        }
        
        .left-align{
            margin:auto 0;
        }

        .video-container {
            position: relative;
            width: 100%;
            max-width: 100%; /* Ensures the video doesn't exceed its container's width */
        }

        .video-container video {
            width: 100%;
            height: auto;
        }

        .section-title{
            margin-right:14%;
            margin-top:20px;
            text-align:center;
            margin-bottom:10px;
        }
        
        .article-title{
            font-size:25px;
        }

        table {
        margin: auto; /* Center the table */
    }

    td {
        text-align: center; /* Center text within cells */
        vertical-align: middle; /* Center vertically within cells */
        font-weight: bold; /* Set font weight to bold */
    }
    .content-table{
        font-weight:normal;
    }
    .content-table1{
        font-weight:normal;
        text-align:justify;
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
        <a href="scod-offense-penal.php">
            <img class="sidebar-item-img" src="icons/penalty.png" alt="Image 1">
            <div class="sidebar-item-text">Offenses and Penalties</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="scod-offense-penal_A1.php">
            <img class="sidebar-item-img" src="icons/rules.png" alt="Image 2">
            <div class="sidebar-item-text">Article 1.<br> Rules and Regulations on Student Conduct & Discipline</div>
        </a>
    </div>
    <div class="sidebar-item">
    <a href="scod-offense-penal_A2.php">
            <img class="sidebar-item-img" src="icons/committee.png" alt="Image 2">
            <div class="sidebar-item-text">Article 2. Committees and Proceedings</div>
        </a>
    </div>
</div>


<div class="timeline">
    <h2>OFFENSES AND PENALTIES<br><br></h2>
    <p>When a person registers as a student and is accepted in DMMMSU, a contract is established where he submits himself and agrees to comply with the rules and regulations of the University. Upon his enrollment, he assumes all responsibilities appertaining to his status as a student specifically towards the administration, staff, faculty members and fellow students.</p>
    <p>Every student must value and exercise self-discipline to earn due respect from fellow students, staff, faculty members, stakeholders and the administration. He should conduct and present himself in a decent manner and abide with generally accepted norms of behavior at all times. He should observe courtesy and proper decorum in dealing with his fellow students, faculty, personnel and the administration.</p>
    <p>Every student shall obey the laws of the land, the rules and regulations of the institution and the standard of a good society.</p>
    <p>The penalties are intended to inculcate the ideals of justice, to have a healthy respect for rules and authority, rectify unacceptable behavior and protect the good name both of the students and of the University.</p>

    <div class="space2"></div>

</body>
</html>
