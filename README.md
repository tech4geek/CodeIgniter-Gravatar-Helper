# Gravatar Helper for CodeIgniter

[Gravatar](http://gravatar.com) Helper functions to utilize with [CodeIgniter](http://codeigniter.com) 2.x and 3.x or Standard PHP Application.

## Integration

1. Copy `gravatar_helper.php` to your `application/helpers` folder.
2. Autoload the helper in `application/config/autoload.php`: $autoload\['helper'\] = array\('gravatar'\);
3. Use helper functions as needed.

## Examples

```
/**
 * Get either a Gravatar URL or complete image tag for a specified email address.
 *
 * @param string $email The email address
 * @param int $s Size in pixels, defaults to 80px [ 1 - 2048 ]
 * @param string $d Default imageset to use [ 404 | mm | identicon | monsterid | wavatar ]
 * @param string $r Maximum rating (inclusive) [ g | pg | r | x ]
 * @param bool $img True to return a complete IMG tag False for just the URL
 * @param array $atts Optional, additional key/value attributes to include in the IMG tag
 * @return String containing either just a URL or a complete image tag
 */

<?php echo get_gravatar( 'test@github.com', 180 )?>
```

## License

© 2016 Omkar Tapale. All Rights Reserved.

Released under the MIT License: [http://www.opensource.org/licenses/mit-license.php](http://www.opensource.org/licenses/mit-license.php)

