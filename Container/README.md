### LinkContainer.php
The LinkContainer class is a registered Symfony service (see `services.xml`) that provides a LinkContainer
back to the core. The class can actually be named anything and located anywhere as long as the proper FQ path is
provided in `services.xml`. The class must implement `\Zikula\Core\LinkContainer\LinkContainerInterface`.