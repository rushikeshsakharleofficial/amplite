# **AMPLite WordPress Theme**

AMPLite is a lightweight, high-performance WordPress theme designed for speed, readability, and modern aesthetics. It includes built-in dark mode, a dynamic news ticker, full-screen search, and developer-friendly code highlighting — making it perfect for tech blogs, documentation sites, and minimal magazines.

> **Screenshot Placeholder:**
> *(Replace with actual screenshot later)*

---

## 🚀 **Features**

### ⚡ Lightweight & Fast

* Optimized for speed with minimal dependencies
* AMP-friendly design principles
* Clean and efficient CSS

### 🌗 Dark / Light Mode

* Built-in theme toggler (stores user preference in localStorage)
* **Desktop:** Hover-to-reveal toggle
* **Mobile:** Always visible button

### 📰 Dynamic News Ticker

* Lightweight sliding top ticker showing the latest posts
* Dismissible by user
* Smooth transitions & minimal JS

### 🔍 Full-Screen Search Overlay

* Triggered via header button
* Blurry background using `backdrop-filter`
* Fully responsive and keyboard friendly

### 💻 Developer-Focused Enhancements

* Beautifully styled `pre`/`code` blocks
* Automatic **Copy to Clipboard** button on every code block
* Optional “Linux Hardened” style typography for the logo & titles

### 📱 Fully Responsive Layout

* Stacked mobile header
* Touch-optimized navigation
* Adaptive typography and spacing

### 🎨 Flexible Layouts

* **Homepage:** Full width, fixed 10 posts per page
* **Single Posts:** Sidebar only if widgets exist
* **Pages:** Full-width clean canvas

### 🧩 Widget Areas

* **Header Right** – Ideal for social links or buttons
* **Sidebar** – Shown only on single posts
* **Footer Widgets** – Three widgetized columns

---

## 🛠️ **Installation**

### **Option 1: Git Clone (Recommended for Developers)**

Navigate to your theme directory:

```bash
cd /path/to/wordpress/wp-content/themes/
```

Clone the repository:

```bash
git clone https://github.com/yourusername/amplite.git
```

Then go to **WordPress Dashboard → Appearance → Themes** and activate **AMPLite**.

---

### **Option 2: Manual Upload**

1. Download the ZIP file
2. Go to **Dashboard → Appearance → Themes → Add New**
3. Click **Upload Theme**
4. Upload the ZIP → Install → Activate

---

## ⚙️ **Configuration**

### 1. **Site Logo & Title**

Go to:

> **Appearance → Customize → Site Identity**

* Upload a logo
* Or use Site Title (uses Linux Hardened styled font by default)

---

### 2. **Menus**

Go to:

> **Appearance → Menus**

* Create a menu
* Assign it to **Primary Menu**

---

### 3. **Sidebar (Optional)**

| Want Sidebar? | Action                              |
| ------------- | ----------------------------------- |
| **Yes**       | Add widgets to **Sidebar** area     |
| **No**        | Remove all widgets from **Sidebar** |

Sidebar shows only on single posts.

---

### 4. **Header & Footer Widgets**

* **Header Right** → For icons/buttons
* **Footer Columns 1, 2, 3** → For footer widgets

---

## 📂 **File Structure**

```plaintext
amplite/
├── style.css           # Main stylesheet (Tailwind-like utilities & custom styles)
├── functions.php       # Theme logic, widget registration, post limits
├── header.php          # Head, ticker, navigation, search overlay
├── footer.php          # Footer widgets & JS (dark mode, clipboard)
├── index.php           # Homepage (full width, 10 posts limit)
├── single.php          # Single posts (optional sidebar)
└── page.php            # Pages (full-width)
```

---

## 🐛 **Troubleshooting**

### **Search overlay looks broken?**

Clear browser cache — the overlay uses:

* `position: fixed`
* `backdrop-filter`
* custom z-index stack

### **Sidebar not appearing?**

Sidebar loads **only if widgets exist** in the Sidebar widget area.

---

## 📄 **License**

This theme is open-source and licensed under **GPLv2 or later**.

---