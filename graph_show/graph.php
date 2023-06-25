

<?php
  $con = mysqli_connect("localhost","root","","criminal_database");
  if($con){
    echo "";
  }
?>
<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['crim', 'to_coun'],
         <?php
         $sql = "SELECT * FROM cri";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['crim']."',".$result['to_coun']."],";
          }

         ?>
        ]);

        var options = {
          title: 'Students and their contribution'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <style>
      .right {

float: right;

}
    </style>
  </head>
  <body>
    
    <div id="piechart" style="width: 900px; height: 500px;" class="right"></div>
  
  </body>
</html>