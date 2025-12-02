AMPLite WordPress Theme

AMPLite is a lightweight, high-performance WordPress theme designed for speed, readability, and modern aesthetics. It features a built-in dark mode, a dynamic news ticker, and developer-friendly code highlighting, making it perfect for tech blogs, documentation sites, and minimal magazines.

<!-- Replace with actual screenshot later -->

🚀 Features

⚡ Lightweight & Fast: Optimized for speed with minimal dependencies, following AMP-friendly design principles.

🌗 Dark/Light Mode: Built-in theme toggler that saves user preference.

Desktop: Hover-to-reveal toggle on the side.

Mobile: Always visible, touch-friendly toggle.

📰 Dynamic News Ticker: A sleek, sliding top bar displaying your latest posts. Can be dismissed by the user.

🔍 Full-Screen Search: An immersive, blurry-background search overlay accessed via a dedicated header button.

💻 Developer Focused:

Code Highlighting: Beautifully styled pre/code blocks (Dark Slate theme).

Copy to Clipboard: Automatic copy button added to all code blocks via JavaScript.

Linux-Style Typography: Optional "Linux Hardened" font style for the site title.

📱 Fully Responsive:

Stacked header layout on mobile.

Touch-optimized navigation and buttons.

🎨 Flexible Layouts:

Homepage: Full-width layout, strictly limited to 10 posts per page.

Single Posts: Optional Sidebar (only appears if widgets are added).

Pages: Full-width canvas for static content.

🧩 Widget Areas:

Header Right: Perfect for social icons or extra links.

Sidebar: Displayed only on single posts (smart conditional loading).

Footer: 3-column widgetized footer area.

🛠️ Installation

Option 1: Git Clone (Recommended for Developers)

Navigate to your WordPress themes directory:

cd /path/to/wordpress/wp-content/themes/


Clone the repository:

git clone [https://github.com/yourusername/amplite.git](https://github.com/yourusername/amplite.git)


Log in to your WordPress Dashboard, go to Appearance > Themes, and activate AMPLite.

Option 2: Manual Upload

Download the repository as a ZIP file.

Go to your WordPress Dashboard > Appearance > Themes > Add New > Upload Theme.

Upload the ZIP file and click Install Now.

Activate the theme.

⚙️ Configuration

1. Site Logo & Title

Go to Appearance > Customize > Site Identity.

Upload a logo (flexible size supported) or use the Site Title.

Tip: The Site Title uses a custom "Linux Hardened" font style by default.

2. Menus

Go to Appearance > Menus.

Create a new menu and assign it to the Primary Menu location.

3. Sidebar (Optional)

To Show Sidebar: Go to Appearance > Widgets and add widgets to the Sidebar area. It will automatically appear on Single Posts.

To Hide Sidebar: Remove all widgets from the Sidebar area. Single posts will automatically expand to full width.

4. Header & Footer Widgets

Header Right: Add widgets here to display them to the right of the navigation bar.

Footer Columns: Add widgets to Footer Column 1, 2, or 3 to populate the footer area.

📂 File Structure

amplite/
├── style.css           # Main stylesheet (Tailwind-like utilities & custom styles)
├── functions.php       # Theme logic, widget registration, post limits
├── header.php          # HTML head, Ticker, Navigation, Search Overlay
├── footer.php          # Footer widgets, JS scripts (Dark mode, Copy to Clipboard)
├── index.php           # Homepage template (Full width, 10 posts limit)
├── single.php          # Single post template (With optional sidebar)
└── page.php            # Static page template (Full width)


🐛 Troubleshooting

Search Overlay looks broken?
Ensure your browser cache is cleared. The overlay uses specific fixed positioning and backdrop-filter styles defined in style.css.

Sidebar not showing?
The sidebar is strictly conditional. It only renders if widgets are actually added to the "Sidebar" widget area in the backend.

📄 License

This theme is open-source and licensed under the [GPLv2 or later](
