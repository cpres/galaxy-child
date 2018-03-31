<?php
/**
 * Pre-Launch page
 *
 * @author Your Inspiration Themes
 * @package YITH Pre-Launch
 * @version 1.0.2
 */

    $background_role = array();
    if ( ! empty( $background['color'] ) )      $background_role[] = "background-color: {$background['color']};";
    if ( ! empty( $background['image'] ) )      $background_role[] = "background-image: url('{$background['image']}');";
    if ( ! empty( $background['repeat'] ) )     $background_role[] = "background-repeat: {$background['repeat']};";
    if ( ! empty( $background['position'] ) )   $background_role[] = "background-position: {$background['position']};";
    if ( ! empty( $background['attachment'] ) ) $background_role[] = "background-attachment: {$background['attachment']};"; 

    $child_dir = get_stylesheet_directory();
    $configs = include($child_dir.'/lib/config.php');

    if ($_POST["email"]) {
        // Put your MailChimp API and List ID hehe
        $api_key = $configs['mailchimp_api_key'];
        $list_id = $configs['mailchimp_list_id'];
     
        // Let's start by including the MailChimp API wrapper
        $path = $child_dir.'/inc/MailChimp.php';
        require_once "$path";
        // Then call/use the class
        // use MailChimp;
        $MailChimp = new MailChimp($api_key);

        // Submit subscriber data to MailChimp
        // For parameters doc, refer to: http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/
        // For wrapper's doc, visit: https://github.com/drewm/mailchimp-api
        $result = $MailChimp->post("lists/$list_id/members", [
                                'email_address' => $_POST["email"],
                                'merge_fields'  => ['FNAME'=>$_POST["fname"], 'LNAME'=>$_POST["lname"]],
                                'status'        => 'subscribed',
                            ]);
     
        if ($MailChimp->success()) {
            // Success message
            echo "<div class='align-center col-md-6 col-md-offset-3'><h4>Thank you, you have been added to our mailing list.</h4></div>";
        } else {
            // Display error
            echo "<div class='align-center col-sm-8 offset-sm-2 col-md-6 offset-md-3 alert alert-warning'><h5>";
            echo "There was an error submitting your email address, please verify and try again.";
            echo "</h5></div>";
            echo $MailChimp->getLastError();
            // Alternatively you can use a generic error message like:
            // echo "<h4>Please try again.</h4>";
        }
    }
    

?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" class="ie"<?php language_attributes() ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" class="ie"<?php language_attributes() ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="ie"<?php language_attributes() ?>>
<![endif]-->
<!--[if IE 9]>
<html id="ie9" class="ie"<?php language_attributes() ?>>
<![endif]-->
<!--[if gt IE 9]>
<html class="ie"<?php language_attributes() ?>>
<![endif]-->
<!--[if !IE]>
<html <?php language_attributes() ?>>
<![endif]-->
                                             
<!-- START HEAD -->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="Shortcut Icon" type="image/x-icon" href="<?php echo home_url(); ?>/favicon.ico" />
    <?php //wp_head(); ?>

    <link rel="stylesheet" href="<?php echo yith_google_fonts_url() ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->stylesheet_url() ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" type="text/css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // jQuery Validation
            $("#signup").validate({
                // if valid, post data via AJAX
                // submitHandler: function(form) {
                //     // $.post("<?php echo($_SERVER['PHP_SELF'])?>", { fname: $("#fname").val(), lname: $("#lname").val(), email: $("#email").val() }, function(data) {
                //     //     $('#response').html(data);
                //     // });
                //     $('#signup').ajaxChimp({
                //         url: 'https://sacshiki.us1.list-manage.com/subscribe/post?u=92a2e63fe796e322f8b125c61&amp;id=44a7bf45e8'
                //         callback: displayResults
                //     });
                // },
                // all fields are required
                rules: {
                    fname: {
                        required: true
                    },
                    lname: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    }
                }
            });
        });
        
        function displayResults (resp) {
            console.log(resp)
            if (resp.result === 'success') {
                // Do stuff
            }
        }
    </script>
    
    <style type="text/css">
        body {
            <?php echo implode( "\n", $background_role ) ?>
        }

        .logo .tagline {
            <?php echo $logo['tagline_font']; ?>
        }

        h1, h2, h3, h4, h5, h6 {
            <?php echo $title_font; ?>
        }

        p, li {
            <?php echo $p_font; ?>
        }

        .top-bg {
            background: <?php echo $color['border_top'] ?>;
        }

        form.newsletter input.text-field {
            <?php echo $newsletter['email_font']; ?>
        }

        form.newsletter input.submit-field {
            background: <?php echo $newsletter['submit']['color'] ?>;
            <?php echo $newsletter['submit']['font']; ?>
        }

        form.newsletter .submit:hover input.submit-field {
            background: <?php echo $newsletter['submit']['hover'] ?>;
        }

        form.newsletter .submit:after {
            border-right-color: <?php echo $newsletter['submit']['color'] ?>;
         }

        form.newsletter .submit:hover:after {
            border-right-color: <?php echo $newsletter['submit']['hover'] ?>;
        }

        .countdown .col .num {
            <?php echo $countdown['num_font'] ?>
        }

        .countdown .col .label {
            <?php echo $countdown['label_font'] ?>
        }

    	<?php echo $custom ?>
    </style>
