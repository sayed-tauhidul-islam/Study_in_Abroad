# 📋 Project Defaults Summary - Study Abroad Platform

**Generated on:** November 8, 2025  
**Project:** Study Abroad Application System  
**Framework:** Laravel 12.x

---

## 🌐 Environment Configuration (.env)

### **Application Defaults**

| Setting               | Default Value      | Description                                        |
| --------------------- | ------------------ | -------------------------------------------------- |
| `APP_NAME`            | `Laravel`          | Application name (should be changed to your brand) |
| `APP_ENV`             | `local`            | Environment (local/production)                     |
| `APP_DEBUG`           | `true`             | Debug mode enabled                                 |
| `APP_URL`             | `http://localhost` | Base application URL                               |
| `APP_LOCALE`          | `en`               | Default language                                   |
| `APP_FALLBACK_LOCALE` | `en`               | Fallback language                                  |
| `APP_FAKER_LOCALE`    | `en_US`            | Faker data locale                                  |

### **Database Defaults**

| Setting         | Default Value  | Description            |
| --------------- | -------------- | ---------------------- |
| `DB_CONNECTION` | `mysql`        | Active database driver |
| `DB_HOST`       | `127.0.0.1`    | MySQL host             |
| `DB_PORT`       | `3306`         | MySQL port             |
| `DB_DATABASE`   | `study_abroad` | Database name          |
| `DB_USERNAME`   | `root`         | Database username      |
| `DB_PASSWORD`   | _(empty)_      | No password            |

### **Session Defaults**

| Setting            | Default Value | Description                 |
| ------------------ | ------------- | --------------------------- |
| `SESSION_DRIVER`   | `file`        | Session storage driver      |
| `SESSION_LIFETIME` | `120`         | Session lifetime (minutes)  |
| `SESSION_ENCRYPT`  | `false`       | Session encryption disabled |

### **Queue & Cache Defaults**

| Setting            | Default Value | Description                  |
| ------------------ | ------------- | ---------------------------- |
| `QUEUE_CONNECTION` | `sync`        | Synchronous queue processing |
| `CACHE_STORE`      | `file`        | File-based caching           |
| `FILESYSTEM_DISK`  | `local`       | Local file storage           |

### **Mail Defaults**

| Setting             | Default Value       | Description                   |
| ------------------- | ------------------- | ----------------------------- |
| `MAIL_MAILER`       | `log`               | Log emails instead of sending |
| `MAIL_FROM_ADDRESS` | `hello@example.com` | Default sender email          |
| `MAIL_FROM_NAME`    | `${APP_NAME}`       | Default sender name           |

### **AWS Defaults**

| Setting              | Default Value | Description |
| -------------------- | ------------- | ----------- |
| `AWS_DEFAULT_REGION` | `us-east-1`   | AWS region  |

---

## ⚙️ Configuration Defaults (config/\*.php)

### **config/app.php**

```php
'name' => 'GlobalEduHub'          // Application name
'env' => 'production'              // Default environment
'debug' => false                   // Debug mode off
'url' => 'http://localhost'        // Base URL
'timezone' => 'UTC'                // Application timezone
'locale' => 'en'                   // Default locale
'fallback_locale' => 'en'          // Fallback locale
'faker_locale' => 'en_US'          // Faker locale
'cipher' => 'AES-256-CBC'          // Encryption cipher
```

### **config/database.php**

```php
'default' => 'sqlite'              // Default connection (currently mysql in .env)
'mysql' => [
    'host' => '127.0.0.1'
    'port' => '3306'
    'database' => 'laravel'
    'username' => 'root'
    'password' => ''
    'charset' => 'utf8mb4'
    'collation' => 'utf8mb4_unicode_ci'
]
```

### **config/auth.php**

```php
'defaults' => [
    'guard' => 'web'               // Default auth guard
    'passwords' => 'users'         // Default password reset
]
'password_timeout' => 10800        // 3 hours
```

### **config/cache.php**

```php
'default' => 'database'            // Default cache store
```

### **config/queue.php**

