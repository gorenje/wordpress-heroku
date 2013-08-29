<?php

add_post_type_support('page', 'excerpt');

function my_login_logo() { ?>
    <style type="text/css">
        body.login {
          background: #f1f1f1;
        }
        body.login div#login h1 a {
            padding-bottom: 30px;
            background: url(<?php echo get_bloginfo( 'template_directory' ) ?>/images/wooga.svg) no-repeat center;
            background-size: contain;
            height: 150px;
            text-indent: -1000px;
        }
        body.login label {
          display: none;
        }
        body.login #wp-submit,
        body.login #backtoblog,
        body.login #nav {
          display: none;
        }
        body.login form {
          border: none;
          box-shadow: none;
          background: none;
        }
        body.login .wpg_ggl_btn {
          display: block;
          text-align: center;
          font-size: 20px;
          line-height: 50px;
          height: 50px;
          background-color: #BC3627;
          border-color: #AC2B1C;
          color: #fff;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

?>