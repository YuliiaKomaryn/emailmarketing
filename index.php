<?php
include './templates/navigate.php';

$user_id = $_SESSION['user_id'];

$checkQuery = "SELECT * FROM `quiz` WHERE `user_id` = '$user_id'";
$checkResult = mysqli_query($connect, $checkQuery);


?>
<div class="content">
    <div class="content__header">
        <button class="content__header-btn btn-back">
            <img src="./assets/img/icon/arrowback.svg" alt="arrowback">
            <span>Back</span>
        </button>
        <?php if (mysqli_num_rows($checkResult) == 0): ?>
            <div class="number__task">
                <h4>1/12</h4>
            </div>
        <?php endif; ?>
    </div>

    <section class="auth-form">
        <?php if (mysqli_num_rows($checkResult) > 0): ?>
            <form class="register" action="">
                <h3> You have already completed the survey</h3>
                <img src="./assets/img/quiz.jpg" alt="quiz">
            </form>
        <?php else: ?>
            <form class="register" action="./function/quiz/add.php" method="post">
                <section class="screen">
                    <h3>What stage is your product at?</h3>
                    <div class="input__wrapper">
                        <div class="btn-quiz">
                            <input type="radio" name="product" value="Search for economic units">
                            <div class="btn-quiz__text">
                                <p>Search for economic units</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="product" value="Up to $10,000 in effective marketing spend every day">
                            <div class="btn-quiz__text">
                                <p>Up to $10,000 in effective marketing spend every day</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="product"
                                value="$10,000 to $100,000 in effective monthly marketing spend">
                            <div class="btn-quiz__text">
                                <p>$10,000 to $100,000 in effective monthly marketing spend</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="product"
                                value="More than $100,000 in effective marketing spend every month">
                            <div class="btn-quiz__text">
                                <p>More than $100,000 in effective marketing spend every month</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="next">Next step</button>
                </section>
                <section class="screen">
                    <h3>What is the monetization model of the product?</h3>
                    <div class="input__wrapper">
                        <div class="btn-quiz">
                            <input type="radio" name="monetization" value="Premium model">
                            <div class="btn-quiz__text">
                                <p>Premium model</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="monetization" value="Subscription">
                            <div class="btn-quiz__text">
                                <p>Subscription</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="monetization" value="Freemium">
                            <div class="btn-quiz__text">
                                <p>Freemium</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="monetization" value="Pay-as-you-go">
                            <div class="btn-quiz__text">
                                <p>Pay-as-you-go</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="monetization" value="Licensing">
                            <div class="btn-quiz__text">
                                <p>Licensing</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="monetization" value="Open source model">
                            <div class="btn-quiz__text">
                                <p>Open source model</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="monetization" value="Advertising model">
                            <div class="btn-quiz__text">
                                <p>Advertising model</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="monetization" value="Model of Donations">
                            <div class="btn-quiz__text">
                                <p>Model of Donations</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="next">Next step</button>
                </section>

                <section class="screen">
                    <h3>What is your target audience?</h3>
                    <div class="input__wrapper">
                        <div class="btn-quiz">
                            <input type="radio" name="target" value="Children (up to 18 years old)">
                            <div class="btn-quiz__text">
                                <p>Children (up to 18 years old)</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="target" value="Youth (18-25 years old)">
                            <div class="btn-quiz__text">
                                <p>Youth (18-25 years old)</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="target" value="Adults (25-40 years old)">
                            <div class="btn-quiz__text">
                                <p>Adults (25-40 years old)</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="target" value="Older people (40+ years)">
                            <div class="btn-quiz__text">
                                <p>Older people (40+ years)</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="target" value="All age groups">
                            <div class="btn-quiz__text">
                                <p>All age groups</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="next">Next step</button>
                </section>
                <section class="screen">
                    <h3>What is the gender of your target audience?</h3>
                    <div class="input__wrapper">
                        <div class="btn-quiz">
                            <input type="radio" name="gender" value="Men">
                            <div class="btn-quiz__text">
                                <p>👨‍💼 Men</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="gender" value="Women">
                            <div class="btn-quiz__text">
                                <p>👩‍💼 Women</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="gender" value="Other">
                            <div class="btn-quiz__text">
                                <p>🌈 Other</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="gender" value="Universal product">
                            <div class="btn-quiz__text">
                                <p>😊 Universal product</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="next">Next step</button>
                </section>
                <section class="screen">
                    <h3>What is your goal for the email campaign? (multiple choice)</h3>
                    <div class="input__wrapper">
                        <div class="btn-quiz">
                            <input type="checkbox" name="goal[]" value="Increase in sales">
                            <div class="btn-quiz__text">
                                <p>Increase in sales</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="checkbox" name="goal[]" value="Attracting new customers">
                            <div class="btn-quiz__text">
                                <p>Attracting new customers</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="checkbox" name="goal[]" value="Retention of existing customers">
                            <div class="btn-quiz__text">
                                <p>Retention of existing customers</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="checkbox" name="goal[]" value="Increasing brand awareness">
                            <div class="btn-quiz__text">
                                <p>Increasing brand awareness</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="next">Next step</button>
                </section>
                <section class="screen">
                    <h3>How much revenue are you currently missing out on without email marketing?</h3>
                    <div class="input__wrapper">
                        <div class="btn-quiz">
                            <input type="radio" name="profit" value="They did not count">
                            <div class="btn-quiz__text">
                                <p>They did not count</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="profit" value="From 10% to 15%">
                            <div class="btn-quiz__text">
                                <p>From 10% to 15%</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="profit" value="More than 15%">
                            <div class="btn-quiz__text">
                                <p>More than 15%</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="next">Next step</button>
                </section>
                <section class="screen">
                    <h3>What type of email content works best for you? (multiple choice)</h3>
                    <div class="input__wrapper">
                        <div class="btn-quiz">
                            <input type="checkbox" name="type_content[]" value="Product offers and sales">
                            <div class="btn-quiz__text">
                                <p>Product offers and sales</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="checkbox" name="type_content[]" value="Information articles and tips">
                            <div class="btn-quiz__text">
                                <p>Information articles and tips</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="checkbox" name="type_content[]" value="Exclusive content for subscribers">
                            <div class="btn-quiz__text">
                                <p>Exclusive content for subscribers</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="checkbox" name="type_content[]" value="Customer reviews and success stories">
                            <div class="btn-quiz__text">
                                <p>Customer reviews and success stories</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="next">Next step</button>
                </section>
                <section class="screen">
                    <h3>How much time are you willing to spend on email marketing?</h3>
                    <div class="input__wrapper">
                        <div class="btn-quiz">
                            <input type="radio" name="time_work" value="set up once and never come back">
                            <div class="btn-quiz__text">
                                <p>Set up once and never come back</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="time_work" value="regularly set aside a few hours a week">
                            <div class="btn-quiz__text">
                                <p>Regularly set aside a few hours a week</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="time_work" value="full employment of one person">
                            <div class="btn-quiz__text">
                                <p>Full employment of one person</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="time_work" value="full-time employment of more than one person">
                            <div class="btn-quiz__text">
                                <p>Full-time employment of more than one person</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="next">Next step</button>
                </section>
                <section class="screen">
                    <h3>Do you have a resource of technical specialists?</h3>
                    <div class="input__wrapper">
                        <div class="btn-quiz">
                            <input type="radio" name="technical_specialists" value="no, only the marketing/product team">
                            <div class="btn-quiz__text">
                                <p>No, only the marketing/product team</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="technical_specialists" value="yes, but extremely limited">
                            <div class="btn-quiz__text">
                                <p>Yes, but extremely limited</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="technical_specialists"
                                value="a full resource of technical specialists with speed and quality">
                            <div class="btn-quiz__text">
                                <p>A full resource of technical specialists with speed and quality</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="radio" name="technical_specialists" value="we have outsourced technical support">
                            <div class="btn-quiz__text">
                                <p>We have outsourced technical support</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="next">Next step</button>
                </section>
                <section class="screen">
                    <h3>What metrics are important to you in evaluating the effectiveness of campaigns? (multiple choice)</h3>
                    <div class="input__wrapper">
                        <div class="btn-quiz">
                            <input type="checkbox" name="metrics[]" value="Conversion">
                            <div class="btn-quiz__text">
                                <p>Conversion</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="checkbox" name="metrics[]" value="Opening letters">
                            <div class="btn-quiz__text">
                                <p>Opening letters</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="checkbox" name="metrics[]" value="Clickable links">
                            <div class="btn-quiz__text">
                                <p>Clickable links</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="checkbox" name="metrics[]" value="Unsubscribes from newsletters">
                            <div class="btn-quiz__text">
                                <p>Unsubscribes from newsletters</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="next">Next step</button>
                </section>
                <section class="screen">
                    <h3>What methods of stimulating interaction with letters are you ready to use? (multiple choice)</h3>
                    <div class="input__wrapper">
                        <div class="btn-quiz">
                            <input type="checkbox" name="methods_stimulating[]" value="Discounts and promo codes">
                            <div class="btn-quiz__text">
                                <p>Discounts and promo codes</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="checkbox" name="methods_stimulating[]" value="Free content">
                            <div class="btn-quiz__text">
                                <p>Free content</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="checkbox" name="methods_stimulating[]"
                                value="Participation in competitions and raffles">
                            <div class="btn-quiz__text">
                                <p>Participation in competitions and raffles</p>
                            </div>
                        </div>
                        <div class="btn-quiz">
                            <input type="checkbox" name="methods_stimulating[]"
                                value="Personal recommendations and personalized offers">
                            <div class="btn-quiz__text">
                                <p>Personal recommendations and personalized offers</p>
                            </div>
                        </div>

                    </div>
                    <button class="next">Complete the test</button>
                </section>
            </form>
        <?php endif; ?>
    </section>

</div>
</div>


<script src="./assets/js/index.js"></script>
</body>

</html>