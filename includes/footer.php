        </div>

        <footer>

            <div class="container">

                <form id="newsletter" action="/newsletter" method="post">

                    <input type="email" class="email" name="email" placeholder="Sign up to our newsletter">

                    <button class="submit">Sign Up</button>

                </form>

                <ul class="links">

                    <li><a class="contact" href="mailto:" data-title="If you have any questions about the course, email us">Contact</a></li>

                    <li><a class="facebook" href="http://facebook.com" data-title="To meet lecturers and students, join us on facebook">Facebook</a></li>

                </ul>

            </div>

        </footer>

        <a href="http://plymouth.ac.uk" title="Click here to apply to Digital Art and Technology at Plymouth University" class="apply">Apply</a>

        <div class="background-image" style="background-image: url('<?php echo $directory . "background-" . $index; ?>.jpg')"></div>

        <script>
            var config = {
                    debugMode: (location.hostname === 'localhost') ? true : false,
                    ga: 'UA-XXXXXXXX-X'
                },
                require = {
                    baseUrl: (config.debugMode) ? 'js/source/' : 'js',
                    paths: {
                        'jquery': ['//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min', 'vendor/jquery-1.8.1.min']
                    }
                };
        </script>

        <script data-main="main.js" src="js/require.js"></script>
    </body>
</html>