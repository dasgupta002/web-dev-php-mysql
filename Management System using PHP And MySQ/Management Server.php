<html>
<head>
<title>Management Server</title>
<style type="text/css" rel="stylesheet">
.leftpane{
   width : 20%;
   float : left;
   background-color : mediumseagreen;
   height : 500px;
   text-align: justify;
   padding-left: 17px;
}
.rightpane{
  width : 60%;
  float : left;
  padding-left: 15px;
}
.button{
   border-radius : 10px;
}
.topbar{
   height : 70px;
   background-color : mediumseagreen;
   padding-top: 10px;
   padding-left: 100px;
   text-align: center;
}
.tabletopbar{
   background-color : tomato;
}
</style>
</head>
<body>
  <div class="row">
  <div class="leftpane">
    <br><br><br><br><br><br>
    <button type="submit">Home</button><br><br>
    <button type="submit">Add Account</button><br><br>
    <button type="submit">Edit Account</button><br><br>
    <button type="submit">View</button><br><br>
    <button type="submit">Company Balance</button><br><br>
    <button type="submit">Add Company</button><br><br>
    <button type="submit">Add Vehicle</button><br><br>
  </div>
  <div class="rightpane">
    <div class="topbar"><h1>Delhi and Chennai<h1></div>
    <h1>Five Brothers Freight Services</h1>
    <h2>India Number One Freight Services</h2>
    <hr>
    <h3>Company Balance</h3>
    <hr>
    <div class="tabletopbar">
    <?php
    echo "<pre><h1>Company Name    Company Budget</h1></pre>";
    ?>
    </div>
    <hr>
    <div>
      <?php
        $db = mysqli_connect('localhost', 'root', '', 'expenses');
        if (isset($_POST['save'])) {
          $for = $_POST['company'];
          $out = $_POST['value'];
          $query = "INSERT INTO costing (head, pay)
                    VALUES('$for', '$out')";
          mysqli_query($db, $query);
        }
        $sql = "SELECT * FROM costing";
        $result = mysqli_query($db, $sql);
        $numresults = mysqli_num_rows($result);
        for($i = 0; $i < $numresults; $i++){
          $row = mysqli_fetch_row($result);
          echo "<h3>";
          echo $row[0];
          echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
          echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
          echo $row[1];
          echo "</h3>";
          echo "<hr>";
          echo "<br>";
        }
        mysqli_close($db);
      ?>
    </div>
    <br><br>
    <div>
      <form action="Management Server.php" method="POST">
        Select Company To Update Balance <input type="text" name="company"></input>
        <br><br>
        Balance To Be Updated  For Company <input type="text" name="value"></input>
        <br><br>
        <button type="submit" name="save">Add</button>
      </form>
    </div>
    <hr>
  </div>
 </div>
</body>
</html>
