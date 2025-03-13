## installation:
### 1- Install cmb2 plugin
### 2- upload accordion folder into child theme
### 3- insert these code to function of child theme:

```php
require_once get_stylesheet_directory() . '/Accordion/init.php';
function enqueue_custom_scripts()
{
wp_enqueue_script('jquery');
wp_enqueue_script('custom-scripts', get_stylesheet_directory_uri() . 'wishlist/custom-script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
```
