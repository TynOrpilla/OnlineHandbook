<?php
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: admin_login.php');
    exit;
}

if (isset($_POST['logout'])) {
  // Unset all session variables
  $_SESSION = [];

  // Destroy the session
  session_destroy();

  // Redirect to the login page after logout
  header("Location: admin_login.php");
  exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$feedback_sql = "SELECT * FROM feedbacks ORDER BY feed_id DESC";
$feedback_result = $conn->query($feedback_sql);

$complaint_sql = "SELECT * FROM compform ORDER BY comp_id DESC";
$complaint_result = $conn->query($complaint_sql);



?>


<!DOCTYPE html>
<html>

<head>
    <title>Admin Page</title>
    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #46E068;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px;
            text-decoration: none;
            font-size: 25px;
            color: white;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: #006400;
            color: #ffffff;
        }

        .content {
            margin-left: 350px;
            padding: 20px;
            margin-top: 70px;
        }

        /* Styles specific to the content area */
        .feedback,
        .complaints {
            display: none;
        }

        .active {
            display: block;
        }

        .createacc img{
          width: 100px;
          margin-left: 70px;
          margin-bottom: 60px;
        }

        #logout{
          margin-top: 400px;
          padding: 10px;
          text-decoration: none;
          text-align: start;
          font-size: 25px;
          color: white;
          display: block;
          transition: 0.3;
          background-color: #46E068;
          border: none;
          width: 250px; 
         }

         .sidebar #logout:hover {
            background-color: #006400;
            color: #ffffff;
        }
        .content {
        margin-left: 350px;
        padding: 20px;
        margin-top: 70px;
        height: calc(100vh - 70px); /* Set content height minus top margin */
        overflow-x: none; /* Hide horizontal overflow */
        overflow-y: auto; /* Enable vertical scrollbar */
    }
   
    thead {
        position: sticky;
        top: 0;
        background-color: #0eab38;
        color: #ffffff;
    }

    tbody {
        max-height: 400px; /* Set your desired height */
        overflow-y: auto; /* Add vertical scrollbar if needed */
        display: block; /* Enable block display */
    }

          table {
              border-color: #0eab38;
              border-radius: 5px;
              margin-bottom:50px;
              background-color: white;
              border-style: none;
              border-color: transparent;
              margin-top: 50px;
              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* Adjust shadow values as needed */
              table-layout: fixed; /* Set table layout to fixed */
              width: 95%; /* Set table width to 100% */
              overflow-y: hidden; /* Add vertical scrollbar if needed */
              width: calc(100% - 20px); /* Adjust width to prevent horizontal overflow */
          }

          td,
          th {
              padding: 5px 10px; /* Adjust padding */
              text-align: left;
              height: 50px;
              white-space: nowrap; /* Prevent line breaks */
              overflow: hidden; /* Hide overflow content */
              text-overflow: ellipsis; /* Show ellipsis for overflow */
              
          }

          th{
            color:white;
          }
          
          #th-feed {
            width: 1030px;
            background-color: #46E068;
          }

          #th-id,
          #th-stud,
          #th-name,
          #th-com {
            background-color: #46E068;
          }

          thead tr {
            background-color: #0eab38;
            color: #ffffff;

          }
          

          td:nth-child(4) { /* 4th column, change the number as needed based on the column order */
            max-width: 720px; /* Set your desired width */
            white-space: normal; /* Allow text wrap */
            word-wrap: break-word; /* Allow word wrap for long words */
          }

          tbody tr:nth-child(odd) {
            background-color: #fffef0;
          }

          tbody tr:nth-child(even) {
            background-color: #fffcd7;
          }
          ::-webkit-scrollbar {
              width: 12px;
              height: 10px;
          }

          ::-webkit-scrollbar-track {
              background: #f1f1f1;
          }

          ::-webkit-scrollbar-thumb {
              background: #888;
              border-radius: 6px;
              
          }

          ::-webkit-scrollbar-thumb:hover {
              background: #555;
          }

          /* Styling for the labels */
            label {
                display: block;
                margin-bottom: 5px;
                color: #333;
            }

            /* Styling for the input fields */
            input[type="text"] {
                width: 20%;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                margin-bottom: 10px;
            }

            /* Placeholder style */
            input[type="text"]::placeholder {
                color: #999;
            }

            input[type="text"]:focus {
            outline: none; /* Remove default focus outline */
            border-color:#46E068; /* Change border color on focus */
            box-shadow: 0 0 5px #46E068; /* Add a subtle box shadow on focus */
        }

    </style>
</head>

<body>

    <div class="sidebar">

    <div class=" createacc">
			<img src="images/logo.png" alt="Logo" class="logo" />
		</div>
        <a href="#" onclick="openTab('feedback')">Feedback</a>
        <a href="#" onclick="openTab('complaints')">Complaints</a>
        <form method="post" action="">
            <button type="submit" name="logout" id="logout">LogOut</button>
        </form>
    </div>

    <div class="content">
        <div class="feedback active">
            <h2>Feedback</h2>
            <label for="feedbackSearch"></label>
            <input type="text" id="feedbackSearch" onkeyup="searchTable('feedbackTable', 'feedbackSearch')" placeholder="Search for ID...">
            <table id="feedbackTable" border="1">
                <tr>
                    <th id="th-id">ID</th>
                    <th id="th-feed">Message</th>
                </tr>
                <?php
                if ($feedback_result->num_rows > 0) {
                    while ($row = $feedback_result->fetch_assoc()) {
                        echo "<tr><td>" . $row["feed_id"] . "</td><td>" . $row["message"] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>No feedback found</td></tr>";
                }
                ?>
            </table>
        </div>

        <div class="complaints">
            <h2>Complaints</h2>
            <label for="complaintsSearch"></label>
            <input type="text" id="complaintsSearch" onkeyup="searchTable('complaintsTable', 'complaintsSearch')" placeholder="Search for ID...">
            <table id="complaintsTable" border="1">
                <tr>
                    <th id="th-id">ID</th>
                    <th id="th-stud">Student ID</th>
                    <th id="th-name">Name</th>
                    <th id="th-com">Complaint</th>
                </tr>
                <?php
                if ($complaint_result->num_rows > 0) {
                    while ($row = $complaint_result->fetch_assoc()) {
                        echo "<tr><td>" . $row["comp_id"] . "</td><td>" . $row["stud_id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["complaint"] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No complaints found</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>

    <script>
        function openTab(tabName) {
            var i, tabContent;
            tabContent = document.getElementsByClassName("content")[0].children;
            for (i = 0; i < tabContent.length; i++) {
                tabContent[i].classList.remove("active");
            }
            document.getElementsByClassName(tabName)[0].classList.add("active");
        }

        function searchTable(tableId, inputId) {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById(inputId);
    filter = input.value.toUpperCase();
    table = document.getElementById(tableId);
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0]; // Assuming ID is the first column
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.visibility = ""; // Show the row by adjusting visibility
            } else {
                tr[i].style.visibility = "collapse"; // Hide the row's content without affecting the layout
            }
        }
    }
}

    </script>
</body>

</html>
