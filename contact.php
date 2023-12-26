<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Neoma Media</title>
    <link rel="icon" type="image/x-icon" href="./assets/images/favicon.png">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.0.0/uicons-thin-straight/css/uicons-thin-straight.css'>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/style.css">
    <meta name="google-site-verification" content="S8LU_4XMshdxsWQ8ZWz6YdKoXeRmhfEHj8Qp-Ky5Afs" />

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TP7BKF29');</script>
    <!-- End Google Tag Manager -->



    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CHRQP0PQ8E"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-CHRQP0PQ8E');
    </script>
</head>

<body>
 
    <?php include 'header.php'; ?>

    <!-- contact hero section -->
    <div class="contacthero">
        <h3>Our marketing prowess is at your disposal - wherever you are.</h3>
        <div class="ctb">
            <img src="./assets/images/contactplanet.svg" alt="">
        </div>
    </div>
    <!-- contact hero end -->

    <!-- form section start -->
    <div class="formsection">
        <div class="titlebox">
            <h2 class="sec-title t_center">Reach Out To Us</h2>
        </div>
        <div class="c_form">
            <form method="post" id="frmContactus">
                <p>Hello! My name is <input type="text" name="name" id="" placeholder="John Doe" autocomplete="off"
                        required> And
                    I work in <input type="text" name="c_name" id="" placeholder="XYZ Pvt. Ltd" autocomplete="off">.<br> I
                    found you using <br>
                    <span class="selectfield">
                        <label for="wom"> Word of Mouth</label>
                        <input type="checkbox" id="wom" name="reachby" value="Word of Mouth">
                        <span class="c_box"></span>
                    </span>
                    <span class="selectfield">
                        <label for="Dribbble"> Dribbble</label>
                        <input type="checkbox" id="Dribbble" name="reachby" value="Dribbble">
                        <span class="c_box"></span>
                    </span>
                    <span class="selectfield">
                        <label for="Linkedin"> Linkedin</label>
                        <input type="checkbox" id="Linkedin" name="reachby" value="Linkedin">
                        <span class="c_box"></span>
                    </span>
                    <span class="selectfield">
                        <label for="Googlesearch"> Google search</label>
                        <input type="checkbox" id="Googlesearch" name="reachby" value="Google search">
                        <span class="c_box"></span>
                    </span>
                    <span class="selectfield">
                        <label for="Other"> Other</label>
                        <input type="checkbox" id="Other" name="reachby" value="Other">
                        <span class="c_box"></span>
                    </span><br>
                    I’m looking for help with:<br>
                    <span class="selectfield">
                        <label for="msi"> Marketing Strategy & Insights</label>
                        <input type="checkbox" id="msi" name="helpwant" value="Marketing Strategy & Insights">
                        <span class="c_box"></span>
                    </span>
                    <span class="selectfield">
                        <label for="ccp"> Creative & Content Production</label>
                        <input type="checkbox" id="ccp" name="helpwant" value="Creative & Content Production">
                        <span class="c_box"></span>
                    </span>
                    <span class="selectfield">
                        <label for="mca"> Media & Channel Activation</label>
                        <input type="checkbox" id="mca" name="helpwant" value="Media & Channel Activation">
                        <span class="c_box"></span>
                    </span>
                    <span class="selectfield">
                        <label for="cep"> Customer Experience & Personalization</label>
                        <input type="checkbox" id="cep" name="helpwant" value="Customer Experience & Personalization">
                        <span class="c_box"></span>
                    </span>
                    <span class="selectfield">
                        <label for="mmr"> Measurement & Marketing ROI</label>
                        <input type="checkbox" name="helpwant" id="mmr" value="Measurement & Marketing ROI">
                        <span class="c_box"></span>
                    </span>
                    <span class="selectfield">
                        <label for="Otherhelp"> Other</label>
                        <input type="checkbox" id="Otherhelp" name="helpwant" value="Otherhelp">
                        <span class="c_box"></span>
                    </span>

                    <br>Feel free to reach me at <input type="email" name="email" id="" placeholder="johndoe@example.com"
                        autocomplete="off" required>
                    to begin the conversation.<br>
                    <textarea name="message" id="" onkeyup="textAreaAdjust(this)"
                        rows="1" placeholder="I would like to share more about my project..."></textarea>
                </p>
                <div class="agreement">
                    <span class="selectfield">
                        <label for="agreement"> I agree with privacy policy</label>
                        <input type="checkbox" id="agreement" name="agreement" value="agreement">
                        <span class="c_box"></span>
                    </span>
                </div> 
                <div class="submit">
                    <button type="submit" id="submit" class="y_btn btn">Start Your Journey ⇾</button>
                </div>
                <p id="sucmsg" style="color: white;"></p>
            </form>
        </div>
    </div>
    <!-- form sectionend  -->

    <!-- contact details start -->
    <div class="c_details">
        <div class="s_detail">
            <p>Or you can directly contact us:</p>
            <p class="pright">+91 9819423418</p>
        </div>
        <div class="hr"></div>
        <div class="s_detail">
            <p>Office Address:</p>
            <p class="pright">C – 102, D – 101,<br>
                S. G. Business Hub,<br>
                Off Gota Flyover,<br>
                S. G. Highway, <br>
                Vasantnagar, Ognaj,<br>
                Ahmedabad, Gujarat – 380060
            </p>
        </div>
    </div>
    <!-- contact details end -->

    <?php include 'footer.php'; ?>
    <script>
        function textAreaAdjust(element) {
            element.style.height = "1px";
            element.style.height = (element.scrollHeight) + "px";
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        jQuery('#frmContactus').on('submit', function (e) {
            jQuery('#sucmsg').html('');
            jQuery('#submit').html('Sending...');
            jQuery('#submit').attr('disabled', true);
            jQuery.ajax({
                url: 'contactmail.php',
                type: 'post',
                data: jQuery('#frmContactus').serialize(),
                success: function (result) {
                    jQuery('#sucmsg').html("Thank you for getting in touch!");
                    jQuery('#submit').html('Start Your Journey ⇾');
                    jQuery('#submit').attr('disabled', false);
                    jQuery('#frmContactus')[0].reset();
                }
            });
            e.preventDefault();
        });
    </script>



</body>

</html>
