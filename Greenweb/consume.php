<style>
    p.solid {border-style: solid;
            border-radius: 20px;
            align-content: center;
            text-align: center;
            padding-top: 0px;
            padding-bottom: 40px;
            background-color: #C0E9B5; 
    }
    /* Popup container */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
}

/* The actual popup (appears on top) */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class when clicking on the popup container (hide and show the popup) */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s
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
              <div class="popup" onclick="myFunction()" align=right>Click
  <span class="popuptext" id="myPopup">Mit dem Besuch auf dieser Website wurde die beiden Counter gestartet. Bei diesen kann man erkennen wie viele Ressourcen in der Zwischenzeit produziert wurden.</span>
</div> 
              
    <br>
              
              Seit deinem Besuch auf dieser Website ist auf der Welt so einiges passiert:
              
              
            <div class="subheading mb-3"> </div>
              
            
            <p>
              <p class="solid">
                
              <!-- text -->
                <img src="img/smartphone2.png" height="200"><br>
                Telefone produziert: <span id="mobilephoneCounter"></span>
              <br>
              Quelle: <a href="https://www.gartner.com/en">gartner.com</a> (1943 Mio Telefone pro Jahr 2016)
              <br>
                  </p>
                <p class="solid">
                <img src="img/monitor.png" height="200"><br>
                Computer produziert: <span id="computerCounter"></span>
              <br>
              Quelle: <a href="https://www.gartner.com/en">gartner.com</a> (473 Mio Computer pro Jahr 2016)
                    </p>
                
                

              
              </p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"></span>
          </div>
        </div>
          
          

        <br>
        
          

        
      </div>
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
        <script>
// When the user clicks on <div>, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
       

    </section>