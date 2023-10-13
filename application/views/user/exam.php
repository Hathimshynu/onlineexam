<?php include 'header.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .timer {
            font-size: 24px;
            color: green;
        }

        .container,
        .container-fluid,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: 300px;
        }

        .quiz-container {
            max-width: 600px;
            margin: 80px;
        }

        .question-card {
            border: 1px solid #d1d1d1;
            border-radius: 10px;
            margin-left: 250;
            padding: 20px;
        }

        .question-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 10px 10px 0 0;
            text-align: center;
            padding: 10px;
            margin: 80px;
        }

        .question-body {
            padding: 10px;
            margin-left: 80px;
        }

        .answer-label {
            font-weight: bold;
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
        }

        .btn-group button {
            width: 48%;
        }

        .timer {
            margin-left: 300px;
        }
    </style>
</head>

<body>
    <div class="timer p-3" id="timer">1:00</div>
    <div class="quiz-container p-3">
        <div class="card question-card p-3" id="question1">
            <div class="card-header question-header">
                Question 1
            </div>
            <div class="card-body question-body p-3">
                <p>What is the capital of France?</p>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer1" id="answer1" value="Paris">
                    <label class="form-check-label answer-label" for="answer1">A) Paris</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer1" id="answer1" value="London">
                    <label class="form-check-label answer-label" for="answer1">B) London</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer1" id="answer1" value="Berlin">
                    <label class="form-check-label answer-label" for="answer1">C) Berlin</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer1" id="answer1" value="Madrid">
                    <label class="form-check-label answer-label" for="answer1">D) Madrid</label>
                </div>
                <div class="btn-group p-3">
                    <button class="btn btn-primary " id="prevButton1" disabled>Previous</button>
                    <button class="btn btn-primary next-button" id="nextButton1">Next</button>
                </div>
            </div>
        </div>
        <div class="card question-card p-3" id="question2">
            <div class="card-header question-header">
                Question 2
            </div>
            <div class="card-body question-body p-3">
                <p>Which animal is known as the 'Ship of the Desert"?</p>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer2" id="answer2" value="Camel">
                    <label class="form-check-label answer-label" for="answer2">A) Camel</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer2" id="answer2" value="Elephant">
                    <label class="form-check-label answer-label" for="answer2">B) Elephant</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer2" id="answer2" value="Cat">
                    <label class="form-check-label answer-label" for="answer2">C) Cat</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer2" id="answer2" value="Dog">
                    <label class="form-check-label answer-label" for="answer2">D) Dog</label>
                </div>
                <div class="btn-group p-3">
                    <button class="btn btn-primary prev-button" id="prevButton2" disabled>Previous</button>
                    <button class="btn btn-primary next-button" id="nextButton2">Next</button>
                </div>
            </div>
        </div>
        <div class="card question-card p-3" id="question3">
            <div class="card-header question-header">
                Question 3
            </div>
            <div class="card-body question-body p-3">
                <p>How many days are there in a week?</p>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer3" id="answer3" value="7 days">
                    <label class="form-check-label answer-label" for="answer3">A) 7 days</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer3" id="answer3" value="5 days">
                    <label class="form-check-label answer-label" for="answer3">B) 5 days</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer3" id="answer3" value="8 days">
                    <label class="form-check-label answer-label" for="answer3">C) 8 days</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer3" id="answer3" value="3 days">
                    <label class="form-check-label answer-label" for="answer3">D) 3 days</label>
                </div>
                <div class="btn-group p-3">
                    <button class="btn btn-primary prev-button" id="prevButton3" disabled>Previous</button>
                    <button class="btn btn-primary next-button" id="nextButton3">Next</button>
                </div>
            </div>
        </div>
        <div class="card question-card p-3" id="question4">
            <div class="card-header question-header">
                Question 4
            </div>
            <div class="card-body question-body p-3">
                <p> How many hours are there in a day?</p>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer4" id="answer4" value="12 hours">
                    <label class="form-check-label answer-label" for="answer4">A) 12 hours</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer4" id="answer4" value="28 hours">
                    <label class="form-check-label answer-label" for="answer4">B) 28 hours</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer4" id="answer4" value="15 hours">
                    <label class="form-check-label answer-label" for="answer4">C)15 hours</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer4" id="answer4" value="24 hours">
                    <label class="form-check-label answer-label" for="answer4">D) 24 hours</label>
                </div>
                <div class="btn-group p-3">
                    <button class="btn btn-primary prev-button" id="prevButton4" disabled>Previous</button>
                    <button class="btn btn-primary next-button" id="nextButton4">Next</button>
                </div>
            </div>
        </div>
        <div class="card question-card p-3" id="question5">
            <div class="card-header question-header">
                Question 5
            </div>
            <div class="card-body question-body p-3">
                <p>How many letters are there in the English alphabet?</p>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer5" id="answer5" value="20 letters">
                    <label class="form-check-label answer-label" for="answer5">A) 20 letters</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer5" id="answer5" value="26 letters">
                    <label class="form-check-label answer-label" for="answer5">B) 26 letters</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer5" id="answer5" value="50 letters">
                    <label class="form-check-label answer-label" for="answer5">C) 50 letters</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer5" id="answer5" value="40 letters">
                    <label class="form-check-label answer-label" for="answer5">D) 40 letters</label>
                </div>
                <div class="btn-group p-3">
                    <button class="btn btn-primary prev-button" id="prevButton5" disabled>Previous</button>
                    <button class="btn btn-primary next-button" id="nextButton5">Next</button>
                </div>
            </div>
        </div>
        <div class="card question-card p-3" id="question6">
            <div class="card-header question-header">
                Question 6
            </div>
            <div class="card-body question-body p-3">
                <p>Rainbow consist of how many colours?</p>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer6" id="answer6" value="9 colours">
                    <label class="form-check-label answer-label" for="answer6">A) 9 colours</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer6" id="answer6" value="8 colours">
                    <label class="form-check-label answer-label" for="answer6">B) 8 colours</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer6" id="answer6" value="7 colours">
                    <label class="form-check-label answer-label" for="answer6">C) 7 colours</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer6" id="answer6" value="5 colours">
                    <label class="form-check-label answer-label" for="answer6">D) 5 colours</label>
                </div>
                <div class="btn-group p-3">
                    <button class="btn btn-primary prev-button" id="prevButton6" disabled>Previous</button>
                    <button class="btn btn-primary next-button" id="nextButton6">Next</button>
                </div>
            </div>
        </div>
        <div class="card question-card p-3" id="question7">
            <div class="card-header question-header">
                Question 7
            </div>
            <div class="card-body question-body p-3">
                <p>How many days are there in a year?</p>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer7" id="answer7" value="366 days">
                    <label class="form-check-label answer-label" for="answer7">A) 366 days</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer7" id="answer7" value="300 days">
                    <label class="form-check-label answer-label" for="answer7">B) 300 days</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer7" id="answer7" value="365 days">
                    <label class="form-check-label answer-label" for="answer7">C) 365 days</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer7" id="answer7" value="367 days">
                    <label class="form-check-label answer-label" for="answer7">D) 367 days</label>
                </div>
                <div class="btn-group p-3">
                    <button class="btn btn-primary prev-button" id="prevButton7" disabled>Previous</button>
                    <button class="btn btn-primary next-button" id="nextButton7">Next</button>
                </div>
            </div>
        </div>
        <div class="card question-card p-3" id="question8">
            <div class="card-header question-header">
                Question 8
            </div>
            <div class="card-body question-body p-3">
                <p>How many minutes are there in an hour?</p>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer8" id="answer8" value="66 minutes">
                    <label class="form-check-label answer-label" for="answer8">A) 66 minutes</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer8" id="answer8" value="60 minutes">
                    <label class="form-check-label answer-label" for="answer8">B) 60 minutes</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer8" id="answer8" value="69 minutes">
                    <label class="form-check-label answer-label" for="answer8">C) 69 minutes</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer8" id="answer8" value="68 minutes">
                    <label class="form-check-label answer-label" for="answer8">D) 68 minutes</label>
                </div>
                <div class="btn-group p-3">
                    <button class="btn btn-primary prev-button" id="prevButton8" disabled>Previous</button>
                    <button class="btn btn-primary next-button" id="nextButton8">Next</button>
                </div>
            </div>
        </div>
        <div class="card question-card p-3" id="question9">
            <div class="card-header question-header">
                Question 9
            </div>
            <div class="card-body question-body p-3">
                <p>Name the National animal of India?</p>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer9" id="answer9" value="tiger">
                    <label class="form-check-label answer-label" for="answer9">A) Tiger</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer9" id="answer9" value="lion">
                    <label class="form-check-label answer-label" for="answer9">B) Lion</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer9" id="answer9" value="giraffe">
                    <label class="form-check-label answer-label" for="answer9">C) Giraffe</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer9" id="answer9" value="cow">
                    <label class="form-check-label answer-label" for="answer9">D) Cow</label>
                </div>
                <div class="btn-group p-3">
                    <button class="btn btn-primary prev-button" id="prevButton9" disabled>Previous</button>
                    <button class="btn btn-primary next-button" id="nextButton9">Next</button>
                </div>
            </div>
        </div>

        <div class="card question-card p-3" id="question10">
            <div class="card-header question-header">
                Question 10
            </div>
            <div class="card-body question-body p-3">
                <p>Name the National fruit of India?</p>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer10" id="answer10" value="apple">
                    <label class="form-check-label answer-label" for="answer10">A) Apple</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer10" id="answer10" value="banana">
                    <label class="form-check-label answer-label" for="answer10">B) Banana</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer10" id="answer10" value="mango">
                    <label class="form-check-label answer-label" for="answer10">C) Mango</label>
                </div>
                <div class="form-check p-3">
                    <input type="radio" class="form-check-input" name="answer10" id="answer10" value="orange">
                    <label class="form-check-label answer-label" for="answer10">D) Orange</label>
                </div>
                <div class="btn-group p-3">
                    <button class="btn btn-primary p-2 prev-button" id="prevButton10" disabled>Previous</button>
                    <button class="btn btn-primary p-2 " id="unansweredButton">Unanswered</button>
                    <button class="btn btn-primary p-3" id="submit">Submit</button>
                </div>
            </div>
        </div>


        <div id="results"></div>


    </div>

