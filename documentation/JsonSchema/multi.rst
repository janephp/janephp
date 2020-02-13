Multi schemas generation
========================

Jane JsonSchema allows to generate multiple schemas at the same time with different namespaces and directories to handle
JSON References on others schemas.

Configuration
-------------

In order to use this feature, configuration of the ``.jane`` file will require a mapping of JSON Schema specification file
linked to a root class, namespace and directory.

As an example you may have this::

    <?php

    return [
        'mapping' => [
            __DIR__ . '/schema1.json' => [
                'root-class' => 'Foo',
                'namespace' => 'Vendor\Library\FooSchema',
                'directory' => __DIR__ . '/generated/Schema1',
            ],
            __DIR__ . '/schema2.json' => [
                'root-class' => 'Bar',
                'namespace' => 'Vendor\Library\BarSchema',
                'directory' => __DIR__ . '/generated/Schema2',
            ],
        ],
    ];

Using this configuration, Jane JsonSchema will generate all class of the ``schema1.json`` and ``schema2.json`` specification.
Also, all references between both schemas will use the specific namespace.

As an example, given that you have the ``Foo`` object in ``schema1.json``::

    {
        "type": "object",
        "properties": {
            "foo": { "type": "string" }
        }
    }

And the ``Bar`` one in ``schema2.json``::

    {
        "type": "object",
        "properties": {
            "bar": { "$ref": "schema1.json#" }
        }
    }

The property ``bar`` of the ``Bar`` object will reference the ``Vendor\Library\Schema1\Foo`` class.


.. note::
    If we don't specify the ``schema1.json`` in this configuration, Jane JsonSchema will still fetch the specification
    and generate the ``Foo`` class. However, it will be under the same namespace (``Vendor\Library\BarSchema``),
    and will have ``BarBar`` as the class name, instead of the ``Foo`` one.


.. note::
    If provided, the options ``fixer-config-file``, ``use-fixer`` and ``clean-generated``have to bee defined at the
    root level of the array.


Usage
-----

In this case, Jane JsonSchema will generate two distinct ``NormalizerFactory``, to be able to use references between
schemas, you will only need to merge normalizers::

    <?php

    $normalizers = array_merge(
        \Vendor\Library\FooSchema\Normalizer\NormalizerFactory::create(),
        \Vendor\Library\BarSchema\Normalizer\NormalizerFactory::create()
    );
