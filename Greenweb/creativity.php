<style>
    p.solid {border-style: solid;
            border-radius: 20px;
            align-content: center;
            text-align: center;
            padding-top: 0px;
            padding-bottom: 40px;
            background-color: #C0E9B5; 
    }
</style>
<!---   #d8f0e8;-->

<hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="creativity">
      <div class="w-100">
        <h2 class="mb-5">Creativity</h2>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            
            <h3 class="mb-0">Produzierte Resourcen</h3>
            <div class="subheading mb-3">Hier können Sie die Resourcen betrachten, welche produziert worden sind, seit Sie diese Website besuchen.</div>
              
            
            <p>
              <p class="solid">
                
              <!-- text -->
                <img src="img/smartphone2.png" height="200"><br>
                Telefone produziert: <span id="mobilephoneCounter"></span>
              <br>
              Quelle: <a href="https://www.gartner.com/en">gartner.com</a>(1943 Mio Telefone pro Jahr 2016)
              <br>
                  </p>
                <p class="solid">
                <img src="img/monitor.png" height="200"><br>
                Computer produziert: <span id="computerCounter"></span>
              <br>
              Quelle: <a href="https://www.gartner.com/en">gartner.com</a>(473 Mio Computer pro Jahr 2016)
                    </p>
                
                

              
              </p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">September 2008 - June 2010</span>
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
        
       

    </section>