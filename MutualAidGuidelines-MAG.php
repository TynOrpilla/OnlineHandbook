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
    <style>
    .MAG{
        margin-left:25%;
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
        .section_p{
        justify-content:center;
        text-align:justify;
        width:900px;
        }

        .section_p2{
        justify-content:center;
        text-align:justify;
        width:600px;
        margin-left:24%;
        }
    
    .chapter_h2{
        left:10%;
    }
    .section_indent{
        justify-content:center;
        text-align:justify;
        text-indent:60px;
    }

    .letter_p{
        justify-content:center;
        margin-left:11%; 
        margin-bottom:10px;
        width:800px;
    }

    .flex_p{
        justify-content:center; 
        margin-bottom:15px;
        width:300px;

    }

    .flex_p{
        justify-content:center; 
        margin-bottom:15px;
        width:300px;
        margin-left:15px;
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
        font-size:20px;
        weight:bold;
        text-align:left;
        padding-bottom:10px;
        text-decoration:underline;
    }

    .section_indent span {
    font-weight: bold;
    }
    .two-column-container {
    display: flex;
    justify-content: space-between;
}

    .column {
        flex: 1;
    }

    </style>
</head>
<body class="MAG">

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
        <a href="MutualAidGuidelines-MAG.php">
            <img class="sidebar-item-img" src="icons/mutual.png" alt="Image 1">
            <div class="sidebar-item-text">MUTUAL AID GUIDELINES</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="annexes.php">
            <img class="sidebar-item-img" src="icons/annex.png" alt="Image 2">
            <div class="sidebar-item-text">ANNEXES</div>
        </a>
    </div>
</div>
<div class="timeline">
    <h2>MUTUAL AID GUIDELINES</h2>
    <p class="section_p2">(Approved as per BOR Resolution No. 2021-615 dated May 20, 2021)</p>
    <div class="space2"></div>
    <div class="space2"></div>
    <h4 class="section_h4">Purpose</h4>
    <div class="space3"></div>
    <p class="section_p">• To provide immediate financial assistance to every student in case of hospitalization, accident, and death.</p>
    <div class="space4"></div>
    <h4 class="section_h4">Amount to be Collected</h4>
<table>
  <thead>
    <tr>
      <th>Level</th>
      <th>Amount</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <th>Elementary/Secondary</th>
        <th>₱100 per School year</th>
    </tr>
    <tr>
        <th>Tertiary</th>
        <th>₱50.00 per Semester</th>
    </tr>
  </tbody>
</table>

<div class="space1"></div>
<p class="letter_p">• To be collected during the enrolment and to be paid at the cashier's office</p>
</div>

<div class="space"></div>
    <h4 class="section_h4">Benefits</h4>
<table >
  <thead>
    <tr>
      <th>Case</th>
      <th>Amount</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <th>Death except suicide (by the beneficiary)</th>
        <th>₱30,000.00</th>
    </tr>
    <tr>
        <th>Loss of one hand, one foot or sight of one eye</th>
        <th>₱10,000.00</th>
    </tr>
    <tr>
        <th>Loss of one or more fingers</th>
        <th>₱3,500.00</th>
    </tr>
    <tr>
        <th>Injury/illness which resulted to hospitalization (max)</th>
        <th>₱7,500.00</th>
    </tr>
    <tr>
        <th>Injury/illness but there is no need for hospitalization (max)</th>
        <th>₱4,000.00 </th>
    </tr>
  </tbody>
</table>

<div class="space1"></div>
<p class="letter_p">• If two or more of the stated cases occur in a particular semester, only the
condition with the highest benefit shall be given due merit.</p>

<div class="space"></div>

<h4 class="section_h4">Other Provisions</h4>
<div class="space3"></div>
    <p class="section_p">• All benefits to be awarded shall be recommended by the CSBO Chairman, 
        CSBO Adviser, Campus Physician, and the SAS Head.</p>
    <p class="section_p">• All necessary documents (medical certificate, official receipts, 
            prescription) shall be appended to the written recommendation to be approved by the SAS Director.</p>
    <p class="section_p">• Only one claim can be made per semester by tertiary students and two 
        claims by the elementary pupils and high school students within the prescribed school year.
    <p class="section_p">• Claims can be made until 3 months after the incident, except during the last quarter of the year.</p>
    <p class="section_p">• Claim for benefit ceases upon termination or discontinuance of studies.</p>
    
    <div class="space4"></div>

    <div class="two-column-container">
    <div class="column">
        <h4 class="section_h4">Coverage</h4>
        <div class="space3"></div>
        <div class="section">
            <p class="flex_p">•Year-round (January - December)</p>
            <p class="flex_p">• Tertiary students must have paid for the 2 semesters to avail the mutual aid during the midyear term
        </div>
    </div>
    <div class="column">
        <h4 class="section_h4">Pertinent Supporting Papers</h4>
        <div class="space3"></div>
        <div class="section">
            <p class="flex_p">• Death: Death certificate</p>
            <p class="flex_p">• Other cases:</p>
                <p class="flex_p2">• Medical Certificate</p>
                <p class="flex_p2">• Official Receipts</p>
                <p class="flex_p2">• Doctor's Prescription</p>
        </div>
    </div>
    </div>

    <h4 class="section_h4">Collection and Withdrawal of Funds</h4>
    <div class="space3"></div>
    <p class="section_p">• Collection of mutual aid fees shall be done by the respective campuses / units during enrolment.</p>
    <p class="section_p">• Since the granting of financial assistance is centralized the campus/units concerned shall remit their 
        collections to the Central Administration, under the account of the University Mutual Aid Fund.</p>
    <p class="section_p">• No withdrawal shall be allowed except in accordance with the purpose stipulated under the Mutual Aid 
        Fund Guidelines duly supported with the Mutual Aid Application Form.</p>
    <p class="section_p">• Payment of claims shall be made through regular disbursements in the form of check.</p>
    <p class="section_p">• Summary Report on claims should be submitted by the CSBO to the SAS Office every end of the semester.</p>

</div>
<div class="space"></div>
</body>
</html>
