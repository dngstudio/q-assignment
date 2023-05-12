# Q Assignment

[![GitHub license](https://img.shields.io/badge/version-1.0.0-orange)](https://github.com/dngstudio/q-assignment/LICENSE)



This repository contains a super simple WordPress plugin that creates a custom post type for movies, a Gutenberg block to display favorite movie quotes, and a login page.

## Features

- **Movies - Plugin**: The plugin adds a new post type called "Movies" to your WordPress site. You can use this post type to add and manage movie entries.

- **Favorite Movie Quote**: A Gutenberg block called "Favorite Movie Quote" is included. It allows you to insert a favorite movie quote into your posts or pages easily.

- **IDJ Theme**: A custom created theme that supports custom template for movies post type.

- **Login Page**: This login page uses the Q Symfony Skeleton API to retrieve an access token and store it in a session that lasts for 24 hours.

## How To Setup

### Movies - Plugin

To use the "Movies" Plugin, follow these steps:

1. Clone this repository to your local machine using `git clone https://github.com/dngstudio/q-assignment.git`.

2. Upload the `movies` directory to the `wp-content/plugins/` directory of your WordPress installation.

3. Log in to your WordPress admin dashboard and navigate to the "Plugins" section.

4. Activate the "Movies" plugin from the list of available plugins.

### Favorite Movie Quote - Gutenberg Block

To use the "Favorite Movie Quote" block, follow these steps:

1. Clone this repository to your local machine using `git clone https://github.com/dngstudio/q-assignment.git`.

2. Upload the `favorite-movie-quote` directory to the `wp-content/plugins/` directory of your WordPress installation.

3. Log in to your WordPress admin dashboard and navigate to the "Plugins" section.

4. Activate the "Favorite Movie Quote" from the list of available plugins.

### IDJ Theme

To use the "IDJ Theme" Theme, follow these steps:

1. Clone this repository to your local machine using `git clone https://github.com/dngstudio/q-assignment.git`.

2. Upload the `idj-theme` directory to the `wp-content/themes/` directory of your WordPress installation.

3. Log in to your WordPress admin dashboard and navigate to the "Themes" section.

4. Activate the "IDJ Theme" from the list of available themes.

### Login Page

To use the API Login Page, follow these steps:

1. Clone this repository to your local machine using `git clone https://github.com/dngstudio/q-assignment.git`.

2. Upload the `api-login` directory to the `htdocs` directory of your xampp/lamp installation.

3. Make sure the Apache server is running 

4. Go to localhost/api-login.

## Usage

### Custom Post Type

Once the plugin is activated, a new menu item called "Movies" will appear in the WordPress admin sidebar. Clicking on it will take you to the movie management page, where you can add, edit, and delete movies.

### Gutenberg Block

To use the "Favorite Movie Quote" Gutenberg block, follow these steps:

1. Edit a post or page in the WordPress block editor.

2. Add a new block by clicking the "+" button.

3. Search for "Favorite Movie Quote" and select it.

4. Enter your favorite movie quote in the block settings.

5. Publish or update the post/page.
