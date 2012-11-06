        <footer>

            <div class="container">

                <div class="info">

                    <form id="newsletter" action="keep-in-touch" method="post">

                        <span class="validation"></span>

                        <input type="email" class="email" name="email" placeholder="Enter your email address">

                        <button class="submit">Keep in touch</button>

                    </form>

                    <p class="contact">

                        <span class="sentence">To apply, <a href="http://www1.plymouth.ac.uk/courses/undergraduate/4315/Pages/CourseOverview.aspx">click here</a>. If you have any questions about the course, <a href="mailto:hello@digitalartandtechnology.co.uk">email us here</a>.</span> <span class="sentence">To meet lecturers and students, <a href="https://www.facebook.com/DigitalArtAndTechnology">join us on Facebook</a>. To see students work, check out our channel on <a href="https://vimeo.com/channels/354591" title="Click to see the Digital Art and Technology Vimeo Channel">Vimeo</a>.</span>

                    </p>

                </div>

                <img class="dat-logo" src="img/dat-logo.png" alt="DAT logo" width="120" height="120">

            </div>

        </footer>

        <a href="http://www1.plymouth.ac.uk/courses/undergraduate/4315/Pages/CourseOverview.aspx" title="Click here to apply to Digital Art and Technology at Plymouth University" class="apply">Apply</a>

        <div class="background-image" style="background-image: url('<?php echo $directory . "background-" . $index; ?>.jpg')"></div>

        <script>
            var config = {
                    debugMode: (location.hostname === 'localhost') ? true : false,
                    ga: 'UA-36035812-1',
                    imageCount: <?php echo $length; ?>,
                    imageIndex: <?php echo $index; ?>,
                    imagePath: "<?php echo $directory . 'background-'; ?>"
                },
                require = {
                    baseUrl: (config.debugMode) ? 'js/source/' : 'js',
                    paths: {
                        'jquery': ['//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min', 'vendor/jquery-1.8.1.min'],
                        'analytics': '//www.google-analytics.com/ga'
                    }
                };
        </script>

        <script data-main="main.js" src="js/require.js"></script>
    </body>
</html>