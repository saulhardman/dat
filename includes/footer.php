        </div>

        <footer>

            <div class="container">

                <form id="newsletter" action="/newsletter" method="post">

                    <input type="email" class="email" name="email" placeholder="Enter your email address">

                    <button class="submit">Keep in touch</button>

                </form>

                <p class="contact">

                    To apply, <a href="http://www1.plymouth.ac.uk/courses/undergraduate/4315/Pages/CourseOverview.aspx">click here</a>. If you have any questions about the course, <a href="mailto:">email us here</a>. To meet lecturers and students, <a href="https://www.facebook.com/DigitalArtAndTechnology">join us on Facebook</a>.

                </p>

            </div>

        </footer>

        <a href="http://plymouth.ac.uk" title="Click here to apply to Digital Art and Technology at Plymouth University" class="apply">Apply</a>

        <div class="background-image" style="background-image: url('<?php echo $directory . "background-" . $index; ?>.jpg')"></div>

        <script>
            var config = {
                    debugMode: (location.hostname === 'localhost') ? true : false,
                    ga: 'UA-XXXXXXXX-X',
                    imageCount: <?php echo $length; ?>,
                    imageIndex: <?php echo $index; ?>
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