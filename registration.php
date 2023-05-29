<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <title>Registraion Forum</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <div style="background:linear-gradient(to top, rgba(0, 0, 0, 0.5)50%, rgba(0, 0, 0, 0.5)50%), url(Images/lets1.jpg);height:100vh; background-repeat: no-repeat;background-size: cover;">
    <div class="navbar">
        <div class="icon">
            <h2 class="logo">NeatNote</h2>
        </div>
        <div class="menu">
            <ul>
                <li> <a href="#">Home</a></li>
                <li> <a href="#">About</a></li>
                <li> <a href="#">Contact</a></li>
                <li> <a href="#">Help</a></li>
                <li> <a href="#">SignUp</a></li>
            </ul>
        </div>
    </div>
    <p>&nbsp;	</p>
    <form id="form1" name="form1" method="post" action="#">
      <table width="887" height="462" cellpadding="0" cellspacing="0" style="margin-left: auto; margin-right:auto" class="tbl01">
        <caption style="width: 220px;
        font-family: sans-serif;
        text-align: center;
        color: #00ff48;
        font-size: 22px;
        background-color: rgb(0, 0, 0);
        border-radius: 10px;
        margin-left: auto;
        margin-right: auto;
        padding: 8px">
          Registraion Forum
        </caption>
        <tbody>
          <tr>
            <td width="572" scope="col"><label for="textfield">Name:</label></td>
            <th width="309" scope="col"><input type="text" name="name" id="name" placeholder="Enter your name"></th>
          </tr>
          <tr>
            <td scope="col"><label for="textfield">Institute:</label></td>
            <th scope="col"><input type="text" name="Institute" id="Institute" placeholder="Enter your Institute name"></th>
          </tr>
          <tr>
            <td scope="col"><label for="textfield">Email:</label></td>
            <th scope="col"><input type="email" name="Email" id="email" placeholder="Enter your Email"></th>
          </tr>
          <tr>
            <td scope="col"><label for="textfield">Date Of Birth:</label></td>
            <th scope="col"><input type="date" name="DOB" id="DOB"></th>
          </tr>
          <tr>
            <td scope="col"><label for="textfield">Feild Of Study:</label></td>
            <th scope="col"><input type="text" name="Feild" id="Feild" placeholder="Enter your Feild of study"></th>
          </tr>
          <tr>
            <td scope="col"><label for="textfield">Do You Agree In oue term And Conditions:</label></td>
            <th scope="col"><input type="checkbox" name="checkbox" id="checkbox" value="1"></th>
          </tr>
          <tr>
            <td scope="col">&nbsp;</td>
            <th scope="col"><button class="submit1" name="submit1" id="submit1">Submit</button></th>
          </tr>
        </tbody>
      </table>
    </form>
  </div>

  <?php session_start();
    if(isset($_POST["submit1"]))  //check whether button is clicked or not
    {
      
      $name = $_POST["name"];  //get values
      $Institute = $_POST["Institute"];
      $Email = $_POST["email"];
      $Birthday = $_POST["DOB"];
      $Feild= $_POST["Feild"];
      $Conditon = $_POST["checkbox"];
      $Password = $_POST["email"];
      $con = mysqli_connect("localhost","root","","neatnote","3308");
            
          if(!$con) // check db connection
          {
            die("Cannot connect our DB Seaver");
          }
          if($Conditon){
            $agree = "Accepted";
          }else{
            $agree = "Decline";
          }
        $sql = "INSERT INTO `user` (`name`, `Institute`, `Email`,`Birthday`,`Feild`,`Condition`,`Password`) VALUES ('".$name."', '".$Institute."', '".$Email."','".$Birthday."','".$Feild."','".$agree."','".$Password."');";

    
      if( mysqli_query($con,$sql))
      {
        
        header('Location:Login.php');

      }
    
    }
    
  ?>

  

</body>
</html>
