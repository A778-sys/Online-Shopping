<html>
<head>
  <title>Online Shopping</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" rel="stylesheet"
    type="text/css" />
    <script src="script.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style>
    body{
        background: #151224;
    }
    #profile{
        background: #151224;
    }
    #profile2{
        margin: 100px;
        text-align: center;
        color: white;
        font-size: 40px;
        font-family: Arial;
        margin-bottom: 200px;
        margin-top: 5%;
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
    #complete{
    margin-left: 50%;
    background-color: #0ef;
    font-size: 15px;
    padding: 10px 20px;
    border-radius: 10px;
    border: none;
    font-weight: bold;
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

</style>
<body>
    <div id="profile">
        <form method="post">
            <h2 id="profile2">Make your Profile</h2>
            <br>
            <span class="label">First Name</span>
            <input type="text" name="name" class="input" placeholder="fname">
            <span class="label">Last Name</span>
            <input type="text" name="name" class="input" placeholder="lname">
            <span class="label">Mobile Number</span>
            <input type="number" name="numbertext" class="input" placeholder="mobile number">
            <span class="label">Email id</span>
            <input type="text" name="name85458" class="input" placeholder="username">
            <span class="label">Location</span>
            <input type="text" name="name" class="input" placeholder="State/City/District">
            <span class="label">Address</span>
            <input type="text" name="name" class="input" placeholder="address"><br>
            <br>
            <input type="submit" id="complete" value="Complete">
        </form>
    </div>

</body>