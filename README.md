# MedicalBlock 🏥

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.0-red.svg" alt="Laravel Version">
  <img src="https://img.shields.io/badge/PHP-8.2-blue.svg" alt="PHP Version">
  <img src="https://img.shields.io/badge/License-MIT-green.svg" alt="License">
</p>

## 🌟 About MedicalBlock

**MedicalBlock** is an innovative and powerful medical content aggregation platform that revolutionizes how healthcare information is discovered, curated, and presented. This cutting-edge Laravel application serves as a comprehensive medical blog system that automatically fetches high-quality medical articles from trusted sources across the internet, making it an invaluable resource for healthcare professionals, patients, researchers, and anyone seeking reliable medical information.

### Why MedicalBlock is Incredibly Cool and Useful

MedicalBlock stands out as an exceptional solution for clients who need access to curated, high-quality medical content without the manual effort of scouring the internet. The platform intelligently aggregates articles from over 40+ prestigious medical and health news sources, including WHO, Mayo Clinic, WebMD, Healthline, Medical News Today, and many more renowned institutions. This automated content curation saves countless hours while ensuring that users always have access to the latest medical research, health news, and wellness information.

The platform is designed with user experience at its core, featuring powerful search capabilities that allow users to quickly find articles on specific medical topics, conditions, treatments, or health concerns. Whether you're a healthcare provider looking for the latest research, a patient seeking information about a specific condition, or a wellness enthusiast exploring health topics, MedicalBlock provides an intuitive and efficient way to discover relevant content.

What makes MedicalBlock particularly impressive is its ability to fetch real, comprehensive article content directly from original sources on the internet. The system doesn't just collect headlines and snippets—it intelligently extracts full article content, ensuring that users have access to complete, detailed information. This "read more" functionality is seamlessly integrated, allowing users to dive deep into articles without leaving the platform.

The platform's architecture is built for scalability and reliability, using Laravel's robust framework to handle thousands of articles efficiently. With features like topic categorization, author attribution, read time estimation, and publication date tracking, MedicalBlock provides a professional-grade content management system that rivals major medical news websites.

## 🚀 Key Features

### 🔍 Advanced Search Functionality

MedicalBlock features a sophisticated search system that allows users to search through article titles and topics in real-time. The search functionality is powered by AJAX, providing instant results without page reloads, creating a smooth and responsive user experience. Users can filter articles by specific medical topics, search for keywords related to conditions, treatments, or health topics, and easily navigate through search results with pagination support.

### 📖 Read More Capability

Each article in MedicalBlock includes a "read more" feature that allows users to access the full content of articles. The platform intelligently extracts and displays complete article content from original sources, ensuring users have access to comprehensive information. Articles are properly formatted with HTML, preserving the structure and readability of the original content while maintaining a consistent presentation across the platform.

### 📚 Topic-Based Organization

Articles are automatically categorized into relevant medical topics, making it easy for users to browse content by subject matter. The platform includes a dedicated topics page that displays all available categories with article counts, similar to major health websites like Healthline. This organization makes it simple to discover related content and explore specific areas of medical interest.

### 👨‍⚕️ Author Attribution

MedicalBlock supports author attribution, allowing articles to be associated with specific doctors or medical professionals. The platform includes an author page feature that displays all articles written by a particular author, creating a comprehensive author profile system that helps users follow content from trusted medical professionals.

### 🎯 Intelligent Content Aggregation

The platform uses multiple methods to gather high-quality medical content:

1. **RSS Feed Integration**: Aggregates articles from 40+ trusted medical RSS feeds
2. **NewsAPI Integration**: Fetches articles from NewsAPI when configured
3. **Web Scraping**: Intelligently extracts content from medical websites
4. **Content Enhancement**: Automatically enhances short articles with full content from original sources

## 📋 Console Commands

MedicalBlock includes a comprehensive set of console commands designed to manage and enhance the article database:

### `blog:fetch-articles`

