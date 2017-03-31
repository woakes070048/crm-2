# StarStation (Codename: "CRM")
Welcome to StarStation; a new CRM that focuses on efficiency, modern technologies, and awesome design to let you manage your business more effectively. Assistance is more than welcome and appreciated. Let's build something awesome :-)

I started building this application after disappointment with the apps currently on the market. The biggest apps out there are big, bloated, have a huge learning curve, and downright disgusting UIs that made me sick to my stomach. Some are web based, but others require downlading companion apps and installing various programs to run. Other apps do one or two items related to a CRM but leave out the crucial pieces or hide them behind a paywall.

My idea with this app is to build a brand-new CRM that looks great and has all the functionality you would need to run a business, ideally for an IT business such as technical support or a project-based business such as web design or development. The goal is that it can eventually evolve into an app that suits many tastes but remains simple in nature.

** THIS APP IS IN HEAVY DEVELOPMENT, THIS IS NOT A "PUBLIC" RELEASE BY ANY STRETCH OF THE IMAGINATION. **

## 1.1 CONTENTS
* 1.0 INTRO + WELCOME
* 1.1 CONTENTS
* 1.2 SYSTEM REQUIREMENTS
* 1.3 INSTALLATION
* 2.0 DOCUMENTATION
* 2.1 CONCEPTS
* 2.2 DESIGN LANGUAGE
* 2.3 DIRECTORY STRUCTURE
* 3.0 KNOWN ISSUES
* 3.1 ROADMAP
* 3.2 LICENSE

## 1.2  SYSTEM REQUIREMENTS
Current system requirements are:
- PHP >= 5.6.4
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Internet Connection is currently required as Bootstrap is used for layout and is imported from CDN for development purposes
- Supports all modern browsers and IE 9+. Support across devices/screen sizes, but currently only optimized for desktops.

## 1.3  INSTALLATION
1.  Download and install Laravel 5.4.x per the installation guide: https://laravel.com/docs/5.4/installation
2.  Configure the application with a .env file or otherwise configure to connect to a database per: https://laravel.com/docs/5.4/configuration
3.  Overwrite all core files with those provided from our GitHub: https://github.com/chris985/crm by downloading the repository and extracting to the root Laravel folder
4.  Run the Artisan database migrator to build a database. You can do this by running "php artisan migrate" from your command line.
5.  Check to be sure that all files have completed copying and the database structure has been created.
4.  That's it! Enjoy!

## 2.0  DOCUMENTATION
Better and more complete documentation will be added once rapid development has ceased.

## 2.1  CONCEPTS
The app is built to play off of the "Person, Place, Thing" idea. These 3 core areas along with "Tasks" are the central focus of a CRM if you really boil them down to their core. The top main menu provides access to each area, then displays simple context-sensative actions next to the page title to either create a new item, delete, or edit an existing item.

* Tasks - These are all the items you need to complete. Tasks can be either be a one-off service ticket, or a project that consists of a bunch of individual tasks. (You may call them "Projects, Service Tickets, To-Dos")

* People- Contacts within your app. People are physical human beings and can be associated with one or more places that they work with or associate with. (You may call them "Contacts, Leads, Prospects")

* Places - locations, either a business or company, or a location of interest such as a meeting location. (You may call them "Companies, Vendors")

* Money - All your business finances consisting of invoices, expenses, quotes/proposals, and other money that is coming or going. (You may call them "Invoices, Expenses, Quotes, Proposals")

* Times - Time frames such as the amount of time worked on a task, a meeting time, or a calendar appointment. (You may call them "Timesheets, ClockIn, Clock Out, In/Out Boards, Calendars, Meetings")

* Things - Everything else. They can be configuration records, products and other reusable assets to your business. (You may call them "Vendors, Products, Services, Configurations")

## 2.2  DESIGN LANGUAGE
A proper system UI is a key component to the system. Leveraging Bootstrap for the time being, the UI is heavily inspired by Google Material Design Language with a Card Based Layout rather than the usual table-based layouts.

The new Bootstrap components consist of "card-list" and "card-open" which change the look of Bootstrap cards.

## 2.3  DIRECTORY STRUCTURE
The app is built using Laravel structure which follows an MVC inspired structure. For those unfamiliar, the essential parts of the folder structure are:

### Folders
* / – The root directory which contains all other folders for the app
* /app – Contains Models
* /resources/views – Contains the Views
* /app/Http/Controllers - Contains Controllers
* /database/migrations – Contains the database schema that will be written upon install
* /public – Contains the front-end code, assets, and media

### Files
* /routes/web.php – Contains the routes within the app
* /.env – Contains the core configuration file for development. The values in here will overwrite the values within the config directory
* /config – Contains configuration files (overwritten by /.env file listed in the root)

Personally, I prefer having less "root" folders. I would like to change some of these application folders around in the future.

## 2.4 DATABASE STRUCTURE
The database structure has been moved to an XLS spreadsheet contained in the docs directory that shows the database structure as well as samples of the data within the columns. This will be updated as often as possible, but may not be kept up-to-date with most recent database changes.

## 3.0  KNOWN ISSUES
The app is currently in heavy development. Currently, the only working pieces consist of the "People" and "Places" sections with the rest of the functionality still needing to be programmed and built.

Additional fields are also to be added to the People and Places sections to complete the app.

## 3.1  ROADMAP
The roadmap is a look at things to come. As the app develops, these are the features that are planned, this list is subject to change, but it is in order.
* Complete all basic areas
* Complete all initial fields and database schema
* Authentication
* Integrate Markdown or Github flavored shortcodes into all text editors
* Administration area for “Admins” to add dedicated users, change types and, status dropdowns, configurable fields etc.
* System-wide Notes section. Associate multiple notes with all items
* Rollout of automatic installer/updater ala WordPress
* Integration of activity stream for system-wide changes
* Freeze Database Schema
* Official Public Alpha Release
* Mobile app layout development/optimization
* Integrate AJAX features to optimize database queries and load times
* Integrate system-wide AJAX search
* System-wide notifications system/mailer
* Table View layout for oldies, as opposed to modern card based layout
* System configuration options, colors/UI selections
* Integrate license files/keys
* Re-approach and redesign UI as needed
* Switchover app to use language files
* Code optimization, directory structure organization, and more
* Official Public Beta Release
* Further optimization and feature enhancements

## 3.1  CREDITS
Built with the following assets:
- Laravel: [https://laravel.com/](https://laravel.com)
- Laravel Collective Forms: [https://laravelcollective.com/](https://laravelcollective.com/)
- Bootstrap 4: [https://v4-alpha.getbootstrap.com/](https://v4-alpha.getbootstrap.com/)
- Select2: [https://select2.github.io/](https://select2.github.io/)
- Google Material Design: [https://material.io/](https://material.io/)
- And Viewers like you!

Author: Christopher Martone: [http://christophermartone.com](http://christophermartone.com)
Publisher: Starcresc Interactive: [http://starcresc.com](http://starcresc.com)

## 3.2  LICENSE
This app is provided "AS IS" and is not intended for use in a production environment. Many areas are still in rapid development and the database schema has not been finalized. This app is provided freely for use and welcome any user contributions to its code base. Under no circumstances is it provided with any warranty expressed or implied by either the Author or the Publisher. (C) Copyright 2017 Starcresc. (C) Copyright 2017 Christopher Martone. All Rights Reserved.

