Like Symfony, the views directory is organized with sub-directories bearing Capital-letter names. These are often
organized by controller and method:

views/
    Default/
        index.html.twig
    Foo/
        bar.html.twig

where `FooController::barAction()` etc.