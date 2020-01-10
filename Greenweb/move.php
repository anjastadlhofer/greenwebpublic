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
	padding:5px;
    
}
.buttonstart:hover{
	border-color:#4A9824;
	color:#4A9824;
	border-radius:5px 15px;
}
button:focus 
{outline:0 !important;}
    
/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 450px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  top: -50%;
  right: 100%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 10%;
  left: 100%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: transparent #555 transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}  
    
.r{

}

    
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
            <span class="text-primary">
              <div class="popup" onclick="myFunction2()"><div class="infoText">i</div>
                    <span class="popuptext" id="myPopup2">
                        Beachte jedoch, dass mit Geschwindigkeit nicht die Geschwindigkeit des Videos gemeint ist, sondern die Geschwindigkeit der Kodierung bzw. der Komprimierung. Je schneller kodiert wurde, desto schlechter ist die Qualität. Verändere anschließend auch noch die Länge deiner Streamingdauer und sieh selbst wie viele Bäume du für dieses belegst!
                    </span>
                </div></span>
          </div>
        </div>
    
          
<p><button class="buttonstart" onclick="myMove(4,1,'byShow1')">Klicke, um die Kilometeranzahl eines <b>Dieselautos</b> zu erfahren!</button></p>       
<div id ="container">
<div class ="animate" id="1"><img src="img/carBLUE.png" width="100"><span id="byShow1" style="visibility:hidden;">125m</span></div>
</div>       
<div class="rode1"></div>
<div class="rode2"></div>
  <br>   
<p><button class="buttonstart" onclick="myMove(3,2,'byShow2')">Ist ein <b>Benzinauto</b> effizienter? Finde es heraus!</button></p>       
<div id ="container">
<div class ="animate" id="2"><img src="img/carRED.png" width="100"><span id="byShow2" style="visibility:hidden;">115m</span></div>
</div>       
<div class="rode1"></div>
<div class="rode2"></div>
  <br> 
          <p><button class="buttonstart" onclick="myMove(9,3,'byShow3')">Klicken, um die Bilanz eines <b>Elektroautos</b> zu erfahren!</button></p>        
<div id ="container">
<div class ="animate" id="3"><img src="img/electrocar.png" width="100"><span id="byShow3" style="visibility:hidden;">260m</span></div>
</div>       
<div class="rode1"></div>
<div class="rode2"></div>
    <br>
<p><button class="buttonstart" onclick="myMove(1,4,'byShow4')">Ist der <b>Flugverkehr</b> wirklich so schlimm?</button></p>        
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
<p><button class="buttonstart" onclick="myMove(25,6,'byShow6')">Ist der <b>Bus</b> wirklich das umweltverträglichste Fortbewegungsmittel?</button></p>        
<div id ="container">
<div class ="animate" id="6"><img src="img/bus.png" class="sechs" width="140"><span id="byShow6" style="visibility:hidden;">490m</span></div>
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
// When the user clicks on div, open the popup
function myFunction2() {
  var popup = document.getElementById("myPopup2");
  popup.classList.toggle("show");
}
</script>
        
        
      </div>

    </section>