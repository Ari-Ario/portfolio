
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-contact.css">
    <link rel="stylesheet" href="../styles.css">
    <title>Contact</title>
</head>
<body>
<?php include dirname(__DIR__) . "/components/header.php"; ?>

<section id="main-contact">
    <secttion id="contact-icons">
        <a href="https://www.instagram.com/khusrawmostafanejad/" target="_blank" class="link-section w-inline-block"><img src="https://assets-global.website-files.com/60ee32414a2efcb87f4a2940/60ee32414a2efc7fdd4a2964_icon-instagram.svg" loading="lazy" alt="" class="_8bm">
        <section class="text-detail text-center">Instagram</section></a>
        <a href="https://x.com/xusrew?t=KtILK1tpxboCWXFUKMRjSA&s=08" target="_blank" class="link-section w-inline-block"><img src="https://assets-global.website-files.com/60ee32414a2efcb87f4a2940/60ee32414a2efcddb84a2962_icon-twitter.svg" loading="lazy" alt="" class="_8bm">
        <section class="text-detail text-center">Twitter / X</section></a>
        <a href="https://www.facebook.com/khusraw" target="_blank" class="link-section w-inline-block"><img src="https://assets-global.website-files.com/60ee32414a2efcb87f4a2940/60ee32414a2efca0ff4a2961_icon-facebook.svg" loading="lazy" alt="" class="_8bm">
        <section class="text-detail text-center">Facebook</section></a>
        <a href="https://www.linkedin.com/in/khusraw-ismail-mostafanejad-728933204/" target="_blank" class="link-section w-inline-block"><img src="https://assets-global.website-files.com/60ee32414a2efcb87f4a2940/60ee32414a2efc28ae4a2963_icon-linkedin.svg" loading="lazy" alt="" class="_8bm">
        <section class="text-detail text-center">LinkedIn</section></a>
    </secttion>
    <secttion id="contact-mail">
            <!-- <img src="https://assets-global.website-files.com/60ee32414a2efcb87f4a2940/60ee32414a2efcf8b74a295d_x.svg" loading="lazy" width="24" data-w-id="fd3f696f-c0bb-ea64-b678-f9061cbfb877" alt="" class="contact-exit" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"> -->
                <form action="email-validation.php" id="email-form" name="email-form" data-name="Email Form" method="POST" class="contact-form" data-wf-page-id="60ee32414a2efc10344a2943" data-wf-element-id="fd3f696f-c0bb-ea64-b678-f9061cbfb87b" aria-label="Email Form">
                <fieldset class="fieldset">
                    <legend>Name:</legend>
                    <section class="field">
                        <input type="text" name="name-contact" id="name-contact" placeholder="Ari Ario" required>
                    </section>
                </fieldset>

                <fieldset class="fieldset">
                    <legend>Corporate:</legend>
                    <section class="field">
                        <input type="text" name="corporate" id="corporate" min="0" max="100" placeholder="abcd AG">
                    </section>
                </fieldset>
                <fieldset class="fieldset">
                    <legend>Email Address:</legend>
                    <section class="field">
                        <input type="email" name="email-contact" id="email-contact" placeholder="ari@ario.ch" required>
                    </section>
                </fieldset>

                <fieldset class="fieldset">
                <legend>Message</legend>
                    <section class="field">
                        <textarea name="message" id="message" rows="5" placeholder='Enter comment...' maxlength='1000' minlength='100'></textarea>
                    </section>
                </fieldset>

                    <section class="field">
                        <input id="btn" type="submit" value="Submit"><img src="https://assets-global.website-files.com/60ee32414a2efcb87f4a2940/60ee32414a2efc2c6b4a2973_link-arrow.svg" loading="lazy" alt="Back arrow" class="mobile-contact-arrow">
                    </section>
                </form>

                <section id="form-done" tabindex="-1" role="region" aria-label="Email Form success">
                    <section>Thank you! I will be in contact with you shortly.</section>
                </section>
                <section id="form-fail" tabindex="-1" role="region" aria-label="Email Form failure">
                    <section>Oops! Something went wrong while sending email.</section>
                </section>
    </secttion>
</section>
<script src="../script.js"></script>
<?php include dirname(__DIR__) . "/components/footer.php"; ?>
</body>
</html>

