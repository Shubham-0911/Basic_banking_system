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

<h2 align = 'center'    ><u>List of Transactions</u></h2>
    </div>
 

 
    <?php
    include 'connect.php';
    $sql = "SELECT * FROM `transactions`";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
   
    
    echo "<table align='center' border=1 cellpadding=10 class='table table-light table-striped'>"
            
            ."<tr>"
                ."<th align='left'>S.No.</th>"
                ."<th align='right'>Sender</th>"
                ."<th>Receiver</th>"
                ."<th>Amount</th>"
                ."<th>Date & Time</th>"
                
            ."</tr>"
            ."<tr></tr>";

        while($row = mysqli_fetch_assoc($result))
        {
            echo '<tr>'
                .'<td>',$row["S.No."],'</td>'
                .'<td>'.$row["Sender"].'</td>'
                .'<td>'.$row["Receiver"].'</td>'
                .'<td>',$row["Balance"],'</td>'
                .'<td>'.$row["Date & Time"].'</td>';
        }

    ?>
