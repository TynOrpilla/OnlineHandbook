<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" href="css/admin_login.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bauhaus+93&display=swap">

<style>
		body {
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    transition: all 0.5s ease-in-out;
    overflow: hidden; /* Hide scrollbars */
}

		.page {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		opacity: 0;
		transform: translateX(100%);
		transition: opacity 0.5s ease, transform 0.5s ease;
		}

		.page.active {
		opacity: 1;
		transform: translateX(0%);
		}

				/* Added styles for the two sections */
				.container {
				display: flex;
				align-items: center;
				justify-content: center;
				}
			
				.logo{
					display: block;
					max-width: 140%;
					margin-left: 10%;
				}
				
				h1{
					font-size: 40px;
					font-family: 'NeoGothis ADF Std', sans-serif;           
					letter-spacing: 3px;
					margin-left: 1%;
					color:#46E068;                       
				}
			
				h3{
					font-family: 'NeoGothis ADF Std', sans-serif;    
					text-align: center;   
					letter-spacing: 1px;
					font-size:15px;
					margin-left: 1%;
					color:#46E068;                
				}
			
				.left-section {
					width: 70%;
					display: flex;
					flex-direction: column;
					align-items: center;
					justify-content: center;
					}
			
			.left-section h1 .bauhaus-font{
			font-size: 50px;
			font-family: 'Bauhaus 93', sans-serif;  /* Change to Bauhaus or appropriate Bauhaus font */
			letter-spacing: 3px;
			margin-left: 1%;
			color: #46E068;
			}

			
				.right-section {
				width: 30%;
				display: flex;
				flex-direction: column;
				align-items: center;
				justify-content: center;
				background-image: url('images/left.jpg');
				background-repeat: no-repeat;
				background-size: 120%; /* Updated value */
				padding: 10% 5% 16.1% 3%;
				box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.3);
				}
				
				.button {
					font-family: 'Futura Md BT', sans-serif;  
					display: inline-block;
					padding: 7px 8px;
					border-radius: 30px;
					background-color: #46E068;
					border: 2px solid #ffffff;
					color: #ffffff;
					font-size: 20px;
					text-decoration: none;
					text-align: center;
					transition: all 0.2s ease-in-out;
					margin-left: -5%;
					width: 200px;
				}
			
			.button:hover {
			background-color: #95e796;
			color: white;
			}
			
			
			.right-section h1{
					font-size: 40px;
					font-family: 'NeoGothis ADF Std', sans-serif;           
					letter-spacing: 3px;
					margin-left: -13%;
					color:#ffffff; 
					width: 300px;                      
				}
			
				.right-section h3{
					font-family: 'NeoGothis ADF Std', sans-serif;    
					text-align: center;   
					letter-spacing: 1px;
					font-size: smaller;
					margin-left: -20%;
					color:#ffffff;
					width: 300px;                  
				}

				input:focus {
					outline: none;
					border-color: #46E068;
					box-shadow: 0 0 5px #46E068;
					}

			
				.createacc{
					display: block;
					max-width: 40%;
					margin-left: 10%;
				}
				
				#submit {
					font-family: 'Futura Md BT', sans-serif;  
					display: inline-block;
					padding: 7px 8px;
					border-radius: 30px;
					background-color: #46E068;
					border: 2px solid #ffffff;
					color: #ffffff;
					font-size: 20px;
					text-decoration: none;
					text-align: center;
					transition: all 0.2s ease-in-out;
					margin-left: 25%;
					width: 200px;
				}
			
			#submit:hover {
			background-color: #95e796;
			color: white;
			}

			.message {
		background-color: #ffffff;
		font-family: 'Futura Md BT', sans-serif; 
		font-size: 25px;
		border-radius: 20px;
		border: 2px solid #27ae60;
		color: #4CAF50;
		padding: 50px;
		margin-top: 40px;
		position: absolute;
		top: 40%;
		left: 50%;
		transform: translateX(-50%);
		z-index: 1;
		}

</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		
			$(document).ready(function() {
			$('body').css('left', '0');
		});
	</script>
	
</head>
<body style="background: #ffffff;">
	<div class="container">
	  <div class="left-section">
	  <h1> Welcome to <br>&ensp;<span class="bauhaus-font">DMMMSU</span></h1>
		<h3>Be part of Admin <br></h3>
		<form action="login_process.php" method="post">
    <table>
        <tr>
            <td><input type="text" id="username" name="username" placeholder="Username" /></td>
        </tr>
        <tr>
            <td><input type="password" id="password" name="password" placeholder="Password" /></td>
        </tr>
    </table>
    <button id="submit">ADMIN LOG IN</button>
	</form>

	  </div>
	  <div class="right-section">
		<div class=" createacc">
			<img src="images/logo.png" alt="Logo" class="logo" />
		  <h1> Welcome, Admin!</h1>
		  <h3>Online Student Handbook<br></h3>
		  <a href="admin_register.php" class="button">REGISTER</a>
		</div>
	</div>
  </body>
</html>
