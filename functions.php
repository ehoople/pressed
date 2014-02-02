// add a favicon to your
2
function blog_favicon() {
3
echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'http://cdn3.wpbeginner.com/favicon.ico" />';
4
}
5
add_action('wp_head', 'blog_favicon');
