<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            DESSANTE Registration
        </title>
        <style>
            body{
                margin-left: 300px;
                margin-right: 300px; 
                border-radius: 20px; 
                box-shadow: 0 0 18px rgba(0, 0, 0, 0.1);
                padding: 25px;
                font-size: 17px;
            }
            input[type="submit"] {
                background-color: #000000; 
                color: white;
                width: 100px; 
                padding: 10px 20px; 
                border: none; 
                border-radius: 8px;  
            }
            input[type="reset"] {
                background-color: #000000; 
                color: white;
                width: 100px; 
                padding: 10px 20px; 
                border: none; 
                border-radius: 8px;
            }
        </style>
    </head>
    <body>
        <div style="display: flex; justify-content: center; align-items: center; height: 10vh;">
            <img src="dessante (2).png" alt="logo" width="400" height="130"/>
        </div>
        <h2 align="center">DESSANTE Registration Form</h2>
        <p style="font_size: 16px; text-align: center;">The biggest fashion event is here! Are you ready to participate?</p>
        <p style="text-align: center; font-size: 16px;">The event will be held on June 1-30, 2024. Don't miss it!</p>
        <p style="text-align: center; font-size: 16px;">Register your brand to participate in DESSANTE Fashion Event!</p>
        <form action="" method="post">
            <hr>
            <br>
            <label>Owner Name  : </label><br>
            <input type="text" name="Name" size="80"/> <br> <br>
            <label>Brand Name   : </label><br>
            <input type="text" name="Brand" size="80"/> <br> <br>
            <label>Socials (IG, Twitter)   : </label><br>
            <input type="text" name="Socials" size="80"/> <br> <br>
            <label>
                Type :
            </label>
            <select name="Type">
                <option value="Clothes">Clothes</option>
                <option value="Bags">Bags</option>
                <option value="Jewelry">Jewelry</option>
                <option value="Foot Wear">Foot Wear</option>
                <option value="Hats">Hats</option>
            </select>
            <br>
            <br>
            <label>
                Gender :
            </label><br>
            <input type="radio" name="Gender" value="Male"> Male <br>
            <input type="radio" name="Gender" value="Female"> Female <br>
            <input type="radio" name="Gender" value="Unisex"> Unisex <br>
            <br>
            <label>
                Phone :
            </label><br>
            <input type="text" name="phone" size="80"><br><br> 
            <label>
                Email :
            </label><br>
            <input type="email" name="email" size="80"><br><br>
            Notes (Optional):
            <br>
            <textarea cols="80" name="Notes" rows="3"></textarea>
            <br> <br>
            <div class="button-container">
                <input type="Submit" value="Register">
                <input type="reset" value="Reset"> 
            </div> <br> <hr>
        </form>
    </body>
</html>

<?php
    $Name = isset($_POST['Name']) ? $_POST['Name'] : '';
    $Brand = isset($_POST['Brand']) ? $_POST['Brand'] : '';
    $Social = isset($_POST['Socials']) ? $_POST['Socials'] : '';
    $Type = isset($_POST['Type']) ? $_POST['Type'] : '';
    $Gender = isset($_POST['Gender']) ? $_POST['Gender'] : '';
    $Phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $Email = isset($_POST['email']) ? $_POST['email'] : '';
    $Notes = isset($_POST['Notes']) ? $_POST['Notes'] : '';
    
    echo "<div style='text-align: center;'>
    <h3>Confirm Registration</h3><br>
    </div>
    Owner Name : <b>$Name</b><br><br>
    Brand Name : <b>$Brand</b><br><br>
    Fashion Type : <b>$Type</b><br><br>
    Gender : <b>$Gender</b><br><br>
    Phone : <b>$Phone</b><br><br>
    Email : <b>$Email</b><br><br>
    Notes : <b>$Notes</b><br><br>
    
    <div style='text-align: center;'>
    <p><b>Congrats!</b><br> You have submitted your brand! Please wait for our email for further details!</p>
    </div>";
?>