The primary command for fetching medical articles from the internet. This powerful command aggregates content from multiple sources and stores them in the database.

**Usage:**
```bash
php artisan blog:fetch-articles
php artisan blog:fetch-articles --limit=500
```

**Options:**
- `--limit`: Maximum number of articles to fetch (default: 1100)

**Description:**
This command is the heart of MedicalBlock's content aggregation system. It intelligently fetches articles from:
- **RSS Feeds**: Aggregates from 40+ medical RSS feeds including WHO, BBC Health, WebMD, NPR Health, Medical Xpress, EurekAlert, News Medical, Healio, MedPage Today, STAT News, Health.com, Verywell Health, Everyday Health, Prevention, Men's Health, Women's Health, Runner's World, Yoga Journal, MindBodyGreen, Psychology Today, Mayo Clinic, NIH, Reuters Health, NBC Health, CBS Health, Fox Health, HuffPost Health, Time Health, USA Today Health, LA Times Health, Washington Post Health, Nature Medicine, BMJ, NEJM, The Lancet, and many more.
- **NewsAPI**: Fetches articles from NewsAPI when an API key is configured
- **Medical Websites**: Scrapes content from trusted medical news websites
- **Local Article Database**: Includes a comprehensive local database of medical articles

The command automatically categorizes articles, generates excerpts, calculates read times, assigns appropriate images, and ensures all articles are properly formatted and stored in the database.

### `blog:fetch-real-content`

Fetches real, comprehensive article content from internet sources based on blog post titles. This command enhances articles that may have incomplete content by searching for and extracting full content from original sources.

**Usage:**
```bash
php artisan blog:fetch-real-content
php artisan blog:fetch-real-content --limit=50 --min-length=1000
php artisan blog:fetch-real-content --slug=article-slug --url=https://example.com/article
```

**Options:**
- `--limit`: Maximum number of articles to process (default: 50)
- `--min-length`: Minimum content length to accept (default: 1000)
- `--replace`: Replace entire content instead of appending
- `--slug`: Process specific article by slug
- `--url`: Direct URL to fetch content from (use with --slug)

**Description:**
This command searches the internet for original article sources using intelligent search algorithms. It can search on specific medical websites like WebMD, Healthline, Medical News Today, Mayo Clinic, and others, or perform general web searches. Once a source is found, it extracts the full article content using advanced HTML parsing techniques, filtering out advertisements, author bios, and other non-content elements.

### `blog:enhance-from-sources`

Enhances blog posts by fetching full article content from original sources on the internet. This command identifies articles with "Read more" links or short content and fetches the complete content from the source URLs.

**Usage:**
```bash
php artisan blog:enhance-from-sources
php artisan blog:enhance-from-sources --limit=50 --min-length=500 --replace
```

**Options:**
- `--limit`: Maximum number of articles to enhance (default: 50)
- `--min-length`: Minimum content length to trigger fetching (default: 500)
- `--replace`: Replace entire content instead of appending

**Description:**
This command processes articles that have source URLs embedded in their content (typically through "Read more" links) and fetches the full article content from those sources. It uses sophisticated HTML parsing to extract only the relevant article content, excluding advertisements, navigation elements, and other page components. The command can either append the fetched content to existing content or replace it entirely, depending on the options specified.

### `blog:expand-short`

Expands all blog posts with content shorter than the specified minimum length by generating additional content or fetching from sources.

**Usage:**
```bash
php artisan blog:expand-short
php artisan blog:expand-short --min-length=500
```

**Options:**
- `--min-length`: Minimum content length in characters (default: 500)

**Description:**
This command identifies articles that are too short and expands them to meet the minimum length requirement. It ensures that all articles in the database have substantial content, improving the quality and value of the content library.

### `blog:enhance`

Enhances all blog posts with additional paragraphs and ensures HTML is properly rendered. This command improves the formatting and completeness of articles in the database.

