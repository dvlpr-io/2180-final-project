<?php
session_start(); 

if (!isset($_SESSION['uid'], $_SESSION['first_name'], $_SESSION['last_name'])){
    echo "OOPs, your session was disrupted, try again later.";
}
else {

echo " <form id='adduserform'>
        <h2 class='formtitle'>New User</h2>
            <div class='adduserstat'> </div>
            <div class='formstatus'> </div>
            <div class='formgrp'> 
                <label>First name</label>
                <input id ='fname'class='inputnormal' type='text' placeholder='type first name here' name='fname' required>
            </div>
            <div class='formgrp'> 
                <label>Last name</label>
                <input id='lname'class='inputnormal' type='text' placeholder='type last name here' name='lname' required>
            </div>
            <div class='formgrp'> 
                <label>Email</label>
                <input id='email' class='inputnormal' type='email' placeholder='abc@example.com' name='email' required>
            </div>
            <div class='formgrp'> 
                <label>Password</label>
                <input id='password'class='inputnormal' type='password' placeholder='Enter password here' name='password' required>
            </div>
            <div class='formgrp'> 
            <label for='priority'>Role</label>
            <select class='inputnormal' name='priority' id='priority'>
                <option value='Member'>Member</option>
                <option value='Admin'>Admin</option>
            </select>
        </div>
            
            <button type= 'submit' name='adduserbtn' id='adduserbtn'> Submit </button>
        </form>";

} 


