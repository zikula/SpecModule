Like Symfony, the views directory is organized with sub-directories bearing Capital-letter names. These are often
organized by controller and method:

```
views/
    Bar/
        index.html.twig
    Block/
        foo.html.twig
    Foo/
        index.html.twig
```

where `FooController::indexAction()` etc.

The `Block` directory is utilized by any blocks provided by the module.