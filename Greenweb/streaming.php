 <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="streaming">
      <div class="w-100">
        <h2 class="mb-5">Streaming</h2>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
               
              
              <form>
  Wähle die Qualität des Streams aus?<br>
  <input type="radio" name="quality" value="1920" onclick="show1();"/> 1920x1080 (HD)<br>
  <input type="radio" name="quality" value="1280" onclick="show1();"/> 1280x720<br>
  <input type="radio" name="quality" value="640" onclick="show1();"/> 640x360<br>
              </form>
          <br>
        <div id="speed" class="hide" >
                  <form>
          Wähle die Geschwindigkeit des Streams aus?<br>
  <input type="radio" name="speed1" onclick="_serachF();"/> Fast<br>
  <input type="radio" name="speed1" onclick="_serachM();"/> Medium<br>
  <input type="radio" name="speed1" onclick="_serachS();"/> Slow<br>
                      </form>
          </div>
               <br>
              <div id="title" class="hide">
              <h3 class="mb-0"><div id="result"></div></h3>
                  <div id="result"></div>

                <div id="myDiv1"></div>
            <img src="img/tree.png" height="420" class="tree">
                  <br>
              <span id="counter" class="counter"></span>
                  
            </div>
             
              
              
              
              <div id="1920f" class="hide">
              <?php
$sql1 = "SELECT (CumulativeProcessorEnergymWh + CumulativeIAEnergymWh + CumulativeDRAMEnergymWh) AS liste FROM servermessung";
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
</script></div>
              
              
              <div id="1920m" class="hide">
              <?php
$sql1 = "SELECT (CumulativeProcessorEnergymWh + CumulativeIAEnergymWh + CumulativeDRAMEnergymWh) AS liste FROM servermessung";
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
</script></div>
              
              
              <div id="1920s" class="hide">
              <?php
$sql1 = "SELECT (CumulativeProcessorEnergymWh + CumulativeIAEnergymWh + CumulativeDRAMEnergymWh) AS liste FROM servermessung";
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
</script></div>
              
              
              <div id="1280f" class="hide">
              <?php
$sql1 = "SELECT (CumulativeProcessorEnergymWh + CumulativeIAEnergymWh + CumulativeDRAMEnergymWh) AS liste FROM servermessung";
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
</script></div>
              
              
              <div id="1280m" class="hide">
              <?php
$sql1 = "SELECT (CumulativeProcessorEnergymWh + CumulativeIAEnergymWh + CumulativeDRAMEnergymWh) AS liste FROM servermessung";
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
</script></div>
              
              
              <div id="1280s" class="hide">
              <?php
$sql1 = "SELECT (CumulativeProcessorEnergymWh + CumulativeIAEnergymWh + CumulativeDRAMEnergymWh) AS liste FROM servermessung";
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
</script></div>
              
              
              <div id="640f" class="hide">
              <?php
$sql1 = "SELECT (CumulativeProcessorEnergymWh + CumulativeIAEnergymWh + CumulativeDRAMEnergymWh) AS liste FROM servermessung";
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
</script></div>
              
              
              <div id="640m" class="hide">
              <?php
$sql1 = "SELECT (CumulativeProcessorEnergymWh + CumulativeIAEnergymWh + CumulativeDRAMEnergymWh) AS liste FROM servermessung";
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
<script>
var latit = <?php echo json_encode($lat); ?>;
var elapsedTime = <?php echo json_encode($time); ?>;
var trace1 = {
  x: elapsedTime,
  y: latit,
  mode: 'markers'
};
var data = [ trace1];
var layout = {
    xaxis: {
        title: 'Zeit'
    },
    yaxis: {
        title: 'Energieverbrauch in mWh'
    }
};
Plotly.newPlot('myDiv1', data, layout, {showSendToCloud: true});
</script></div>
              
              
              <div id="640s" class="hide">
              <?php
$sql1 = "SELECT (CumulativeProcessorEnergymWh + CumulativeIAEnergymWh + CumulativeDRAMEnergymWh) AS liste FROM servermessung";
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
</script></div>    
              
              
          
    <script>
        
        function show2(){
            document.getElementById('title').style.display ='block';
        }
        
        function show1(){
                  document.getElementById('speed').style.display ='block';
                    document.getElementsByName('hide_extra').style.display ='none';
                }
        
        function undo(){
            document.getElementById('1920f').style.display = 'none';
            document.getElementById('1920m').style.display = 'none';
            document.getElementById('1920s').style.display = 'none';
            document.getElementById('1280f').style.display = 'none';
            document.getElementById('1280m').style.display = 'none';
            document.getElementById('1280s').style.display = 'none';
            document.getElementById('640f').style.display = 'none';
            document.getElementById('640m').style.display = 'none';
            document.getElementById('640s').style.display = 'none';
        }
        
        function _serachF(){
            var ele = document.getElementsByName('quality');
            var stream = "";
            
            
            for(i = 0; i < ele.length; i++) { 
                if(ele[i].checked)                
                stream = ele[i].value + "f"
                document.getElementById("result").innerHTML = "Energieverbrauch von einem "+ele[i].value +"p Video mit schneller Geschwindigkeit";
            }
            show2();
            undo();
            document.getElementById(stream).style.display ='block';
            
                
        }
       
        function _serachM(){
            var ele = document.getElementsByName('quality');
            var stream = "";
            
            
            for(i = 0; i < ele.length; i++) { 
                if(ele[i].checked)                
                stream = ele[i].value + "m"
                document.getElementById("result").innerHTML = "Energieverbrauch von einem "+ele[i].value +"p Video mit mittlerer Geschwindigkeit"; 
            }
            show2();
            undo();
            document.getElementById(stream).style.display ='block';
            
                
        }
        
        function _serachS(){
            var ele = document.getElementsByName('quality');
            var stream = "";
            
            for(i = 0; i < ele.length; i++) { 
                if(ele[i].checked)                
                stream = ele[i].value + "s"
                document.getElementById("result").innerHTML = "Energieverbrauch von einem "+ele[i].value +"p Video mit langsamer Geschwindigkeit";
            }
            show2();
            undo();
            document.getElementById(stream).style.display ='block';
            
                
        }
    </script>
              
<script>
var i = 0;var inv = setInterval(function() {
    if(i < 250)
        document.getElementById("counter").innerHTML = ++i;
    else
        clearInterval(inv);
}, 3000 / 100);
</script>
              
            </div>
          </div>
        </div>
</section>
