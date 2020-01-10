<style>
    p.solid {border-style: solid;
            border-radius: 20px;
            align-content: center;
            text-align: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #C0E9B5; 
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
            <span class="text-primary">
              <div class="popup" onclick="myFunction4()"><div class="infoText">i</div>
                    <span class="popuptext" id="myPopup4">
                        Mit dem Besuch auf dieser Website wurde die beiden Counter gestartet. Bei diesen kann man erkennen, wie viele Ressourcen in der Zwischenzeit produziert wurden.
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