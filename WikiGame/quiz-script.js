var currentQuestion = 0;
var score = 0;
var totQuestions = questions.length;

var container = document.getElementById('quizContainer');
var questionEl = document.getElementById('question');
var opt1 = document.getElementById('opt1');
var opt2 = document.getElementById('opt2');
var opt3 = document.getElementById('opt3');
var opt4 = document.getElementById('opt4');
var nextButton = document.getElementById('nextButton');
var resultCont = document.getElementById('result');
var playagain = document.getElementById('playagain');
var home = document.getElementById('home');
var sec = 60;
var time = setInterval(myTimer, 1000);

function myTimer() {
    document.getElementById('timer').innerHTML = sec + "sec left";
    sec--;
    if (sec == -1) {
        container.style.display = 'none';
        resultCont.style.display = '';
        playagain.style.display = '';
        home.style.display = '';
        resultCont.textContent = 'Your Score: ' + score;
        clearInterval(time);
        alert("Time out!! :(");
    }
}

function loadQuestion (questionIndex) {
    var q = questions[questionIndex];
    questionEl.textContent = (questionIndex + 1) + '. ' + q.question;
    opt1.textContent = q.option1;
    opt2.textContent = q.option2;
    opt3.textContent = q.option3;
    opt4.textContent = q.option4;
};

function loadNextQuestion () {
    var selectedOption = document.querySelector('input[type=radio]:checked');
    if(!selectedOption){
        alert('Please select your answer!');
        return;
    }
    var answer = selectedOption.value;
    if(questions[currentQuestion].answer == answer){
        score += 10;
    }
    selectedOption.checked = false;
    currentQuestion++;
    if(currentQuestion == totQuestions - 1){
        nextButton.textContent = 'Finish';
    }
    if(currentQuestion == totQuestions){
        container.style.display = 'none';
        resultCont.style.display = '';
        playagain.style.display = '';
        home.style.display = '';
        resultCont.textContent = 'Your Score: ' + score;
        console.log(score);

        return;
    }

    loadQuestion(currentQuestion);
}

function quit() {
    if (confirm("Are you sure you want to quit?")) {
        window.location.href = "../category.html";
    }
}

loadQuestion(currentQuestion);