<?php session_start(); ?>
<html>
    <!Doctype html>
    <head>
        <meta charset ="UTF-8"/>
        <meta name= "viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet"  href="styles/style.css"/>
        <script src="scripts/login.js"> </script>
        <script src="scripts/logout.js"> </script>
        <script src="scripts/adduser.js"> </script>
        <script src="scripts/home.js"> </script>
        <title>main</title>
    </head>
    <body>
        <section id="flex-parent">

            <header>
                <img src="assets/dolphin2.jpg"/> 
                <h3 id="logotitle">Dolphin CRM</h3>
            </header>
           <div id="combo">
                <aside class="hide">
                    <div class="menucombo"><button id="home"> <img src="assets/home.png"/> Home</button></div>
                    <div class="menucombo"><button id ="addcontact"> <img src="assets/add-friend.png"/>New Contact</button></div>
                    <div class="menucombo"><button id="adduser"> <img src="assets/add-button.png"/>Users</button></div>
                    <div class="menucombo"><button id="logout"> <img src="assets/power-off.png"/>Logout</button></div>
                </aside>
                <section id="changearea"> 
                    <form id="login">
                        <h2 class="formtitle">Login</h2>
                        <div class="formstatus"> </div>
                        <div class="formgrp"> 
                            <label>Email</label>
                            <input class="inputnormal" type="email" placeholder="abc@example.com" name="email" required>
                        </div>
                        <div class="formgrp"> 
                            <label>Password</label>
                            <input class="inputnormal" type="password" placeholder="Enter password here" name="password" required>
                        </div>
                        <button type= "submit" name="submitbtn" id="submitbtn"> Submit </button>
                    </form> 
                  
                </section>    
           </div>

        </section>
    </body>

</html>

