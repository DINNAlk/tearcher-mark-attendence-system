<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubetta School</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        #container{
            display:grid;
            width:100vw;
            height:100vh;
            background-color: rgb(232, 255, 255);
            grid-template-rows:auto auto;
            grid-template-columns:auto;
            padding:5px;
            font-family:"Fredoka one";
        }
        button{
            padding:5px;
            letter-spacing:5px;
            border-radius:25px;
            background-color:transparent;
            cursor: pointer;
            
        }
        input{
            accent-color:#f97070;
            font-family:"Fredoka one";
        }
        #contentOne,#contentTwo{
            display:flex;
            align-items:center;
            justify-content:center;
        }
        #contentOne input{
           float:right;
           width:50%;
           
        }
        #con{
            border:2px solid black;
            padding:10px;
            border-radius:25px;
        }
        h1{
            color:red;
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="contentOne">
        <div id="con">
            <h1>UBETTA SCHOOL</h1>
            <h2>If You Don't Have An Account Register Now !</h2><br><br>
            <form action="register.php" method="POST">
            Your Teacher Number : <input type="text" name="uid" placeholder="Teacher Number"> <br><br>
            Name : <input type="text" name="uname" placeholder="Full Name"> <br><br>
            Your Subject : <input type="text" name="usub" placeholder="Your Subject"><br><br>
            <button>Register !</button>
            </form>
        </div>
            </div>
        
        <div id="contentTwo">
            <div id="con">
                <h1>UBETTA SCHOOL</h1>
                <h2>Mark Your Attendence</h2><br><br>
                <form action="validation.php" method="POST">
                Your Teacher Number : <input type="text" name="uid" placeholder="Teacher Number">&nbsp;&nbsp;&nbsp;&nbsp; Mark Your Attendence : <input type="checkbox" name="uattend" value="1"> <br><br>
                <button>Submit !</button>
            </form>
            </div>
            
        </div>
    </div>
</body>
</html>