<?php
  include('db.inc.php');

echo "<h2><center>TOP RANKED STARTUPS<br><br>";
  $query=mysql_query('SELECT name FROM startupdetails ORDER BY ranking DESC');
  $i=1;

  while($result=mysql_fetch_assoc($query)){

   echo $i." ".$result['name'];
   echo"<br>";
  $i++;

  }
echo"<br><br>";
 ?>


 <html>
   <head>
   <style type="text/css">
   <style>
   body {
       font: 400 15px Lato, sans-serif;
       line-height: 1.8;
       color: #818181;
   }
   h2 {
       font-size: 24px;
       text-transform: uppercase;
       color: brown;
       font-weight: 600;
       margin-bottom: 30px;
   }
   h4 {
       font-size: 19px;
       line-height: 1.375em;
       color: #303030;
       font-weight: 400;
       margin-bottom: 30px;
   }
  .show{display:block;}
  .button {
    background-color: #f2f2f2;
    border: brown;
    color: brown;
    padding: 30px 64px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  .hide{display:none;}
  </style>
     <script type="text/javascript" src="https://www.google.com/jsapi"></script>
     <script type="text/javascript">

       google.load("visualization", "1.1", {packages:["bar"]});
       google.setOnLoadCallback(drawChart);
     function drawChart() {
         var data = google.visualization.arrayToDataTable([
           ['Company', 'Sales', 'Operational Cost', 'Debt'],
           ['upes startup', 290000, 540000, 70000],
           ['bao startup', 20000, 740000, 500000],
           ['Uber', 580000, 90000, 100000],
           ['Flipkart', 1000000, 100000, 50000]
         ]);

         var options = {
           chart: {
             title: 'Company Performance',
             subtitle: 'Sales, Expenses, and Debt: 2016-2017',
           }
         };

         var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

         chart.draw(data, options);
       }
     </script>
   </head>
   <body>
     <div id="columnchart_material" style="width: 800px; height: 400px;"></div>
   </body>
 </html>
