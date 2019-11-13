<!DOCTYPE html>
<html lang="en">
<head>
  <title>View table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
    <body>

        <div class="container">
            <h2> Table data </h2>
            <table class="table table-bordered" >
                    <tr>
                        <th> ID </th>
                        <th> Full name</th>
                        <th>Email</th>
                        <th> Gender</th>
                        <th>Date of Birth</th>
                        <th> Address</th>
                        <th>State</th>
                        <th> Pincode</th>
                        <th>  </th>
                        <th> </th>
</tr>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "dummydb";       
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql="Select * from MyGuests";
                $result=$conn->query($sql);
                $result->setFetchMode(PDO::FETCH_ASSOC);


                while ($row = $result->fetch())
                {
                 
                    echo "<tr>
        
                    <td>" . $row["id"]. "</td>
                    <td>" . $row["fname"] . "</td>
                    <td>" . $row["email"]. "</td>
                    <td>" . $row["gender"]. "</td>
                    <td>" . $row["dob"] . "</td>
                    <td>" . $row["addres"]. "</td>
                    <td>" . $row["stat"] . "</td>
                    <td>" . $row["pincode"]. "</td>"
                    ?>
                    <td> <button class="btn btn-warning">Delete</button> </td>
                    <td> <a> Edit </a> </td>
                    </tr> ;
                    }
                 <?php   echo "</table>";

                }
                catch(PDOException $e)
    {
    echo $sql . $e->getMessage();
    }

$conn = null;?>
                    
</table>
</div>           
    </body>
</html>