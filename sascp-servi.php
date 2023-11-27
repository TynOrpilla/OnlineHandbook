<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIGUIDE| Continuity Plan for Student Services</title>
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
    <h2>CONTINUITY PLAN FOR STUDENT SERVICES<br><br></h2>
</div>

<p>The delivery of various student services will be done via on-campus and online mode. On-Campus Access means that the service can be availed by the students during their once a month face-to-face meeting in the campuses or upon appointment schedule. Online Access means that the service can be used by students via the Internet and engagement is done through email, Facebook Messenger, or video conferencing applications like Google Meet, Zoom, Microsoft Teams or Facebook Messenger.
</p>

<h2>1 Student Welfare Services</h2>
<br>
<p>A. Information and Orientation Services</p>
<table>
  <tbody>
    <tr>
      <th></th>
      <th>Services</th>
      <th>On-Campus Access</th>
      <th>Online Access</th>
      <th>Remarks</th>
    </tr>

    <tr>
      <td>1</td>
      <td>Information and Orientation Services</td>
      <td>Printed information and orientation materials such as brochures, handouts, orientation packet, etc. to students are available.</td>
      <td>Soft copy of materials can be downloaded and accessed via the University website (Campus SAS and FB pages).</td>
      <td>Hard and soft copies are available in the SAS Office and in the University website.</td>
    </tr>

</table>

<br>
<p>B. Guidance and Counseling Services</p>
<table>
  <tbody>
    <tr>
      <th></th>
      <th>Services</th>
      <th>On-Campus Access</th>
      <th>Online Access</th>
      <th>Remarks</th>
    </tr>

    <tr>
      <td>1</td>
      <td>Individual Inventory</td>
      <td>An individual inventory form is issued by the college Guidance Counselor to students to accomplish.</td>
      <td>The Google Form link for the individual inventory is provided to students.</td>
      <td>Digitalization of the service. The Individual Inventory Record of each student is digitized.</td>
    </tr>

    <tr>
      <td>2</td>
      <td>Counseling & Consultation</td>
      <td>(The student will go to their respective Guidance Counselor for counseling.) <br><br>Visit to the Guidance Office for Counseling and other services are on appointment basis. <br><br>Minimum health standard will be observed in the Guidance Office (during counseling sessions.) <br><br>Remote psychological first aid; tele-mental health through mobile phone is conducted.</td>
      <td>Online Consultation, telecounseling is conducted by registered guidance counselors. <br><br>Remote psychological first aid; tele-mental health through mobile phone is conducted. <br><br>Conduct series of webinars for mental health and wellness using secured digital platforms.</td>
      <td>Online consultation may be scheduled with the College Counselor. <br><br>Policies or provisions on the collection of personal information must conform with Data Privacy Act.</td>
    </tr>

    <tr>
      <td>3</td>
      <td>Referral</td>
      <td>(Teacher and Peer) Referral forms are available at the Guidance Office. The referral may be submitted in a Drop Box located outside the office of the Guidance Counselor. <br><br>After careful assessment when case is beyond the expertise of the Counselor, necessary referrals will be made (i.e. School Physician, Psychologist)</td>
      <td>Referral is available through Google Form. <br><br>Help Lines for Referrals via SMS, Facebook Pages and Messenger are available.</td>
      <td>In order to ensure the reliability of the referral, vital information must be gathered in the Google Form. <br><br>Policies or provisions on the collection of personal information must conform with Data Privacy Act.</td>
    </tr>
    
    <tr>
      <td>4</td>
      <td>Appraisal: Suggested instrument: Penn University's CCAPS</td>
      <td>Questionnaire is floated by the Guidance Counselors during the last Face-to-Face meeting. <br><br>Students submit the accomplished form in the Drop Box located outside the Office of the Guidance Counselor.</td>
      <td>Create a Google Form for students to access the questionnaire. <br><br>Google Form link should be shared by the concerned Guidance Counselor to the concerned enrolled students.</td>
      <td>Students' official DMMMSU email address, Facebook Pages, contact numbers must be updated.</td>
    </tr>

    <tr>
      <td>5</td>
      <td>Routine Interview & Follow Up</td>
      <td>Counselor schedules face-to-face routine follow up interview.</td>
      <td>Reffered students are scheduled for Routine Interview via telephone or video call. <br><br>Students whose appraisal results indicate "red flags" will be followed up.</td>
      <td>Students' official DMMMSU email address, Facebook Pages, contact numbers must be updated.</td>
    </tr>

    <tr>
      <td>6</td>
      <td>College Admission Test</td>
      <td>Walk-In Applicants can submit their application for admission in the Drop Box located at the conspicuous places in the campuses.</td>
      <td>A Google Form was created to cater online applications.</td>
      <td>This mechanism was implemented last March 8, 2021 to June 30, 2021. <br><br>Screening of applicants was done through Interview via phone call. Applicants were notified via SMS and email.</td>
    </tr>
</table>