</head>
<!-- END HEAD -->
<!-- START BODY -->
<body <?php body_class() ?>>
	
    <div class="container">

        <a class="logo" href="<?php echo site_url() ?>">
            <img src="<?php echo $logo['image'] ?>" alt="Logo" />
            <?php if ( ! empty( $logo['tagline'] ) ) : ?><p class="tagline"><?php echo $logo['tagline'] ?></p><?php endif; ?>
        </a>

        <div class="yit-box">
            <div class="top-bg"></div>

            <div class="message">
                <?php echo $message; ?>
            </div>

            <?php if( !empty( $mascotte ) ): ?><img src="<?php echo $mascotte ?>" alt="Mascotte" class="mascotte" /><?php endif ?>

            <?php if ( $countdown['enabled'] ) : ?>
            <div class="countdown">

                <div class="col days">
                    <span class="num"><?php echo $countdown['days'] ?></span>
                    <span class="label"><?php _e( 'Days', 'yith-pre-launch' ) ?></span>
                </div>

                <div class="col hours">
                    <span class="num"><?php echo $countdown['hours'] ?></span>
                    <span class="label"><?php _e( 'Hours', 'yith-pre-launch' ) ?></span>
                </div>

                <div class="col minutes">
                    <span class="num"><?php echo $countdown['minutes'] ?></span>
                    <span class="label"><?php _e( 'Minutes', 'yith-pre-launch' ) ?></span>
                </div>

                <div class="col seconds">
                    <span class="num"><?php echo $countdown['seconds'] ?></span>
                    <span class="label"><?php _e( 'Seconds', 'yith-pre-launch' ) ?></span>
                </div>

                <div style="clear:both"></div>

            </div>
            <?php endif; ?>


<div id="wrapper">
        <form id="signup" class="formee" action="" method="post">
            <div class="form-style-8">
                <legend>Sign Up</legend>
                <div>
                    <input name="name" id="name" class="p10" type="text" placeholder="Full Name" />
                </div>
                <div>
                    <input name="email" id="email" class="p10" type="email" placeholder="Email" />
                </div>
                <div>
                    <input id="mc-email" class="btn btn-success" class="p10" type="submit" value="Sign Up" />
                </div>
            </div>
        </form>
        <div id="response"></div>


        </div>

        <div class="socials">
            <?php foreach( $socials as $social => $url ) :
                if ( empty( $url ) ) continue;

                if ( $social == 'email' ) $url = 'mailto:' . $url;
                if ( $social == 'skype' ) $url = 'http://myskype.info/' . str_replace( '@', '', $url );
            ?>
            <a class="social <?php echo $social ?>" href="<?php echo esc_url( $url ) ?>" target="_blank"><?php echo ucfirst($social) ?></a>
            <?php endforeach; ?>
        </div>

    </div>
	
	<?php wp_footer() ?>

    <script type="text/javascript">
        jQuery(document).ready(function($){
            var countdown_html = $('.countdown').clone();
            $('.days .num', countdown_html).text('{dn}');
            $('.hours .num', countdown_html).text('{hnn}');
            $('.minutes .num', countdown_html).text('{mnn}');
            $('.seconds .num', countdown_html).text('{snn}');

            $('.countdown').countdown({until: <?php echo $countdown['to'] ?>, layout: countdown_html.html() });
        });
    </script>
</body>
</html>