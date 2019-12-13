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
            <div class="subheading mb-3"></div>
           <p>
              
            
               Schon eine Stunde zu streamen wirkt sich pro Gerät auf die Umwelt aus. Statt eine Stunde zu Streamen hätte man so weit mit den einzelnen Fortbewegungsmitteln fahren können. Aber sieh selbst! 

 
            </p>  
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"></span>
          </div>
        </div>
          
    
<p><button class="buttonstart" onclick="myMove(16,1,'byShow1')">Klicke, um die Kilometeranzahl eines <b>Dieselautos</b> zu erfahren!</button></p>       
<div id ="container">
<div class ="animate" id="1"><img src="img/carBLUE.png" width="100"><span id="byShow1" style="visibility:hidden;">125m</span></div>
</div>       
<div class="rode1"></div>
<div class="rode2"></div>
  <br>   
<p><button class="buttonstart" onclick="myMove(14,2,'byShow2')">Ist ein <b>Benzinauto</b> effizienter? Finde es heraus!</button></p>       
<div id ="container">
<div class ="animate" id="2"><img src="img/carRED.png" width="100"><span id="byShow2" style="visibility:hidden;">115m</span></div>
</div>       
<div class="rode1"></div>
<div class="rode2"></div>
  <br> 
          <p><button class="buttonstart" onclick="myMove(28,3,'byShow3')">Klicken, um die Bilanz eines <b>Elektroautos</b> zu erfahren!</button></p>        
<div id ="container">
<div class ="animate" id="3"><img src="img/electrocar.png" width="100"><span id="byShow3" style="visibility:hidden;">260m</span></div>
</div>       
<div class="rode1"></div>
<div class="rode2"></div>
    <br>
<p><button class="buttonstart" onclick="myMove(5,4,'byShow4')">Ist der <b>Flugverkehr</b> wirklich so schlimm?</button></p>        
<div id ="container">
<div class ="animate" id="4"><img src="img/plane.png" width="120"><span id="byShow4" style="visibility:hidden;">60m</span></div>
</div>       
<div class="rode1"></div>
<div class="rode2"></div>
    <br>
<p><button class="buttonstart" onclick="myMove(82,5,'byShow5')">Klicke, um die Effizienz eines <b>Zuges</b> zu sehen!</button></p>        
<div id ="container">
<div class ="animate" id="5"><img src="img/train.png" width="130"><span id="byShow5" style="visibility:hidden;">1730m</span></div>
</div>       
<div class="rode1"></div>
<div class="rode2"></div>
  <br>
<p><button class="buttonstart" onclick="myMove(55,6,'byShow6')">Ist der <b>Bus</b> wirklich das umweltverträglichste Fortbewegungsmittel?</button></p>        
<div id ="container">
<div class ="animate" id="6"><img src="img/bus.png" width="100"><span id="byShow6" style="visibility:hidden;">490m</span></div>
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