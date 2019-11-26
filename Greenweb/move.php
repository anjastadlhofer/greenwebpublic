 <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="move">
      <div class="w-100">
        <h2 class="mb-5">Move</h2>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            
            <h3 class="mb-0">Super Duper Visualisierung</h3>
            <div class="subheading mb-3">Let the fun begin!</div>
            <p>
              
              <!-- text -->
              
              </p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">September 2008 - June 2010</span>
          </div>
        </div>

        <br>
<p><button onclick="myMove(40,1)">Klicken, um die Kilometeranzahl zu erfahren!</button></p>       
<div id ="container">
<div class ="animate" id="1">40km<img src="img/car.png" width="100"></div>
</div>       
<div class="rode1"></div>
<div class="rode2"></div>
  <br>      
<p><button onclick="myMove(80,2)">Klicken, um die Kilometeranzahl zu erfahren!</button></p>        
<div id ="container">
<div class ="animate" id="2">80km<img src="img/train.png" width="100"></div>
</div>       
<div class="rode1"></div>
<div class="rode2"></div>
        
<script>
function myMove(fahrlaenge, id) {
  var elem = document.getElementById(id);   
  var pos = 0;
  var id = setInterval(frame, 40);
  function frame() {
    if (pos == fahrlaenge) {
      clearInterval(id);
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