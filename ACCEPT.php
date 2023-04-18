<?php

session_start();

include('con.php'); 

if (isset($_POST['add'])) {


    $n = $_POST['name'];
    $s = $_POST['email'];
    $e = $_POST['services'];
    $c = $_POST['class'];
    $v = $_POST['check'];


  $sql = "INSERT INTO  customer (name, email, services, class, check_type)
    VALUES ('$n','$s','$e','$c','$v')";

if ($con->query($sql) === true) {
    // echo (" ");
    echo '<div class="done"> تم التسجيل بنجاح </div>';
} 
else {
  echo ("Error: " . $sql . "<br>" . $con->error);
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" › content="width=device-width, initial-scale=1.0">
    <title> SUBSCRIBE Form</title>

    <style>
        body {
            background-image: url("logo.jpg");
            background-repeat: round;
            background-size: 10%;
        }

    .done{
        top:30%;
  padding: 20px;
  background-color: #ACDF87;
  color: white;
  text-align: center;

}
        div.form {
            border-radius: 20px;
          
            overflow: hidden;
            position: relative;
            width: 900px;
            height: 550px;
            margin: 0 auto 100px;

            color: white;
            background: rgba(0, 0, 0, 0.400);

        }

        label {
            display: block;
            width: 260px;
            margin: 25px auto 0;
            text-align: center;
            font-family: 'Work Sans', sans-serif;
            font-weight: bold;

        }

        input {
            display: block;
            width: 50%;
            margin-top: 5px;
            padding-bottom: 5px;
            border: 1px solid rgb(245, 235, 97);
            font-size: 16px;
            text-align: center;
            background-color: transparent;
            border-radius: 10px;
            font-family: 'Work Sans', sans-serif;
            font-weight: bold;
        }

        select {
            display: block;
            width: 50%;
            margin-top: 5px;
            padding-bottom: 5px;
            border: 1px solid rgb(245, 235, 97);
            font-size: 16px;
            background-color: transparent;
            text-align: center;
            border-radius: 10px;
            font-family: 'Work Sans', sans-serif;

        }

        #submit {
            height: 40px;
            width: 120px;
            margin-top: 7px;
            color: rgb(245, 235, 97);
            font-weight: 600;
            transition: 0.5s;
            background-color: transparent;
            border-radius: 10px;
            font-family: 'Work Sans', sans-serif;

        }

        input#new {
            height: 40px;
            width: 120px;
            margin-top: 7px;
            color: rgb(245, 235, 97);
            font-weight: 600;
            transition: 0.5s;
            background-color: transparent;
            border-radius: 10px;
            font-family: 'Work Sans', sans-serif;

        }

        #submit:hover {
            height: 40px;
            width: 120px;
            margin-top: 7px;
            color: rgb(245, 235, 97);
            font-weight: 600;
            transition: 0.5s;
            background-color: transparent;
            border-radius: 10px;
            font-family: 'Work Sans', sans-serif;


        }

        h2 {
            text-align: center;
            font-family: 'Work Sans', sans-serif;
            color: rgb(245, 235, 97);
            font-size: 28px;
        }
    </style>

<style>

.done{
  padding: 20px;
  background-color: #ACDF87;
  color: white;
  text-align: center;

}
</style>

</head>

<body>
    <br> <br> <br><br>
    <div class="form" name="R">
        <center>
            <br>
            <h2>SUBSCRIBE FORM </h2>
            <form  NAME="registration"action="" method="post">
                <label> NAME: </label>
                <input type="text" name="name" placeholder=" enter your fullname " />

                <label> EMAIL: </label>
                <input type="email" name="email" placeholder=" enter your email " required />


                <label> SERVICES: </label>

                <select name="services" required>
                    <option value="" selected="selected">Select services</option>
                    <option value="Weekly Meal">Weekly Meal</option>
                    <option value="Monthly Meal">Monthly Meal</option>
                </select>

                <label> CLASS: </label> <select name="class" required>
                    <option value="" selected="selected" d>Select your class </option>
                    <option value="SILVER"> SILVER CLASS </option>
                    <option value="DIMOND">DIMOND CLASS</option>
                    <option value="GOLD"> GOLD CLASS </option>
                </select>
                <br>
              <label> PERSONAL TRAINER: </label>
                <select name="check" required>
                    <option  selected="selected">Select  </option>
                    <option value="yes">yes </option>
                    <option value="no">no</option>
                </select>

                <br>
             
                <button type="submit" name="add" id="submit" style="display:inline-block;" onclick="validateForm()">
                SUBSCRIBE
</button> 

               <input type="reset" value="CLEAR" id="new" style="display: inline-block;">

            </form>
        </center>
    </div>
    <script type="text/javascript">

        function validateForm(){

         var uname=registration.name.value;
        if(uname==""){
            alert("Name is NOT  required")
        }}
        </script>
</body>

</html>