**Usage:**
```bash
php artisan blog:enhance
```

**Description:**
A general enhancement command that processes all blog posts to ensure they have proper HTML formatting, adequate content length, and are properly structured for display on the platform.

### `blog:extract-source-urls`

Extracts and saves source URLs from blog post content for all posts. This command identifies source URLs embedded in article content and saves them to the `source_url` field in the database.

**Usage:**
```bash
php artisan blog:extract-source-urls
php artisan blog:extract-source-urls --all
```

**Options:**
- `--all`: Process all posts, including those with existing source_url

**Description:**
This command scans article content for source URLs (typically found in "Read more" links) and extracts them to the dedicated `source_url` field. This makes it easier to track original sources and enables other commands to use these URLs for content enhancement.

## 🎮 BlogController Methods

The `BlogController` provides a comprehensive API for accessing and displaying medical articles:

### `index(Request $request)`

The main method for displaying the article listing page with search and filtering capabilities.

**Features:**
- Displays paginated list of published articles (12 per page)
- **Search Functionality**: Allows users to search articles by title and topic using the `q` query parameter
- **Topic Filtering**: Filters articles by specific medical topics using the `topic` query parameter
- **AJAX Support**: Returns JSON responses for AJAX requests, enabling dynamic content updates without page reloads
- **Query String Preservation**: Maintains search and filter parameters in pagination links
- **Topic List**: Displays the top 5 unique topics for quick filtering
- **Search Term Highlighting**: Supports highlighting of search terms in results

**Route:** `GET /`

**Query Parameters:**
- `q`: Search query string
- `topic`: Filter by specific topic
- `page`: Page number for pagination

### `topics()`

Displays a comprehensive page showing all available medical topics with article counts.

**Features:**
- Lists all unique topics from published articles
- Shows article count for each topic
- Alphabetically sorted for easy navigation
- Similar to major health websites' topic/wellness pages

**Route:** `GET /topics`

### `show(BlogPost $post)`

Displays a single article in full detail with "read more" functionality.

**Features:**
- Shows complete article content
- Displays article metadata (author, publication date, read time, topic)
- Includes article image
- Shows associated doctor information if available
- Validates that article is published before displaying
- Uses slug-based routing for SEO-friendly URLs

**Route:** `GET /{post:slug}`

### `author(Doctor $doctor)`

Displays all articles authored by a specific doctor, creating an author profile page.

**Features:**
- Shows all published articles by a specific doctor
- Paginated display (12 articles per page)
- Ordered by publication date (newest first)
- Displays doctor information
- Similar to author pages on major medical websites

**Route:** `GET /authors/{doctor}`

## 📡 RSS Feed Sources

MedicalBlock aggregates content from an extensive list of trusted medical and health RSS feeds. The `fetchFromRSSFeeds` method connects to over 40 prestigious sources including:

### International Health Organizations
- **WHO (World Health Organization)**: `https://www.who.int/rss-feeds/news-english.xml`
- **NIH (National Institutes of Health)**: `https://www.nih.gov/news-events/news-releases/rss`
- **EurekAlert Health**: `https://www.eurekalert.org/rss/health_medicine.xml`

### Major Medical News Outlets
- **BBC Health**: `https://www.bbc.com/news/health/rss.xml`
- **CNN Health**: `https://rss.cnn.com/rss/edition.rss`
- **Reuters Health**: `https://www.reuters.com/rssFeed/health`
- **NBC Health**: `https://www.nbcnews.com/health/rss.xml`
- **CBS Health**: `https://www.cbsnews.com/latest/rss/health`
- **Fox Health**: `https://www.foxnews.com/health/rss.xml`
- **Guardian Health**: `https://www.theguardian.com/society/health/rss`
- **Washington Post Health**: `https://www.washingtonpost.com/rss/health`
- **LA Times Health**: `https://www.latimes.com/health/rss2.0.xml`
- **USA Today Health**: `https://www.usatoday.com/health/rss/`
- **Time Health**: `https://www.time.com/health/feed/`
- **HuffPost Health**: `https://www.huffpost.com/section/healthy-living/feed`

