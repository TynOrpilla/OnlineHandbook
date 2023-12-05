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
    .section_p{
        justify-content:center;
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
    <div class="space2"></div>
    <div class="space2"></div>
    <h1 class="article-title">ARTICLE I. RULES AND REGULATIONS ON STUDENT CONDUCT AND DISCIPLINE</h1>
    <div class="space1"></div>
    <h1 class="section-title">Section 1</h1>
    <div class="row">
        <div class=" column column-left">
            <p class="left-align">The provision of this code shall apply to all bona fide students of the Don Mariano Marcos Memorial State University.</p>
        </div>
        <div class="column column-right">
            <div class="video-container">
                <video controls>
                    <source src="your_video_path_here.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>  
    </div>
    <h1 class="section-title">Section 2</h1>
    <div class="row">
        <div class=" column column-left">
            <p class="left-align">All school personnel are mandated to enforce and supervise overall compliance to the provisions of this Code in their respective areas of responsibility. For the purpose of implementing University policies; rules and regulations and the provision of this Code, the President, Vice Presidents, Chancellors, Directors, Deans, Chairpersons, Faculty Members and Non- Teaching Personnel are deemed persons in authority. SBO officers are also deputized in the implementation through the guidance of their respective advisers.</p>
        </div>
        <div class="column column-right">
        <div class="video-container">
                <video controls>
                    <source src="your_video_path_here.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>  
    </div>
    <h1 class="section-title">Section 3</h1>
    <div class="row">
        <div class=" column column-left">
            <p class="left-align">A student under suspension shall not earn any credit during the period of his suspension. As such, he shall be marked absent in all affected classes. He shall not be allowed to join and participate in any student activity, nor he shall be permitted to enter the school premises or avail of school facilities.</p>
        </div>
        <div class="column column-right">
        <div class="video-container">
            <video controls>
                <source src="your_video_path_here.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    </div>
    <h1 class="section-title">Section 4</h1>
    <div class="row">
        <div class=" column column-left">
            <p class="left-align">A student who shall be found to be pregnant shall be advised to take a leave of absence until two months after her childbirth, primarily to save the
gestating mother from the stress of school activities for the benefit of the unborn child.</p>
        </div>
        <div class="column column-right">
        <div class="video-container">
                <video controls>
                    <source src="your_video_path_here.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>   
    </div>
    <h1 class="section-title">Section 5</h1>
    <div class="row">
        <div class=" column column-left">
            <p class="left-align">A student, even when outside the University premises, shall be subjected to corresponding disciplinary action and penalties under any of the following circumstances:</p>
        </div>
        <div class="column column-right">
        <div class="video-container">
                <video controls>
                    <source src="your_video_path_here.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>   
    </div>

<div class="space1"></div>
    <h3>a. Standards of Good Grooming and Uniform Policies</h3>
<div class="space1"></div>

<table border="1">
    <tr>
        <td rowspan="2">Offense</td>
        <td colspan="3">Penalty</td>
    </tr>
    <tr>
        <td>1st Offense</td>
        <td>2nd Offense</td>
        <td>3rd Offense</td>
    </tr>
    <tr>
        <td class="content-table1">5.1 Coming to class not in prescribed uniform.</td>
        <td class="content-table">Reprimand/warning</td>
        <td class="content-table">10 hours community service</td>
        <td class="content-table">1 week suspension</td>
    </tr>
    <tr>
        <td class="content-table1">5.2 Cross dressing bystudents of both sexes</td>
        <td class="content-table">Reprimand/warning</td>
        <td class="content-table">10 hours community service</td>
        <td class="content-table">1 week suspension</td>
    </tr>
    <tr>
        <td class="content-table1">5.3 Students hairstyles should be clean, combed, and neatly trimmed or fixed. Unconventional hair colors for males and females are not permitted. Male students are not allowed to sport long hair. Hair should not touch the collar or neckline of the uniform. The use of cosmetics, hairpins, pony tails, headbands, etc. by males is likewise not allowed.</td>
        <td class="content-table">Reprimand/warning</td>
        <td class="content-table">10 hours community service</td>
        <td class="content-table">1 week suspension</td>
    </tr>
</div>
</table>

<div class="space1"></div>
    <h3>b. Proper Decorum and Etiquette</h3>
<div class="space1"></div>

<table border="1">
    <tr>
        <td rowspan="2">Offense</td>
        <td colspan="3">Penalty</td>
    </tr>
    <tr>
        <td>1st Offense</td>
        <td>2nd Offense</td>
        <td>3rd Offense</td>
    </tr>
    <tr>
        <td class="content-table1">5.4 Verbal assult against fellow students</td>
        <td class="content-table">Reprimand/warning</td>
        <td class="content-table">10 hours community service</td>
        <td class="content-table">1 week suspension</td>
    </tr>
    <tr>
        <td class="content-table1">5.5 Committing acts of indecency in the use of electronic media (e.g. Facebook, Twitter, Instagram, blogs, etc.) which may include the use of indecent words, uploading of indecent picture/s or image/s, or those reflecting immoral behavior of himself/herself.</td>
        <td class="content-table">1 week suspension</td>
        <td class="content-table">2 weeks suspension</td>
        <td class="content-table">Suspension for the rest of the semester</td>
    </tr>
    <tr>
        <td class="content-table1">5.6 Any act of bullying, such as, but not limited to, the following:<br><br>
        • Any unwanted physical contact between the bully
            and the victim like punching, pushing, shoving, kicking, slapping, tickling, headlocks, inflicting school pranks, teasing, fighting, and the use of
            available objects as weapons;<br><br>
        • Any slanderous statement or accusation that causes the victim undue emotional distress like directing foul language or profanity at the target, name-
            calling, tormenting and commenting negatively on victim's looks, clothes, and body.</td>
        <td class="content-table">1 week suspension</td>
        <td class="content-table">2 weeks suspension</td>
        <td class="content-table">Suspension for the rest of the semester</td>
    </tr>
    <tr>
        <td class="content-table1">5.7 Acts or offenses that corrupt standards of instruction.</td>
        <td class="content-table">1 week suspension</td>
        <td class="content-table">2 weeks suspension</td>
        <td class="content-table">Suspension for the rest of the semester</td>
    </tr>
    <tr>
        <td class="content-table1">5.8 Forging or tampering school records or documents</td>
        <td class="content-table">1 week suspension</td>
        <td class="content-table">2 weeks suspension</td>
        <td class="content-table">Suspension for the rest of the semester</td>
    </tr>
    <tr>
        <td class="content-table1">5.9 Fraud and misinterpretation of facts</td>
        <td class="content-table">1 week suspension</td>
        <td class="content-table">2 weeks suspension</td>
        <td class="content-table">Suspension for the rest of the semester</td>
    </tr>
    <tr>
        <td class="content-table1">5.10 Cheating such as: plagiarizing, altering corrected test paper to gain undue
            advantage for oneself or others; impersonating another student, or allowing another person to take the examination, 
            or performing an academic or non-academic activity for another person without the consent of the proper University or 
            College authority; submitted manufactured, manipulated, or false result in research or study.</td>
        <td class="content-table">Score of zero on the specific test being taken and suspension for 1 week</td>
        <td class="content-table">Automatic grade of "70" on the subject and suspension for 2 weeks</td>
        <td class="content-table">Suspension for the rest of the semester</td>
    </tr>
    <tr>
        <td class="content-table1">5.11 Cheating during the administration of formative or summative assessments
            (i.e. performance tasks, written assessment, or recitation), or plagiarizing, or deliberately looking at another's
        examination paper, or talking or communicating with another without permission during the examination, or copying from another's 
        examination paper or report, or sending another to take the examination/course/ class requirement for himself/herself; selling of examination papers; 
        unauthorized possession of examination papers.</td>
        <td class="content-table">Score of zero on the specific test being taken and suspension for 1 week</td>
        <td class="content-table">Automatic grade of "70" on the subject and suspension for 2 weeks</td>
        <td class="content-table">Suspension for the rest of the semester</td>
    </tr>
    <tr>
        <td class="content-table1">5.12 Refusal to follow lawful orders of school authorities</td>
        <td class="content-table">2 weeks suspension</td>
        <td class="content-table">Suspension for the rest of the semester</td>
        <td class="content-table">Dismissal from the University</td>
    </tr>
</div>
</table>

<div class="space1"></div>
    <h3>c. Personal Responsibility and Integrity</h3>
<div class="space1"></div>

<table border="1">
    <tr>
        <td rowspan="2">Offense</td>
        <td colspan="3">Penalty</td>
    </tr>
    <tr>
        <td>1st Offense</td>
        <td>2nd Offense</td>
        <td>3rd Offense</td>
    </tr>
    <tr>
        <td class="content-table1"><h4>Drunkenness</h4><br>5.13 Drinking intoxicating alcoholic beverages within the University premises</td>
        <td class="content-table">Reprimand/warning</td>
        <td class="content-table">10 hours community service</td>
        <td class="content-table">1 week suspension</td>
    </tr>
    <tr>
        <td class="content-table1">5.14 Display of disruptive drunken behavior within the University premises</td>
        <td class="content-table">1 week suspension</td>
        <td class="content-table">2 weeks suspension</td>
        <td class="content-table">Suspension for the rest of the semester</td>
    </tr>
    <tr>
        <td class="content-table1">5.15 Smoking and/or vaping in non-smoking areas in the campus premises.</td>
        <td class="content-table">1 week suspension</td>
        <td class="content-table">2 weeks suspension</td>
        <td class="content-table">Suspension for the rest of the semester</td>
    </tr>
    <tr>
        <td class="content-table1">5.15 Smoking and/or vaping in non-smoking areas in the campus premises.</td>
        <td class="content-table">1 week suspension</td>
        <td class="content-table">2 weeks suspension</td>
        <td class="content-table">Suspension for the rest of the semester</td>
    </tr>
    <tr>
        <td class="content-table1"><h4>Physical Injuries</h4><br>5.16 Infliction of physical injuries to another person</td>
        <td class="content-table">1 week suspension</td>
        <td class="content-table">2 weeks suspension</td>
        <td class="content-table">Suspension for the rest of the semester</td>
    </tr>
    <tr>
        <td class="content-table1"><br>5.17 Infliction of serious physical injuries to another person where the victim required medical attention/ attendance</td>
        <td class="content-table">3 weeks suspension</td>
        <td class="content-table">Suspension for the rest of the semester</td>
        <td class="content-table">Dismissal from the University</td>
    </tr>
    <tr>
        <td class="content-table1"><br>5.18 Infliction of serious physical injuries where the victim was deformed and incapacitated</td>
        <td class="content-table">Dismissal from the University</td>
        <td class="content-table"></td>
        <td class="content-table"></td>
    </tr>
    <tr>
        <td class="content-table1"><br>5.19 Fighting, use of physical force or violence to settle issues, or infliction of physical injuries upon
        another student, faculty member, non- teaching employee, or stranger whereby the offender/s are students. Provided, that self-defense or
        defense of relative or stranger or defense of property shall exempt a proper party from
        punishment.</td>
        <td class="content-table">Dismissal from the University</td>
        <td class="content-table"></td>
        <td class="content-table"></td>
    </tr>
    <tr>
        <td class="content-table1"><br>5.20 Preventing or threatening any student or school personnel from
        entering the school premises or attending classes or discharging their duties.</td>
        <td class="content-table">3 weeks suspension</td>
        <td class="content-table">Suspension for the rest of the semester</td>
        <td class="content-table">Dismissal from the University</td>
    </tr>
    <tr>
        <td class="content-table1"><h4>Public Display of Affection</h4><br>5.21 PDA refers to the acts or gestures that are 
        sexually suggestive or romantic in nature, between or among persons of any sex being performed in location accessible to public view, such as, 
        but not limited to: intimate kissing, necking, cuddling another or allowing another to cuddle one's self, sitting on another's lap or allowing another 
        to sit on one's lap, resting the head on the lap/breasts or allowing another to rest on one's lap/ breasts; and other behaviors/ actions similar to the foregoing.</td>
        <td class="content-table">1 week suspension</td>
        <td class="content-table">2 weeks suspension</td>
        <td class="content-table">Suspension for the rest of the semester</td>
    </tr>
    <tr>
        <td class="content-table1"><br>5.22 Viewing of pornographic films and materials</td>
        <td class="content-table">1 week suspension</td>
        <td class="content-table">2 weeks suspension</td>
        <td class="content-table">Suspension for the rest of the semester</td>
    </tr>
    <tr>
        <td class="content-table1"><br>5.23 Any act of lasciviousness committed by a student upon students, teachers, non-teaching employees, or visitors of either sex</td>
        <td class="content-table">1 week suspension</td>
        <td class="content-table">2 weeks suspension</td>
        <td class="content-table">Suspension for the rest of the semester</td>
    </tr>
    <tr>
        <td class="content-table1"><br>5.24 Engaging in sexual intercourse inside the University territory</td>
        <td class="content-table">Dismissal from the University</td>
        <td class="content-table"></td>
        <td class="content-table"></td>
    </tr>
    <tr>
        <td class="content-table1"><h4>Drugs/ Narcotics</h4><br>5.25 Using, possessing, or peddling of narcotics or dangerous drugs or their derivatives</td>
        <td class="content-table">Dismissal from the University and the case shall be reported to proper government authorities</td>
        <td class="content-table"></td>
        <td class="content-table"></td>
    </tr>
    <tr>
        <td class="content-table1"><h4>Gambling</h4><br>5.26 Any student caught perpetrating acts of gambling of any form within the premises of the University</td>
        <td class="content-table">1 week suspension</td>
        <td class="content-table">2 weeks suspension</td>
        <td class="content-table">Suspension for the rest of the semester</td>
    </tr>
    <tr>
        <td class="content-table1"><h4>Fraternity/Initiations</h4><br>5.27 Hazing, whether inside or outside the school premises. Hazing refers to any physical 
        or psychological suffering, harm, or injury inflicted on a recruit, member, neophyte, or applicant as form of an initiation rite or practice made as a 
        prerequisite for admission or a requirement for continuing membership in fraternity, sorority, or organization including but not limited to paddling,
        whipping, beating, branding, forced calisthenics, exposure to the weather, forced consumption of food, liquor, beverage, drug and other substance, or any
        other brutal treatment or forced physical activity which likely adversely affects the physical and psychological health of the applicant. This shall also 
        include any activity, intentionally made or otherwise by one person alone or acting with others, that tends to humiliate or embarrass, degrade, abuse, or 
        endanger, by recruiting an applicant to do menial, silly, or foolish tasks (Bicameral Report on Anti-Hazing Act of 2018)</td>
        <td class="content-table">Dismissal from the University</td>
        <td class="content-table"></td>
        <td class="content-table"></td>
    </tr>
    <tr>
        <td class="content-table1"><br>5.28 Bringing, carrying, or possessing inside the campus of deadly weapons such as, but not limited to, firearms, explosives,
        lead pipes, "dos por dos," ice picks, and the like, as well as harmful chemicals and its by-products</td>
        <td class="content-table">Dismissal from the University</td>
        <td class="content-table"></td>
        <td class="content-table"></td>
    </tr>
    <tr>
        <td class="content-table1"><h4>Others</h4><br> 5.29 Non-segregation, littering and scattering of trash or other materials in the classroom, library, corridor 
        and other places in the University.</td>
        <td class="content-table">10 hours community service or suspension for 2 days</td>
        <td class="content-table">20 hours community service or suspension for 1 weeks</td>
        <td class="content-table">30 hours community service or suspension for 2 weeks</td>
    </tr>
    <tr>
        <td class="content-table1"><br>5.30 Violation of legally posted signs, such as "No Trespassing", "Keep off the Grass", "Off-Limits", and the like.</td>
        <td class="content-table">10 hours community service or suspension for 2 days</td>
        <td class="content-table">20 hours community service or suspension for 1 weeks</td>
        <td class="content-table">30 hours community service or suspension for 2 weeks</td>
    </tr>
    <tr>
        <td class="content-table1"><br>5.31 Connecting or disconnecting electrical wires, plumbing devices, or telecommunication and electronic devices,
        without permission from authorities concerned resulting to damage to life or property.</td>
        <td class="content-table">suspension for 1 weeks</td>
        <td class="content-table">suspension for 2 weeks</td>
        <td class="content-table">Suspension for the rest of the semester</td>
    </tr>
    <tr>
        <td class="content-table1"><br>5.32 Stealing of items and other property of students, staff, faculty in the campus.</td>
        <td class="content-table">suspension for 2 weeks and replacement of stolen item</td>
        <td class="content-table">Suspension for the rest of the semester replacement of stolen item</td>
        <td class="content-table">Dismissal from the University</td>
    </tr>
    <tr>
        <td class="content-table1"><br>5.33 Vandalism or the willful destruction of University property</td>
        <td class="content-table">suspension for 2 weeks and replacement of restoration of vandalized or destroyed property</td>
        <td class="content-table">suspension for 3 weeks and replacement of restoration of vandalized or destroyed property</td>
        <td class="content-table">Suspension for the rest of the semester and replacement of restoration of vandalized or destroyed property</td>
    </tr>
    <tr>
        <td class="content-table1"><br>5.34 In case of multiple offenses, the offense which carries the higher/highest penalty shall be imposed</td>
        <td class="content-table"></td>
        <td class="content-table"></td>
        <td class="content-table"></td>
    </tr>
</div>
</table>
    <div class="space1"></div>
    <h1 class="section-title">Section 6</h1>
    <p class="section_p">Offenses which violate the accepted norms of conduct and which are not provided for in this code shall be left to higher authorities for appropriate action.</p>
    <div class="space1"></div>
    <h1 class="section-title">Section 7</h1>
    <p class="section_p">Implementation of the sanctions to the offenses shall be done within official school days.</p>
    <div class="space1"></div>
    <h1 class="section-title">Section 8</h1>
    <p class="section_p">All notice of offenses and punishments shall be duly signed by the implementing authority and the offender. A copy of which shall be furnished to the parents and the SAS Office.</p>
    <div class="space1"></div>
    <h1 class="section-title">Section 9</h1>
    <p class="section_p">The procedure for the redress and settlement of complaints and grievances in the University shall conform to due process of law in order to ensure the highest degree 
        of fairness and justice to all concerned. To the greatest extent, however, all concerned should seek all remedies through counseling, arbitration and amicable settlement of conflicts. 
        In every case, the ultimate aim shall be the restoration of impaired human dignity and, where necessary, restoration of material damages. Sanctions and punishment shall 
        be meted out sparingly, taking into considerations the capacity of individual to learn and profit from their mistakes.</p>
    <div class="space1"></div>
</body>
</html>
