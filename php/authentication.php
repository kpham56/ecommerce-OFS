<?php     
    session_start(); 
    include('../php/connect.php'); 
    echo "<h1>success 1</h1>";
    // User login
    if(isset($_POST['user_login'])){

            $email = mysqli_real_escape_string($con, $_POST['email']);  
            $password = mysqli_real_escape_string($con, $_POST['password']); 
            //to prevent from mysqli injection  
            $email = stripcslashes($email);  
            $password = stripcslashes($password);  
 
          
            $sql = "SELECT * 
                    FROM users 
                    WHERE email = '$email' AND password = '$password'";
            
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            if($count == 1){  
                    echo "  <script>
                                window.location.href='../account.php';
                                alert('Login Successful!');
                            </script>";
                    $sqllname = "SELECT userType FROM users WHERE email = '$email'";  
                    $isAdmin = mysqli_query($con, $sqllname);
                    $result = mysqli_fetch_array($isAdmin); 
                    if(!$result){
                        $_SESSION['admin'] = true;
                    }
                    $_SESSION['loggedin'] = true;
                    $_SESSION['email'] = $email; 

            }  
            else{  
                    echo "  <script>
                                    window.location.href='../login.html';
                                    alert('Incorrect username & password!');
                            </script>";
            }  
    }

    // User registration
    if(isset($_POST['user_registration'])) {

      
        $fname = mysqli_real_escape_string($con, $_POST['fname']); 
        $lname = mysqli_real_escape_string($con, $_POST['lname']); 
        $isAdmin = '0';
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $email = mysqli_real_escape_string($con, $_POST['email']); 
        $street = mysqli_real_escape_string($con, $_POST['street']);  
        $city = mysqli_real_escape_string($con, $_POST['city']); 
        $state = mysqli_real_escape_string($con, $_POST['state']);
        $zip = mysqli_real_escape_string($con, $_POST['zip']); 

        $fname = stripcslashes($fname);
        $lname = stripcslashes($lname);
        $password = stripcslashes($password);
        $email = stripcslashes($email);
        $street = stripcslashes($street);
        $state = stripcslashes($state);
        $city = stripcslashes($city);
        $zip = stripcslashes($zip);

       

        $sql_checkExist = " SELECT * FROM users WHERE email = '$email' ";
        echo "<h1>success 3</h1>";
  

        $checkExist = mysqli_query($con, $sql_checkExist);  // return value of mysqli_query
        $count = mysqli_fetch_object($checkExist);          //convert checkExist into integer
    
        if($count == 1){                                    // username is already exist
            echo "  <script>
                        window.location.href='../registration.html';
                        alert('Username is already exist!');
                    </script>";
        }   
        else{                                                // username is not exist then INSERT into db
            $query = "INSERT INTO users (userType,firstname, lastname, password, email, streetname, city, state, zipcode) 
            VALUES('$isAdmin','$fname', '$lname','$password', '$email', '$street', '$city', '$state', '$zip')";
            mysqli_query($con, $query);
            
             echo "  <script>
                      alert('Register successful!');
                        window.location.href='../homepage.html';
                    </script>";
        
           }
    }

    //Administrator tools
    if(isset($_POST['admin'])) {
        $sql = "SELECT * FROM productdetail";
        $result = mysqli_query($con, $sql);  
        //$all_products = mysqli_fetch_array($result, MYSQLI_ASSOC);      
    }


   
?>