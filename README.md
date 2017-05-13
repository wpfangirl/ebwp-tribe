# ebwp-tribe

## Events Calendar Customizations for the East Bay WordPress Meetup

Since the customizations in my tribe-events repo are all for Events Calendar Pro, and all from the kiamiller.com website, I decided to put the changes I'd made to display the list widget for The Events Calendar (free) into their own repo.

This repo contains only the files that I've changed.

First: the default template for The Events Calendar, default-template.php. This lives in my theme folder at /wp-content/themes/kickstart-pro/tribe-events/. I edited this file to make the event template compatible with the Genesis Framework.

Second: the custom-functions.php file from WP Clips (http://wpclips.net/). The full path to this file is /wp-content/plugins/wp-clips/clip_custom/. I highly recommend the WP Clips plugin as a place to store your custom functions and CSS, rather than making modifications to a child theme, at least if the theme is not one you created yourself.

This file contains the function for displaying the featured image in the list widget. The image size used in that function is one of those declared in the theme, Kickstart Pro. You can use any image size that's defined in your theme, or one of the default WP image sizes. Just don't use "full" if you want to take advantage of responsive images.

Third: the custom-style.css file from WP Clips. The full path to this file is /wp-content/plugins/wp-clips/clip_custom/. 

In real life, that file contains ALL of my CSS customizations for the site. For the sake of simplicity, I've edited it here so that it only contains the CSS for The Events Calendar. This file is where the CSS Grid Layout magic happens, with a fallback to Flexbox for browsers that don't support CSS Grid.