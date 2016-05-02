<?php
/*include('db.inc.php');
$query = mysql_query("select * from startupdetails where id=$id");
$result = mysql_fetch_assoc($query);
$cxolist=explode(',',$result['cxo']);
  for($i=0;$i<sizeof($cxolist);$i++){
     $subarray=explode(":",$cxolist[$i]);
     $nameArray[$i]=$subarray[0];
     $equityArray[$i]=$sub

*/
 ?>
<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Members', 'Equity'],
          ['Dr. Neelu',   40  ],
          ['Hitesh Sharma',      25],
          ['Ravi Tomar',  25],
        ]);

        var options = {
          title: 'Equity',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>
