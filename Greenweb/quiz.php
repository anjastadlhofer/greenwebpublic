<style>
    /* Submit Button */
#quiz-wrap input[type=submit] {
  background: #01450b;
  color: #fff;
  padding: 10px;
  border: 10px;
  padding: 10px 20px;
  margin: 10px;
  font-size: 20px;
}
    .oquiz{
        margin:10px;
    }  


</style>

<hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="quiz">
      <div class="w-100">
        <h2 class="mb-5">Quiz</h2>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"></h3>
            <div class="subheading mb-3">Quiz spielen</div>
           <p>
        <!------------------------------------------------------------------------------------------------------------- -->
<form id="quiz-wrap"></form>
              
              
              <script>
                  var questions = [
  
  {
    q : "Mit welchem Fortbewegungsmittel kommt man anstatt zu streamen am weitesten?",
    o : [
        "Diesel Auto",
        "Benzin Auto",
        "Elektroauto",
        "Flugzeug",
        "Zug",
        "Bus"

    ],
    a : 4
  },
  {
    q : "Wie viele Bäume werden bei Streamen über eine Stunde bei einer Auflösung von 1920x1080 (HD) und einer langsamen Komprimierung beansprucht?",
    o : [
      "400 pounds",
      "550 pounds",
      "700 pounds",
      "750 pounds"
    ],
    a : 2
  },
  {
    q : "Von wie vielen Servern werden Daten erhalten wenn man die Kronen Zeitung aufruft?",
    o : [
      "Uranus",
      "Earth",
      "Pluto",
      "Mars"
    ],
    a : 0
  },
  {
    q : "Which is the largest ocean on Earth?",
    o : [
      "Atlantic Ocean",
      "Indian Ocean",
      "Arctic Ocean",
      "Pacific Ocean"
    ],
    a : 3
  }
];
                  
                  /* [QUIZ ENGINE] */
var quiz = {
  draw : function () {
  // quiz.draw() : draw the quiz

    // Fetch the HTML quiz wrapper
    var wrapper = document.getElementById("quiz-wrap");

    // Loop through all the questions
    // Create all the necessary HTML elements
    for (var index in questions) {
      var number = parseInt(index) + 1; // The current question number
      var qwrap = document.createElement("div"); // A div wrapper to hold this question and options
      qwrap.classList.add("question"); // CSS class, for cosmetics

      // The question - <h1> header
      var question = document.createElement("h4");
      question.innerHTML = number + ") " + questions[index]['q'];
      qwrap.appendChild(question);

      // The options - <input> radio buttons and <label>
      for (var oindex in questions[index]['o']) {
        // The <label> tag
        var label = document.createElement("label");
        qwrap.appendChild(label);

        // The <option> tag
        var option = document.createElement("input");
        option.type = "radio";
        option.value = oindex;
        option.required = true;
        option.classList.add("oquiz"); // Will explain this later in function submit below

        // Remember that a radio button group must share the same name
        option.name = "quiz-" + number;
        label.appendChild(option);

        // Add the option text
        var otext = document.createTextNode(questions[index]['o'][oindex]);
        label.appendChild(otext);
      }

      // Finally, add this question to the main HTML quiz wrapper
      wrapper.appendChild(qwrap);
    }

    // Attach submit button + event handler to the quiz wrapper
    var submitbutton = document.createElement("input");
    submitbutton.type = "submit";
    wrapper.appendChild(submitbutton);
    wrapper.addEventListener("submit", quiz.submit);
  },

  submit : function (evt) {
  // quiz.submit() : Handle the calculations when the user submits to quiz

    // Stop the form from submitting
    evt.preventDefault();
    evt.stopPropagation();

    // Remember that we added an "oquiz" class to all the options?
    // We can easily get all the selected options this way
    var selected = document.querySelectorAll(".oquiz:checked");

    // Get the score
    var score = 0;
    for (var index in questions) {
      if (selected[index].value == questions[index]['a']) {
        score++;
      }
    }

    // We can calculate the score now
    var total = selected.length;
    var percent = score / total ;

    // Update and show the score
    // Instead of creating elements, we can also directly alter the inner HTML
    var html = "<h1>";
    if (percent>=0.7) {
      html += "WELL DONE!";
    } else if (percent>=0.4) {
      html += "NOT BAD!";
    } else {
      html += "TRY HARDER!";
    }
    html += "</h1>";
    html += "<div>You scored " + score + " out of " + total + ".</div>";
    document.getElementById("quiz-wrap").innerHTML = html;
  }
};

/* [INIT] */
window.addEventListener("load", quiz.draw);
              </script>
              
         <!------------------------------------------------------------------------------------------------------------- -->

            </p>  
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"></span>
          </div>
        </div>
                 
  
      </div>

    </section> 
         
             
           
            
