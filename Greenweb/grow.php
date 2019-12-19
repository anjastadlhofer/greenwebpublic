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
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
}
    
    #pic{
        max-height: 600px;
    }
    .dia{
  margin-left: auto;
  margin-right: auto;
  width: 60%;
        text-align: left;
    }
</style> 

<hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="grow">
      <div class="w-100">
        <h2 class="mb-5">Grow</h2>
<h3 class="mb-0">Streaming Auswertung</h3>  
                      <div class="subheading mb-3"></div>

          <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="resume-content">   
             <p> 
                 Um zu sehen wie viele Bäume mit dem Streaming beansprucht werden wähle eine Qualität und eine Geschwindigkeit aus. Beachte jedoch, dass mit Geschwindigkeit nicht die Geschwindigkeit des Videos gemeint ist, sondern die Geschwindigkeit der Kodierung bzw. der Komprimierung. Verändere anschließend auch noch die Länge deiner Streamingdauer und sieh selbst wie viele Bäume du für dieses belegst!
              <form>
  <h3>Wähle die Qualität des Streams aus:</h3><br>
  <input type="radio" name="quality" value="1920" onclick="show1();"/> 1920x1080 (HD)<br>
  <input type="radio" name="quality" value="1280" onclick="show1();"/> 1280x720<br>
  <input type="radio" name="quality" value="640" onclick="show1();"/> 640x360<br>
              </form>
          <br>
               
        <div id="speed" class="hide">
            <from>
                <br>
                <h3>Wähle die Länge des Streams aus:</h3><br>
                <select id="choice" onchange="show1()">
                   <option value="1">Game of Thrones Folge (1h)</option>
                   <option value="2.3">Avengers End Game (3h)</option>
                   <option value="16.">Serien Marathon (24h)</option>
                </select>
            </from>
                <form>            <br>

    <h3>Wähle die Kodierungsgeschwindigkeit des Streams aus:</h3><br>
  <input type="radio" name="speed1" value="schneller" onclick="show1();"/> Schnell<br>
  <input type="radio" name="speed1" value="mittlerer" onclick="show1();"/> Mittel<br>
  <input type="radio" name="speed1" value="langsamer" onclick="show1();"/> Langsam<br>
                </form>
            
          </div>
            <br>
                <h3 id="title" class="mb-0" class="hide"><div id="result"></div></h3>
                <div id="plot" class ="hide">
                <div class="container">
                  <img id="pic" src="img/tree.png">
                    <span id="counter" class="counter"></span>                      
                <br>
                    
                   </div>
                    <h3>Hier sieht man die benötigten Watt der jeweiligen Einstellungen nach 30 Sekunden IDLE.</h3>
                    <div class="dia">
                    <div id="1920schneller" class="hide"></div>
                    <div id="1920mittlerer" class="hide"></div>
                    <div id="1920langsamer" class="hide"></div>
                    <div id="1280schneller" class="hide"></div>
                    <div id="1280mittlerer" class="hide"></div>
                    <div id="1280langsamer" class="hide"></div>
                    <div id="640schneller" class="hide"></div>
                    <div id="640mittlerer" class="hide"></div>
                    <div id="640langsamer" class="hide"></div>
                  </div>
                </div>
  
              
                
                
                
<div class="hide">
                    
              <?php
$sql1_1 = "SELECT systemTotalWattage AS liste FROM streaming_smartmeter_hpserver_2";
$result1_1 = mysqli_query ($db_link, $sql1_1 );
while( $row = mysqli_fetch_array ( $result1_1 ) )
{
    $lat[] = $row['liste'];
}
$sql1_2 = "SELECT time AS zeit FROM streaming_smartmeter_hpserver_2";
$result1_2 = mysqli_query ($db_link, $sql1_2 );
while( $row = mysqli_fetch_array ( $result1_2 ) )
{
    $time[] = $row['zeit'];
}
?>
<script>
var latit1 = <?php echo json_encode($lat); ?>;
var elapsedTime1 = <?php echo json_encode($time); ?>;
    
    trace1 = {
  type: 'scatter',
  x: elapsedTime1,
  y: latit1,
  mode: 'lines',
  name: 'Red',
  line: {
    color: 'rgb(219, 64, 82)',
    width: 3
  }
};

var data1 = [trace1];
var layout = {
  title: "Plot Title",
  xaxis: {
    title: "x Axis",
    titlefont: {
      family: "Courier New, monospace",
      size: 18,
      color: "#7f7f7f"
    }
  },
  yaxis: {
    title: "y Axis",
    titlefont: {
      family: "Courier New, monospace",
      size: 18,
      color: "#7f7f7f"
    }
  }
};
Plotly.newPlot('1920schneller', data1, {showSendToCloud: true});
    
