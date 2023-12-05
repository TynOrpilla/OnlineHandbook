<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIGUIDE| Statement of Objectives</title>
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
        .navbar {
  background-color: #46E068;
  padding: 20px 10px;
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
          font-weight: 700;
      }

      .dropdown {
          float: left;
          overflow: hidden;
          font-family: 'Futura Md BT', sans-serif; 
          font-weight: 700;
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
          font-weight: 700;
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
          margin-right: 380px;
          margin-left:60px;
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
                padding: 33px;
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

            .blog-slider {
                width: 95%;
                position: relative;
                max-width: 800px;
                margin: auto;
                background: #fbffe8;
                box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
                padding: 25px;
                border-radius: 25px;
                height: 350px;
                transition: all 0.3s;
                margin-top:2%;
                margin-right:21%;
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
        <a href="ssafap-goals-objectives.php">
            <img class="sidebar-item-img" src="icons/goals.png" alt="Image 1">
            <div class="sidebar-item-text">Goals and Objectives</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="ssafap-personnel.php">
            <img class="sidebar-item-img" src="icons/group.png" alt="Image 2">
            <div class="sidebar-item-text">Personnel</div>
        </a>
    </div>
    <div class="sidebar-item">
        <a href="ssafap-services.php">
            <img class="sidebar-item-img" src="icons/services.png" alt="Image 2">
            <div class="sidebar-item-text">Services</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="ssafap-grants-scholarship.php">
            <img class="sidebar-item-img" src="icons/scholar.png" alt="Image 2">
            <div class="sidebar-item-text">Grants and Scholarships</div>
        </a>
    </div>
	<div class="sidebar-item">
        <a href="ssafap-student-assistanship.php">
            <img class="sidebar-item-img" src="icons/assist.png" alt="Image 2">
            <div class="sidebar-item-text">Student Assistantship Program</div>
        </a>
    </div>
</div>

<div class="timeline">
    <h2>STUDENT ASSISTANTSHIP PROGRAM<br><br></h2>
</div>

<h3>STUDENT LOAN PROGRAM (SLP) FOR TERTIARY EDUCATION (RA 10931, Sec. 8; IRR of RA 10931, Rule V)</h3>
<br><br>   <p><br>The Student Loan Program (SLP) aims to support further the cost of tertiary education or any part or portion thereof, 
<br>a student loan program for tertiary education is hereby established for all Filipino students.</p>

<h2>Qualifications:<br><br></h2>
<p><br>All Filipino students enrolling in postsecondary programs covered in Section 30 of the IRR are eligible to avail of the
<br> SLP services, provided, that the students:</p>


<!-- START SLIDE -->
<div class="blog-slider">
    <div class="blog-slider__wrp swiper-wrapper">
      <!-- First Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">1. qualify under the existing admission and retention standards of the HEIs, or have undertaken and/or qualify under the screening/assessment procedure, 
            trade test, or skills competency Page 33 of 51 evaluation of TVIS, or qualify under any other future qualification policies that the UniFAST Board may mandate;</div>
        </div>
      </div>
      <!-- Second Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">
          2. who availed of the loan during their post-secondary TVET or undergraduate studies may still avail of another cycle of student loan for their pursuit of their continuing studies including
           medicine and law, after they have fully paid the previously availed loans;</div>
        </div>
      </div>

        <!-- Third Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">3. who have not availed of the loan program during their postsecondary TVET or undergraduate studies may avail for it to pursue their continuing studies including medicine and law;</div>
        </div>
      </div>

      <!-- Fourth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">4. who did not avail of the loan program during their post-secondary TVET or undergraduate studies may avail of the loan program for the review
            expenses for licensure examinations administered by the Professional Regulation Commission (PRC);
          </div>
        </div>
      </div>
    
      <!-- Fifth Slide for the Second Slider -->
      <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">5. secured a Tax Identification Number from the Bureau of Internal Revenue;</div>
      </div>
    </div>

    <!-- Sixth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">6. secured a Social Security System Number from the SSS;</div>
        </div>
      </div>

    <!-- Seventh Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">7. have undergone financial counseling programs to be provided by the SLP partner;</div>
        </div>
      </div>

    <!-- Eigth Slide for the Second Slider -->
    <div class="blog-slider__item swiper-slide">
       
        <div class="blog-slider__content">
    
          <div class="blog-slider__text">8. have a designated guarantor (parent or guardian), if the student is availing of short-term loans.</div>
        </div>
      </div>

    </div>
    <div class="blog-slider__pagination"></div>
  </div>
<!-- END SLIDE -->

  <h2><br><br><br>Benefits:</h2>

  <p>Eligible student-borrowers shall receive loan amounts approved by the SLP partner, subject to SLP guidelines and <br>policies of the SLP partner, in the case of short-term loans, or subject to SLP guidelines and policies to be formulated <br> by the UniFAST Board, in the case of long-term loans.</p>
  <p>Loan proceeds intended to pay for tuition and other school fees and for services directly provided by the HEIS <br>and TVIS shall be directly paid to these institutions. Remaining loan proceeds shall be paid directly to the <br>student- borrower in reasonable intervals.</p>
  <p>All student-borrowers shall be subject to financial counseling programs and other support programs, as deemed <br>necessary for the students.</p>

  <h2><br><br><br>Loan Procedure:</h2>

  <p>The UniFAST Board shall issue detailed guidelines on the SLP. Provided, that the UniFAST Board shall pilot-test <br>
    more than one design of both the short-term and long-term SLP to determine the most appropriate <br>
    and prudent designs for the country</p>

  <h2><br><br><br>Repayment of Long-Term Loans:</h2>

  <p>Repayment of the long-term loan amount will commence once the beneficiary secures any gainful employment with <br>
    compensation, remuneration, or earnings that reach the Compulsory Repayment Threshold (CRT), which shall be <br
    >set and periodically reviewed by the UniFAST Board. The UniFAST Board shall also formulate detailed guidelines<br>
     on the repayment procedures.</p>
  <p>Repayment shall be effected by incorporating a portion of the loan amount or a percentage thereof in the employees'<br>
    monthly Social Security System (SSS) or Government Service Insurance System (GSIS) contribution, as the case may be, <br>
    based on a reasonable schedule of repayment and interest rates as may be formulated by the UniFAST Board.<br>
    The UniFAST Board, in consultation with relevant agencies, shall formulate loan repayment guidelines for loan<br> 
    beneficiaries whose earnings are not covered by the GSIS and the SSS programs, including those of overseas Filipino <br>
    workers (OFWs), emigrants, and self-employed persons and professionals (SEPs).</p>   
   <p>Pursuant to Section 15(r) of RA No. 10687, the UniFAST Board shall develop an efficient tracking system of <br>
    Student-Borrowers of long-term loans, in addition to a system of disbursement and collection of payments, <br>
    including entering into agreements with the Bureau of Internal Revenue (BIR), GSIS, SSS, National Bureau of Investigation <br>
    (NBI), Department of Foreign Affairs (DFA), Philippine Overseas Employment Administration (POEA), Bureau of Immigration <br>
    (BI), Overseas Workers Welfare Administration (OWWA), Bangko Sentral ng Pilipinas (BSP), Bankers Association of the <br>
    Philippines (BAP), Credit Information Corporation (CIC), private and public banks and banking intermediaries, credit<br>
    information bureaus, and other government financial institutions, inclusive of investigating and checking the whereabouts <br>
    of delinquent student-borrowers, and setting up mechanisms for blacklisting of defaulting student-borrowers in application <br>
    for loans, credit cards, and other credit facilities.
   </p>       

   <h2><br><br><br>Guidlines and Policies:</h2>

   <p>The UniFAST Board, in consultation with relevant agencies, shall develop an SLP handbook, which shall contain guidelines <br>
   and policies on the determination of loanable amounts, applicable interest rates, repayment procedures, collection procedures,<br>
    tracking of student borrowers, and quality standards.</p>
    <br><br><br><br><br><br>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/standards.js"></script>

</div>
</body>
</html>
