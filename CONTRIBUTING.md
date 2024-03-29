# Contributing

First, thank you!

Here are a few rules to follow in order to ease code reviews, and discussions before maintainers accept and merge your work.

* You **MUST** follow the [PSR-1](https://www.php-fig.org/psr/psr-1/) and [PSR-2](https://www.php-fig.org/psr/psr-2/).
* You **MUST** run the test suite.
* You **MUST** write (or update) unit tests.
* You **SHOULD** write documentation.

Please, write [commit messages that make sense](http://tbaggery.com/2008/04/19/a-note-about-git-commit-messages.html), and [rebase your branch](http://git-scm.com/book/en/Git-Branching-Rebasing) before submitting your Pull Request.

One may ask you to [squash your commits](http://gitready.com/advanced/2009/02/10/squashing-commits-with-rebase.html) too. This is used to "clean" your Pull Request before merging it (we don't want commits such as `fix tests`, `fix 2`, `fix 3`, etc.).

Also, when creating your Pull Request on GitHub, you **MUST** write a description which gives the context and/or explains why you are creating it.

## PHP CS Fixer

```bash
composer install --working-dir=tools/php-cs-fixer
# Check what can be fixed
tools/php-cs-fixer/vendor/bin/php-cs-fixer fix --dry-run --diff
# Fix them
tools/php-cs-fixer/vendor/bin/php-cs-fixer fix --diff
```
