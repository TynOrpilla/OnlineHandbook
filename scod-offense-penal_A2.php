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
            margin-left:20%;
            
        }

        table {
        margin: auto; /* Center the table */
    }

    td {
        text-align: center; /* Center text within cells */
        vertical-align: middle; /* Center vertically within cells */
         /* Set font weight to bold */
    }

    #long_td {
        width:400px;
        text-align: justify; /* Center text within cells */
        vertical-align: middle; /* Center vertically within cells */
         /* Set font weight to bold */
    }
    th{
        text-align: center; 
        font-weight: bold;
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

    .section_indent{
        justify-content:center;
        text-align:justify;
        text-indent:60px;
    }

    .letter_p{
        justify-content:center;
        text-align:justify;
        left:20%; 
        margin-bottom:10px;
    }

    .letter_p2{
        justify-content:center;
        text-align:left;
        left:20%; 
        margin-bottom:10px;
    }

    .section_h3{
        font-size:20px;
        weight:bold;
        text-align:center;
        padding-bottom:20px;
    }
    .section_h4{
        font-size:18px;
        weight:bold;
        text-align:left;
        padding-bottom:20px;
    }

    .section_indent span {
    font-weight: bold;
    }


    .flex-container {
        display: flex;
        flex-wrap: wrap;
        }

    .flex-column {
        flex: 1 1 50%; /* Two columns, adjust as needed */
        padding: 10px; /* Add padding between columns */
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

        .image-placeholder {
            position: relative;
            width: 300px; /* Set the width */
            height: 200px;
        }

        .image-placeholder img {
            width: 100%; /* Ensure the image takes up the entire container */
            height: 100%; /* Ensure the image takes up the entire container */
            object-fit: cover;
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
    <h1 class="article-title">ARTICLE II. COMMITTEES AND PROCEEDINGS</h1>
    <div class="space1"></div>
    <h3 class="section_h3">Section 1. Student Discipline Committees</h3>
   <p class="section_p">The Student Discipline Committees shall be formed at the start of the school year. The designation of all members shall cover a period of one (1) year. In case the student leaders (Governor, Mayor, and Captain) are parties of the case, the rule of succession shall apply.</p>
   <h4 class="section_h4">A. Perliminary Investigation Committee (PIC)</h4>
        <table>
        <tbody>
            <tr>
            <th>Chairpersons:</th>
            <th>Members:</th>
            </tr>

            <tr>
            <td>SAS Head</td>
            <td>CSBO Vice Chair<br>CSBO Adviser</td>
            </tr>

        </table>
        
        <div class="space1"></div>
        <h4 class="section_h4">B. Department Committee (DC)</h4>
        <table>
        <tbody>
            <tr>
            <th>Chairpersons:</th>
            <th>Members:</th>
            </tr>
<div class="space2"></div>
            <tr>
            <td>Department Chairperson</td>
            <td id="long_td">Municipal SBO Adviser Two(2)Student Leaders (The SBO Municipal Mayor and the Classroom Captain(s) of the student(s) who commmitted the offense)</td>
            </tr>

        </table>

        <div class="space1"></div>
        <h4 class="section_h4">C. College/Institute Committee (Co/IC)</h4>
        <table>
        <tbody>
            <tr>
            <th>Chairpersons:</th>
            <th>Members:</th>
            </tr>
<div class="space2"></div>
            <tr>
            <td>Dean/Director</td>
            <td id="long_td">College SBO Adviser<br>Two(2)Student Leaders (The SBO Municipal Mayor and <br>the Classroom Captain(s) of the student(s) who commmitted the offense)</td>
            </tr>

        </table>

        <div class="space1"></div>
        <h4 class="section_h4">D. Campus Committee (CC)</h4>
        <p class="section_p">CC shall be formed in all campuses, and it shall be under the general supervision of the SAS Head.</p>
        <table>
        <tbody>
            <tr>
            <th>Chairpersons:</th>
            <th>Co-chair</th>
            <th>Members:</th>
            </tr>
<div class="space2"></div>
            <tr>
            <td>Campus Student Discipline In-Charge</td>
            <td>SBO Head</td>
            <td id="long_td">Two (2) Faculty Members (or a Faculty Member and a Staff preferably with legal background) Two (2) student leaders, the CSBO Regional Chairperson 
                and SBO Governor of the student who committed the offense. However if there are two (2) or more student respondents and they belong to different colleges, 
                their SBO Governors shall become members of the committee Dean/Institute Director of the student(s) involved.</td>
            </tr>
        </table>

        <div class="space1"></div>
        <h4 class="section_h4">E. University Committee (UC)</h4>
        <table>
        <tbody>
            <tr>
            <th>Chairpersons:</th>
            <th>Members:</th>
            </tr>
<div class="space2"></div>
            <tr>
            <td>SAS Director</td>
            <td id="long_td"> In-Charge, Campus Student Discipline Committee<br>USC President<br>SAS Heads<br>USC Adviser</td>
            </tr>

        </table>
        <div class="space1"></div>

    <h3 class="section_h3">Section 2. Jurisdiction</h3>
   <p class="section_p">All cases involving discipline of students under these rules shall be subject to the jurisdiction of the DC, CoC/IC, CC or UC depending on the degree or circumstances of the offense or the frequency the offense is committed.</p>
        
   <div class="flex-container">
        <div class="flex-column">
            <div class="space1"></div>
            <h3>2.1 Department</h3>
            <div class="space3"></div>
            <p class="letter_p2">a. Reprimand</p>
            <p class="letter_p2">b. First offense as applicable</p>
            <p class="letter_p2">c. Students involved belong to the same department</p>
        </div>

        <div class="flex-column">
            <div class="space2"></div>
            <h3>2.2 College/Institute Committee</h3>
            <div class="space3"></div>
            <p class="letter_p2">a. Reprimand</p>
            <p class="letter_p2">b. First offense as applicable</p>
            <p class="letter_p2">c. Students involved belong to different departments in the College/Institute</p>
        </div>

        <div class="flex-column">
            <div class="space2"></div>
            <h3>2.3 Another Section</h3>
            <div class="space3"></div>
            <p class="letter_p2">a. Offenses with a penalty of more than one-week suspension</p>
            <p class="letter_p">b. Special cases</p>
            <p class="letter_p2">c. 2nd, 3rd offenses</p>
            <p class="letter_p2">d. Students involved belong to different Colleges/Institutes</p>
        </div>

        <div class="flex-column">
            <div class="space2"></div>
            <h3>2.4 University Committee</h3>
            <div class="space3"></div>
            <p class="letter_p2">a. Student(s) involved belong to different campuses.</p>
            <p class="letter_p2">b. The findings and recommendations of this Committee will be forwarded to the University President for appropriate action.</p>
        </div>
</div>
<div class="space2"></div>

    <h3 class="section_h3">Section 3. Filing of Charges</h3>
    <div class="space1"></div>

    <div class="row">
    <div class="column column-left">
        <p class="left-align">1. All complaints and violations involving discipline of students shall be filed in writing at the Office of the Chancellor through the Student Affairs and Services (SAS).</p>
    </div>
    <div class="column column-right">
        <div class="image-placeholder">
            <img src="your_image_path_here.jpg" alt="Image Placeholder">
        </div>
    </div>  
    </div>

    <div class="space3"></div>
    <div class="row">
    <div class="column column-left">
        <p class="left-align">2. The SAS Head shall notify the student concerned of the complaint filed against him, providing a copy of the same 
            with specific instruction to submit a written reply within 72 hours or three (3) days upon receipt thereof. If the third day falls on 
            a Saturday, Sunday or holiday, the same shall be submitted the next immediate school day.</div>
    <div class="column column-right">
        <div class="image-placeholder">
            <img src="your_image_path_here.jpg" alt="Image Placeholder">
        </div>
    </div>  
    </div>

    <div class="space3"></div>
    <div class="row">
    <div class="column column-left">
        <p class="left-align">3. The SAS Head notifies the Preliminary Investigation Committee (PIC) to evaluate the merits of the written complaints 
            or reported violations. If necessary, or upon the request of the student/s being complained of, the Committee may summon both parties 
            for possible mediation.</div>
    <div class="column column-right">
        <div class="image-placeholder">
            <img src="your_image_path_here.jpg" alt="Image Placeholder">
        </div>
    </div>  
    </div>

    <div class="space3"></div>
    <div class="row">
    <div class="column column-left">
        <p class="left-align">4. The report of the Committee shall be submitted to the Office of the Chancellor within 2 days. Should a probable cause exist, 
            the PIC recommends that a formal charge be issued by the Chancellor. Otherwise, the case shall be dismissed.</div>
    <div class="column column-right">
        <div class="image-placeholder">
            <img src="your_image_path_here.jpg" alt="Image Placeholder">
        </div>
    </div>  
    </div>

    <div class="space3"></div>
    <div class="row">
    <div class="column column-left">
        <p class="left-align">5. The Chancellor shall notify the student of the formal charge filed against him, providing a copy of the same with specific instruction
             to submit a written reply within 72 hours or three (3) days upon receipt thereof.</div>
    <div class="column column-right">
        <div class="image-placeholder">
            <img src="your_image_path_here.jpg" alt="Image Placeholder">
        </div>
    </div>  
    </div>

    <div class="space3"></div>
    <div class="row">
    <div class="column column-left">
        <p class="left-align">6. The Chancellor shall then refer the matter to the Committee with appropriate jurisdiction.</div>
    <div class="column column-right">
        <div class="image-placeholder">
            <img src="your_image_path_here.jpg" alt="Image Placeholder">
        </div>
    </div>  
    </div>

    <div class="space1"></div>
        <h3 class="section_h3">Section 4. Admission of Guilt</h3>
        <p class="section_indent">If the respondent admits his guilt, the Committee recommends the corresponding penalty to the Chancellor who 
            implements the decision. However, the Chancellor or the President as the case may be, has the authority to amend, modify or nullify 
            the penalty as recommended.</p>

    <div class="space1"></div>
        <h3 class="section_h3">Section 5. Trial</h3>
        <p class="section_indent">If the respondent does not admit his guilt, trial of the case by either the DC/COC/IC/CC/ UC shall commence.
             The DC/Co/IC shall resolve the case in three (3) days and the CC/UC in five (5) days after receipt of the written answer by the 
             Committee Chairperson.</p>
        <p class="section_indent"><span>Summary Procedure.</span>This scheme is being followed to expedite the resolution of cases without
         sacrificing due process as provided by the law wherein notice and hearing are afforded to both parties. Recommended penalties by the 
         Student Discipline Committee shall be implemented by the Chancellor, although the latter is authorized to modify the penalty before its implementation.</p>     


    <div class="space1"></div>
        <h3 class="section_h3">Sec. 6. Finality of Decision</h3>
        <p class="section_indent">The penalty as recommended by the DC or CC with the approval of the Chancellor, or the UC recommendation with the approval of the
             President other than dismissal from the University or suspension for 30 or more calendar days is non- appealable and shall immediately become final and executory.</p>

    <div class="space1"></div>
        <h3 class="section_h3">Sec. 7. Appeal</h3>
        <p class="section_indent">Only cases of dismissal from the University or suspension for more than 30 calendar days may be given cognizance for reconsideration 
            or appeal. All pleadings to this effect shall be filed with the Office of the President within 15 days from receipt of the decision. Otherwise, the decision 
            becomes final and executory.</p>
        <div class="space1"></div>

            <h1 class="article-title">ARTICLE IV. AMENDMENTS AND EFFECTIVITY</h1>
    <div class="space1"></div>

    <div class="flex-container">
        <div class="flex-column">
            <div class="space1"></div>
            <h3>Section 1</h3>
            <div class="space3"></div>
            <p class="letter_p">Except for matters especially provided by law, any provision in this Code may be amended at any regular meeting of the University Academic Council.</p>
        </div>
  
        <div class="flex-column">
            <div class="space1"></div>
            <h3>Section 2</h3>
            <div class="space3"></div>
            <p class="letter_p"> This Code shall take effect 15 days after the approval by the Board of Regents with which proper dissemination shall be effected.</p>
        </div>
    </div>

    <div class="space1"></div>

<h1 class="article-title">Revised Student Code of Discipline Review Team</h1>
<div class="space3"></div>
<table border="1">
  <tr>
    <td>VP for Academic Affairs </td>
    <td>Dr. Honorio C. Buccat </td>
</tr>
<tr>
    <td>SAS Director</td>
    <td>Dr. Shalimar L. Navalta </td>
</tr>
<tr>
    <td>SAS Head (SLUC)</td>
    <td>Prof. Jo Ann P. Rulla</td>
</tr>
<tr>
    <td>SAS Head (MLUC)</td>
    <td>Dr. Bernardo D. Lamadrid</td>
</tr>
<tr>
    <td>SAS Head (NLUC)</td>
    <td>Dr. Merlyn M. Aguinaldo</td>
</tr>
<tr>
    <td>SAS Head (NLUC)</td>
    <td>Dr. Merlyn M. Aguinaldo</td>
</tr>
<tr>
    <td>USC Adviser</td>
    <td>Dr. Joel C. Agullo</td>
</tr>
<tr>
    <td>USC President </td>
    <td>Mr. Daryl John A. Alminiana </td>
</tr>
<tr>
    <td>Supreme Governor</td>
    <td>Mr. Bryan Paul O. Valmonte</td>
</tr>

</table>

<div class="space1"></div>
<p class="letter_p">Revision Date: March 26,2021</p>
    <div class="space1"></div>

</body>
</html>
 