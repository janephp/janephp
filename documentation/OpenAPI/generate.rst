Generating a Client
===================

This library provided a PHP console application to generate the Model, you can use it by executing the following command
at the root of your project:

.. code-block:: bash

    php vendor/bin/jane-openapi generate

This command will try to read a config file named ``.jane-openapi`` located on the current working directory. However you can name it as you
like and use the ``--config-file`` option to specify its location:

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
    ];

This example is the minimum configuration required for generating a Client:

 * ``openapi-file``: Specify the location of your OpenApi file, it can be local file or a remote one ``https://my.domain.com/my-api.json``.
   It can also be a ``yaml`` file.
 * ``namespace``: Root namespace of all of your generated code
 * ``directory``: Directory where the code will be generated

Given this configuration you will need to add the following configuration to composer, in order to load the generated files::

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
   not respecting some standards (nullable field as an example)
 * ``async``: A boolean (false by default) which allows to generate a full asynchronous client using `Amp`_ with `Artax`_
   client, see :doc:`/OpenAPI/async` fore more information.

Multi files
-----------

Jane OpenAPI can also generate a speification separated into different files at the same time with different namespaces
and directories allowing to handle JSON References between them.

See :doc:`/OpenAPI/multi` for more information

.. _`JSON Reference`: https://tools.ietf.org/id/draft-pbryan-zyp-json-ref-03.html
.. _Amp: https://amphp.org/
.. _Artax: https://amphp.org/artax/