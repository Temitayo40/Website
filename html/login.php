S<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style media="screen">

   #bar {
     height: 100px;
     background-color: rgb(59, 89,152);
     color: #d9dfeb;
     font-size: 40px;
   }

   #signup_button {
     background-color: #42c72a;
     width: 70px;
     text-align:center;
     padding: 4px;
     border-radius: 4px;
     float: right;
   }

   #bar2{
     background-color: white;
     width: 800px;
     margin-left: auto;
     margin-top: 50px;
     padding: 10px;
     text-align: center;
   }

   .text {
     height: 40px;
     width: 300px;
     border-radius: 4px;
     border: solid 1px #ccc;
     padding: 4px;
     font-size: 14px
   }

   .button {
     width: 300px;
     height: 40px;
     border-radius: 4px;
     font-weight: bold;
     border: none;
     background-color: rgb(59, 89,152);
     color: white;
   }






   </style>

</head>
<body style="font-family: Tahoma; background-color:#e9ebee; ">
    <div id="bar1">
        <div class="head container">
            <div style="font-size: 40px;">Mybook</div>
          <div id="signup_button">Log in</div>

    </div>
    <div id="bar2" style="background-color: white; width: 600px; height: 400px; margin: auto; margin-top: 50px;">

            <span>Sign up to Mybook</span><br><br>
            <input type="username" class="text" name="username" placeholder="Enter your Firstname" ><br><br>
            <input type="username" class="text" name="username" placeholder="Enter your Lastname" ><br><br>

            <div>Gender:</div><br>
            <select class="text" name="">
              <option >Male</option>
              <option >Female</option>
            </select>
            <br><br>
            <input type="username" class="text" name="username" placeholder="Email" ><br><br>
            <input type="password" class="text" name="password" placeholder="Enter your password" ><br><br>
            <input type="password" class="text" name="password" placeholder="Confirm your password" ><br><br>
            <input type="button" class="button" value="Sign up"><br><br>


    </div>

</html>
