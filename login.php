
<!DOCTYPE html>
<html>
<head>
	<style>
		
		a{
			display: block!important;
			padding:4%!important;
					}
		td{
			width: 32%;
		}
		a:hover{
			color:white!important;
			background-color: #5F9EA0!important;
		}
		
	</style>
<title>INDUSTRIAL PLATFORM</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
</head>
<body>
<div class="header">
<h2>Login</h2>
</div>

<form method="post" action="server.php">
<!-- Display Validation errors here -->


<div class="input-group">
<label>Username</label>
<input type="text" name="username">
</div>

<div class="input-group">
<label>Password</label>
<input type="password" name="password">
</div>


<div class="input-group">
<button  type="submit" name="login" class="btn">Login</button>
<button type="button"class="btn btn-md" data-toggle="modal" data-target="#myModal">Register</button>
</div>

<body>

<div class="container">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register as</h4>
        </div>
        <div class="modal-body">
        	<table width="100%">
        		<tr style="text-align: center;">
         <td> <a  style="text-decoration: none;font-size: 25px" href="register.php?type='startup'">Startup</a></td>
         <td> <a style="text-decoration: none;font-size: 25px" href="register.php?type='finance'">Financee</a></td>
          <td><a style="text-decoration: none;font-size: 25px"  href="register.php?type='user'">Job searcher</a></td>
      </tr>
      </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>



</form>





</body>
</html>
