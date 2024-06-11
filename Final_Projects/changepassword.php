<html>
    <head>
        <style>
            *{
                margin:10px;
                padding:10px;
            }
            body{
                background:linear-gradient(white,black);
            }
    h1{
            color:Black;
             text-shadow: 2px 2px 5px  black;
        }
        form{
            height:400px;
            width:400px;
            border:2px solid;
            box-shadow:5px 5px 10px 10px grey;
            padding:10px;
            margin-left:500px;
        }
        .button {
			background-color:blue;
			color: white;
			padding: 14px;
			border: none;
			cursor: pointer;
			width: 100%;
		}

		.button:hover {
			background-color: black;
		}
        </style>
    </head>
    <body>
        <center><h1>Change Password Page</h1></center>
        <form action="changepasswordcode.php" method="post">
            Old Password <input type="text" name="opass"><br>
            New Password<input type="text" name="npass"><br>
            Confirm Password<input type="text" name="cpass"><br>
            <center><button>Change</button></center>
        </form>
    </body>
        
    
</html>