### Medical Research & Science
- **ScienceDaily Health**: `https://www.sciencedaily.com/rss/health_medicine.xml`
- **Medical Xpress**: `https://www.medicalxpress.com/rss-feed/medicine-health/`
- **Nature Medicine**: `https://www.nature.com/subjects/medicine/rss.xml`
- **BMJ (British Medical Journal)**: `https://www.bmj.com/rss`
- **NEJM (New England Journal of Medicine)**: `https://www.nejm.org/action/showFeed?type=etoc&feed=rss&jc=nejm`
- **The Lancet**: `https://www.thelancet.com/rssfeed/latest.xml`

### Popular Health Websites
- **WebMD**: `https://feeds.feedburner.com/WebMDHealth` and `https://www.webmd.com/rss/rss.aspx?RSSSource=RSS_PUBLIC_MAIN`
- **Mayo Clinic**: `https://www.mayoclinic.org/rss/all-mayo-clinic-news`
- **Health.com**: `https://www.health.com/rss/all.xml`
- **Verywell Health**: `https://www.verywellhealth.com/rss`
- **Everyday Health**: `https://www.everydayhealth.com/rss/`
- **Prevention**: `https://www.prevention.com/rss`
- **Men's Health**: `https://www.menshealth.com/rss/all.xml`
- **Women's Health**: `https://www.womenshealthmag.com/rss/all.xml`

### Specialized Health Content
- **NPR Health**: `https://www.npr.org/rss/rss.php?id=1128` and `https://feeds.npr.org/1007/rss.xml`
- **News Medical**: `https://www.news-medical.net/rss/health.aspx`
- **Healio**: `https://www.healio.com/rss`
- **MedPage Today**: `https://www.medpagetoday.com/rss`
- **STAT News**: `https://www.statnews.com/feed/`
- **Runner's World**: `https://www.runnersworld.com/rss/all.xml`
- **Yoga Journal**: `https://www.yogajournal.com/rss`
- **MindBodyGreen**: `https://www.mindbodygreen.com/rss`
- **Psychology Today**: `https://www.psychologytoday.com/us/rss`
- **Euronews Health**: `https://feeds.feedburner.com/euronews/en/health`

This comprehensive list ensures that MedicalBlock has access to the latest medical research, health news, wellness information, and clinical updates from the most trusted sources in the healthcare industry.

## 🛠️ Laravel Technologies Used

MedicalBlock is built using the latest Laravel framework and leverages a wide array of Laravel's powerful features and components:

### Core Framework
- **Laravel 12.0**: The latest version of the Laravel framework, providing cutting-edge features and performance improvements
- **PHP 8.2**: Modern PHP version with enhanced performance and new language features

### Eloquent ORM
- **Models**: `BlogPost`, `Doctor`, and `User` models with relationships
- **Relationships**: 
  - `BlogPost` belongs to `Doctor`
  - `Doctor` has many `BlogPost`
- **Mass Assignment Protection**: Using `$fillable` arrays for secure data assignment
- **Accessors & Mutators**: Custom attribute handling for image URLs and route keys
- **Model Events**: Automatic slug generation on model creation using `boot()` method
- **Route Model Binding**: Slug-based routing for SEO-friendly URLs

### Console Commands
- **Artisan Commands**: Custom console commands for content management
- **Command Signatures**: Flexible command signatures with options and arguments
- **Progress Bars**: Visual progress indicators for long-running operations
- **Output Formatting**: Colored output, info messages, warnings, and error handling
- **Command Descriptions**: Comprehensive command documentation

