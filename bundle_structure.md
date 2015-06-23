```
SpecBundle/
    Block/
        FooBlock.php
    Controller/
        FooController.php
        BarController.php
    DenpendencyInjection/
        ZikulaSpecExtension.php
    Entity/
        FooEntity.php
    Form/
        Type/
            FooType.php
    Helper/
        FooHelper.php
    Listener/
        FooListener.php
    Resources/
        config/
            routing.yml (required if controllers used)
        docs/
            foo.txt
        public/
            css/
            images/
            js/
        translations/
            messages.en.pot
            zikulaspecmodule.en.pot
        views/
            Bar/
                index.html.twig
            Bar/
                index.html.twig
            Block/
                fooBlockDisplay.html.twig
                fooBlockModify.html.twig
    Tests/
        Controller/
           FooControllerTest.php
    vendor/
    SpecModuleInstaller.php (required)
    ZikulaSpecModule.php (required)
    CHANGELOG.md
    LICENSE
    README.md
    composer.json (required)
    phpunit.xml.dist
```

note: Api is not a required structural item and can be best replaced by services. Other optional items are allowed
see various examples (in Zikula and Symfony ecosystems) for ideas on best practice for structural design.
