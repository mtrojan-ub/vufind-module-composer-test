This is a simple extension module for VuFind to be included via composer.

Special thoughts that should be evaluated:
- Typically other modules only add "module"-related code, but we also want to override other parts of the code:
  - Templates: Other modules often provide a separate directory, with a note to copy/paste or integrate snippets by themself. Can we solve this in another way, e.g. by extending the standard bootstrap3/5/sandal themes instead?
  - Config: Should we provide separate config files instead of extending existing ones? (might depend on what our module is about)
- What versioning should be used? e.g. if you want the module to be compatible with different VuFind versions, should we provide several tags for each version? Do we need to extend the versioning schema for this? (e.g. if we write a version for 11.0 and the VuFind Version is 11.0.1, and we fix a bug, do we need to use sub-versions like 11.0.1.0, 11.0.1.1 and so on, and provide separate versions for 10.2 like 10.2.0.0, 10.2.0.1, ...)
