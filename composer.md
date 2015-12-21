Filename: `composer.json`

Status: Required

Description: define the extension and various features and capabilities. Specific keys are required and others are optional.
The composer.json file is also used by composer and packagist to enable package installation.

Please see the [Official JSON Schema](https://getcomposer.org/doc/04-schema.md) for full details on most items

 - name: (required) can be anything, but typically `<vendor>/<name>-<type>`
 - version: (required) must adhere to [semver requirements](http://semver.org).
 - description: (required) a one sentence description of the extension (translatable)
 - type: (required) zikula-module
 - license: (required) License name (string) or an array of license names (array of strings) under which the extension 
   is provided. You must use the standardized identifier acronym for the license as defined by 
   [Software Package Data Exchange](http://spdx.org/licenses/)
 - authors: (optional but recommended) an array of objects indicating author or group information
 - autoload: (required) object defining psr-4 namespace object
 - require: (required) object defining bundle dependencies
 - extra: (required) the zikula object with required keys
   - zikula: (required)
     - core-compatibility: (required) a [version compatibility string](https://getcomposer.org/doc/01-basic-usage.md#package-versions) defining core compatibility
     - class: (required) the fully qualified name of the Bundle class
     - displayname: (required) the common name for the bundle (translatable)
     - url: (required) a lowercase string that will be used as a prefix in all routes for this extension (translatable)
     - oldnames: (optional) an array of strings of old names for the extension
     - capabilities: (required if controllers are used) an object of objects defining capabilities of the extension
         - user: (required if user capable controller) an object defining the default route `{route: zikulaspecmodule_default_index}`
         - admin: (required if admin capable controller) an object defining the default route `{route: zikulaspecmodule_admin_index}`
         - hook_subscriber: (required if hook subscriber) an object like so: `{"class": "Zikula\\SpecModule\\Helper\\HookContainer"}`
         - hook_provider: (required if hook provider) an object like so: `{"class": "Zikula\\SpecModule\\Helper\\HookContainer"}`
         - searchable: (required if searchable) an object defining the search class helper `{class: Zikula\\SpecModule\\Helper\\SearchHelper}`
         - categorizable: (required if entities support categorization) and array of Fully Qualified entity classnames
     - securityschema: (required) An object of security schemes
