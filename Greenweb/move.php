<style type="text/css">
.buttonstart{
	display:inline-block;
	margin:20px;
	text-decoration:none;
	font-family:Arial;
	font-size:16px;
	border:2px solid #5BBB2B;
	border-bottom:1px solid #5BBB2B;
	border-right:1px solid #5BBB2B;
	border-radius:15px 5px;
	color:#5BBB2B;
	background-color:#C0E9B5;
	padding:5px 10px;
    
}
.buttonstart:hover{
	border-color:#4A9824;
	color:#4A9824;
	border-radius:5px 15px;
}
button:focus 
{outline:0 !important;}
    
</style>

<hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="move">
      <div class="w-100">
        <h2 class="mb-5">Move</h2>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Streaming Auswertung</h3>
            <div class="subheading mb-3">Streaming Auswertung</div>
           <p>
              
              Für ein z.b. 10min Youtube Video od. Streaming Video kann man folgende Anzahl an km mit den diversen Fortbewegungsmittel zurücklegen. Aber sieh selbst! 
              
            </p>  
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">November 2019</span>
          </div>
        </div>
          
    
<p><button class="buttonstart" onclick="myMove(40,1,'byShow1')">Klicke, um die Kilometeranzahl eines Dieselautos zu erfahren!</button></p>       
<div id ="container">
<div class ="animate" id="1"><img src="img/carBLUE.png" width="100"><span id="byShow1" style="visibility:hidden;">40km</span></div>
</div>       
<div class="rode1"></div>
<div class="rode2"></div>
  <br>   
<p><button class="buttonstart" onclick="myMove(40,2,'byShow2')">Ist ein Benzinauto effizienter? Finde es heraus!</button></p>       
<div id ="container">
<div class ="animate" id="2"><img src="img/carRED.png" width="100"><span id="byShow2" style="visibility:hidden;">40km</span></div>
</div>       
<div class="rode1"></div>
<div class="rode2"></div>
  <br> 
<p><button class="buttonstart" onclick="myMove(70,3,'byShow3')">Klicken, um die Bilanz eines Elektroautos zu erfahren!</button></p>        
<div id ="container">
<div class ="animate" id="3"><img src="img/electrocar.png" width="100"><span id="byShow3" style="visibility:hidden;">70km</span></div>
</div>       
<div class="rode1"></div>
<div class="rode2"></div>
    <br>
<p><button class="buttonstart" onclick="myMove(20,4,'byShow4')">Ist der Flugverkehr wirklich so schlimm?</button></p>        
<div id ="container">
<div class ="animate" id="4"><img src="img/plane.png" width="120"><span id="byShow4" style="visibility:hidden;">20km</span></div>
</div>       
<div class="rode1"></div>
<div class="rode2"></div>
    <br>
<p><button class="buttonstart" onclick="myMove(80,5,'byShow5')">Klicke, um die Effizienz eines Zuges zu sehen!</button></p>        
<div id ="container">
<div class ="animate" id="5"><img src="img/train.png" width="130"><span id="byShow5" style="visibility:hidden;">80km</span></div>
</div>       
<div class="rode1"></div>
<div class="rode2"></div>
  <br>
<p><button class="buttonstart" onclick="myMove(30,6,'byShow6')">Ist der Bus wirklich das umweltverträglichste Fortbewegungsmittel?</button></p>        
<div id ="container">
<div class ="animate" id="6"><img src="img/bus.png" width="100"><span id="byShow6" style="visibility:hidden;">80km</span></div>
</div>       
<div class="rode1"></div>
<div class="rode2"></div>
        
<script>
function myMove(fahrlaenge, id, byshow) {
        document.getElementById(byshow).style.visibility = "hidden";
  var elem = document.getElementById(id);   
  var pos = 0;
  var id = setInterval(frame, 40);
  function frame() {
    if (pos == fahrlaenge) {
      clearInterval(id);
        document.getElementById(byshow).style.visibility = "visible";
    } else {
      pos++; 
      //elem.style.top = pos + "px"; 
      elem.style.left = pos + "%"; 
        
    }
      
  }
    
   
}
</script>
        
        
      </div>

    </section>