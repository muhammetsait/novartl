 # NovaRtl: RTL theme for Laravel Nova

 This package provides a simple css/scss resource file that applies right-to-left directionality to the default Nova theme.

## Installation

## Usage

 The rtl-theme is loaded automatically when the app locale is set to one of the following:

 ```
 'ar', 'arc', 'dv', 'fa', 'ha', 'he', 'khw', 'ks', 'ku', 'ps', 'ur', 'yi'
 ```

Alternatively, you may force loading the rtl-theme when using other locales by adding `direction="rtl"` to your `config/app.php` file.

## License

This project is licensed under the terms of the MIT license.

## Acknowledgment

This package incorporates code from:
 - pishran/nova-rtl-theme version 1.2.1 (https://github.com/pishran/nova-rtl-theme)
