<?php
ob_start();
include './templates/navigate.php';

$user_id = $_SESSION['user_id'];
$checkQuery = mysqli_query($connect, "SELECT * FROM `quiz` WHERE `user_id` = '$user_id'");
$resultQuiz = mysqli_fetch_assoc($checkQuery);

$checkQuery2 = mysqli_query($connect, "SELECT * FROM `plans` WHERE `user_id` = '$user_id'");
$resultPlans = mysqli_fetch_assoc($checkQuery2);

if ($resultQuiz == '') {
    header('Location: ./index.php');
    exit();
}
?>
<div class="content">


    <section class="auth-form">
        <img class="personal-img" src="./assets/img/plans.jpg" alt="">



        <?php if ($resultPlans == ''): ?>
            <form id="chat-form">
                <h3>Plans</h3>
                <div class="input__wrapper">
                    <div class="input__field">

                        <textarea class="text-plan" type="text" id="mytext" readonly>

                                        Create a personalized email marketing strategy based on these points

                                        What stage is your product at?     
                                        <?= $resultQuiz['product']; ?>

                                        What is the monetization model of the product?
                                        <?= $resultQuiz['monetization']; ?>
                    
                                        What is your target audience?
                                        <?= $resultQuiz['target']; ?>
                    
                                        What is the gender of your target audience?
                                        <?= $resultQuiz['gender']; ?>
                    
                                        What is your goal for the email campaign?
                                        <?= $resultQuiz['goal']; ?>
                    
                                        How much revenue are you currently missing out on without email marketing?
                                        <?= $resultQuiz['profit']; ?>
                    
                                        What type of email content works best for you?
                                        <?= $resultQuiz['type_content']; ?>
                    
                                        How much time are you willing to spend on email marketing?
                                        <?= $resultQuiz['time_work']; ?>
                    
                                        Do you have a resource of technical specialists?
                                        <?= $resultQuiz['technical_specialists']; ?>
                    
                                        What metrics are important to you in evaluating the effectiveness of campaigns?
                                        <?= $resultQuiz['metrics']; ?>
                    
                                        What methods of stimulating interaction with letters are you ready to use?
                                        <?= $resultQuiz['methods_stimulating']; ?>
                                        </textarea>
                    </div>
                </div>
                <button type="submit">Get a plan</button>

                <div class="responce-form">
                    <h3>Response:</h3>
                    <textarea id="response" name="response" rows="20" readonly></textarea>
                </div>
            </form>
        <?php else: ?>
            <div class="existing-plans">
                <h3>Plans</h3>
                <?php echo nl2br($resultPlans['plans']); ?>
            </div>

        <?php endif; ?>


    </section>

</div>
</div>


<script src="./assets/js/index.js"></script>
</body>

</html>