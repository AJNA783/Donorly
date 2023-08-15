
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DONORLY|Survey</title>
        <link rel="shortcut icon" type="image/jpeg" href="image/logo.jpg">
        <link rel="stylesheet" href="stylesurvey.css">
   
    </head>
    <body>
        <main class="main">
            <header class="header">
                <a href="#" class ="logo">SURVEY</a>
                <nav class="navbar">
                    <a href="main1.php" >Go Back Home</a>
                
                </nav>
            </header>

  
            

            <div class="container">
                <section class="quiz-section">
                    <div class="quiz-box">
                        <h1>DONORLY Survey</h1>
                            <div class="quiz-header">
                                <span>DONORLY Organ Donation portal</span>
                                <span class="header-score">Score:0/5</span>
                            </div>
        
                            <h2 class="question-text">What does HTML stands for?</h2>
                            <div class="option-list">
                                <div class="option">
                                    <span>1.option1</span>
                                </div>
                                <div class="option">
                                    <span>2.option2</span>
                                </div>
                                <div class="option">
                                    <span>3.option3</span>
                                </div>
                                <div class="option">
                                    <span>4.option4</span>
                                </div>
                            </div>
        
                            <div class="quiz-footer">
                                <span class="question-total">1 of 5 Questions</span>
                                <button class="next-btn">Next</button>
                            </div>

                        </div>
        
                        <div class="result-box">
                            <h2>Result!</h2>
                            <div class="circular-progress">
                                <span class="progress-value">0%</span>
                            </div>
        
                            <span class="score-text">Your Score 0 out of 5</span>
                            
        
                            <div class="buttons">
                                <button class="tryAgain-btn">Try Again</button>
                                <button class="goHome-btn">Go To Home</button>
                            </div>
                            </div>
        
        
                </section>
                
                <section class="home">
                    <div class="home-content">
                    <h1>Take the Survey to test How much you are aware of Organ Donation.</h1>
                    <button class="start-btn">Start</button>
                    </div>
                </section>
            </div>
        </main>



        <div class="popup-info">
            <h2>Why take This Survey?</h2>
            <span class="info">1. You can Test Out hoe much you knoe about Organ donation.</span>
            <span class="info">2. You can learn new Information and Spread the awareness.</span>
            <span class="info">3. It can be helpful For Bursting the myths about organ donation in India.</span>
            <span class="info">4. May Inspire you to donate Your Organs.</span>
            <span class="info">5. It will also help us to Record how much public is aware.</span>
        
             <div class="btn-group">
                 <button class="info-btn exit-btn">Exit Survey</button>
                 <a href="#" class="info-btn continue-btn">Continue</a>
             </div>
        
        </div>
        
            
        <script>
            const startBtn= document.querySelector('.start-btn');
            const popupInfo= document.querySelector('.popup-info');
            const exitBtn= document.querySelector('.exit-btn');
            const main= document.querySelector('.main');
            const continueBtn= document.querySelector('.continue-btn');
            const quizSection= document.querySelector('.quiz-section');
            const quizBox= document.querySelector('.quiz-box');
            const resultBox= document.querySelector('.result-box');
            const tryAgainBtn= document.querySelector('.tryAgain-btn');
            const goHomeBtn= document.querySelector('.goHome-btn');
            startBtn.onclick=()=>{
                popupInfo.classList.add('active');
                main.classList.add('active');
            }
            exitBtn.onclick=()=>{
                popupInfo.classList.remove('active');
                main.classList.remove('active');
            }
            continueBtn.onclick=()=>{
                quizSection.classList.add('active');
                popupInfo.classList.remove('active');
                main.classList.remove('active');
                quizBox.classList.add('active');

                showQuestions(0);
                questionCount(1);
                headerScore();
            }
            tryAgainBtn.onclick=()=>{
                quizBox.classList.add('active');
                nextBtn.classList.remove('active');
                resultBox.classList.remove('active');

                questionCount=0;
                questionNumb=1;
                userScore=0;
                showQuestions(questionCount);
                questionCounter(questionNumb);

                headerScore();
            }

            goHomeBtn.onclick=()=>{
                quizSection.classList.remove('active');
                nextBtn.classList.remove('active');
                resultBox.classList.remove('active');

                questionCount=0;
                questionNumb=1;
                userScore=0;
                showQuestions(questionCount);
                questionCounter(questionNumb);


            }

            let questionCount=0;
            let questionNumb=1;
            let userScore=0;

            const nextBtn= document.querySelector('.next-btn');

            nextBtn.onclick=()=>{
                if(questionCount<questions.length-1){
                questionCount++;
                showQuestions(questionCount);

                questionNumb++;
                questionCounter(questionNumb);

                nextBtn.classList.remove('active');
            }
            else{
                showResultBox();
            }
            }
            const optionList = document.querySelector('.option-list');


            function showQuestions(index){
                const questionText= document.querySelector('.question-text');
                questionText.textContent=`${questions[index].numb}.${questions[index].question}`;
               
                let optionTag= `<div class="option"><span>${questions[index].options[0]}</span></div>
               <div class="option"><span>${questions[index].options[1]}</span></div>
               <div class="option"><span>${questions[index].options[2]}</span></div>
               <div class="option"><span>${questions[index].options[3]}</span></div>`;
               
            optionList.innerHTML=optionTag;
            const option=document.querySelectorAll('.option');
            for(let i=0;i<option.length;i++){
                option[i].setAttribute('onclick','optionSelected(this)');
            }
            }

       // ... Previous code ...

