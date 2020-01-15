<style>
    p.solid {border-style: solid;
            border-radius: 20px;
            align-content: center;
            text-align: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #C0E9B5; 
    }
     /* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 600px;
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
    text-align:justify;
    padding: 30px;
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
</style>
<!---   #d8f0e8;-->

<hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="consume">
      <div class="w-100">
        <h2 class="mb-5">Consume</h2>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            
            <h3 class="mb-0">Produzierte Resourcen</h3>
              <br>
              Seit deinem Besuch auf dieser Website ist auf der Welt so einiges passiert. Beachte jedoch das jedes dieser produzierten Geräte wieder zum Datenverkehr beiträgt. Somit wird durch das Streamen und das Aufrufen von Websites mit diesen Endgeräten CO2 ausgestoßen.
            <div class="subheading mb-3"> </div>
              
            
            <p>
              <p class="solid">
                
              <!-- text -->
                <img src="img/smartphone2.png" height="200"><br>
                Telefone produziert: <b><span style="color:black;  font-size: 25pt" id="mobilephoneCounter"></span></b>
              <br>
              Quelle: <a href="https://www.gartner.com/en">gartner.com</a> (1943 Mio Telefone pro Jahr 2016)
              <br>
                  </p>
                <p class="solid">
                <img src="img/monitor.png" height="200"><br>
                Computer produziert: <b><span style="color:black;  font-size: 25pt" id="computerCounter"></span></b>
              <br>
              Quelle: <a href="https://www.gartner.com/en">gartner.com</a> (473 Mio Computer pro Jahr 2016)
                    </p>
                
                

              
              </p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">
              <div class="popup" onclick="myFunction4()"><div class="infoText">i</div>
                    <span class="popuptext" id="myPopup4">
                        Mit dem Besuch auf dieser Website wurde diese beiden Counter gestartet. Bei denen kann man erkennen, wie viele Ressourcen in der Zwischenzeit produziert wurden.
                    </span>
                </div></span>
          </div>
        </div>
          
          

        <br>
        
          

        
      </div>
<script>
// When the user clicks on <div>, open the popup
function myFunction4() {
  var popup = document.getElementById("myPopup4");
  popup.classList.toggle("show");
}
</script>
        <script>
            var i2 = 0;
            var inv2 = setInterval(function() {
                if(i2 < 1943000000)
                    document.getElementById("mobilephoneCounter").innerHTML = ++i2;
                else
                    clearInterval(inv2);
            }   , 14);
        </script>
        
         <script>
            var i3 = 0;
            var inv3 = setInterval(function() {
                if(i3 < 473000000)
                    document.getElementById("computerCounter").innerHTML = ++i3;
                else
                    clearInterval(inv3);
            }   , 65);
        </script>
        
       

    </section>