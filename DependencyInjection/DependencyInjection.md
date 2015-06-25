reference: http://symfony.com/doc/current/components/dependency_injection/index.html

The DependencyInjection component of Symfony can be quite complex, but the initial implementation of it can be
done quite simply. Here, the `ZikulaSpecExtension.php` file must be named `<Vendor><Name>Extension.php` and simply
creates a loader and loads the `services.xml` file.