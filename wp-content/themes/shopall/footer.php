
    <div class="container-footer-kosss-head">
            <div>
                <h3>POPULAR SHORTCUTS</h3>
                <a href="/about-us/">ABOUT US</a>
                <a href="/how-to-start-your-gift-subscription/">HOW TO START YOUR GIFT SUBSCRIPTION</a>
                <a href="/our-mission/">OUR MISSION</a>
                <a href="/contact-us/">CONTACT US</a>
                <a href="/faqs/">FAQS</a>
                <a href="/delivery/">DELIVERY</a>
                <a href="/international-flower-delivery/">INTERNATIONAL FLOWER DELIVERY</a>
            </div>
            <div class="footer-kosss-head-subscrip">
                <h3>GET THE FLOWERBX NEWSLETTER</h3> 
                <form action="#" method="post">
                    <input type="hidden" name="action" value="myplugin_add_email">
                    <input type="email" name="email" placeholder="Enter your email" required>
                    <button type="submit" id="kosss-foot-subscription">></button>
                </form>
                <h3 class="insta-foot-social">CONNECT WITH US ON SOCIAL</h3>
                <a href="https://www.instagram.com/theflowerbx/?hl=en" target="_blank"><span>   @THEFLOWERBX</span></a>
            </div>
            <div class="footer-kosss-head-helpme">
                <h3>DO YOU HAVE A QUESTION?</h3> 
                <p>Do you have a special request? Or are you in doubt about something? Send a message to our Customer Support Team, who will do their best to reply as soon as possible.</p>
                <div class="button-help-msg">
                    <!-- <form class="button-help-msg-form">
                        <input type="hidden" name="action" value="process_form">
                        <label for="name">your name:</label>
                        <input type="text" id="name" name="name"><br>

                        <label for="email">your email:</label>
                        <input type="email" id="email" name="email"><br>

                        <label for="comment">massage:</label>
                        <textarea id="comment" name="comment"></textarea><br>

                        <input type="submit" value="submit">
                       
                    </form> -->
                    <form class="button-help-msg-form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                        <input type="hidden" name="action" value="process_form">
                        <label for="name">your name:</label>
                        <input type="text" id="name" name="name"><br>

                        <label for="email">your email:</label>
                        <input type="email" id="email" name="email"><br>

                        <label for="comment">message:</label>
                        <textarea id="comment" name="comment"></textarea><br>

                        <input type="submit" value="submit">
                    </form>
                    
                    <script>
                                                // Получаем блок .button-help-msg и блок .button-help-msg-form
                            var buttonHelpMsg = document.querySelector('.button-help-msg');
                            var buttonHelpMsgForm = document.querySelector('.button-help-msg-form');

                            // При клике на блок .button-help-msg
                            buttonHelpMsg.addEventListener('click', function(event) {
                            // Отменяем стандартное действие ссылки
                            event.preventDefault();

                            // Отображаем блок .button-help-msg-form
                            buttonHelpMsgForm.style.display = 'flex';
                            });

                            // При клике на документ
                            document.addEventListener('click', function(event) {
                            // Если клик был не на блоке .button-help-msg и не на блоке .button-help-msg-form
                            if (!event.target.closest('.button-help-msg') && !event.target.closest('.button-help-msg-form')) {
                                // Скрываем блок .button-help-msg-form
                                buttonHelpMsgForm.style.display = 'none';
                            }
                            });

                    </script>
                </div>
            </div>
    </div>


<?php wp_footer(); ?>

</body>
</html>
