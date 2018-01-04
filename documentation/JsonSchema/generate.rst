Generating a Model
==================

This library provided a PHP console application to generate the Model, you can use it by executing the following command
at the root of your project:

.. code-block:: bash

    php vendor/bin/jane generate

This command will try to read a config file named ``.jane`` located on the current working directory. However you can name it as you
like and use the ``--config-file`` option to specify its location:

.. code-block:: bash

    php vendor/bin/jane generate --config-file=jane-configuration.php

.. note::
    No others options can be passed to the command. Having a config file ensure that a team working on the project always
    use the same set of parameters and, when it changes, give vision of the new option used to generate the code.

Configuration file
------------------

The configuration file consists of a simple PHP script returning an array::

    <?php

    return [
        'json-schema-file' => __DIR__ . '/json-schema.json',
        'root-class' => 'MyModel',
        'namespace' => 'Vendor\Library\Generated',
        'directory' => __DIR__ . '/generated',
    ];

This example is the minimum configuration required for generating a Model:

 * ``json-schema-file``: Specify the location of your json schema file, it can be local file or a remote one ``https://my.domain.com/my-schema.json``
 * ``root-class``: The root class of the root object defined in your json schema, if there is no property on the root object it will not be used
 * ``namespace``: Root namespace of all of your generated code
 * ``directory``: Directory where the code will be generated at

Given this configuration you will need to add the following configuration to composer, in order to load the generated files::

    "autoload": {
        "psr-4": {
            "Vendor\\Library\\Generated\\": "generated/"
        }
    }

Options
-------

Other options are available to customize the generated code:

 * ``reference``: A boolean which indicate to add the support for `JSON Reference`_ into the generated code.
 * ``date-format``: A date format to specify how the generated code should encode and decode ``\DateTime`` object to string

Multi schemas
-------------

Jane JsonSchema can also generate multiple schemas at the same time with different namespaces and directories,
allowing to handle JSON References on others schema.

See :doc:`/JsonSchema/multi` for more information

.. _`JSON Reference`: https://tools.ietf.org/id/draft-pbryan-zyp-json-ref-03.html