function optionSelected(answer) {
    let userAnswer = answer.textContent;
    let correctAnswer = questions[questionCount].answer;
    let allOptions = optionList.children.length;

    if (userAnswer == correctAnswer) {
        answer.classList.add('correct');
        userScore++;
        headerScore();
    } else {
        answer.classList.add('incorrect');
        for (let i = 0; i < allOptions; i++) { // Fix the variable name here
            if (optionList.children[i].textContent == correctAnswer) {
                optionList.children[i].setAttribute('class', 'option correct');
            }
        }
    }

    for (let i = 0; i < allOptions; i++) { // Fix the variable name here
        optionList.children[i].classList.add('disabled');
    }
    nextBtn.classList.add('active');
}



// ... Rest of the code ...


            function questionCounter(index){
                const questionTotal=document.querySelector('.question-total');
                questionTotal.textContent=`${index}of ${questions.length} Questions`;

            }
            function headerScore() {
    const headerScoreText = document.querySelector('.header-score');
    headerScoreText.textContent = `Score: ${userScore}/${questions.length}`;
}

            function showResultBox(){
                quizBox.classList.remove('active');
                resultBox.classList.add('active');

                const scoreText= document.querySelector('.score-text');
                scoreText.textContent=`your Score ${userScore} out of ${questions.length}`;

                const circularProgress= document.querySelector('.circular-progress');
                const progressValue=document.querySelector('.progress-value');
                let progressStartValue =-1;
                let progressEndValue=(userScore/questions.length)*100;
                let speed=20;

                let progress = setInterval(()=>{
                    progressStartValue++;
                    progressValue.textContent=`${progressStartValue}%`;
                    circularProgress.style.background = `conic-gradient(#c40094 ${progressStartValue * 3.6}deg, rgba(255,255,255,.1) 0deg)`;



                    if(progressStartValue== progressEndValue){
                        clearInterval(progress);
                    }
                }, speed);
            }


        </script>
        <script>
            let questions=[
                {
                    numb:1,
                    question:"True or False: Organs can be donated just by  registering as donors before they die.",
                    answer:"A.No, the decision goes to family.",
                    options:[
                        "A.No, the decision goes to family.","B.Yes","C.not sure","D.don't know"

                    ]
                },
                {
                    numb:2,
                    question:"What is the most common cause of brain death in potential organ donors?",
                    answer:"A.Stroke",
                    options:[
                    "A.Stroke","B.Old age","C.Heart attack","D.Cancer"

                    ]
                },
                {
                    numb:3,
                    question:"How many lives can a single organ donor potentially save or enhance?",
                    answer:"D.More than 6",
                    options:[
                    "A.Two","B.Three","C.Five","D.More than 6"
                    ]
                },
                {
                    numb:4,
                    question:"Is The Body Of Donor Disfigured After The Organs Are Taken?",
                    answer:"C.No, Only Small cuts Are made",
                    options:[
                    "A.Yes","B.May or May not be","C.No, Only Small cuts Are made","D.Very Badly"
                    ]
                },
                {
                    numb:5,
                    question:"How can someone ensure their wish to be an organ donor is respected after their death?",
                    answer:"B.By discussing and registering as an organ donor with the appropriate authorities",
                    options:[
                    "A.It's not possible; families always decide","B.By discussing and registering as an organ donor with the appropriate authorities","C.By including it in their social media profiles","D.By mentioning it in their will"
                    ]
                },
            ]
        </script>

    </body>
    </html>
    
