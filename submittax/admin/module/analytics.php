<div class="col-md-12 row">
  <?php
    $sel = mysqli_query($conn,"select count(form_id) from new_pan_individual");
    if(mysqli_num_rows($sel))
    {
        $row = mysqli_fetch_assoc($sel);
        // $pass = $row['password'];
        echo $row;
    }
  ?>
<div id="piechart" class="col-md-3"></div>
<div class="analytics-box col-md-2">OPC 12</div>
<div class="analytics-box col-md-2">PAN 12</div>
<!-- <h3>State Wise Sale</h3> -->
 <!-- <div id="regions_div" class="col-md"></div> -->
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {
	'packages':['corechart'],
	// 'packages':['geochart'],
	// 'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'

});
// piechart
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['opc', 8],
  ['pan', 2],
  ['llp', 4],
  ['pvt ltd', 2],
  ['gst', 8],
  ['itr', 8]
]);

  // Optional; add a title and set the width and height of the chart

 var options = {'title':'Products Sale', 'width':550, 'height':400};
  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
};


google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values

      google.charts.load('current', {
        'packages':['geochart'],
        'mapsApiKey': ' AIzaSyAKKXOtDlbwFigQSBGHunROS6lwqo7LcQY '
      });
      google.charts.setOnLoadCallback(drawRegionsMap);



// map geochart
  
    function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
    ['State', 'Population'],
    ['Uttar Pradesh',199581477],
    ['Maharashtra', 112372972],
    ['Bihar', 103804637],
    ['West Bengal', 91347736],
    ['Madhya Pradesh', 72597565],
    ['Tamil Nadu', 72138958],
    ['Rajasthan', 68621012],
    ['Karnataka', 61130704],
    ['Gujarat', 60383628],
    ['Andhra Pradesh', 49386799],
    ['Odisha', 41947358],
    ['Telangana', 35286757],
    ['Kerala', 33387677],
    ['Jharkhand', 32966238],
    ['Assam', 31169272],
    ['Punjab', 27704236],
    ['Chhattisgarh', 25540196],
    ['Haryana', 25353081],
    ['Jammu and Kashmir', 12548926],
    ['Uttarakhand', 10116752],
    ['Himachal Pradesh', 6856509],
    ['Tripura', 3671032],
    ['Meghalaya', 2964007],
    ['Manipur', 2721756],
    ['Nagaland', 1980602],
    ['Goa', 1457723],
    ['Arunachal Pradesh', 1382611],
    ['Mizoram', 1091014],
    ['Sikkim', 607688],
    ['Delhi', 16753235],
    ['Puducherry', 1244464],
    ['Chandigarh', 1054686],
    ['Andaman and Nicobar Islands', 379944],
    ['Dadra and Nagar Haveli', 342853],
    ['Daman and Diu', 242911],
    ['Lakshadweep', 64429]
  ]);

        var options = {
          region: 'IN', // India
          displayMode: 'regions',
    	  resolution: 'provinces',
          colorAxis: {colors: ['#00853f', 'black', '#e31b23']},
          // backgroundColor: '#81d4fa',
          datalessRegionColor: '#fff',
          defaultColor: '#f5f5f5',
          title:'Geo Location wise sale',
           width:600,
           height:300
        };

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      };
</script>
