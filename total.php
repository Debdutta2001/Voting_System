<?php
include('./connect.php');


$sql="Select * from `userdata`  where standard='group'";
$result=mysqli_query($con,$sql);



?>
<html>
  <head>
    <title>pie chart</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['username', 'votes'],
          <?php
if(mysqli_num_rows($result)>0){
  $sql="Select username,votes from `userdata`  where standard='group'";
  $resultgroup=mysqli_query($con,$sql);
  if(mysqli_num_rows($resultgroup)>0) {
    $groups=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
    $_SESSION['groups']=$groups;
   
  }
}
     
         

                     
if(isset($_SESSION['groups'])){
  $groups=$_SESSION['groups'];
  for($i=0;$i<count($groups); $i++){
              echo "['username', ".$groups[$i]['votes']."],";
              
  } 
}        
          
          
          ?>

        ]);

        var options = {
          title: 'Total count',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    
  </head>
  <body style="background-color:lightblue">
  <a href="/voting/index.php"><button class="btn btn-dark text-light px-3">Back</button></a>
    <center>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
    </center>
  </body>
</html>