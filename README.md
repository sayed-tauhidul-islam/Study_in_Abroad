<p align="center">
    <img src="https://via.placeholder.com/600x200/4F46E5/FFFFFF?text=GlobalEduHub" alt="GlobalEduHub Logo" width="600">
</p>

<h1 align="center">🌍 GlobalEduHub</h1>
<h3 align="center">Your Gateway to Worldwide Education Connections</h3>

<p align="center">
<img src="https://img.shields.io/badge/Laravel-12.x-red" alt="Laravel Version">
<img src="https://img.shields.io/badge/PHP-8.2+-blue" alt="PHP Version">
<img src="https://img.shields.io/badge/TailwindCSS-4.0-cyan" alt="TailwindCSS">
<img src="https://img.shields.io/badge/AlpineJS-3.x-purple" alt="AlpineJS">
<img src="https://img.shields.io/badge/License-MIT-green" alt="License">
</p>

## About GlobalEduHub

**GlobalEduHub** is a comprehensive study abroad platform that connects students worldwide with top universities, scholarships, and educational opportunities. Built with Laravel 12.x and modern web technologies.

## ✨ Key Features

### 🎓 For Students

-   **University Discovery** - Browse 500+ partner universities from 100+ countries
-   **Smart Matching** - AI-powered recommendations based on your profile
-   **Scholarship Database** - Access thousands of scholarships with guidance
-   **Application Management** - Track multiple university applications
-   **Visa Assistance** - Complete visa processing support
-   **Student Reviews** - Real experiences from international students
-   **24/7 Chat Support** - Expert counselors available anytime

### 🏛️ Platform Features

-   **Dynamic Content** - Beautiful UI with smooth transitions and animations
-   **Responsive Design** - Perfect experience on all devices
-   **Real-time Search** - Instant search across universities, courses, and scholarships
-   **Multi-language Support** - Available in multiple languages
-   **Blog & Resources** - Educational content and guides
-   **Event Management** - Virtual fairs, webinars, and workshops
-   **Interactive Dashboards** - Comprehensive admin and student panels

## 🚀 Technology Stack

-   **Backend**: Laravel 12.x (PHP 8.2+)
-   **Frontend**: TailwindCSS 4.0, AlpineJS 3.x
-   **Database**: SQLite (Development), MySQL/PostgreSQL (Production)
-   **Animation**: Custom CSS animations with Alpine.js
-   **Icons**: Font Awesome, Heroicons
-   **Build Tool**: Vite

## 📦 Installation

### Prerequisites

-   PHP 8.2 or higher
-   Composer 2.x
-   Node.js 18+ & NPM
-   SQLite/MySQL/PostgreSQL

### Setup Steps

1. **Clone the repository**

```bash
git clone https://github.com/sayed-tauhidul-islam/Study_in_Abroad.git
cd Study_in_Abroad
```

2. **Install PHP dependencies**

```bash
composer install
```

3. **Install Node dependencies**

```bash
npm install
```

4. **Environment configuration**

```bash
cp .env.example .env
php artisan key:generate
```

5. **Update .env file**

```env
APP_NAME=GlobalEduHub
APP_URL=http://localhost:8000
DB_CONNECTION=sqlite
```

6. **Run migrations and seeders**

```bash
php artisan migrate --seed
```

7. **Build assets**

```bash
npm run build
```

8. **Start development server**

```bash
php artisan serve
```

Visit: http://localhost:8000

## 🎨 Dynamic Features

### Smooth Animations

-   **Fade In Effects** - Content elegantly appears on scroll
-   **Slide Animations** - Navigation and cards slide smoothly
-   **Hover Transformations** - Interactive elements with 3D effects
-   **Float Animations** - Subtle floating movements
-   **Pulse Effects** - Attention-grabbing highlights
-   **Glassmorphism** - Modern frosted glass effects

### Interactive Elements

-   **Mega Menus** - Feature-rich dropdown navigation
-   **Search Filters** - Real-time filtering and search
-   **Image Carousels** - Auto-playing slideshows with controls
-   **Accordion FAQs** - Smooth expand/collapse animations
-   **Modal Dialogs** - Elegant popups with backdrop blur
-   **Toast Notifications** - Non-intrusive success/error messages

## 📱 Responsive Design

GlobalEduHub is fully responsive and optimized for:

-   📱 Mobile devices (320px+)
-   📱 Tablets (768px+)
-   💻 Laptops (1024px+)
-   🖥️ Desktops (1440px+)
-   🖥️ Ultra-wide screens (1920px+)

## 🌍 Project Structure

```
GlobalEduHub/
├── app/
│   ├── Http/Controllers/    # Request handlers
│   ├── Models/              # Database models
│   └── View/Composers/      # View composers
├── resources/
│   ├── views/
│   │   ├── layouts/         # Master layouts
│   │   ├── home.blade.php   # Homepage
│   │   ├── countries/       # Country pages
│   │   ├── universities/    # University listings
│   │   ├── courses/         # Course catalog
│   │   └── ...
│   ├── css/                 # Stylesheets
│   └── js/                  # JavaScript files
├── routes/
│   └── web.php              # Web routes
├── database/
│   ├── migrations/          # Database migrations
│   └── seeders/             # Database seeders
└── public/                  # Public assets
```

## 🔧 Configuration

### Database

Update `.env` file for your database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=globaleduhub
DB_USERNAME=root
DB_PASSWORD=
```

### Mail Configuration

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-password
```

## 📊 Statistics

-   🎓 **500+** Partner Universities
-   🌍 **100+** Countries Covered
-   👨‍🎓 **50,000+** Students Helped
-   💰 **$50M+** Scholarships Facilitated
-   ⭐ **95%** Success Rate
-   🏆 **15+** Years of Experience

## 🤝 Contributing

We welcome contributions! Please follow these steps:

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👥 Team

Created with ❤️ by the GlobalEduHub Team

-   **Lead Developer**: Sayed Tauhidul Islam
-   **GitHub**: [@sayed-tauhidul-islam](https://github.com/sayed-tauhidul-islam)

## 📞 Support

-   📧 Email: info@globaleduhub.com
-   📱 Phone: +880 1306 753144
-   🌐 Website: [www.globaleduhub.com](http://www.globaleduhub.com)
-   💬 Live Chat: Available 24/7 on the platform

## 🙏 Acknowledgments

-   Laravel Framework
-   TailwindCSS Team
-   Alpine.js Community
-   All our partner universities
-   Our amazing students worldwide

---

<p align="center">Made with ❤️ for students worldwide | GlobalEduHub © 2025</p>
