<html>
<head>
    <title>Kometschuh.de Tracker</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
   
  function drawChart() {
 
   
    var jsonData = $.ajax({
  url: "data2.php",
  dataType:"json",
  async: false
  }).responseText;
var data = new google.visualization.DataTable(jsonData);
 
    var options = {
      title: 'My Daily Activities'
    };
 
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
 
    chart.draw(data, options);
  }
</script>
 
<div id="piechart" style="width: 620px; height: 500px;"></div>
</body>
</html>