</body>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    $(document).ready(function() {
        let currentQuestion = 0;
        const questions = $('.question-card');
        const answers = {};

        const correctAnswers = [
            'paris', // Correct answer for Question 1
            'camel', // Correct answer for Question 2
            '7 days', // Correct answer for Question 3
            '24 hours', // Correct answer for Question 4
            '26 letters', // Correct answer for Question 5
            '7 colours', // Correct answer for Question 6
            '365 days', // Correct answer for Question 7
            '60 minutes', // Correct answer for Question 8
            'tiger', // Correct answer for Question 9
            'mango' // Correct answer for Question 10
        ];

        function showQuestion(questionNumber) {
            questions.hide();
            $(questions[questionNumber]).show();
            $('.prev-button').prop('disabled', questionNumber === 0);
            $('.next-button').prop('disabled', questionNumber === questions.length - 1);
        }

        function loadAnswer(questionNumber) {
            const selectedValue = $(`input[name="answer${currentQuestion + 1}"]:checked`).val();
            // alert(selectedValue);
            answers[`question${questionNumber + 1}`] = selectedValue;
        }

        showQuestion(currentQuestion);

        $('.prev-button').click(function() {
            loadAnswer(currentQuestion);
            currentQuestion--;
            showQuestion(currentQuestion);
        });

        $('.next-button').click(function() {
            loadAnswer(currentQuestion);
            currentQuestion++;
            showQuestion(currentQuestion);
        });

        let timerValue = 1; // Initial timer value in seconds
        const timerElement = document.getElementById('timer');
        const submitButton = document.getElementById('submit');
        let timerInterval;

        // Function to update the timer
        function updateTimer() {
            const minutes = Math.floor(timerValue / 60);
            const seconds = timerValue % 60;
            timerElement.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
            if (timerValue === 600) { // 10 minutes (600 seconds)
                timerElement.style.color = 'red'; // Change timer color to red
                clearInterval(timerInterval); // Stop the timer

                // Delay the click event on the submit button
                setTimeout(function() {
                    $('#submit').click(); // Trigger the click event on the submit button
                }, 1000); // 1000 milliseconds = 1 second (adjust as needed)
            }
            timerValue++;
        }

        // Start the timer on page load
        timerInterval = setInterval(updateTimer, 1000);
        console.log(answers);
        $('#submit').click(function() {
            $.ajax({
                type: 'POST',
                url: '<?= BASEURL ?>user/saveexam',
                data: JSON.stringify(answers), // Serialize answers object as JSON
                contentType: 'application/json', // Set content type to JSON
                success: function(response) {
                    alert(response.status);
                    if (response.status === 'success') {
                        questions.hide();
                        $('input[type="radio"]').prop('checked', false);

                        // Clear the timer, if needed
                        clearInterval(timerInterval);

                        const savedAnswers = response.results;
                        const correctAnswers = <?= json_encode($correctAnswers) ?>;

                        // Load correct answers
                        <?php foreach ($correct_answers as $answer) : ?>
                            correctAnswers.push('<?= $answer ?>');
                        <?php endforeach; ?>

                        // const thankYouURL = '<?= BASEURL ?>user/thankyou';
                        // const queryString = `?savedAnswers=${JSON.stringify(savedAnswers)}&correctAnswers=${JSON.stringify(correctAnswers)}`;
                        window.location.href = '<?= BASEURL ?>user/thankyou?savedAnswers=' + JSON.stringify(savedAnswers) + '&correctAnswers=' + JSON.stringify(correctAnswers);

                    } else {
                        alert('Error saving answers');
                    }
                },
                error: function() {
                    alert('Something went wrong');
                }
            });
        });

        $('#unansweredButton').click(function() {
            // Update the answers object with the current question's answer before checking for unanswered questions
            loadAnswer(currentQuestion);

            const unansweredQuestions = [];
            for (let i = 0; i < questions.length; i++) {
                if (!answers[`question${i + 1}`]) {
                    unansweredQuestions.push(`Question ${i + 1}`);
                }
            }

            if (unansweredQuestions.length > 0) {
                Swal.fire({
                    title: 'Unanswered Questions',
                    html: `The following questions have not been answered:<br>${unansweredQuestions.join(', ')}`,
                    icon: 'warning'
                });
            } else {
                Swal.fire('All questions are answered!', '', 'success');
            }
        });
    });

    function generateResultsHTML(results) {
        let html = '<div id="results">';
        html += '<h2>Results</h2>';
        html += '<ul>';
        results.forEach(function(result) {
            const status = result.is_correct ? 'Correct' : 'Wrong';
            html += `<li><strong>${result.question}:</strong> Your answer: ${result.selected_answer}, Correct answer: ${result.correct_answer} - ${status}</li>`;
        });
        html += '</ul>';
        html += '</div>';
        return html;
    }
</script>




</html>
<?php include 'footer.php' ?>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>


<script>
    window.addEventListener('message', function(event) {
        const resultsData = event.data;
        if (resultsData.status === 'success') {
            // Display the results in the new tab
            const resultsElement = document.getElementById('results');
            resultsElement.innerHTML = `<p>Number of correct answers: ${resultsData.num_correct}</p>`;
            resultsElement.innerHTML += `<p>Number of wrong answers: ${resultsData.num_wrong}</p>`;
            resultsElement.innerHTML += '<h2>Detailed Results:</h2>';
            resultsData.results.forEach(function(result, index) {
                resultsElement.innerHTML += `<p><strong>Question ${index + 1}:</strong><br>
                                                 Your Answer: ${result.selected_answer}<br>
                                                 Correct Answer: ${result.correct_answer}<br>
                                                 ${result.is_correct ? 'Result: Correct' : 'Result: Wrong'}</p>`;
            });
        }
    });
</script>