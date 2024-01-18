<?php
session_start();
?>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/about_us.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/basiclightbox/dist/basicLightbox.min.css">
    <script src="https://cdn.jsdelivr.net/npm/basiclightbox/dist/basicLightbox.min.js"></script>

    


</head>
<body>

<?php include 'about_nav_bar.php'?>

<div class="title_org">
    <h1>DON MARIANO MARCOS MEMORIAL STATE UNIVERSITY ORGANIZATIONAL STRUCTURE</h1>
</div>

<button onclick="toggleImage()" id="toggleButton">SAS</button>

<div class="org_1">
    <div class="image-container">
        <img src="images/org_1.png" alt="DMMMSU Organization" id="orgImage" onclick="openLightbox()" />
    </div>
    <img src="images/org_2.jpg" alt="Another Image" id="anotherImage" class="hidden" onclick="openLightbox()" />
</div>



<h1 class="hymn" style="text-align: center;">DMMMSU Hymn</h1>
  <div class="container">
    <div class="video">
    <iframe src="https://www.youtube.com/embed/MeUeoscQ-qQ?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="lyrics">
      <p>
        Hail beloved Alma Mater<br>
        Don Mariano Marcos Memorial State University<br>
        Your honored name will shine forever<br>
        Keep your glorious fame resounding far and near.<br>
        From thy portals we learn<br>
        Skills unknown before<br>
        And heads and hands keep on craving for more<br>
        <br>
        Oh hail beloved institution<br>
        Never shall we stand forlorn<br>
        From you a new era is born<br>
        To keep life smoothly moving on.<br>
        <br>
        You are our inspiration<br>
        In our quest for knowledge and wisdom<br>
        You fulfill a noble mission<br>
        In instruction, research and extension<br>
        You give the best solution<br>
        In transforming our land into a great nation<br>
        And though the years may come and go<br>
        Our love for you will grow<br>
        Beloved University<br>
        We are proud of you.<br>
        <br>
        We are proud of you.
      </p>
    </div>
  </div>



<section class="faq-section">
    <div class="faq">
      <h2>FAQ</h2>
      <ul>
      <li>
        <h4>What are the College Programs they offer at MLUC?</h4>
        <p>They offer Engineering, Information Technology, Criminology, and many more. <a href="courses.php" id="mluc-programs-link">View here for more details.</a></p>
      </li>
        <li>
          <h4>How do I enroll as a freshman student?</h4>
          <p id="form">You can ask for an FHE form given by the university or you can <a href="https://www.dmmmsu.edu.ph/forms/" id="mluc-programs-link">visit here </a>forms>>Admission and select SAR-F003.</p>
        </li>
        <!-- More questions and answers -->
      </ul>
    </div>
    <div class="feedback">
  <h2>Feedback</h2>
  <form action="submit_feedback.php" method="post">
    <div class="form-controls">
      <textarea name="feedback" placeholder="Please give us your feedback or questions"></textarea>
      <div class="form-actions">
        <button type="submit" name="submit" id="sub">Submit</button>
        <a href="complaint_page.php" id="complaintLink">Send complaint to us</a>
      </div>
    </div>
  </form>
</div>
>


<script> <?php if (isset($_SESSION['error_message'])) : ?>
      alert("<?php echo $_SESSION['error_message']; ?>");
      <?php unset($_SESSION['error_message']); // Clear the message after displaying ?>
    <?php endif; ?></script>


</div>
</section>

<div class="space"></div>
    
    <script src="js/about_us.js"></script>
</body>
</html>
