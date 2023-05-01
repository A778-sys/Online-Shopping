<html>
<head>
  <title>Online Shopping</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" rel="stylesheet"
    type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="script.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="script.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

<style>
    body{
    height: 100%;
    width: 100%;
    margin-top: 10%;
    margin-bottom: 25%;
    background-color: #1f293a;
}

.contact{
    border-radius: 20px;
    width: 40%;
    height: 60%;
    border: 2px solid #0ef;
    margin-left: 4%;
    margin-top: 2%;
    min-width: 400px;
}
#heading2{
    text-align: center;
    font-family: Arial;
    color: white;
    margin-bottom: 0px;
    margin-top: 5%;

}
#para2{
    color: white;
    text-align: center;
    font-family: Arial;
    font-size: 18px;
    letter-spacing: 1px;
    margin-top: 0px;
    margin-bottom: 10%;
}
#para3{
    color: white;
    font-family: Arial;
    font-size: 14px;
    letter-spacing: 1px;
    margin: 6% 10%;
    margin-bottom: 0px;
  
}
.input{
    width: 40%;
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
.input1{
  width: 55%;
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
.feed{
    border-radius: 20px;
    width: 40%;
    height: 60%;
    border: 2px solid #0ef;
    margin-left: 55%;
    margin-top: -31%;
    min-width: 400px;
}
#heading21{
  margin-top: 4%;
  font-size: 35px;
  font-family: Arial;
  text-align: center;
  color: white;
}
#para21{
  font-size: 18px;
  text-align: center;
  color: wheat;
}
.input21{
  width: 80%;
  height: 40%;
  margin-top: 5%;
  margin-left: 5%;
  padding: 3%;
  color: black;
}
#button{
    margin-left: 47%;
    background-color: #0ef;
    font-size: 15px;
    padding: 10px 20px;
    border-radius: 10px;
    border: none;
    font-weight: bold;
    margin-bottom: 10%;

}
</style>
   <script>  
function message() {
  var txt;
  if (confirm("Your feedback has been submitted.!")) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("do").innerHTML = txt;
}
            function send() 
            {
                var e = document.getElementById('feedback');
                if (e.style.display === 'block')
                e.style.display === 'none';
                 else
                 e.style.display === 'block';
              }
        </script>

</head>

<body>
        <div class="con-box">
            <div class="contact">
              <form>

                <h1 id="heading2">Contact</h1>
                <p id="para2">Don't hesitate to contact us.</p>
                
                <span class="label">Your First Name:</span>
                <input type="text" name="username" class="input" placeholder="Name">
                
                <span class="label">Your Last Name:</span>
                <input type="text" name="username" class="input" placeholder="Srnane" id="pass">
                
                <span class="label">Mobile No.</span>
                <input type="tel" name="mob" class="input" placeholder="Number" pattern="[0-9]{10}">
                
                <span class="label">Address:</span>
                <input type="text" name="username" class="input1" placeholder="address">
                
              </form>
            </div>
        </div>
        <form>
              <div class="feed">
                  <h1 id="heading21">Feedback</h2>
                  <p id="para21">Also, Give us a suggestion.</p>
                  <br>
                  <input type="text" name="type" class="input21" placeholder="Feedback and suggestion"><br>
                </div>
                <br><br>
                <input type="submit" id="button" value="Send" onclick="message();" />
              </form>
              <p id="do"></p>
</body>
</html>