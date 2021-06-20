<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TSF Bank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="viewcustomer.php">View Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="history.php">List of Transactions</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact us</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>


 <h2 align = 'Center'><u>List of Customers</u></h2>

    <?php
    include 'connect.php';
    $sql = "SELECT * FROM `customer`";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    
    echo "<table align='center' border=1 cellpadding=10 class='table table-light table-striped'>"
            
            ."<tr>"
                ."<th align='left'>Account Number</th>"
                ."<th align='right'>Name</th>"
                ."<th>E-mail</th>"
                ."<th>Account Balance</th>"
                ."<th>Action</th>"
                
            ."</tr>"
            ."<tr></tr>";

        while($row = mysqli_fetch_assoc($result))
        { 
            ?>
            <tr>
                <td><?php echo $row["Account No."]; ?></td>
                <td><?php echo $row["Name"]; ?></td>
                <td><?php echo $row["E-mail"]; ?></td>
                <td><?php echo $row["Balance"]; ?></td>
                <td> <a href= "users.php?Account No.=<?php echo $row['Account No.'];?>">
                <button type = "Button" class="btn btn-warning"> View and Transact</button></a>


            
                 
            </tr> 
        <?php
        }
             ?>       
           
      </table>


   


    

    </body>
</html>