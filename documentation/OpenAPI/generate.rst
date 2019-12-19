Generating a Client
===================

This library provided a PHP console application to generate the Model, you can use it by executing the following command
at the root of your project:

.. code-block:: bash

    php vendor/bin/jane-openapi generate

This command will try to read a config file named ``.jane-openapi`` located on the current working directory. However, you can name it as you
like and use the ``--config-file`` option to specify its location and name:

.. code-block:: bash

    php vendor/bin/jane-openapi generate --config-file=jane-openapi-configuration.php

.. note::
    No others options can be passed to the command. Having a config file ensure that a team working on the project always
    use the same set of parameters and, when it changes, give vision of the new option used to generate the code.

Configuration file
------------------

The configuration file consists of a simple PHP script returning an array::

    <?php

    return [
        'openapi-file' => __DIR__ . '/openapi.json',
        'namespace' => 'Vendor\Library\Api',
        'directory' => __DIR__ . '/generated',
        'client' => 'psr18',
    ];

This example shows the minimum configuration required to generate a client:

 * ``openapi-file``: Specify the location of your OpenApi file, it can be a local file or a remote one ``https://my.domain.com/my-api.json``.
   It can also be a ``yaml`` file.
 * ``namespace``: Root namespace of all of your generated code
 * ``directory``: Directory where the code will be generated
 * ``client``: Client to generate (``httplug`` or ``psr18``, ``httplug`` is deprecated and will be removed in Jane v6.0.0)

Given this configuration, you will need to add the following configuration to composer, in order to load the generated files::

    "autoload": {
        "psr-4": {
            "Vendor\\Library\\Api\\": "generated/"
        }
    }

Options
-------

Other options are available to customize the generated code:

 * ``reference``: A boolean which indicate to add the support for `JSON Reference`_ into the generated code.
 * ``date-format``: A date format to specify how the generated code should encode and decode ``\DateTime`` object to string
 * ``strict``: A boolean which indicate strict mode (true by default), not strict mode generate more permissive client
   not respecting some standards (nullable field as an example) client.
 * ``use-fixer``: A boolean which indicate if we make a first cs-fix after code generation, is disabled by default.
 * ``fixer-config-file``: A string to specify where to find the custom configuration for the cs-fixer after code generation, will remove all Jane default cs-fixer default configuration.
 * ``clean-generated``: A boolean which indicate if we clean generated output before generating new files, is enabled by default.
 * ``use-cacheable-supports-method``: A boolean which indicate if we use ``CacheableSupportsMethodInterface`` interface to improve caching performances when used with Symfony Serializer.
 * ``normalizer-factory``: A boolean which indicate if we use ``NormalizerFactory`` or ``LazyNormalizer``, is enabled by default.

.. _`JSON Reference`: https://tools.ietf.org/id/draft-pbryan-zyp-json-ref-03.html
