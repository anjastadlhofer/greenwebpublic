 <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="dummy">
      <div class="w-100">
        <h2 class="mb-5">Dummy</h2>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            
            <h3 class="mb-0">Wertausgabe</h3>
            <div class="subheading mb-3">Kumulative Prozessor Energie in mWh</div>
            <p>           
                
<?php
$sql2 = "SELECT MAX(CumulativeProcessorEnergymWh) AS test FROM servermessung";
$result2 = mysqli_query ($db_link, $sql2 );
// -------------------------------------------
         
while( $row = mysqli_fetch_array ( $result2 ) )
{
	echo "<div id='row'>";

	echo "<div id='col'>";
	echo $row['test'];
	echo "</div>";
    
	echo "</div>";  
}      
?>              
                  
              </p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">Erfolg des Tages!</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">CLientmessung</h3>
            <div class="subheading mb-3">Summe der verschickten Bytes:</div>
            <p>
                
                
                <?php
$sql2 = "SELECT SUM(pkt_length) AS bytes FROM clientmessung";
$result2 = mysqli_query ($db_link, $sql2 );
// -------------------------------------------
         
while( $row = mysqli_fetch_array ( $result2 ) )
{
	echo "<div id='row'>";

	echo "<div id='col'>";
	echo $row['bytes'];
	echo "</div>";
    
	echo "</div>";  
}      
?> 
                
                

              
              </p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">July 2010 - December 2011</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
            
        

        

        
      </div>

    </section>