```php
'default' => 'database'            // Default queue connection
DB_QUEUE => 'default'              // Database queue name
BEANSTALKD_QUEUE => 'default'      // Beanstalkd queue name
SQS_QUEUE => 'default'             // SQS queue name
REDIS_QUEUE => 'default'           // Redis queue name
```

### **config/mail.php**

```php
'default' => 'log'                 // Default mailer
```

### **config/logging.php**

```php
'default' => 'stack'               // Default log channel
```

### **config/filesystems.php**

```php
'default' => 'local'               // Default filesystem disk
```

### **config/session.php**

```php
'driver' => 'database'             // Default session driver
'lifetime' => 120                  // Session lifetime (minutes)
'expire_on_close' => false         // Keep session after browser close
'lottery' => [2, 100]              // Garbage collection odds
'cookie' => env('APP_NAME').'_session'
'path' => '/'                      // Cookie path
'domain' => null                   // Cookie domain
'secure' => false                  // HTTPS only
'http_only' => true                // HTTP only
'same_site' => 'lax'               // CSRF protection
```

---

## 🗄️ Database Migration Defaults

### **Countries Table**

```php
'universities_count' => 0          // Default university count
```

### **Courses Table**

```php
'language' => 'English'            // Default course language
```

### **Reviews Table**

```php
'rating' => 5                      // Default rating
'consent' => true                  // Consent given
'is_approved' => false             // Requires approval
```

### **Degrees Table**

```php
'is_active' => true                // Active by default
```

### **Hero Sections Table**

```php
'highlight_color' => '#10b981'     // Green highlight
'cta_text' => 'Apply Now'
'cta_link' => '/applications/create'
'search_placeholder' => 'Search universities...'
'background_color' => '#eff6ff'    // Light blue
'is_active' => true
```

### **Features Table**

```php
'icon' => '🎓'                     // Default icon
'border_color' => '#3b82f6'        // Blue border
'text_color' => '#1e40af'          // Dark blue text
'order' => 0
'is_active' => true
```

### **Statistics Table**

```php
'icon' => '📊'                     // Default icon
'border_color' => '#3b82f6'        // Blue border
'order' => 0
'is_active' => true
```

### **Testimonials Table**

```php
'rating' => 5                      // 5-star rating
'order' => 0
'is_active' => true
```

### **FAQs Table**

```php
'icon' => '❓'                     // Question mark icon
'bg_color' => '#eff6ff'            // Light blue background
'border_color' => '#3b82f6'        // Blue border
'order' => 0
'is_active' => true
```

### **Social Links Table**

```php
'bg_color' => '#3b82f6'            // Blue background
'hover_color' => '#2563eb'         // Darker blue on hover
'order' => 0
'is_active' => true
```

### **Site Settings Table**

```php
'type' => 'text'                   // text, color, number, boolean, json
'group' => 'general'               // colors, contact, seo, general
```

### **Hero Slideshow Images Table**

```php
'display_order' => 0
'is_active' => true
```

### **Media Gallery Table**

```php
'category' => 'general'            // hero, university, testimonial, success_story, destination, general
'is_external' => true              // External URL by default
'display_order' => 0
```

### **Success Stories Table**

```php
'rating' => 5.0                    // 5-star rating
'gradient_from' => 'blue-400'
'gradient_to' => 'blue-600'
'display_order' => 0
'is_active' => true
```

### **University Rankings Table**

```php
'ranking_org' => 'QS World'        // Default ranking organization
'year' => 2025                     // Current year
'badge_color' => 'blue-500'
'border_color' => 'blue-500'
'is_featured' => false
'display_order' => 0
```

### **Study Programs Table**

```php
'icon' => '🎓'                     // Graduation cap
'gradient_from' => 'blue-500'
'gradient_to' => 'blue-700'
'border_color' => 'blue-300'
'display_order' => 0
'is_active' => true
```

### **Destinations Table**

```php
'total_universities' => 0
'gradient_from' => 'blue-400'
'gradient_to' => 'blue-600'
'badge_color' => 'blue-100'
'badge_text_color' => 'blue-600'
'display_order' => 0
'is_active' => true
```

