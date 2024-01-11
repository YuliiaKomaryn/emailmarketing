<?php
ob_start();
include './templates/navigate.php';

$user_id = $_SESSION['user_id'];
$checkQuery = mysqli_query($connect, "SELECT * FROM `quiz` WHERE `user_id` = '$user_id'");
$resultQuiz = mysqli_fetch_assoc($checkQuery);

if ($resultQuiz == ''){
    header ('Location: ./index.php');
    exit();
}



?>
<div class="content">
    <div class="content__header">
        <h2>Analytics</h2>
    </div>


    <section class="analytics">
       
        <div class="analytics__block">

            <h3>1. What stage is your product at?</h3>
            <p>
                <?= $resultQuiz['product']; ?>
            </p>
        </div>
        <div class="analytics__block">
            <h3>2. What is the monetization model of the product?</h3>
            <p>
                <?= $resultQuiz['monetization']; ?>
            </p>
        </div>
        <div class="analytics__block">
            <h3>3. What is your target audience?</h3>
            <p>
                <?= $resultQuiz['target']; ?>
            </p>
        </div>
        <div class="analytics__block">
            <h3>4. What is the gender of your target audience?</h3>
            <p>
                <?= $resultQuiz['gender']; ?>
            </p>
        </div>
        <div class="analytics__block">
            <h3>5. What is your goal for the email campaign?</h3>
            <p>
                <?= $resultQuiz['goal']; ?>
            </p>
        </div>
        <div class="analytics__block">
            <h3>6. How much revenue are you currently missing out on without email marketing?</h3>
            <p>
                <?= $resultQuiz['profit']; ?>
            </p>
        </div>
        <div class="analytics__block">
            <h3>7. What type of email content works best for you?</h3>
            <p>
                <?= $resultQuiz['type_content']; ?>
            </p>
        </div>
        <div class="analytics__block">
            <h3>8. How much time are you willing to spend on email marketing?</h3>
            <p>
                <?= $resultQuiz['time_work']; ?>
            </p>
        </div>
        <div class="analytics__block">
            <h3>9. Do you have a resource of technical specialists?</h3>
            <p>
                <?= $resultQuiz['technical_specialists']; ?>
            </p>
        </div>
        <div class="analytics__block">
            <h3>10. What metrics are important to you in evaluating the effectiveness of campaigns?</h3>
            <p>
                <?= $resultQuiz['metrics']; ?>
            </p>
        </div>

        <div class="analytics__block">
            <h3>11. What methods of stimulating interaction with letters are you ready to use?</h3>
            <p>
                <?= $resultQuiz['methods_stimulating']; ?>
            </p>
        </div>

    </section>
</div>

</div>
</div>


<script src="./assets/js/index.js"></script>

</body>

</html>