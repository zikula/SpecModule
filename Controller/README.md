Controllers
===========

Controllers do not need to be named `UserController.php` or `AdminController.php` any longer.

Methods must have `Action` suffice, e.g. `indexAction()` or `viewAction`
 
 - neither `indexAction` nor `mainAction` are required.

Methods must return a Symfony Response object
 
Utilize annotations in controller methods to define **routes**, **parameterConverters** and even **Template**
see [documentation](http://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html) for more information.

 - methods desiring specific theming must use an appropriate annotation (e.g. @Theme('admin'))
