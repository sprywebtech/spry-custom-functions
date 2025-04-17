# Custom Functions Plugin

## Description
Simple, small, and lightweight WordPress plugin that allows you to enter custom functions just like you would use functions.php in a theme. This solves the issue of not having a functions.php file for some page builders. There is no admin interface, so adding custom functions works just like adding them to functions.php via a code editor.

## Installation
1. Download the plugin zip folder
2. Log in to your WordPress admin panel
3. Navigate to Plugins > Add New
4. Click the "Upload Plugin" button at the top of the page
5. Choose the plugin zip file and click "Install Now"
6. After installation completes, click "Activate Plugin"

## Usage
Once activated, you can add your custom functions in two ways:

### Method 1: WordPress Plugin Editor
1. Navigate to Plugins > Plugin Editor
2. Select "Custom Functions Plugin" from the dropdown menu
3. Add your custom PHP functions to the plugin file
4. Click "Update File" to save your changes

### Method 2: FTP/SFTP
1. Connect to your server using FTP or SFTP
2. Navigate to the plugin directory (typically wp-content/plugins/custom-functions-plugin/)
3. Edit the main plugin file to add your custom functions
4. Save and upload the edited file

## Example
Add custom functions just as you would in a theme's functions.php file:

```php
// Add a custom shortcode
function custom_greeting_shortcode() {
    return '<p>Hello, WordPress world!</p>';
}
add_shortcode('greeting', 'custom_greeting_shortcode');

// Modify admin footer text
function custom_admin_footer_text() {
    return 'Thank you for creating with WordPress | Custom Functions Plugin';
}
add_filter('admin_footer_text', 'custom_admin_footer_text');
```

## Benefits
- Retain your custom functions when switching themes
- Add functionality without editing your theme's files
- Solve the issue of missing functions.php in some page builders
- Keep your custom functions organized in one place

## Notes
- Always backup your site before adding custom PHP code
- Test your functions thoroughly to ensure they work as expected
- Invalid PHP code could cause errors on your site

## Author
Doug Morris

## License
This plugin is licensed under the GNU General Public License v2 or later, the same license used by WordPress.

## Support
For support or feature requests, please use the GitHub repository's issue tracker or contact the plugin author directly.

## Changelog
### 1.0.0
- Initial release