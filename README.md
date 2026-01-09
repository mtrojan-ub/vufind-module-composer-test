This is a simple extension module for VuFind to be included via composer.

Special thoughts that should be evaluated:
- Typically other modules only add "module"-related code, but we also want to override other parts of the code:
  - Templates: Other modules often provide a separate directory, with a note to copy/paste or integrate snippets by themself. Can we solve this in another way, e.g. by extending the standard bootstrap3/5/sandal themes instead?
  - Config: Should we provide separate config files instead of extending existing ones? (might depend on what our module is about)
- What versioning should be used? e.g. if you want the module to be compatible with different VuFind versions, should we provide several tags for each version? Do we need to extend the versioning schema for this? (e.g. if we write a version for 11.0 and the VuFind Version is 11.0.1, and we fix a bug, do we need to use sub-versions like 11.0.1.0, 11.0.1.1 and so on, and provide separate versions for 10.2 like 10.2.0.0, 10.2.0.1, ...)

What you should do to include:
- Add a "require"-entry to your composer.local.json
- Make sure the custom module (MyModule) is loaded in your ENV variables (VUFIND_LOCAL_MODULES)
- Make sure that MyMixin is loaded in your theme.config.php ("mixins" section) see https://vufind.org/wiki/development:architecture:user_interface
  - Add a Symlink in your themes/ folder to ../vendor/mtrojan-ub/vufind-module-composer-test/themes/MyMixin

Currently, the following things will happen when using this correctly:
- A JavaScript popup will be shown everytime you call a page, similar to the vufind-org code generator example from https://vufind.org/wiki/development:code_generators#creating_theme_mix-ins
- There is a new page being added in Content/mypage which uses a View Helper from the module to generate a simple example text
