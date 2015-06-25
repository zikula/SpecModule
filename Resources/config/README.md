## config

### routing.yml
This `routing.yml` file is **required** in order to allow for the core to scan this extension for route annotations.

### services.xml
reference: http://symfony.com/doc/current/book/service_container.html

The `services.xml` file contains definitions of any service you choose to create in your Extension.

During development, changes here will only be noticed if the Container is rebuilt (clear the cache).

The file is loaded by the `../DependencyInjection/<Vendor><Name>Extension.php` file and can actually be in several
different formats (`.ini`, `.yml`, `.xml`, etc) see `/symfony/src/Symfony/Component/DependencyInjection/Loader`
for format options.
