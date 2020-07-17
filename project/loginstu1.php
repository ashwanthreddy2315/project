<html>
        <head>
                <title>Login</title>
</head>
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: black;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<body> 
        <?php
        $name = $_POST['name'];
	$pwd = $_POST['pwd'];
	
	$conn = mysqli_connect("localhost","project","project");
	$db = mysqli_select_db($conn,"project");
        $query = "SELECT * FROM login WHERE username='$name' and password='$pwd'";
        $result = mysqli_query($conn,$query) or die("Query failed: ".mysqli_error($conn));
	if(mysqli_num_rows($result)!=0)
	{
                echo "<script>";
                echo 'window.location.href = "Home.html";';
                echo "</script>";
        }
        else{
                function_alert("Invalid Details");
        }
        ?>
</body>
        </html>