<html>
    <head>
        <style>
            body{
                background-color:black;
                
            }
            .bg{
            background-image:url('register.jpg');
            min-height: 100vh;
			background-size: cover;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
            padding:16px;
            background-color:white;

            }
            *{
                box-sizing:border-box;
            }

            h1 {
			text-align: center;
			color: black;
			-webkit-text-stroke: 1px white;
			margin-bottom: 40px;
		}
        .registerbtn{
            background-color:purple;
            color:white;
            padding:16px 20px;
            margin:8px 0;
            border:none;
            cursoe:pointer;
            width:100%;
            opacity:0.9;
        }
        .registerbtn:hover{
            opacity:1;
        }

        input[type="text"],
		input[type="password"],
        input[type="email"]
        
        {
			width: 100%;
			padding: 12px;
			margin: 8px 0;
			border: 1px solid purple;
			box-sizing: border-box;
		}
        #add{
            width: 100%;
			padding: 12px;
			margin: 8px 0;
			border: 1px solid purple;
			box-sizing: border-box;

        }
        form{
            color:white;
        }
        </style>
    </head>
    <body>
        <div class="bg">
            <h1>Registration</h1>
            <form action=" registercode.php" method="post">
            <label for="name"><b>Name</b></label>
			<input type="text" placeholder="Enter your name"
				name="name" required><br><br>

            <label for=""><b>Email</b></label>
            <input type="email" placeholder="Enter your email" name="email"><br><br>

            

            <label for=""><b>Date of birth</b></label>
            <input type="date" placeholder="enter your date of birth" name="dob"><br><br>

            <label for=""><b>contact number</b></label>
            <input type="number" placeholder="Enter your contact number" name="cno"><br><br>

            <label for=""><b>Gender</b>
            <input type="radio" name="gnd" value="male">Male
            <input type="radio" name="gnd" value="Female">Female<br><br>
            </label>

            <!-- <label for=""><b>Address</b></label>
            <textarea  name="add" id="add" placeholder="Enter your address"></textarea><br><br> -->

            <label for="name"><b>Password</b></label>
			<input type="password" placeholder="Enter your password"
				name="pass" required><br><br>

            <center><button type="submit"  class="registerbtn"> Register</button></center>

            <p>Already have User account ? <a href="login.php">Login Page</a></p>

            </form>
        </div>
    </body>
</html>