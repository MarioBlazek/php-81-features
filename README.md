# The PHP 8.1 release

Welcome to this repository which showcases some of the interesting features of PHP 8.1.

## Topics

1. [Enumerations](01_enums)
2. [Readonly properties](02_readonly_properties)
3. [Intersection types](03_pure_intersection_types)
4. [Fibers](04_fibers)
5. [`never` return type](05_never_return_type)
6. [`final` class constants](06_final_class_constants)
7. [First-class callable](07_first_class_callable)
8. [Array unpacking with string keys](08_keyed_array_unpack)
9. [`new` keyword in initializer](09_new_in_constructor)
10. [Other changes](10_other_changes)

## Slides

Slides can be downloaded [here](PHP_8.1.pdf).

### PHP 8.1 environment

You can either install PHP 8.1 locally to run the code examples or use the provided helper script to run the examples inside
Docker container.


### Installing PHP 8.1

Add the `ondrej/php` repository to you Ubuntu machine:

```bash
sudo apt install software-properties-common
sudo add-apt-repository ppa:ondrej/php
```

Install only cli package, it should be enough:

```bash
sudo apt install php8.1-cli
```

In case if you need to install some of the php extensions:

```bash
sudo apt install php8.1-[extname]
```

Installation of PHP 8.1 will set is as default PHP environment on your machine. To set the PHP 7.4 as the default environment,
run the following commands:

```bash
sudo update-alternatives --set php /usr/bin/php7.4
sudo update-alternatives --set phar /usr/bin/phar7.4
sudo update-alternatives --set phar.phar /usr/bin/phar.phar7.4
sudo update-alternatives --set phpize /usr/bin/phpize7.4
sudo update-alternatives --set php-config /usr/bin/php-config7.4
```

### Running example in Docker container

Use the `run` helper script to run the code example inside Docker container:

```bash
./run.sh 01_enums/01_class_with_constants.php
```

Don't forget to add proper permissions to `run.sh` script:

```bash
chmod +x run.sh
```

*NOTE:*
This repository was inspired by:
- https://stitcher.io/blog/new-in-php-81
- https://kinsta.com/blog/php-8-1/
- https://php.watch/versions/8.1
- And PHP RFC's