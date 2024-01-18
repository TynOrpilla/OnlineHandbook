<!DOCTYPE html>
<html>

<head>
  <title>Register Form</title>
  <link rel="stylesheet" href="css/admin_register.css">
  <style>
    body {
			margin: 0;
			padding: 0;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			overflow: hidden;
		}
    
    /* Added styles for the two sections */
    .container {
      display: flex;
      align-items: center;
      justify-content: center;
      transform: translateX(100%);
			animation: slide-in 1s forwards;
      flex-direction: row;
      width: 100vw;
			height: 100%;
    }

    @keyframes slide-in {
			from {
				transform: translateX(100%);
			}

			to {
				transform: translateX(0);
			}
		}

    .logo{
        display: block;
        max-width: 40%;
        margin-left: 10%;
    }
    
    h1{
        font-size: 40px;
        font-family: 'NeoGothis ADF Std', sans-serif;           
        letter-spacing: 3px;
        margin-left: 10%;
        color:#ffffff;                       
    }

    h3{
        font-family: 'NeoGothis ADF Std', sans-serif;    
        text-align: center;   
        letter-spacing: 1px;
        font-size: smaller;
        margin-left: 10%;
        color:#ffffff;                
    }

    .left-section {
        width: 30%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-image: url('images/left.jpg');
        background-repeat: no-repeat;
        background-size: 120%; /* Updated value */
        padding: 10.7% 5% 14.7% 3%;
        box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.3);
}



    .right-section {
      width: 70%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
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
			margin-left: 25px;
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
        margin-left: -11%;
        color:#46E068;                       
    }

    .right-section h3{
        font-family: 'NeoGothis ADF Std', sans-serif;    
        text-align: center;   
        letter-spacing: 1px;
        font-size: smaller;
        margin-left: -20%;
        color:#46E068;                
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

  
  
</head>

<body style="background: #ffffff;">
  <div class="container">
    <div class="left-section">
      <img src="images/logo.png" alt="Logo" class="logo" />
      <h1> Welcome Back!</h1>
      <h3>To stay connected with us, <br>Please log in your account information</h3>
      <a href="admin_login.php" class="button">LOGIN</a>
    </div>
    <div class="right-section">
      <div class="createacc">
        <h1>Create Account</h1>
        <h3>Be an Admin<br>of Student Affairs and Services</h3>
      </div>
      <form action="register_process.php" method="post">
    <table>
        <tr>
            <td><input type="text" id="username" name="username" placeholder="Username" /></td>
        </tr>
        <tr>
            <td><input type="password" id="password" name="password" placeholder="Password" /></td>
        </tr>
    </table>
    <button id="submit">REGISTER</button>
</form>

      <div class="message-container"></div>
    </div>
  </div>
</body>

</html>