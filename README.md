# Posts-Legacy

Laravel package for creating blog posts via a secured API endpoint. Request data is validated, mapped to your Eloquent model through config, and persisted by `PostCreationService`.

## Installation

### Add a custom repository

```bash
composer config repositories.repo-name vcs https://github.com/Web-Best-Practice/posts-legacy
```

### Install the package

```bash
composer require web-best-practice/posts-legacy
```

### Publish the config file

```bash
php artisan vendor:publish --tag=posts-config
```

Refer to the [main repository](https://github.com/Web-Best-Practice/Posts) for more information.