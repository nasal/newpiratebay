newpiratebay theme
============

Theme for [isoHunt's openbay](https://github.com/isohuntto/openbay).  
[Original screenshot](https://github.com/isohuntto/openbay/issues/91#issuecomment-68230094).  
[Live demo](http://opb.rudikovac.com/).  

Installation
---

1. Download the theme into the *openbay/www/themes* folder (next to the oldpiratebay),
2. Open the *openbay/protected/config/config.php* file,
3. Change *'theme' => 'oldpiratebay',* to *'theme' => 'newpiratebay',* on line 5.

If you have [Grunt](http://gruntjs.com/) installed:

4. Open a console,
5. Go to *openbay/www/themes/newpiratebay/* 
6. Run *npm install*
7. Run *grunt*

If you *don't* have [Grunt](http://gruntjs.com/) installed you should:

4. Read [this](http://24ways.org/2013/grunt-is-not-weird-and-hard/) tutorial and set it up, or
5. Move the files in */css/* and */js/* to *openbay/www/css/* and js and
6. Move *npb_logo.png* to *openbay/www/img/*.

Note
---

1. This is just a quick mockup, a lot of code is commented, the latest list is hardcoded etc. It's messy :)
2. I'm new to Grunt and I'm pretty sure I messed it up, sorry!