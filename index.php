<!DOCOTYPE html>
<!---We enter the user name and password-->
<html>
    <head>
        <title>
            Login
        </title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <style>
            body{
                background:#91a716;
                display:flex;
                justify-content:center;
                align-items:center;
                height:100vh;
                flex-direction:column;
                font-family:cursive;
                box-sizing:padding-box;
            }
            form{
                width: 1000px;
                border:3px solid rgb(177, 142, 142);
                padding: 20px;
                background-color:rgb(85, 54, 54);
                border: radius 20px;

            }
            h2{
                text-align:center;
                margin: bottom 40px;

            }
            input{
                display:block;
                border:2px solid #ccc;
                width 95%;
                padding: 10px;
                margin:10px auto;
                border-radius:5px;

            }
            label{
                color:#888;
                font-size:18px;
                padding:10px;

            }
            buuton{
                float:right;
                background:rgb(35, 174, 202);
                padding:10px 15px;
                color:#fff;
                border-radius:5px;
                margin-right:10px;
                border:none;
            }
            button:hover{
                opacity:.10;
            }
            eror{
                background:#F2Dede;
                color:#0c0101;
                padding:10px;
                width:95%;
                border-radius:5px;
                margin:20px auto;

            }
            h1{
                text-align:center;
                color:rgb(134, 3,3);

            }
            a{
                float:right;
                background:rgb(183, 225,233);
                padding:10px 15px;
                color:#fff;
                margin-right:10px;
                border:none;
                text-decoration:none;
            }
            a:hover{
                opacity:.7;
            }
        </style>
    </head>
    <body>
        <form action="login.php" method="post">
            <h2>LOGIN FORM</h2>
            <label for="username">Username</label>
            <input type="text"
            name="uname"
            placeholder="enter your username correctly"/>
            <label>Password:</label>
            <input type="password"
            name="pwd" 
            placeholder="password"/><br>
            <button type="submit">LOGIN</button>
        </form>
    </body>
</html>