</script>

              
              <?php
$sql2_1 = "SELECT systemTotalWattage AS liste FROM streaming_smartmeter_hpserver_1";
$result2_1 = mysqli_query ($db_link, $sql2_1 );
while( $row = mysqli_fetch_array ( $result2_1 ) )
{
    $lat[] = $row['liste'];
}
$sql2_2 = "SELECT time AS zeit FROM streaming_smartmeter_hpserver_1";
$result2_2 = mysqli_query ($db_link, $sql2_2 );
while( $row = mysqli_fetch_array ( $result2_2 ) )
{
    $time[] = $row['zeit'];
}
?>
<script>
var latit = <?php echo json_encode($lat); ?>;
var elapsedTime = <?php echo json_encode($time); ?>;
    
    trace2 = {
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

var data = [trace2];
var layout = {
   title: {
    text:'Plot Title',
    font: {
      family: 'Courier New, monospace',
      size: 24
    },
    xref: 'paper',
    x: 0.05,
  },
  xaxis: {
    title: {
      text: 'x Axis',
      font: {
        family: 'Courier New, monospace',
        size: 18,
        color: '#7f7f7f'
      }
    },
  },
  yaxis: {
    title: {
      text: 'y Axis',
      font: {
        family: 'Courier New, monospace',
        size: 18,
        color: '#7f7f7f'
      }
    }
  }
};
Plotly.newPlot('1920mittlerer', data, {}, {showSendToCloud: true});
</script>
      

              <?php
$sql1 = "SELECT systemTotalWattage AS liste FROM streaming_smartmeter_hpserver_3";
$result3_1 = mysqli_query ($db_link, $sql3_1 );
while( $row = mysqli_fetch_array ( $result3_1 ) )
{
    $lat[] = $row['liste'];
}
$sql3_2 = "SELECT time AS zeit FROM streaming_smartmeter_hpserver_3";
$result3_2 = mysqli_query ($db_link, $sql3_2 );
while( $row = mysqli_fetch_array ( $result3_2 ) )
{
    $time[] = $row['zeit'];
}
?>
<script>
var latit = <?php echo json_encode($lat); ?>;
var elapsedTime = <?php echo json_encode($time); ?>;
    
    trace3 = {
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

var data = [trace3];
var layout = {
   title: {
    text:'Plot Title',
    font: {
      family: 'Courier New, monospace',
      size: 24
    },
    xref: 'paper',
    x: 0.05,
  },
  xaxis: {
    title: {
      text: 'x Axis',
      font: {
        family: 'Courier New, monospace',
        size: 18,
        color: '#7f7f7f'
      }
    },
  },
  yaxis: {
    title: {
      text: 'y Axis',
      font: {
        family: 'Courier New, monospace',
        size: 18,
        color: '#7f7f7f'
      }
    }
  }
};
Plotly.newPlot('1920langsamer', data, {}, {showSendToCloud: true});
</script>

              
              <?php
$sql4_1 = "SELECT systemTotalWattage AS liste FROM streaming_smartmeter_hpserver_5";
$result4_1 = mysqli_query ($db_link, $sql4_1 );
while( $row = mysqli_fetch_array ( $result4_1 ) )
{
    $lat[] = $row['liste'];
}
$sql4_2 = "SELECT time AS zeit FROM streaming_smartmeter_hpserver_5";
$result4_2 = mysqli_query ($db_link, $sql4_2 );
while( $row = mysqli_fetch_array ( $result4_2 ) )
{
    $time[] = $row['zeit'];
}
?>
<script>
var latit = <?php echo json_encode($lat); ?>;
var elapsedTime = <?php echo json_encode($time); ?>;
    
    trace4 = {
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

var data = [trace4];
var layout = {
   title: {
    text:'Plot Title',
    font: {
      family: 'Courier New, monospace',
      size: 24
    },
    xref: 'paper',
    x: 0.05,
  },
  xaxis: {
    title: {
      text: 'x Axis',
      font: {
        family: 'Courier New, monospace',
        size: 18,
        color: '#7f7f7f'
      }
    },
  },
  yaxis: {
    title: {
      text: 'y Axis',
      font: {
        family: 'Courier New, monospace',
        size: 18,
        color: '#7f7f7f'
      }
    }
  }
};
Plotly.newPlot('1280schneller', data, {}, {showSendToCloud: true});

</script>
              
              
              <?php
$sql5_1 = "SELECT systemTotalWattage AS liste FROM streaming_smartmeter_hpserver_4";
$result5_1 = mysqli_query ($db_link, $sql5_1 );
while( $row = mysqli_fetch_array ( $result5_1 ) )
{
    $lat[] = $row['liste'];
}
$sql5_2 = "SELECT time AS zeit FROM streaming_smartmeter_hpserver_4";
$result5_2 = mysqli_query ($db_link, $sql5_2 );
while( $row = mysqli_fetch_array ( $result5_2 ) )
{
    $time[] = $row['zeit'];
}
?>
<script>
var latit = <?php echo json_encode($lat); ?>;
var elapsedTime = <?php echo json_encode($time); ?>;
    
    trace5 = {
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

var data = [trace5];
var layout = {
   title: {
    text:'Plot Title',
    font: {
      family: 'Courier New, monospace',
      size: 24
    },
    xref: 'paper',
    x: 0.05,
  },
  xaxis: {
    title: {
      text: 'x Axis',
      font: {
        family: 'Courier New, monospace',
        size: 18,
        color: '#7f7f7f'
      }
    },
  },
  yaxis: {
    title: {
      text: 'y Axis',
      font: {
        family: 'Courier New, monospace',
        size: 18,
        color: '#7f7f7f'
      }
    }
  }
};
Plotly.newPlot('1280mittlerer', data, {}, {showSendToCloud: true});

</script>

             <?php
$sql6_1 = "SELECT systemTotalWattage AS liste FROM streaming_smartmeter_hpserver_6";
$result6_1 = mysqli_query ($db_link, $sql6_1 );
while( $row = mysqli_fetch_array ( $result6_1 ) )
{
    $lat[] = $row['liste'];
}
$sql6_2 = "SELECT time AS zeit FROM streaming_smartmeter_hpserver_6";
$result6_2 = mysqli_query ($db_link, $sql6_2 );
while( $row = mysqli_fetch_array ( $result6_2 ) )
{
    $time[] = $row['zeit'];
}
?>
<script>
var latit = <?php echo json_encode($lat); ?>;
var elapsedTime = <?php echo json_encode($time); ?>;
    
    trace6 = {
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

var data = [trace6];
var layout = {
   title: {
    text:'Plot Title',
    font: {
      family: 'Courier New, monospace',
      size: 24
    },
    xref: 'paper',
    x: 0.05,
  },
  xaxis: {
    title: {
      text: 'x Axis',
      font: {
        family: 'Courier New, monospace',
        size: 18,
        color: '#7f7f7f'
      }
    },
  },
  yaxis: {
    title: {
      text: 'y Axis',
      font: {
        family: 'Courier New, monospace',
        size: 18,
        color: '#7f7f7f'
      }
    }
  }
};
Plotly.newPlot('1280langsamer', data, {}, {showSendToCloud: true});

</script>
   

             <?php
$sql7_1 = "SELECT systemTotalWattage AS liste FROM streaming_smartmeter_hpserver_8";
$result7_1 = mysqli_query ($db_link, $sql7_1 );
while( $row = mysqli_fetch_array ( $result7_1 ) )
{
    $lat[] = $row['liste'];
}
$sql7_2 = "SELECT time AS zeit FROM streaming_smartmeter_hpserver_8";
$result7_2 = mysqli_query ($db_link, $sql7_2 );
while( $row = mysqli_fetch_array ( $result7_2 ) )
{
    $time[] = $row['zeit'];
}
?>
<script>
var latit = <?php echo json_encode($lat); ?>;
var elapsedTime = <?php echo json_encode($time); ?>;
    
    trace7 = {
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

var data = [trace7];
var layout = {
   title: {
    text:'Plot Title',
    font: {
      family: 'Courier New, monospace',
      size: 24
    },
    xref: 'paper',
    x: 0.05,
  },
  xaxis: {
    title: {
      text: 'x Axis',
      font: {
        family: 'Courier New, monospace',
        size: 18,
        color: '#7f7f7f'
      }
    },
  },
  yaxis: {
    title: {
      text: 'y Axis',
      font: {
        family: 'Courier New, monospace',
        size: 18,
        color: '#7f7f7f'
      }
    }
  }
};
Plotly.newPlot('640schneller', data, {}, {showSendToCloud: true});
</script>
              

              <?php
$sql8_1 = "SELECT systemTotalWattage AS liste FROM streaming_smartmeter_hpserver_7";
$result8_1 = mysqli_query ($db_link, $sql8_1 );
while( $row = mysqli_fetch_array ( $result8_1 ) )
{
    $lat[] = $row['liste'];
}
$sql8_2 = "SELECT time AS zeit FROM streaming_smartmeter_hpserver_7";
$result8_2 = mysqli_query ($db_link, $sql8_2 );
while( $row = mysqli_fetch_array ( $result8_2 ) )
{
    $time[] = $row['zeit'];
}
?>
<script>
var latit = <?php echo json_encode($lat); ?>;
var elapsedTime = <?php echo json_encode($time); ?>;
    
    trace8 = {
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

var data = [trace8];
var layout = {
   title: {
    text:'Plot Title',
    font: {
      family: 'Courier New, monospace',
      size: 24
    },
    xref: 'paper',
    x: 0.05,
  },
  xaxis: {
    title: {
      text: 'x Axis',
      font: {
        family: 'Courier New, monospace',
        size: 18,
        color: '#7f7f7f'
      }
    },
  },
  yaxis: {
    title: {
      text: 'y Axis',
      font: {
        family: 'Courier New, monospace',
        size: 18,
        color: '#7f7f7f'
      }
    }
  }
};
Plotly.newPlot('640mittlerer', data, {}, {showSendToCloud: true});
</script>

              

              <?php
$sql9_1 = "SELECT systemTotalWattage AS liste FROM streaming_smartmeter_hpserver_9";
$result9_1 = mysqli_query ($db_link, $sql9_1 );
while( $row = mysqli_fetch_array ( $result9_1 ) )
{
    $lat[] = $row['liste'];
}
$sql9_2 = "SELECT time AS zeit FROM streaming_smartmeter_hpserver_9";
$result9_2 = mysqli_query ($db_link, $sql9_2 );
while( $row = mysqli_fetch_array ( $result9_2 ) )
{
    $time[] = $row['zeit'];
}
?>
<script>
var latit = <?php echo json_encode($lat); ?>;
var elapsedTime = <?php echo json_encode($time); ?>;
    
    trace9 = {
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

var data = [trace9];
var layout = {
   title: {
    text:'Plot Title',
    font: {
      family: 'Courier New, monospace',
      size: 24
    },
    xref: 'paper',
    x: 0.05,
  },
  xaxis: {
    title: {
      text: 'x Axis',
      font: {
        family: 'Courier New, monospace',
        size: 18,
        color: '#7f7f7f'
      }
    },
  },
  yaxis: {
    title: {
      text: 'y Axis',
      font: {
        family: 'Courier New, monospace',
        size: 18,
        color: '#7f7f7f'
      }
    }
  }
};
Plotly.newPlot('640langsamer', data, {}, {showSendToCloud: true});
</script>
</div>

                </div>
              <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
            </div>
      </div>
    
    <script>
        var count = 0;
        var multi = 0;
        
        function show1(){
            document.getElementById('speed').style.display ='block';
            
            var ele1 = document.getElementsByName('speed1');
            var ele = document.getElementsByName('quality');
            var stream = "";
            var q = "";
            var s = "";
            
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
          
            stream = q+s;
            
            switch (stream) {
              case "640schneller":
                   multi = document.querySelector("#choice").value;
                count = 9 * multi;
                break;
              case "640langsamer":
              case "640mittlerer":
              case "1280schneller":
              case "1920schneller":
                    multi = document.querySelector("#choice").value;
                count = 10 * multi;
                break;
              case "1280mittlerer":
                    multi = document.querySelector("#choice").value;
                count = 11 * multi;
                break;
              case "1280langsamer":
              case "1920langsamer":
                    multi = document.querySelector("#choice").value;
                 count = 13 * multi;
                break;
              case "1920mittlerer":
                    multi = document.querySelector("#choice").value;
                count = 14 * multi;
            }
            

                if(s == "schneller"|| s == "mittlerer"|| s== "langsamer"){
                    document.getElementById("result").innerHTML = "Beanspruchte Bäume von einem "+ q +"p Video mit "+ s +" Kodierungsgeschwindigkeit";
                    document.getElementById('plot').style.display ='block';
                    undo();
                    document.getElementById(stream).style.display ='block';
                    grow();
                }
                else{
                    document.getElementById("result").innerHTML = "Bitte Geschwindigkeit auswählen!"
                    document.getElementById('title').style.display ='block';        
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
            if (pos == 600) {
              clearInterval(id);
            } else {
              pos++; 
              elem.style.height = pos + 'px'; 
            }
          }
            counter();
        }
        
        function counter(){
            clearInterval(inv)
             var i = 0;var inv = setInterval(function() {
                 if(i < count)
                    document.getElementById("counter").innerHTML = ++i;
                else
                    clearInterval(inv);
            }, (200/multi));
            
        }
           
              
    </script>
              
              </p>
          </div>
</section>

