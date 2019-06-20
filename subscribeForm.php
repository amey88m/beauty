<?php
include_once "DB.php";


if(empty($_POST['subscribeusr'])):
    print "user name is empty, please enter name !";
    exit;
endif;

if(isset($_POST['subscribeusr']) && !empty($_POST['subscribeusr'])):
    $db = new DB;
    $db->connection();

    // escape string 
    $name = mysqli_real_escape_string($db->connection(), $_POST['subscribeusr']);
    // remove white space 
    trim($name);

    // remove any other space beteween to the string
    $name = str_replace(" ", "", $name);

    // filter
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    
    //  check for regex
    $name_reg = "/^[A-Za-z]*$/";

    if(!preg_match($name_reg, $name)):
        print "oops! use only charector's";
    else:
        
        // check your is already exit
        $query = "SELECT * FROM usersubscription WHERE usname='".$name."'";
        $result = $db->numRows($query);
        $rowscount = mysqli_num_rows($result);
        
        if($rowscount > 0):
            print "$name is already exits please try with other name.";
        else:
            // insert user subscribe name in db
            $query = "INSERT INTO usersubscription(usname) VALUES('$name')";
            $result = mysqli_query($db->connection(), $query);
            print "Thank you! now you have successfully subscribe with us";
        endif;
    endif;
    mysqli_close($db->connection());
endif;
?>
