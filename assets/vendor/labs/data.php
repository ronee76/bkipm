<html>
  <head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

	 var jsonData = $.ajax({
  url: "data3.php",
  dataType:"json",
  async: false
  }).responseText;

	 
        var data = google.visualization.arrayToDataTable([
          ['NAMA', 'NILAI'],
          <?php
			include 'koneksi.php';
			$nilai = mysqli_query($koneksi,"select * from nilai_mahasiswa");
			while($rec = mysqli_fetch_array($nilai)) {
				echo "['".$rec['nama']."',".$rec['nilai']."],";
			}
			?>
        ]);

        var options = {
          title: 'My Daily Activities',
          pieHole: 0.4,
        };

        var chart = new google.visualization.BarChart(document.getElementById('donutchart'));
        chart.draw(data, options);



      
	
      }
       
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 900px; height: 500px;"></div>
  </body>
</html>