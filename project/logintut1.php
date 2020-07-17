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
	
	$conn = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn,"website");
$query = "SELECT * FROM login2 WHERE username='$name' and password='$pwd'";
$result = mysqli_query($conn,$query) or die("Query failed: ".mysqli_error($conn));
	if(mysqli_num_rows($result)!=0)
	{
                echo "welcome";
        }
        else{
               echo "invalid details";
        }
        ?>
</body>
        </html>