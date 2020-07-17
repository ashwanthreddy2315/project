<html>
        <head>
                <title>Tuors</title>
</head>
<body>
        <?php
        $name = $_POST['name'];
        $emailid=$_POST['emailid'];
        $phone=$_POST['phone'];
        $username1=$_POST['username'];
        $gender=$_POST['gender'];
            $pwd1 = $_POST['pwd'];
            $hours=$_POST['hours'];
            $price=$_POST['price'];
            $sttime=$_POST['sttime'];
            $endtime=$_POST['endtime'];
	$conn = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($conn,"website"); 
        function function_alert($message) {  
                echo "<script>alert('$message');";
                echo 'window.location.href = "logintut.html";';
                echo"</script>"; 
            } 
            
              

$query1="SELECT * from login2  where username='$username1'";
$result1 = mysqli_query($conn,$query1) or die("Query failed: ".mysqli_error($conn));
if(mysqli_num_rows($result1)!=0){
        echo "<script>alert('there exists a user with this username');";
        echo 'window.location.href = "regtut.html";';
       echo " </script>";
 }


   else
      {
        $query = "INSERT INTO login2 VALUES ('$username1', '$pwd1')" ; 
        $query2=   "INSERT INTO registrtut VALUES ('$username1','$name','$emailid','$phone','$hours','$sttime','$endtime','$price','$gender')" ; 
        $query3="INSERT INTO subjectstut(username) values ('$username1')";
        $result = mysqli_query($conn,$query) or die("Query failed: ".mysqli_error($conn)); 
        $result2 = mysqli_query($conn,$query2) or die("Query failed: ".mysqli_error($conn));
        $result3= mysqli_query($conn,$query3) or die("Query failed: ".mysqli_error($conn));
        if(isset($_POST['telugu'])) {
                    
                $query = "update subjectstut set telugu='yes' where username='$username1'" ; 
                $result = mysqli_query($conn,$query) or die("Query failed: ".mysqli_error($conn));
       
      }
      else
      {
                 $query = "update subjectstut set telugu='no' where username='$username1'" ; 
                $result = mysqli_query($conn,$query) or die("Query failed: ".mysqli_error($conn)); 
      }
      if(isset($_POST['hindi'])) {
                $query = "update subjectstut set hindi='yes' where username='$username1'" ; 
                $result = mysqli_query($conn,$query) or die("Query failed: ".mysqli_error($conn)); 
      }
      else
      {
        $query = "update subjectstut set hindi='no' where username='$username1'" ; 
                $result = mysqli_query($conn,$query) or die("Query failed: ".mysqli_error($conn)); 
      }
      if(isset($_POST['english'])) {
                $query = "update subjectstut set english='yes' where username='$username1'" ; 
                $result = mysqli_query($conn,$query) or die("Query failed: ".mysqli_error($conn)); 
      }
      else
      {
        $query = "update subjectstut set english='no' where username='$username1'" ; 
                $result = mysqli_query($conn,$query) or die("Query failed: ".mysqli_error($conn)); 
      }
      if(isset($_POST['maths'])) {
                $query = "update subjectstut   set maths='yes' where username='$username1'" ; 
                $result = mysqli_query($conn,$query) or die("Query failed: ".mysqli_error($conn)); 
      }
      else
      {
        $query = "update subjectstut set maths='no' where username='$username1'" ; 
                $result = mysqli_query($conn,$query) or die("Query failed: ".mysqli_error($conn)); 
      }
      if(isset($_POST['science'])) {
                $query = "update subjectstut  set science='yes' where username='$username1'" ; 
                $result = mysqli_query($conn,$query) or die("Query failed: ".mysqli_error($conn)); 
      }
      else
      {
        $query = "update subjectstut  set science='no' where username='$username1'" ; 
                $result = mysqli_query($conn,$query) or die("Query failed: ".mysqli_error($conn)); 
      }
      if(isset($_POST['social'])) {
                $query = "update subjectstut  set social='yes' where username='$username1'" ; 
                $result = mysqli_query($conn,$query) or die("Query failed: ".mysqli_error($conn)); 
      }
      else
      {
        $query = "update subjectstut  set social='no' where username='$username1'" ; 
                $result = mysqli_query($conn,$query) or die("Query failed: ".mysqli_error($conn)); 
      }
     
        $subjects=$_POST['extras'];
        if(strcmp($subjects," ")!=0)
        {
        $subjects_ar = explode(',', $subjects);

        for($i=0;$i<count($subjects_ar);$i++)
        {
        
          
        $query="select username  from subjectstut where EXISTS(SELECT *
        FROM   INFORMATION_SCHEMA.COLUMNS
        WHERE  TABLE_NAME = 'subjectstut'
               AND COLUMN_NAME = '$subjects_ar[$i]') ;";
           $result = mysqli_query($conn,$query) or die("Query failed: ".mysqli_error($conn));
          
               if(mysqli_num_rows($result)!=0){
               
               
                   $query4 = "update subjectstut set $subjects_ar[$i]='yes' where username='$username1'" ; 
                  $result4 = mysqli_query($conn,$query4) or die("Query failed: ".mysqli_error($conn));
               
              
         } 
           else
            {
                echo "hello";
                $query2="ALTER TABLE subjectstut ADD $subjects_ar[$i] varchar(20)";
                 $result2 = mysqli_query($conn,$query2) or die("Query failed: ".mysqli_error($conn));
                 
                  $query5= "update subjectstut set $subjects_ar[$i]='yes' where username='$username1'" ; 
                  $result5 = mysqli_query($conn,$query5) or die("Query failed: ".mysqli_error($conn));
          
             }     
        }
        
        
        
}
        
        
        function_alert("You are Successfully registered");
        //header('Location: hii.html');
      } 
        
 
?>
</body>
        </html>