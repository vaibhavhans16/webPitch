<?php
 include 'db.inc.php';
 error_reporting(0);
 $id=12;
  $query = mysql_query("select * from startupdetails where id=$id");
  $result = mysql_fetch_assoc($query);
echo"<div>";
  echo  " <h4><b><center>".$result['name'];
  echo "<br></b>";
  echo  " <center><i> ".$result['textIntro'];
  echo "<br><br></i>";
  echo  " Curent Debt on Company : ".$result['debt'];
  echo "<br>";
  echo  " Total Sales since Inception : ".$result['sales'];
  echo "<br>";
  echo  " Equity willing to give up :".$result['aequt'];
  echo "<br>";
  echo  " Past Investment  : ".$result['pastmoney'];
  echo "<br>";
  echo  " Date of Establishment : ".$result['dateOfEst'];
  echo "<br>";
  echo  " Operational Cost : ".$result['operationalCost'];
  echo "<br>";

  //noOfYears
  $estdate=explode(":",$result['dateOfEst']);
  $noOfYears=date('Y')-$estdate[0];

  $cxolist=explode(',',$result['cxo']);
  for($i=0;$i<sizeof($cxolist);$i++){
     $subarray=explode(":",$cxolist[$i]);
     echo " <br><b> Member ".($i+1) ."<br>"."  Name : ".$subarray[0]. "<br>"."  Position :". $subarray[2] ."<br>"."  Equity : ".$subarray[1]."%<br>";

  }echo "</br></div>";


  //calc of cashflow
    $cashflow=(($result['sales']-$result['debt'])/$noOfYears)-$result['operationalCost'] ;
    $evaul   = 6*($cashflow) ;
    $ranking = (($result['sales']/$noOfYears)/200)+($noOfYears*300) + ($result['pastmoney']*1200)/100;

    $query=mysql_query("update startupdetails set ranking=$ranking where id = $id") ;



    echo" <img id='Picture1' src='sentencecountbolt.png' class='hide'>"
?>
   <a onclick='showImg()' value= 'Picture1' class="button">Tweets Dashboard</a>
   <a href="d3.html" class="button">Social Media Analytics</a>
   <a onclick='showEvl()' class="button">Valuation of Company</a>
   <a href='ranking.php' class="button">Top Ranking</a>
   <a onclick='cashflowAlert()' class="button">Prediction</a>
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
          color: #303030;
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

      div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 5px;
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
       google.load("visualization", "1", {packages:["corechart"]});
       google.setOnLoadCallback(drawChart);
       function drawChart() {
         var data = google.visualization.arrayToDataTable([
           ['Members', 'Equity'],
           ['Binny Bansal',   50  ],
           ['Sachin Bansal',     50]
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
   <body bgcolor= #FFE4C4>
      <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
   </body>
 </html>


<script type="text/javascript">

function showEvl(){
alert('<?php echo "VALUATION OF THE COMPANY: " . $evaul ?>');


}

function cashflowAlert(){
 var check = '<?php echo $cashflow ?>';
 if(check > 0){
   alert("MORE THAN 50% CHANCES OF SUCCESS");

 }
 else
   alert("LESS THAN 50% CHANCES OF SUCCESS");

}

function showImg()
{
var obj=document.getElementById('Picture1');
obj.className = 'show';
}
</script>