### **Why Choose Us Features Table**

```php
'icon' => '🎯'                     // Target icon
'gradient_from' => 'blue-400'
'gradient_to' => 'purple-600'
'display_order' => 0
'is_active' => true
```

### **Student Resources Table**

```php
'icon' => '📖'                     // Book icon
'border_color' => 'blue-500'
'button_color' => 'green-700'
'text_color' => 'blue-700'
'display_order' => 0
'is_active' => true
```

### **Events Table**

```php
'event_type' => 'webinar'          // webinar, workshop, fair, info_session
'is_featured' => false
'is_active' => true
```

### **Page Sections Table**

```php
'is_active' => true
'display_order' => 0
```

### **User Preferences Table**

```php
'scholarship_required' => false
```

### **Recommendations Table**

```php
'match_score' => 0                 // 0-100 matching score
```

### **Suggestions Table**

```php
'is_read' => false                 // Unread by default
```

---

## 📦 Model Defaults

### **Application Model**

**Fillable Fields (17):**

-   name, email, phone, country_id, message
-   date_of_birth, gender, address, passport_number
-   education_level, english_proficiency, test_score
-   source_country, destination_country
-   intended_program, intake_year, intake_month

**Casts:**

```php
'date_of_birth' => 'date'
```

### **User Model**

**Fillable Fields:**

-   name, email, password

**Hidden Fields:**

-   password, remember_token

**Casts:**

```php
'email_verified_at' => 'datetime'
'password' => 'hashed'
```

### **Review Model**

**Fillable Fields:**

-   name, email, phone, university_id, course_id
-   rating, review_text, reviewer_photo, date
-   location, consent, is_approved

**Casts:**

```php
'date' => 'date'
'consent' => 'boolean'
'is_approved' => 'boolean'
```

### **Country Model**

**Fillable Fields (27):**

-   name, country_code, capital, continent, description
-   flag_url, image_url, language, currency, visa_info
-   cost_of_living, popular_universities, top_programs
-   scholarship_availability, work_opportunities
-   universities_count

**Casts:**

```php
'universities_count' => 'integer'
```

### **Course Model**

**Fillable Fields:**

-   name, description, university_id, degree_id
-   duration, tuition_fee, language, intake
-   requirements, career_prospects

**Casts:**

```php
'tuition_fee' => 'decimal:2'
```

---

## 🎨 Site Settings Defaults (Seeders)

### **SEO Defaults**

```php
'meta_title' => 'Study Abroad - Find Your Dream University'
'meta_description' => 'Discover top universities worldwide. Get expert guidance for studying abroad.'
'meta_keywords' => 'study abroad, universities, scholarships, international education'
```

### **Branding Defaults**

```php
'site_name' => 'GlobalEduHub'      // Default brand name
```

---

## 🏛️ Seeder Defaults

### **University Seeder**

**Default University Names:**

-   National University
-   State University
-   Technical University
-   International University
-   Institute of Technology

### **University Images Seeder**

**Default Images:** Array of 15 Pexels university/campus images used for universities without specific images.

### **Country Seeder**

-   **Total Countries:** 80
-   **Featured Countries:** 6 (US, GB, CA, AU, DE, FR)
-   **Image Source:** Pexels CDN URLs

---

## 🔧 Frontend Defaults

### **Axios Configuration (bootstrap.js)**

```javascript
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
```

### **TailwindCSS Defaults (welcome.blade.php)**

```css
--default-transition-duration: .15s
--default-transition-timing-function: cubic-bezier(.4,0,.2,1)
--default-font-family: var(--font-sans)
--default-mono-font-family: var(--font-mono)
```

---

## 🌍 Popular Study Destinations (Home Controller)

**Featured Countries (6):**

1. 🇺🇸 United States (US)
2. 🇬🇧 United Kingdom (GB)
3. 🇨🇦 Canada (CA)
4. 🇦🇺 Australia (AU)
5. 🇩🇪 Germany (DE)
6. 🇫🇷 France (FR)

