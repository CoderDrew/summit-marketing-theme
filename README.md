# Starter Theme

A modern WordPress theme built with the block editor and full site editing capabilities.

## Project Structure

```
starter theme/
├── functions.php          # Theme functionality and hooks
├── style.css             # Theme stylesheet and metadata
├── theme.json            # Block editor settings and theme configuration
├── assets/
│   ├── css/             # Additional stylesheets
│   ├── fonts/           # Custom fonts
│   ├── images/          # Theme images and icons
│   └── js/              # JavaScript files
├── parts/               # Reusable template parts
│   ├── footer.html
│   └── header.html
├── patterns/            # Block patterns for quick layouts
└── templates/           # Full-page templates
    └── index.html
```

## Features

- Full Site Editing (FSE) support
- Block editor compatibility
- Responsive design
- Customizable theme settings via `theme.json`
- Reusable header and footer components
- Block pattern library for quick content creation

## Installation

1. Upload the `starter theme` folder to `/wp-content/themes/` in your WordPress installation
2. Log in to the WordPress admin panel
3. Navigate to **Appearance > Themes**
4. Activate the Starter Theme

## Configuration

Edit `theme.json` to customize:

- Color palette
- Typography settings
- Spacing and layout
- Custom CSS custom properties

## Requirements

- WordPress 6.0 or higher
- PHP 7.4 or higher

## Development

- Modify template files in the `templates/` directory
- Create reusable components in the `parts/` directory
- Add block patterns to the `patterns/` directory for quick layouts
- Update styles in `assets/css/` or main `style.css`
- Add custom functionality in `functions.php`

## License
