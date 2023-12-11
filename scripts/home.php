<?php
session_start();
require "dbconnect.php";
if (isset($_SESSION['first_name'])&& isset($_SESSION['last_name'])){
    $tableconstruct = "";
    if($_GET['btn'] == "support"){
        $status = "support";
        $opensql = "SELECT * FROM Contacts WHERE status = :stat";
        $openstmt = $conn->prepare($opensql);
        $openstmt->execute(array(
            ':stat' => $status
        ));
        $openissues = $openstmt->fetchAll(PDO::FETCH_ASSOC);
        $tableconstruct= "
           <section id=\"homeheaduniverse\">
            <section class=\"homeheadparent\">
                <h1 class=\"homehead\"> Dashboard </h1>
                <button id=\"createissuebtn\"> + New Contact </button>
            </section>
            <section id=\"filter\"> 
            <span>Filter by: </span>
            <button id=\"all\"> All </button>
            <button id=\"salesleads\"> Sales Leads </button>
            <button id=\"support\"> Support </button>
            <button id=\"assigned to me\"> Assigned to me </button>
            </section></section>
            <table id='Contacts'>
                <thead>
                    <th>Title</th> 
                    <th>Type</th>
                    <th>Status</th> 
                    <th>Assigned To</th>  
                    <th>Created</th> 
                </thead>";
    
                 $tableconstruct.=  "</table>";

    }
    else if($_GET['btn'] == "salesleads"){
        $myid = $_SESSION['uid'];
        $mytkssql = "SELECT * FROM Contacts WHERE created_by = :myid";
        $mytksstmt = $conn->prepare($mytkssql);
        $mytksstmt->execute(array(
            ':myid' => $myid
        ));
        $myissues = $mytksstmt->fetchAll(PDO::FETCH_ASSOC);
        $tableconstruct= "
           <section id=\"homeheaduniverse\">
            <section class=\"homeheadparent\">
                <h1 class=\"homehead\"> Dashboard </h1>
                <button id=\"createissuebtn\"> + Add Contact </button>
            </section>
            <section id=\"filter\"> 
            <span>Filter by: </span>
            <button id=\"all\"> All </button>
            <button id=\"salesleads\"> Sales Leads </button>
            <button id=\"support\"> Support </button>
            <button id=\"assigned to me\"> Assigned to me </button>
            </section></section>
            <table id='Contacts'>
                <thead>
                    <th>Name</th> 
                    <th>Email</th>
                    <th>Company</th> 
                    <th>Type</th>   
                </thead>";
    
                 $tableconstruct.=  "</table>";
        
    }
    else if ($_GET['btn'] == "all"){
        $sql = "SELECT * FROM Contacts";
        $stmt = $conn->query($sql);
        $issues = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $tableconstruct= "
           <section id=\"homeheaduniverse\">
            <section class=\"homeheadparent\">
                <h1 class=\"homehead\"> Dashboard </h1>
                <button id=\"createissuebtn\"> + Add Contact </button>
            </section>
            <section id=\"filter\"> 
                <span>Filter by: </span>
                <button id=\"all\"> All </button>
                <button id=\"salesleads\"> Sales Leads </button>
                <button id=\"support\"> Support </button>
                <button id=\"assigned to me\"> Assigned to me </button>
            </section></section>
            <table id='Contacts'>
                <thead>
                <th>Name</th> 
                <th>Email</th>
                <th>Company</th> 
                <th>Type</th>   
            </thead>";
    
                 $tableconstruct.=  "</table>";
                

    }

    echo $tableconstruct;
}
