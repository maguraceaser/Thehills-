
<!-- The server.php will  receive information submitted from the form and store it in the databse. -->




<?php
session_start();

// initializing variables
$fname = "";
$lname = "";
$username = "";
$ocountry = "";
$saddress = "";
$adate = "";
$ddate = "";
$idnum = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'thehillshotel');

// This is registering the shop
if (isset($_POST['reg_shop'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $ocountry = mysqli_real_escape_string($db, $_POST['orgnCountry']);
  $saddress = mysqli_real_escape_string($db, $_POST['saddress']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  // if (empty($fname)) { array_push($errors, "First Name is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  // if (empty($ocountry)) { array_push($errors, "Origine Country is required"); }
  if (empty($saddress)) { array_push($errors, "address Country is required"); }

  else{  // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM thehillshotel.client WHERE username='$username' OR fname='$fname' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { 
      if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
      }

      if ($user['f_name'] === $fname) {
        array_push($errors, "Shop already exists");
      }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
      $password = md5($password);//encrypt the password before saving in the database

      // filling the client table with common information
      $query = "INSERT INTO thehillshotel.client (f_Name, l_Name, username, password, origin_country) 
            VALUES('$fname','$lname','$username', '$password', '$ocountry')";

      mysqli_query($db, $query);

      // Pulling the client's id from the client table
      $query_2 = "INSERT INTO thehillshotel.local_shop (client_id, street_address) 
          VALUES((SELECT client_id FROM thehillshotel.client WHERE username='$username'), '$saddress')";

        mysqli_query($db, $query_2); 

      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: shop.php');
    }
  }
}

// This is registering the client
if (isset($_POST['reg_client'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $ocountry = mysqli_real_escape_string($db, $_POST['orgnCountry']);
  $adate = mysqli_real_escape_string($db, $_POST['adate']);
  $ddate = mysqli_real_escape_string($db, $_POST['ddate']);
  $idnum = mysqli_real_escape_string($db, $_POST['idnum']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty($idnum)) { array_push($errors, "your id is required"); }

  else{  // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM thehillshotel.client WHERE username='$username' OR fname='$fname' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { 
      if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
      }

      if ($user['f_name'] === $fname) {
        array_push($errors, "Shop already exists");
      }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
      $password = md5($password);//encrypt the password before saving in the database

      // filling the client table with common information
      $query = "INSERT INTO thehillshotel.client (f_Name, l_Name, username, password, origin_country) 
            VALUES('$fname','$lname','$username', '$password', '$ocountry')";

      mysqli_query($db, $query);

      // Pulling the client's id from the client table
      $query_2 = "INSERT INTO thehillshotel.hotel_client (client_id, arrival_date,departure_date,identification_num) 
          VALUES((SELECT client_id FROM thehillshotel.client WHERE username='$username'), '$adate','$ddate','$idnum')";

        mysqli_query($db, $query_2); 

      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: shop.php');
    }
  }
}

// ... 

// The user logging in 
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

//   check if the login text box is not empty
  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM thehillshotel.client WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      // $_SESSION['success'] = "You are now logged in";

      header('location: shop.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
?>