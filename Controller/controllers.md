Controllers
===========

Controllers do not need to be named `UserController.php` or `AdminController.php` any longer.

Methods must have `Action` suffice, e.g. `indexAction()` or `viewAction`
 
 - neither `indexAction` nor `mainAction` are required.

Methods must return a Symfony Response object

 - methods desiring theming in the selected Admin theme must return Zikula AdminResponse
 - using `$request->attributes->set('_legacy', true);` will theme with smarty legacy engine (Core < 2.0)
 
Utilize annotations in controller methods to define **routes**, **parameterConverters** and even **Template**
see [documentation](http://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html) for more information.