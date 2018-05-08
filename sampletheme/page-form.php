<?php
/* Template Name: contactform  */
get_header();

?>
<form action="<?php the_permalink(); ?>" method="post">
    Username: <input type="text" name="username" id="name"> <br> <br>
    Email: <input type="text" name="email" id="email"> <br> <br>
    Password: <input type="password" name="password" id="password"> <br> <br>
    Confirm Password: <input type="password" nmae="confpass" id="confpass"> <br> <br>
    <input type="submit" name="submit">
    <?php wp_nonce_field(); ?>

<?php get_footer(); ?>