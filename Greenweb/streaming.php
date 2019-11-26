 <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="streaming">
      <div class="w-100">
        <h2 class="mb-5">Streaming</h2>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Plotly - Graph</h3>
            <div class="subheading mb-3">x-Achse: vergangene Zeit <br> y-Achse: kumulative Prozessor Energie in mWh</div>
            <p>
                  <form>
  Wie viele Aufrufe sollen dargestellt werden?<br>
  <input type="radio" name="anzahl" onclick="aufrufe_100();"/>100<br>
  <input type="radio" name="anzahl" onclick="aufrufe_10000();"/>10.000
</form>
          <br>
          <br>
          <div id="result"></div>
          <div class="hide" id="aufrufe_10000">
          10000
          </div>
    <script>
        function aufrufe_100() {
                document.getElementById("aufrufe_100").style.display = 'block';
                document.getElementById("aufrufe_10000").style.display = 'none';
            }
        function aufrufe_10000() {
                document.getElementById("aufrufe_10000").style.display = 'block';
                document.getElementById("aufrufe_100").style.display = 'none';
            }
    </script>
<div class="hide" id="aufrufe_100">
<?php
$sql1 = "SELECT CumulativeProcessorEnergymWh AS liste FROM servermessung";
$result1 = mysqli_query ($db_link, $sql1 );
while( $row = mysqli_fetch_array ( $result1 ) )
{
    $lat[] = $row['liste'];
}
$sql3 = "SELECT elapsedTimeSec AS zeit FROM servermessung";
$result3 = mysqli_query ($db_link, $sql3 );
while( $row = mysqli_fetch_array ( $result3 ) )
{
    $time[] = $row['zeit'];
}
?>
<div id="myDiv1"></div>
<script>
var latit = <?php echo json_encode($lat); ?>;
var elapsedTime = <?php echo json_encode($time); ?>;
var trace1 = {
  x: elapsedTime,
  y: latit,
  mode: 'markers'
};
var data = [ trace1];
var layout = {};
Plotly.newPlot('myDiv1', data, layout, {showSendToCloud: true});
</script>
              </div>
    </p>



          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">Größter Erfolg des Tages!</span>
          </div>
        </div>

        
        
        
        
        
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            
        

        

        
      </div>

    </section>