<?php
session_start(); 
require "dbconnect.php";

if (!isset($_SESSION['uid'], $_SESSION['first_name'], $_SESSION['last_name'])){
    echo "OOPs, your session was disrupted, try again later.";
}
else {

$sql = "SELECT * FROM Users";
$stmt = $conn->query($sql);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);


$formconstruct = 
" <form id='issueform'>
        <h2 class='formtitle'>New Contact</h2>
            <div class='addcontactstat'> </div>
            <div class='formstatus'> </div>
            <div class='formgrp'> 
                <label>Title</label>
                <select class='inputnormal' name='type' id='type'>
                <option value='Mr'>Mr.</option>
                <option value='Mrs.'>Mrs.</option>
                <option value='Unknown'>Unknown</option>
            </select>
            </div>
            <div class='formgrp'> 
            <label>First Name</label>
            <input id ='title'class='inputnormal' type='text' placeholder='type first name here' name='firstname' required>
            </div>
            <div class='formgrp'> 
            <label>Last Name</label>
            <input id ='title'class='inputnormal' type='text' placeholder='type last name here' name='lastname' required>
            </div>
            <div class='formgrp'> 
            <label>Email</label>
            <input id ='title'class='inputnormal' type='text' placeholder='type email name here' name='email' required>
            </div>
            <div class='formgrp'> 
            <label>Telephone</label>
            <input id ='title'class='inputnormal' type='text' placeholder='type telephone here' name='telephone' required>
            </div>
            <div class='formgrp'> 
            <label>Company</label>
            <input id ='title'class='inputnormal' type='text' placeholder='type company here' name='company' required>
            </div>
            <div class='formgrp'> 
            <label for='Type'>Type</label>
            <select class='inputnormal' name='type' id='type'>
                <option value='SalesLead'>Sales Lead</option>
                <option value='Support'>Support</option>
            </select>
            </div>
            
            <div class='formgrp'> 
                <label for='assign'>Assigned To</label>
                <select class='inputnormal' name='assign' id='assign'>";

                foreach($users as $user){
                  $formconstruct .= "<option value= \"{$user['firstname']} {$user['lastname']} \"> {$user['firstname']} {$user['lastname']} </option> ";  
               }
             $formconstruct.= 
             "
               
            <button type= 'submit' name='addissuebtn' id='addissuebtn'> Submit </button>
        </form>";

        echo $formconstruct;

} 
?>