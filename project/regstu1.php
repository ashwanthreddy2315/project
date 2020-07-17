<html>
        <head>
                <title>Registration</title>
</head>
<body>
        <?php
        $name = $_POST['name'];
        $gender=$_POST['gender'];
        $emailid=$_POST['emailid'];
        $phone=$_POST['phone'];
        $username1=$_POST['username'];
        $password = $_POST['password'];
            
	$conn = mysqli_connect("localhost","project","project");
        $db = mysqli_select_db($conn,"project"); 
        function function_alert($message) { 
      
                // Display the alert box  
                echo "<script>alert('$message');";
                echo 'window.location.href = "Home.html";';
                echo"</script>"; 
            } 
            
            $query1="SELECT * from login  where username='$username1'";
            $result1 = mysqli_query($conn,$query1) or die("Query failed: ".mysqli_error($conn));
            if(mysqli_num_rows($result1)!=0){
                    echo "<script>alert('there exists a user with this username');";
                    echo 'window.location.href = "login.html";';
                   echo " </script>";
             }
            
            
               else
                  {
                    $query = "INSERT INTO login VALUES ('$username1', '$password')" ; 
                    $query2=   "INSERT INTO registrstu VALUES ('$name','$gender','$emailid','$phone','$username1','$password')" ; 
                    $result = mysqli_query($conn,$query) or die("Query failed: ".mysqli_error($conn)); 
                    $result2 = mysqli_query($conn,$query2) or die("Query failed: ".mysqli_error($conn));
                    }
                    function_alert("You are Successfully registered");
                    //header('Location: hii.html');
 
?>
</body>
        </html>