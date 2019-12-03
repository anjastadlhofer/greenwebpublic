 <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="creativity">
      <div class="w-100">
        <h2 class="mb-5">Creativity</h2>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            
            <h3 class="mb-0">Produzierte Resourcen</h3>
            <div class="subheading mb-3">Hier können Sie die Resourcen betrachten, welche produziert worden sind, seit Sie diese Website besuchen.</div>
              
            
            <p>
              
              <!-- text -->
                <img src="img/smartphone.png" height="200"><br>
                Telefone produziert: <span id="mobilephoneCounter"></span>
              <br>
              Quelle: <a href="https://www.gartner.com/en">gartner.com</a>(1943 Mio Telefone pro Jahr 2016)
              <br>
                
                <br>
                <img src="img/laptop.png" height="200"><br>
                Computer produziert: <span id="computerCounter"></span>
              <br>
              Quelle: <a href="https://www.gartner.com/en">gartner.com</a>(473 Mio Computer pro Jahr 2016)
                
                

              
              </p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">September 2008 - June 2010</span>
          </div>
        </div>
          
          

        <br>
        
          <div id="quiz"></div>
            <button id="submit">Submit Quiz</button>
          <div id="results"></div>

        
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
            (function() {
  function buildQuiz() {
    // we'll need a place to store the HTML output
    const output = [];

    // for each question...
    myQuestions.forEach((currentQuestion, questionNumber) => {
      // we'll want to store the list of answer choices
      const answers = [];

      // and for each available answer...
      for (letter in currentQuestion.answers) {
        // ...add an HTML radio button
        answers.push(
          `<label>
            <input type="radio" name="question${questionNumber}" value="${letter}">
            ${letter} :
            ${currentQuestion.answers[letter]}
          </label>`
        );
      }

      // add this question and its answers to the output
      output.push(
        `<div class="question"> ${currentQuestion.question} </div>
        <div class="answers"> ${answers.join("")} </div>`
      );
    });

    // finally combine our output list into one string of HTML and put it on the page
    quizContainer.innerHTML = output.join("");
  }

  function showResults() {
    // gather answer containers from our quiz
    const answerContainers = quizContainer.querySelectorAll(".answers");

    // keep track of user's answers
    let numCorrect = 0;

    // for each question...
    myQuestions.forEach((currentQuestion, questionNumber) => {
      // find selected answer
      const answerContainer = answerContainers[questionNumber];
      const selector = `input[name=question${questionNumber}]:checked`;
      const userAnswer = (answerContainer.querySelector(selector) || {}).value;

      // if answer is correct
      if (userAnswer === currentQuestion.correctAnswer) {
        // add to the number of correct answers
        numCorrect++;

        // color the answers green
        answerContainers[questionNumber].style.color = "lightgreen";
      } else {
        // if answer is wrong or blank
        // color the answers red
        answerContainers[questionNumber].style.color = "red";
      }
    });

    // show number of correct answers out of total
    resultsContainer.innerHTML = `${numCorrect} out of ${myQuestions.length}`;
  }

  const quizContainer = document.getElementById("quiz");
  const resultsContainer = document.getElementById("results");
  const submitButton = document.getElementById("submit");
  const myQuestions = [
    {
      question: "Welche Website verbraucht mehr Strom?",
      answers: {
        a: "Statische Website",
        b: "Dynamische Website",
        c: "Kein Unterschied"
      },
      correctAnswer: "b"
    },
    {
      question: "Mit welchem Fortbewegungsmittel kommt man anstatt zu streamen am weitesten?",
      answers: {
        a: "Diesel Auto",
        b: "Benzin Auto",
        c: "Elektroauto",
        d: "Flugzeug",
        e: "Zug",
        f: "Bus"
      },
      correctAnswer: "e"
    },
    {
      question: "Wirst du ab jetzt bewusster im Internet surfen bzw streamen?",
      answers: {
        a: "Ja",
        b: "Nein"
      },
      correctAnswer: "a"
    }
  ];

  // display quiz right away
  buildQuiz();

  // on submit, show results
  submitButton.addEventListener("click", showResults);
})();
        </script>

    </section>