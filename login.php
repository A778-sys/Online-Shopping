<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            @media screen and (max-width:600px) 
{
   #div1{
        min-width: 80%;
   }
   #button{
    margin-top: 10%;
   }

  
}
body{
    height: 100%;
    width: 100%;
    background-color: #1f293a;
}

#div1{
    border-radius: 20px;
    width: 28%;
    border: 2px solid #0ef;
    margin: auto;
    margin-top: 5%;
    min-width: 400px;
}
#heading1{
    text-align: center;
    font-family: Arial;
    color: white;
    margin-bottom: 0px;
    margin-top: 15%;

}
#para1{
    color: white;
    text-align: center;
    font-family: Arial;
    font-size: 18px;
    letter-spacing: 1px;
    margin-top: 0px;
    margin-bottom: 10%;
}
#para2{
    color: white;
    font-family: Arial;
    font-size: 14px;
    letter-spacing: 1px;
    margin: 6% 10%;
    margin-bottom: 0px;
  
}
.input{
    width: 80%;
    height: 40px;
    border-radius: 10px;
    background: transparent;
    font-weight: bold;
    letter-spacing: 0.5px;
    border-color: #0ef;
    color: white;
    margin: 1% 10%;
    margin-bottom: 5%;
    font-size: 15px;
    padding: 5px 20px;
    transition: all .3s ease-out;
}
.input:hover{
    background-color: rgb(148, 219, 224);
    color: black;

}
.label{
    color: white;
    margin-left: 10%;
    font-size: 17px;
    font-family: Arial;
}
a{
    font-size: 16px;
    font-family: Arial;
    text-decoration: none;
    margin-left: 10%;
    color: #0ef;
}
#button{
    margin-left: 40%;
    background-color: #0ef;
    font-size: 15px;
    padding: 10px 20px;
    border-radius: 10px;
    border: none;
    font-weight: bold;
    margin-bottom: 10%;

}
#check,#show{
        float: right;  
}
#check{
    margin-right: 10%;
}

#show{
    font-family: Arial;
    color: white;
}

        </style>
        <script>  
            
            function show() 
            {
                var x = document.getElementById("pass");
                console.log("hello world");
                if (x.type === "password") {
                  x.type = "text";
                } else {
                  x.type = "password";
                }
              }
           
        </script>
    </head>

<body>
    <div id="back">
        <div id="div1">
        
            <form method="post">
                <h1 id="heading1">Login</h1>
                <p id="para1">Please login to use this platform</p>
                <span class="label">Enter your Email</span>
                <input type="text" name="username" class="input" placeholder="name85458@gmail.com"><br>
                <span class="label">Enter your  Password</span>
                <input type="password" name="password" class="input" placeholder="Password" id="pass">
                <a href="">Forgot Passowrd?</a> 
                <input type="checkbox" id="check" onclick="show()"><span id="show">Show password</span>
                <p id="para2">Not your device? Use guest mode to login privately</p>
                <a href="">Learn more</a><br><br><br>
                <a href="">Create account</a>
                <input type="submit" id="button" value="Login">
            </form>
        </div>   
    </div>
    
</body>
</html>