**Display:** 3 columns grid layout

---

## 🎓 Study Programs Section

**Default Programs (6):**

1. **Undergraduate** - Blue-Cyan gradient
2. **Graduate** - Emerald-Green gradient
3. **Professional** - Purple-Fuchsia gradient
4. **Online & Hybrid** - Orange-Red gradient
5. **Creative Arts** - Pink-Rose gradient
6. **STEM** - Teal-Cyan gradient

**Layout:** 3-column responsive grid

---

## 📝 Application Form Defaults

### **Country Codes (Phone Selector - 50+ countries)**

```javascript
BD: +880 (Bangladesh)
US: +1 (United States)
GB: +44 (United Kingdom)
CA: +1 (Canada)
AU: +61 (Australia)
// ... and 45+ more countries
```

### **Validation Defaults**

```php
'email' => 'required|email:rfc,dns|max:255'
'phone' => 'required|regex:/^[0-9]{6,15}$/'
'date_of_birth' => 'required|date|before:-16 years'
'destination_country' => 'required|exists:countries,id|different:source_country'
```

### **Form Field Defaults**

-   **Gender Options:** Male, Female, Other
-   **Education Levels:** High School, Bachelor's, Master's, PhD
-   **English Tests:** IELTS, TOEFL, PTE, Duolingo
-   **Intake Years:** 2025, 2026, 2027
-   **Intake Months:** January - December
-   **Programs:** Undergraduate, Graduate, Professional, Certificate, Diploma

---

## 🤖 ChatBot Defaults

### **Response Types:**

-   University information
-   Country information
-   Admission process
-   Scholarship details
-   Visa requirements
-   Cost of living
-   Application process
-   **Default:** Comprehensive menu with all options

---

## 🎯 Recommendations for Production

### **⚠️ Must Change:**

1. **APP_NAME** → Change from "Laravel" to your brand name
2. **APP_ENV** → Set to `production`
3. **APP_DEBUG** → Set to `false`
4. **APP_URL** → Set to your domain
5. **DB_PASSWORD** → Add a strong password
6. **MAIL_MAILER** → Change from `log` to `smtp` or other service
7. **MAIL_FROM_ADDRESS** → Change from `hello@example.com`
8. **AWS credentials** → Add if using AWS services

### **✅ Already Optimized:**

-   Session driver (file) - good for small-medium apps
-   Cache driver (file) - good for development
-   Queue connection (sync) - change to `database` or `redis` for production
-   Database (mysql) - properly configured

### **🔐 Security Defaults to Review:**

-   SESSION_ENCRYPT = false → Consider enabling for sensitive data
-   SESSION_LIFETIME = 120 → Adjust based on security needs
-   Password timeout = 3 hours → May need adjustment

---

## 📊 Summary Statistics

| Category              | Count | Status                            |
| --------------------- | ----- | --------------------------------- |
| Environment Variables | 25+   | ⚠️ Some need production updates   |
| Config Files          | 10    | ✅ Well configured                |
| Database Tables       | 30+   | ✅ Comprehensive                  |
| Models                | 25+   | ✅ All with proper fillable/casts |
| Seeders               | 10+   | ✅ Ready to populate              |
| Featured Countries    | 6     | ✅ With images                    |
| Total Countries       | 80    | ✅ Seeded                         |
| Study Programs        | 6     | ✅ Animated design                |
| Application Fields    | 17    | ✅ Validated                      |

---

## 📝 Notes

-   All color defaults use Tailwind CSS color scheme
-   All icons use emoji by default (easily replaceable with SVG/Font icons)
-   Database uses MySQL with utf8mb4 character set
-   Sessions stored in files (consider database/redis for production)
-   Email logging enabled (change for production)
-   All boolean flags default to appropriate states
-   Display orders default to 0 (can be reordered)
-   Most features default to active (is_active = true)

---

**Last Updated:** November 8, 2025  
**Generated By:** GitHub Copilot  
**Project Version:** 1.0