### HTTP Client
- **Guzzle HTTP Client**: Laravel's HTTP facade for making HTTP requests
- **RSS Feed Parsing**: XML parsing using PHP's SimpleXML
- **Web Scraping**: HTML parsing using DOMDocument and DOMXPath
- **Rate Limiting**: Built-in rate limiting between requests
- **Timeout Handling**: Configurable timeouts for external requests
- **User-Agent Headers**: Custom user agents for web scraping

### Routing
- **Web Routes**: RESTful routing for blog functionality
- **Route Model Binding**: Automatic model resolution using slugs
- **Named Routes**: Route naming for easy URL generation
- **Query String Preservation**: Maintaining query parameters in pagination

### Blade Templating
- **View Composers**: Data sharing between views
- **Component System**: Reusable Blade components
- **Layouts**: Master layout templates
- **Partials**: Reusable view partials for articles
- **AJAX Rendering**: Dynamic HTML generation for AJAX requests

### Database
- **Migrations**: Database schema management
- **SQLite**: Lightweight database for development
- **Query Builder**: Advanced query building with filters and search
- **Pagination**: Built-in pagination with query string preservation
- **Eager Loading**: Optimized queries using `with()` for relationships

### Request Handling
- **Form Requests**: Request validation and authorization
- **Query Parameters**: Handling search and filter parameters
- **AJAX Detection**: Detecting AJAX requests for JSON responses
- **Request Methods**: GET requests for reading data

### Utilities
- **Carbon**: Date and time manipulation for publication dates
- **Str Helper**: String manipulation for slug generation
- **Log Facade**: Error logging and debugging
- **Config**: Environment-based configuration
- **Env**: Environment variable access

### Security
- **CSRF Protection**: Built-in CSRF token protection
- **XSS Protection**: HTML escaping using `e()` helper
- **SQL Injection Prevention**: Using Eloquent ORM and parameter binding
- **Mass Assignment Protection**: Using `$fillable` arrays

### Performance
- **Eager Loading**: Reducing N+1 query problems
- **Query Optimization**: Efficient database queries
- **Caching**: Laravel's caching system (configurable)
- **Asset Compilation**: Vite for frontend asset compilation

### Development Tools
- **Laravel Pint**: Code formatting and style enforcement
- **Laravel Pail**: Real-time log viewing
- **Laravel Tinker**: Interactive REPL for debugging
- **PHPUnit**: Testing framework integration
- **Laravel Sail**: Docker development environment

## 📦 Installation

1. Clone the repository
2. Install dependencies: `composer install`
3. Copy `.env.example` to `.env` and configure
4. Generate application key: `php artisan key:generate`
5. Run migrations: `php artisan migrate`
6. Fetch articles: `php artisan blog:fetch-articles`
7. Start the server: `php artisan serve`

## 🎯 Usage

### Fetching Articles
```bash
# Fetch up to 1100 articles
php artisan blog:fetch-articles

# Fetch a specific number of articles
php artisan blog:fetch-articles --limit=500
```

### Enhancing Articles
```bash
# Enhance articles with real content
php artisan blog:fetch-real-content --limit=50

# Enhance from source URLs
php artisan blog:enhance-from-sources --limit=50
```

### Expanding Short Articles
```bash
# Expand articles shorter than 500 characters
php artisan blog:expand-short --min-length=500
```

## 📝 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 🙏 Acknowledgments

MedicalBlock aggregates content from trusted medical sources worldwide. We thank all the medical organizations, health websites, and news outlets that provide RSS feeds and make medical information accessible to the public.

---

**#MedicalBlock #Laravel #PHP #MedicalBlog #HealthTech #ContentAggregation #MedicalNews #Healthcare #WebDevelopment #LaravelFramework #MedicalContent #HealthInformation #BlogSystem #ContentManagement #RSSFeeds #WebScraping #MedicalResearch #HealthNews #Wellness #MedicalArticles #HealthcareTechnology #Laravel12 #PHP82 #EloquentORM #BladeTemplates #ConsoleCommands #MedicalInformation #HealthContent #ArticleAggregation #MedicalPlatform #HealthBlog**
