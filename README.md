vufind-module-composer-test
===========================
This is a simple extension module for VuFind to be included via composer.

Effects
------------
- A JavaScript popup will be shown everytime you call a page, similar to the default local_example_mixin
- There is a new page being added `Content/mypage` which uses a View Helper from the module to generate a simple example text

To include
----------
- Add a "require"-entry to your composer.local.json
```
"require": {
    "mtrojan-ub/vufind-module-composer-test": "dev-main"
}
```
- Execute `composer update`
- Make sure the custom module is loaded in your ENV variables `VUFIND_LOCAL_MODULES=MyModule` (Webserver config, CLI, ... depending on what you want to do)
- Make sure that MyMixin is loaded in your theme.config.php `'mixins' => ['MyMixin']`, see https://vufind.org/wiki/development:architecture:user_interface
  - Add a Symlink in your `themes` folder to `../vendor/mtrojan-ub/vufind-module-composer-test/themes/MyMixin`

Special thoughts for further evaluation
---------------------------------------
- Typically other modules only add "module"-related code, but we also want to override other parts of the code:
  - Templates: Can we solve the manual symlink in another way? (e.g. a directive in composer.local.json and/or a small sh/bat script)
  - Config: Should we provide separate config files instead of extending existing ones? (might depend on what our module is about)
- What versioning should be used? e.g. if you want the module to be compatible with different VuFind versions, should we provide several tags for each version? Do we need to extend the versioning schema for this? (e.g. if we write a version for 11.0 and the VuFind Version is 11.0.1, and we fix a bug, do we need to use sub-versions like 11.0.1.0, 11.0.1.1 and so on, and provide separate versions for 10.2 like 10.2.0.0, 10.2.0.1, ...)
- QA-Tasks are experimentally included as well (vufind-org/vufindhttp), but so far only for "module" and not for "themes"
