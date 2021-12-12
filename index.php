<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Basic Banking System</title>
  <style>
	.footer { 
   left: 0;
   bottom: 0;
   width: 100%;
   color: white;
   text-align: center;
   background-color :#1b1b1b;
}
	
	</style>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid" style="background-color:#69c2ad;">
      <!-- Introduction section -->
            <div >
            <div>
                <div class="heading text-center my-4">
                  <h3 style="color:Black;">WELCOME TO</h3>
                  <h1 style=" color:Black;">SPARKS WELFARE BANK</h1>
                </div>
              </div>
            </div>
			<div class="container-fluid" >
			<div class="container-fluid-sm" >
               <img src="image/BankofRhodes.png" style=" width:100%;height:10%; ">
      </div>
      </div>
      <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="image/user.jpg" class="img-fluid" alt="blah" style="margin-top:10px;">
                    <br>
                    <a href="create-user.php"><button style="	background-color:#3c60f0; margin-top:15px;margin-bottom:10px;">Create User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="image/transfer.jpg" class="img-fluid" alt="blah" style="margin-top:10px;">
                    <br>
                    <a href="transfermoney.php"><button style="	background-color:#3c60f0; margin-top:15px;margin-bottom:10px;">Make Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="image/history.jpg" class="img-fluid" alt="blah" style="margin-top:10px;">
                    <br>
                    <a href="transactionhistory.php"><button style="	background-color:#3c60f0; margin-top:15px;margin-bottom:10px;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <div class="footer">
        <p> Made by <b>Koustav Sarkar</b> <br> The Sparks Foundation</p>
		<p><a href="https://github.com/koustav2001"><i class="fa fa-github" style="font-size:36px;color:blue;"></i></a>
		<a href="https://www.linkedin.com/in/koustav-sarkar-582215224/"><i class="fa fa-linkedin-square" style="font-size:36px;color:blue"></i></a>
		</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 </body>
</html>
