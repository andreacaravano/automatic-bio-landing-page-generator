<!--
* Project "Multiple Links in Bio" in PHP/HTML/CSS
* Last updated: 29/06/2020
 -->

<?php
// CHANGE THESE VARIABLES TO ADAPT THE PAGE AUTOMATICALLY
// REMEMBER TO PLACE YOUR PROFILE PHOTO INTO THE "resources" FOLDER!

$language = "en";
$title = "CHANGE THIS TITLE";
$name = "INSERT YOUR NAME";
$profilePhotoCaption = "INSERT YOUR PROFILE PHOTO CAPTION";
$emailAddress = "INSERT YOUR E-MAIL ADDRESS";
$textEmailAddress = "SEND ME AN E-MAIL";
$profilePhotoDescription = "INSERT YOUR PROFILE PHOTO DESCRIPTION";
$InstagramProfileURL = "https://instagram.com/YOURUSERNAME";
$FaceBookProfileURL = "https://www.facebook.com/YOURUSERNAME";
$TwitterProfileURL = "https://twitter.com/YOURUSERRNAME";
$primaryLinkText = "INSERT YOUR PRIMARY LINK TEXT";
$primaryLinkURL = "INSERT YOUR PRIMARY LINK URL";
$secondaryLinkText = "INSERT YOUR SECONDARY LINK TEXT";
$secondaryLinkURL = "INSERT YOUR SECONDARY LINK URL";

$profilePhotoURI = "resources/profile-photo.jpg";
$mailIconURI = "resources/mail.svg";
$FaceBookIconURI = "resources/facebook.svg";
$InstagramIconURI = "resources/instagram.svg";
$TwitterIconURI = "resources/twitter.svg";
$showProfilePhotoAsCircle = true;
$showProfilePhotoCaption = true;
?>
<!DOCTYPE html>
<html lang="<?php echo $language ?>">
    <head>
        <title>
            <?php echo $title ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
              integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
              crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="resources/main.css">
    </head>
    <body>
        <main class="container">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card text-center">
                    <div class="card-header">
                        <?php echo $name ?>
                    </div>
                    <div class="card-body">

                        <?php // Profile Photo ?>
                        <section>
                            <figure class="figure">
                                <img src="<?php echo $profilePhotoURI ?>"
                                     class="figure-img img-fluid <?php echo(($showProfilePhotoAsCircle == true) ? 'rounded-circle' : 'rounded') ?> profile-photo"
                                     alt="<?php echo $profilePhotoDescription ?>"/>
                                <?php
                                if ($showProfilePhotoCaption == true) {
                                    ?>
                                    <figcaption class="figure-caption">
                                        <?php echo $profilePhotoCaption ?>
                                    </figcaption>
                                    <?php
                                }
                                ?>
                            </figure>
                        </section>

                        <?php // E-mail address ?>
                        <section style="display: flex; justify-content: center; padding-bottom: 15px;">
                            <div class="email-field" style="width: max-content;">
                                <img src="<?php echo $mailIconURI ?>" class="img-fluid" alt="E-mail icon"
                                     style="width: 22px; height: 22px; padding-bottom: 3px; padding-top: 3px;"/>
                                <a href="mailto:<?php echo $emailAddress ?>">
                                    <?php echo $textEmailAddress ?>
                                </a>
                            </div>
                        </section>

                        <?php // Social icons ?>
                        <section>
                            <figure class="figure">
                                <a href="<?php echo $InstagramProfileURL ?>">
                                    <div class="social-icon">
                                        <img src="<?php echo $InstagramIconURI ?>"
                                             class="figure-img img-fluid social-img"
                                             alt="Instagram icon"/>
                                    </div>
                                </a>
                            </figure>
                            <figure class="figure">
                                <a href="<?php echo $FaceBookProfileURL ?>">
                                    <div class="social-icon">
                                        <img src="<?php echo $FaceBookIconURI ?>"
                                             class="figure-img img-fluid social-img"
                                             alt="Facebook icon"/>
                                    </div>
                                </a>
                            </figure>
                            <figure class="figure">
                                <a href="<?php echo $TwitterProfileURL ?>">
                                    <div class="social-icon">
                                        <img src="<?php echo $TwitterIconURI ?>"
                                             class="figure-img img-fluid social-img"
                                             alt="Twitter icon"/>
                                    </div>
                                </a>
                            </figure>
                        </section>

                        <?php // Primary Link ?>
                        <section class="links-section">
                            <div class="list-group">
                                <a href="<?php echo $primaryLinkURL ?>"
                                   class="list-group-item list-group-item-action list-group-item-info links-group">
                                    <?php echo $primaryLinkText ?>
                                    <span style="float: right;">
                                        &rarr;
                                    </span>
                                </a>
                            </div>
                        </section>

                        <?php // Secondary Link ?>
                        <section class="links-section">
                            <div class="list-group">
                                <a href="<?php echo $secondaryLinkURL ?>"
                                   class="list-group-item list-group-item-action list-group-item-secondary links-group">
                                    <?php echo $secondaryLinkText ?>
                                    <span style="float: right;">
                                        &rarr;
                                    </span>
                                </a>
                            </div>
                        </section>
                    </div>

                    <div class="card-footer text-muted">
                        <?php // Credits are much appreciated ?>
                        Template by <a href="https://github.com/andreacaravano/">Andrea Caravano</a>
                    </div>
                </div>
            </div>
        </main>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
                integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
                crossorigin="anonymous"></script>
    </body>
</html>