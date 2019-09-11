Json Schema
===========

Jane OpenAPI is a library to generate, in PHP, an http client and its associated models and serializers from a `OpenAPI`_
specification: version 3.

Installation
------------

Add this library with composer as a ``dev`` dependency:

.. code-block:: bash

    composer require --dev jane-php/open-api "^5.0"

This library contains a lot of dependencies, to be able to generate code, which are not needed on runtime. However, the generated
code depends on other libraries and a few classes that are available through the runtime package. It is highly recommended
to add the runtime dependency as a requirement through composer:

.. code-block:: bash

    composer require jane-php/open-api-runtime "^5.0"

By default, generated code is not formatted, to make it compliant to PSR2 standard and others format norms, you can add the
`PHP CS Fixer`_ library to your dev dependencies (and it makes it easier to debug!):

.. code-block:: bash

    composer require --dev friendsofphp/php-cs-fixer


.. _`OpenAPI`: https://www.openapis.org/
.. _PHP CS Fixer: http://cs.sensiolabs.org/
