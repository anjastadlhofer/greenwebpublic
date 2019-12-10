<style type="text/css">

.container {
  position: relative;
  text-align: center;
  color: white;
    height: 800px; 
    border: 0px;
}
.counter{
    font-size: 210px; 
    text-shadow: 1px  1px 1px black,
                  1px -1px 1px black,
                 -1px  1px 1px black,
                 -1px -1px 1px black;
    color: #01450b;
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
}
    
    #pic{
        max-height: 700px;
    }
</style> 

<hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="streaming">
      <div class="w-100">
        <h2 class="mb-5">Streaming</h2>
          <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="resume-content">   
             <p> 
              <form>
  <h3>Wähle die Qualität des Streams aus?</h3><br>
  <input type="radio" name="quality" value="1920" onclick="show1();"/> 1920x1080 (HD)<br>
  <input type="radio" name="quality" value="1280" onclick="show1();"/> 1280x720<br>
  <input type="radio" name="quality" value="640" onclick="show1();"/> 640x360<br>
              </form>
          <br>
        <div id="speed" class="hide">
                <form>
    <h3>Wähle die Geschwindigkeit des Streams aus?</h3><br>
  <input type="radio" name="speed1" value="schneller" onclick="show1();"/> Fast<br>
  <input type="radio" name="speed1" value="mittlerer" onclick="show1();"/> Medium<br>
  <input type="radio" name="speed1" value="langsamer" onclick="show1();"/> Slow<br>
                </form>
          </div>
            <br>
                 <h2 id="title" class="mb-0" class="hide"><div id="result"></div></h2>
                <div id="plot" class ="hide">
                <div class="container">
                  <img id="pic" src="img/tree.png">
                    <span id="counter" class="counter"></span>                      
                <br>
                   </div>
                    <div id="myDiv1" ></div>
                  </div>
  
              
              <div id="1920schneller" class="hide">
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
    
    trace1 = {
  type: 'scatter',
  x: elapsedTime,
  y: latit,
  mode: 'lines',
  name: 'Red',
  line: {
    color: 'rgb(219, 64, 82)',
    width: 3
  }
};

var data = [trace1];
var layout = {};
Plotly.newPlot('myDiv1', data, {}, {showSendToCloud: true});
</script></div>
              
              
<!--
              <div id="1920mittlerer" class="hide">
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
              
              
              <div id="1920langsamer" class="hide">
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
              
              
              <div id="1280schneller" class="hide">
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
              
              
              <div id="1280mittlerer" class="hide">
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
              
              
              <div id="1280langsamer" class="hide">
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
              
              
              <div id="640schneller" class="hide">
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
              
              
              <div id="640mittlerer" class="hide">
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
              
              
              <div id="640langsamer" class="hide">
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
-->
               
                </div>
              <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
            </div>
      </div>
    
    <script>
        
        function show2(){
            document.getElementById('title').style.display ='block';
        }
        
        function show1(){
            document.getElementById('speed').style.display ='block';
            
            var ele1 = document.getElementsByName('speed1');
            var ele = document.getElementsByName('quality');
            var stream = "";
            var q = "";
            var s = "";
            var list = ["schneller", "mittlerer","langsamer"];
            
            for(i = 0; i < ele.length; i++) { 
                if(ele[i].checked){
                    q = ele[i].value;
                }
            }
            for(i = 0; i < ele1.length; i++) {
                if(ele1[i].checked){                     
                    s = ele1[i].value;
                }
            }
            grow();
            counter();
//            show2();
//            document.getElementById("result").innerHTML = "Energieverbrauch von einem "+ q +"p Video mit "+ s +" Geschwindigkeit";

            for(i = 0; i < list.length; i++){
                if(list[i] == s){
                    document.getElementById("result").innerHTML = "Energieverbrauch von einem "+ q +"p Video mit "+ s +" Geschwindigkeit";
                    document.getElementById('plot').style.display ='block';
                    undo();
                    document.getElementById(stream).style.display ='block';
                    
                }
            else{
                document.getElementById("result").innerHTML = "Bitte Geschwindikeit auswählen!"
                document.getElementById('title').style.display ='block';        
                }
            }
        }
        
        function undo(){
            document.getElementById('1920schneller').style.display = 'none';
            document.getElementById('1920mittlerer').style.display = 'none';
            document.getElementById('1920langsamer').style.display = 'none';
            document.getElementById('1280schneller').style.display = 'none';
            document.getElementById('1280mittlerer').style.display = 'none';
            document.getElementById('1280langsamer').style.display = 'none';
            document.getElementById('640schneller').style.display = 'none';
            document.getElementById('640mittlerer').style.display = 'none';
            document.getElementById('640langsamer').style.display = 'none';
        }
        
        function grow(){
          var elem = document.getElementById("pic");
          var pos = 0;
          var id = setInterval(frame, 1);
          function frame() {
            if (pos == 700) {
              clearInterval(id);
            } else {
              pos++; 
              elem.style.height = pos + 'px'; 
            }
          }
        }
        function counter(){
             var i = 0;var inv = setInterval(function() {
                if(i < 5000)
                    document.getElementById("counter").innerHTML = ++i;
                else
                    clearInterval(inv);
            }, 1);
            
        }
           
              
    </script>
              
<!--
<script>
    var i = 0;var inv = setInterval(function() {
        if(i < 5000)
            document.getElementById("counter").innerHTML = ++i;
        else
            clearInterval(inv);
    }, 1);
</script>
-->
              </p>
          </div>
</section>

