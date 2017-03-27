<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Manager Panel</title>

        <?php
            include 'connection.php';
            $name=$_POST['name'];
            $id = $_POST['id'];
            $plate=$_POST['plate'];
            $pass = $_POST["12345"];
            if ($_POST['submit'])
            {
                $sql = "SELECT username FROM users";
                mysqli_query($conn, 'SET NAMES utf8');
                $result = $conn->query($sql);
                var_dump($result);
                if ($result->num_rows > 0) {
                // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["user_id"]. " - Name: " . $row["username"]. " " . $row["plate"]. "<br>";
                }
                } else {
                    echo "0 results";
                }
            }
            
        ?>

	</head>
    
    <style>
        body{
        margin: 0px;
        border:0px;
        }
        #header{
            width:1004;
            height:120px;
            background:black;
            color:white;
        }
        #sidebar{
            width: 300px;
            height:600px;
            background:#9e9e9e;
            float:left;
        }
        #data{
            
            height: 800px;
            background:#607d8b;
            color:black;
            font-family: inherit;
            font-size: 25px;
            
        }
        #adminlogo{
            background: white;
            border-radius: 50px;
            height: 80px;
            width: 80px;
            margin-top: 20px;
        }
        ul li{
            padding: 20px;
            border-bottom: 2px solid grey;
            
        }
        ul li:hover{
            background: #9e9e9e;
            color:white;
        }
    </style>
	<body>
        <div id="header">
            <a href="manager.php"><center><img src="pics/User-icon.png" alt="adminlogo" id="adminlogo"><br>Manager logged in
            </center>
            </a>
        </div>
        
        <div id="sidebar">
            <ul>
                <a href="setSystem.php" style="color:black"><li>Set System</li></a>
                <a href="selectSpot.php" style="color:black"><li>Set Spots</li></a>
                <a href="findUser.php" style="color:black"><li>Find User</li></a>
                <a href="graph.php" style="color:black"><li>Data Graph</li></a>
                <a href="logOut.php" style="color:black"><li>Log Out</li></a>
            </ul>
        
        </div>
        
        <div id="data">
            Searching User:
            <form action="findUser.php" method="POST">
                User Name:<input style="text" name="name"><br>
                User ID:<input style="text" name="id"><br>
                Plate Number:<input style="text" name="plate"><br>
                <input type="submit" name="submit">
            </form>
            
        </div>
       
        
	</body>
</html>