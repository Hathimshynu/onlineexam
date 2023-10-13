<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
</head>
<body>
    <h2>Thank You for Completing the Exam!</h2>
    <p>Your Results:</p>
    <ul>
    <?php
    $savedAnswers = json_decode($_GET['savedAnswers'], true);
    $correctAnswers = [
        'paris', 'camel', '7 days', '24 hours', '26 letters', '7 colours', '365 days', '60 minutes', 'tiger', 'mango'
    ];

    foreach ($savedAnswers as $result):
    ?>
        <li>
            Question: <?= $result['question'] ?><br>
            Your Answer: <?= $result['selected_answer'] ?><br>
            Correct Answer: <?= $correctAnswers[$result['result_id'] - 1] ?><br>
            Is Correct: <?= $result['is_correct'] ? 'Yes' : 'No' ?><br>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>
