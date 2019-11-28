 <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="creativity">
      <div class="w-100">
        <h2 class="mb-5">Creativity</h2>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            
            <h3 class="mb-0">text</h3>
            <div class="subheading mb-3">text</div>
              Telefone produziert: <span id="mobilephoneCounter"></span>
              <br>
              Quelle: gartner.com(1943 Mio Telefone pro Jahr)
            
            <p>
              
              <!-- text -->
                
                
                

              
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
            }   , 15);
        </script>

    </section>