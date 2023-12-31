<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIGUIDE| Academic Policies</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet">
    <link rel="stylesheet" href="css/duties.css">
    <link rel="stylesheet" href="css/time.css">
    <link rel="stylesheet" href="css/calendar.css">
    <link rel="stylesheet" href="css/acad.css">
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
			width: 240px;
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
			padding: 95px;
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
			padding-right: 380px;
            text-align: center;
            text-decoration: none;
            font-size: 15px;
            font-family: 'Futura Md BT', sans-serif;
            weight: 700;
		}
		.space {
			margin-bottom: 50px;
			margin-top: 50px;
		}

        .row {
    display: flex;
    align-items: center;
    justify-content: center; 
    margin-left:7%;
    width:900px;
    
    }

    .column-left {
    flex: 2; 
    padding: 20px; 
    box-sizing: border-box; 
    width:800px;
    }

    .column-right {
    flex: 1; 
    padding: 20px; 
    box-sizing: border-box; 
    }

    .image-box {
    width: 100%; 
    height: auto; 
    }

    .image-box img {
    width: 100%; 
    height: auto; 
    border-radius:10%;
    }

    .column-left p {
    margin: 0; 
    }

    .image-box img {
    width: 100%;
    height: auto;
    border-radius: 10%;
    transition: transform 0.3s ease; /* Add transition for smooth effect */
    }

    .image-box img:hover {
    transform: scale(1.1); /* Scale the image by 10% on hover */
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
        <a href="srdr-studrights.php">
            <img class="sidebar-item-img" src="icons/rights.png" alt="Image 1">
            <div class="sidebar-item-text">STUDENTS' RIGHTS</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="srdr-studduties.php">
            <img class="sidebar-item-img" src="icons/duty.png" alt="Image 2">
            <div class="sidebar-item-text">STUDENTS' DUTIES & RESPONSIBILITIES</div>
        </a>
    </div>
</div>

<div class="timeline">
    <h2>DUTIES AND RESPONSIBILITIES OF STUDENTS<br><br><br></h2>
    <p>In addition to those provided for under existing laws, every student shall:</p>
</div>

<div class="cards">
  <div class="card" data-index="0">
    <div class="card__inner">
      <div class="card__content">
        <p class="card__description">
        Develop his potentials particularly by undergoing an education suited to his abilities in order that he may become an asset to his family and society.
        </p>
      </div>
    </div>
  </div>

  <div class="card" data-index="0">
    <div class="card__inner">
      <div class="card__content">
        <p class="card__description">
        Uphold the academic integrity of the University and achieve academic excellence and abide by the rules and regulations governing his academic responsibilities and moral integrity.
        </p>
      </div>
    </div>
  </div>

  <div class="card" data-index="0">
    <div class="card__inner">
      <div class="card__content">
        <p class="card__description">
        Promote and maintain the peace and order of the University by observing the rules of discipline and by exerting effort to attain the harmonious relationship with fellow students, the teaching and academic staff and other University personnel.
        </p>
      </div>
    </div>
  </div>

  <div class="card" data-index="0">
    <div class="card__inner">
      <div class="card__content">
        <p class="card__description">
        Participate actively in civic affairs and in the promotion of the general welfare, particularly in social, economic and cultural development of his community, and in the attainment of a just, compassionate and orderly society.
        </p>
      </div>
    </div>
  </div>

  <div class="card" data-index="0">
    <div class="card__inner">
      <div class="card__content">
        <p class="card__description">
        Exercise his right in the knowledge that he is answerable to any infringement or violation of the public welfare and of the rights of others.
        </p>
      </div>
    </div>
  </div>

<div class="spacio"></div>

<script src="registration.js"></script>


</body>
</html>
