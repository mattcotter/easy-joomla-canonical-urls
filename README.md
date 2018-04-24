# Easy Canonical URLs in Joomla 3.x

I recently ran into a situation where I needed to duplicate content from a client's existing website to another. I used two Joomla extensions first to copy my content:

* [J2XML](https://extensions.joomla.org/extension/j2xml/) to export my article data to the site
* [Kazaam!](https://www.php-web-design.com/Joomla-Components/kazaam.html) to migrate my category structure

I then created this custom PHP to check for the menu item's ID & output a canonical URL based off the root URL, parse the URL to remove the root domain (leaving the path). I then merge my path with the domain I want to point the canonical URL to.

It's worth noting that the path needs to be identical to your existing site to work correct. Using the two plugins listed above should allow you to do this easily.

This technique allowed me to duplicate hundreds of articles in under an hour. Just thought I'd share it; hopefully someone finds this useful.