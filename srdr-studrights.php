<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIGUIDE| Academic Policies</title>
    <link href="https://fonts.cdnfonts.com/css/futura-md-bt" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/adam-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansserifflf" rel="stylesheet">
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
    <h2>STUDENTS' RIGHTS<br><br><br></h2>

<div class="row">
    <div class="column-left">
        <p class="left-align">The right to receive, primarily through competent instruction, relevant quality education in line with national goals and conducive to the full development as person with dignity.</p>
    </div>
    <div class="column-right">
        <div class="image-box">
            <img src="images/1.jpg" alt="Image Description">
        </div>
    </div>  
</div>

<div class="row">
<div class="column-right">
        <div class="image-box">
            <img src="images/2.jpg" alt="Image Description">
        </div>
    </div> 
    <div class="column-left">
        <p class="left-align">The right to choose freely their field of study subject to existing curricula and continue their course they are in up to graduation, except in cases of academic deficiency or violation of disciplinary regulations.</p>
    </div>
</div>

<div class="row">
    <div class="column-left">
        <p class="left-align">The right to school guidance and counselling services for making decisions and selecting the alternatives in fields or work suited to their potentials.</p>
    </div>
    <div class="column-right">
        <div class="image-box">
            <img src="images/3.jpg" alt="Image Description">
        </div>
    </div>  
</div>

<div class="row">
<div class="column-right">
        <div class="image-box">
            <img src="images/4.jpg" alt="Image Description">
        </div>
    </div> 
    <div class="column-left">
        <p class="left-align">The right to access to his own records, the confidentiality which the school shall maintain and preserve.</p>
    </div>
</div>

<div class="row">
    <div class="column-left">
        <p class="left-align">The right to be issued official certificates, diplomas, transcripts of records, grades, transfer credentials and other similar documents within 30 days from the date of request.</p>
    </div>
    <div class="column-right">
        <div class="image-box">
            <img src="images/5.jpg" alt="Image Description">
        </div>
    </div>  
</div>

<div class="row">
<div class="column-right">
        <div class="image-box">
            <img src="images/6.jpg" alt="Image Description">
        </div>
    </div> 
    <div class="column-left">
        <p class="left-align"> The right to publish student publications in line with approved policies and guidelines and to invite university/college accredited resource speakers during approved assemblies symposia and other student activities.</p>
    </div>  
</div>

<div class="row">
    <div class="column-left">
        <p class="left-align">The right to expression of opinions and suggestions and to effective channels of communications with appropriate academic and administrative bodies of the University.</p>
    </div>
    <div class="column-right">
        <div class="image-box">
            <img src="images/7.jpg" alt="Image Description">
        </div>
    </div>  
</div>

<div class="row">
<div class="column-right">
        <div class="image-box">
            <img src="images/8.jpg" alt="Image Description">
        </div>
    </div> 
    <div class="column-left">
        <p class="left-align">The right to form, establish, join, and participate in organizations/associations/ societies recognized by the school to foster their intellectual, cultural, spiritual and physical growth and development and for purposes not contrary to law.</p>
    </div>    
</div>

<div class="row">
    <div class="column-left">
        <p class="left-align">The right to be free from involuntary contributions except those approved by their organizations/associations or prescribed by higher authorities.</p>
    </div>
    <div class="column-right">
        <div class="image-box">
            <img src="images/9.jpg" alt="Image Description">
        </div>
    </div>  
</div>

<div class="row">
<div class="column-right">
        <div class="image-box">
            <img src="images/10.jpg" alt="Image Description">
        </div>
    </div> 
    <div class="column-left">
        <p class="left-align">The right to be informed of policies affecting he school in relation to region in particular and the country in general, through authorized representation in councils or committees as may be allowed by the Board.</p>
    </div>    
</div>

<div class="row">
    <div class="column-left">
        <p class="left-align">The right to receive reasonable protection within the school premises.</p>
    </div>
    <div class="column-right">
        <div class="image-box">
            <img src="images/11.jpg" alt="Image Description">
        </div>
    </div>  
</div>

<div class="row">
<div class="column-right">
        <div class="image-box">
            <img src="images/12.jpg" alt="Image Description">
        </div>
    </div> 
    <div class="column-left">
        <p class="left-align">The right to be informed of the rules and regulations affecting them.</p>
    </div>    
</div>

<div class="row">
    <div class="column-left">
        <p class="left-align">The right to participate in curricular and co-curricular activities.</p>
    </div>
    <div class="column-right">
        <div class="image-box">
            <img src="images/13.jpg" alt="Image Description">
        </div>
    </div>  
</div>

<div class="row">
<div class="column-right">
        <div class="image-box">
            <img src="images/14.jpg" alt="Image Description">
        </div>
    </div> 
    <div class="column-left">
        <p class="left-align">The right to due process of law.</p>
    </div>    
</div>

<div class="row">
    <div class="column-left">
        <p class="left-align">The right to be assisted by the school through current and adequate information on work opportunities.</p>
    </div>
    <div class="column-right">
        <div class="image-box">
            <img src="images/15.jpg" alt="Image Description">
        </div>
    </div>  
</div>

<div class="row">
<div class="column-right">
        <div class="image-box">
            <img src="images/16.jpg" alt="Image Description">
        </div>
    </div> 
    <div class="column-left">
        <p class="left-align">The right to receive medical and dental services as well as first aid services in case of emergency.</p>
    </div>    
</div>

<div class="row">
    <div class="column-left">
        <p class="left-align">Students have the right of freedom of speech, expression and assembly, for as long as the exercise is peaceful and it does not interfere with, obstruct or disrupt the operation of the University and does not violate the rights of others in accordance with existing laws.</p>
    </div>
    <div class="column-right">
        <div class="image-box">
            <img src="images/17.jpg" alt="Image Description">
        </div>
    </div>  
</div>


</div>



</body>
</html>