<br>
<p>C. Career and Job Placement Services</p>
<table>
  <tbody>
    <tr>
      <th></th>
      <th>Services</th>
      <th>On-Campus Access</th>
      <th>Online Access</th>
      <th>Remarks</th>
    </tr>

    <tr>
      <td>1</td>
      <td>Provide assistance and information to students in relation to career planning and in their educational and occupational exploration</td>
      <td>Brochures, and other printed materials on various possible job opportunities, tips on finding jobs, resume making and the like can be made available at the SAS Offices. <br><br>Establish the DMMMSU Trabaho Center.</td>
      <td>Conduct virtual fairs in cooperation with DOLE and other agencies. Establish the DMMMSU Trabaho Center. Conduct of webinars on personality development, resume writing, labor rights and conduct of virtual career fairs. </td>
      <td>The Personnel In-Charge of the Career & Job Placement can spearhead these activities in coordination with the different units in the University and other government agencies.</td>
    </tr>
</table>

<br>
<p>D. Economic Enterprise Development</p>
<table>
  <tbody>
    <tr>
      <th></th>
      <th>Services</th>
      <th>On-Campus Access</th>
      <th>Online Access</th>
      <th>Remarks</th>
    </tr>

    <tr>
      <td>1</td>
     <td>Can be but not limited to student cooperatives, entrepreneurial and income-generating projects and savings.</td>
     <td>Printed materials on topics like financial literacy, entrepreneurship and others will be made available for the students in hard and soft copies.</td>
     <td>Conduct of online activities like webinars and make available the materials through the website, social media, etc. </td>
     <td>This is usually done and organized by the student body organizations in the Colleges.</td>
    </tr>
</table>

<br>
<p>E. Student Handbook Development</p>
<table>
  <tbody>
    <tr>
      <th></th>
      <th>Services</th>
      <th>On-Campus Access</th>
      <th>Online Access</th>
      <th>Remarks</th>
    </tr>

    <tr>
     <td>1</td>
     <td>Review and revision of the student handbook</td>
     <td>Develop leaflets or brochures of the Student Handbook. <br><br>Provide hard copies of the New Student Code of Discipline to students. <br><br>Make hard copies accessible and available at the Campus Main Library, eLearning Resource Centers, Guidance Counselors offices, Student Body Organization Offices, and SAS officers.</td>
     <td>Develop an infographic of the content of the Student Handbook. <br><br>Make available an online copy of the Student Handbook through Google Sites and the University website.</td>
     <td>Digitize the Student Handbook which can be used for on-campus and online access. <br><br>Students' email, Facebook Account Names, contact numbers must be collected.</td>
    </tr>
</table>
<br><br><br>

<h2>2 Student Development</h2>
<br>
<p>A. Student Organization and Activities</p>
<table>
  <tbody>
    <tr>
      <th></th>
      <th>Services</th>
      <th>On-Campus Access</th>
      <th>Online Access</th>
      <th>Remarks</th>
    </tr>

    <tr>
     <td>1</td>
     <td>Accreditation of Student Organization</td>
     <td>Applicants must submit their application form and supporting documents at the Office of the Student Affairs and Services.</td>
     <td>Applicants must apply online through Google Forms and upload their supporting documents to the portal. <br><br>Student organizations conduct approved online activities.</td>
     <td>The signing of documents from their respective college may be done by the College Student Body Organization.</td>
    </tr>
</table>

<p>B. Leadership Training</p>
<table>
  <tbody>
    <tr>
      <th></th>
      <th>Services</th>
      <th>On-Campus Access</th>
      <th>Online Access</th>
      <th>Remarks</th>
    </tr>

    <tr>
     <td>1</td>
     <td>Conduct of programs and provision of opportunities to develop and enhance the leadership capabilities of the students on the personal and organizational level during the new normal.</td>
     <td>Provide printed materials on leadership training modules.</td>
     <td>Organize webinars on leadership trainings, provide online resources and allow students to participate as official representatives in online seminar-workshops as approved by proper authorities.</td>
     <td>USC Officers and Adviser and CSBO Officers and Advisers can also look for webinars and other online activities that they can participate in.</td>
    </tr>
</table>

<p>C. Student Council and Government</p>
<table>
  <tbody>
    <tr>
      <th></th>
      <th>Services</th>
      <th>On-Campus Access</th>
      <th>Online Access</th>
      <th>Remarks</th>
    </tr>

    <tr>
     <td>1</td>
     <td>Election of Officers</td>
     <td>Students may submit their votes through ballot boxes.</td>
     <td>Students vote through online mode using Google Form or a custom-made computer program.</td>
     <td>Vital student information must be recorded to ensure reliability of results through their official DMMMSU email accounts.</td>
    </tr>

    <tr>
     <td>2</td>
     <td>Induction of Officers of Student Body Organization and Student Organizations</td>
     <td>The Office of the Student Affairs will issue a Certificate of Recognition to organization's advisers. <br><br>University Student Council (USC) officers are elected and inducted in a face-to-face meeting observing minimum health standards.</td>
     <td>Induction ceremony may be done through video conferencing spearheaded by the Office of the Student Affairs.</td>
     <td>The induction of organizations may be streamed live in the official Facebook page of the university.</td>
    </tr>

</table>

</body>
</html>
