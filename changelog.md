# Ocean Changelog

### *2016.12.20* - 1.1.0
Warning: The name of the theme changed to OceanWP because Ocean was already taken, WordPress will see the OceanWP theme as a new theme, so, you need to do a fews steps, look at this video:
https://youtu.be/s5TUYhUMc-8

1. In your WordPress dashboard, go to Theme Panel > Import/Export, and click on the export button, this will generate a json file.
2. Install and activate the Widget Importer & Exporter plugin and go to Tools > Widget Import/Export to export your widgets.
3. Download the new version of the theme on oceanwp.org.
4. Return to your WordPress dashboard and upload the new version.
5. If not already done, update WordPress, then, update all extensions.
6. Go to Theme Panel > Import/Export and import the json file of the step 1.
7. Go to Appearance > Widgets and delete all your widgets to prevent conflicts (optional).
8. Go to Tools > Widget Import/Export and import the .wie file exported to the step 2.
9. Check that everything is ok on your site, if so, go back to Appearance > Themes and delete the old Ocean theme.
10. if you use a child theme, replace "wp_get_theme( 'Ocean' )" by "wp_get_theme( 'OceanWP' )".

Do not worry, all your changes made to the theme will not be affected because I've not modified any filters, action or theme_mods.
I'm really sorry for that, there will never be any changes of this kind again, I want the theme to be available in the WordPress directory, and the name Ocean was already taken in the waiting list, so I had to modify it to OceanWP.

Do not hesitate to contact me via facebook or trough the support page if you have misunderstood or you are having an issue.

* **Added** - New color option in the customizer to add a background to the transparent header style..
* **Added** - Select2 script for the typography select.
* **Added** - Typography for the H1, H2, H3 and H4 headings.
* **Added** - New panel to add your own JS code directly into the customizer.
* **Added** - New field in the customizer to add your own padding left/right for the menu items.
* **Added** - New field in the customizer to add your own width for the dropdrow menu.
* **Added** - function_exists to all functions in the helpers file, so you can alter them via the child theme.
* **Tweak** - Large enhancement of the customizer options.
* **Updated** - Font Awesome icons to 4.7.
* **Deleted** - Options in the customizer to choose your links color between light and dark for the transparent header, you can choose your own color in the menu section.
* **Fixed** - Problem to change the font size, font weight, letter spacing, etc, to the center header style.
* **Fixed** - Problem with the button to open the mobile menu.

### *2016.12.12* - 1.0.9.1
* **Fixed** - Problem with the customizer.

### *2016.12.07* - 1.0.9
* **Added** - Support WordPress 4.7.
* **Fixed** - Problem with the menu items in WordPress 4.7.
* **Tweak** - Migrate the custom CSS of the Theme Panel into the new Additional CSS panel of the customizer.

### *2016.12.01* - 1.0.8.1
* **Fixed** - Small issue.

### *2016.12.01* - 1.0.8
* **Added** - New fields in the customizer to add a background image.
* **Added** - Option in the customizer to control the max width of the logo.
* **Added** - New fields in the customizer to add a padding top and bottom at the header.
* **Added** - Tagline in the Site Identity section of the customizer.
* **Added** - Selective refresh to widgets.
* **Added** - Option to add a color to the overlay page header.
* **Fixed** - Problem with the overlay of the page header.
* **Fixed** - Problem to change the font size of the menu items for the Top Menu header style.
* **Tweak** - Moved Site Icon field to the Site Identity section of the customizer.
* **Tweak** - Some files improvement.

### *2016.11.26* - 1.0.7
* **Added** - New fields in the Blog section of the customizer to show/hide elements in the single post.
* **Tweak** - Icon search and cart replaced by text for the center header style.
* **Fixed** - Problem categories posts in megamenu.

### *2016.11.21* - 1.0.6
* **Added** - New header style "Center".
* **Fixed** - Problem anchor links on mobile menu.
* **Fixed** - Problem megamenu category posts on full screen header style.

### *2016.11.12* - 1.0.5
* **Added** - Boxed layout.
* **Added** - Options in the Customizer to alter the meta in blog entries and single.

### *2016.11.11* - 1.0.4
* **Added** - New header style "Full Screen".
* **Added** - New posts style "Grid".
* **Added** - New blog pagination "Infinite Scroll".
* **Added** - Function to add an overlay color to the page header background image style.
* **Fixed** - Problem breadcrumbs on the home page.
* **Fixed** - Breadcrumbs position problem on centered page title.
* **Tweak** - Redirection to the welcome page during the theme activation.

### *2016.11.05* - 1.0.3
* **Added** - New fields in the Contact Info widget to add your own titles and icons.
* **Tweak** - PHP files.

### *2016.11.02* - 1.0.2
* **Added** - New header style "Top Menu".
* **Added** - New widget "Recent Posts".
* **Added** - New "Shortcode" field in the Ocean Settings metabox to add your slider shortcode below the header.
* **Added** - Function to add custom fonts.
* **Added** - Function to delete term data when a term is deleted.
* **Added** - Option to the categories menu items to add your latest posts in mega menu.
* **Tweak** - Improvements of the newsletter widget.
* **Fixed** - Lightbox images into the content.
* **Fixed** - Problems of tabs in the editor mode of Elementor and Beaver Builder when you set the page in full screen.
* **Fixed** - Problem posts and related posts image link.
* **Fixed** - The top bar social alt work perfectly now.

### *2016.10.16* - 1.0.1
* **Added** - Options in the customizer to change the colors of WooCommerce pages.

### *2016.10.13* - 1.0.0
* Initial release