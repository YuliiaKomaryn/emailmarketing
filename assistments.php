<?php include './templates/navigate.php'; ?>
<div class="content">


    <section class="auth-form">
        <img class="personal-img" src="./assets/img/personal.jpg" alt="">
        <form id="chat-form">
            <h3>Pesonal Assistments</h3>
            <div class="input__wrapper">
                <div class="input__field">
                    <p>Enter your message:</p>
                    <input type="text" id="mytext" required>
                </div>
            </div>
            <button type="submit">Submit</button>
        </form>

        <div class="responce-form">
            <h3>Response:</h3>
            <textarea id="response" rows="20" readonly></textarea>
        </div>

    </section>

</div>
</div>


<script src="./assets/js/index.js"></script>
</body>

</html>