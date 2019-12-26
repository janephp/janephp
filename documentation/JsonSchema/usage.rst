Using a generated Model
=======================

This library generates basics P.O.P.O. objects (Plain Old PHP Objects) with a bunch of setters / getters. It also generates
all normalizers to handle denormalization from a json string, and normalization.

All normalizers respect the ``Symfony\Component\Serializer\Normalizer\NormalizerInterface`` and
``Symfony\Component\Serializer\Normalizer\DenormalizerInterface`` from the `Symfony Serializer Component`_.

It also generate a ``JaneObjectNormalizer`` class that will act as an usual Symfony Normalizer.

Given this configuration::

    <?php

    return [
        'json-schema-file' => __DIR__ . '/json-schema.json',
        'root-class' => 'MyModel',
        'namespace' => 'Vendor\Library\Generated',
        'directory' => __DIR__ . '/generated',
    ];

You will have to do this::

    <?php

    $normalizers = [
        new Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(),
        new Vendor\Library\Generated\Normalizer\JaneObjectNormalizer(),
    ];
    $encoders = [new Symfony\Component\Serializer\Encoder\JsonEncoder(
        new Symfony\Component\Serializer\Encoder\JsonEncode([Symfony\Component\Serializer\Encoder\JsonEncode::OPTIONS => \JSON_UNESCAPED_SLASHES]),
        new Symfony\Component\Serializer\Encoder\JsonDecode([Symfony\Component\Serializer\Encoder\JsonDecode::ASSOCIATIVE => false])),
    ];

    $serializer = new Symfony\Component\Serializer\Serializer($normalizers, $encoders);
    $serializer->deserialize('{...}');

This serializer will be able to encode and decode every data respecting your json schema specification.


.. note::
    Take note that we don't use classic defaults for ``JsonEncode`` and ``JsonDecode``. Using ``JSON_UNESCAPED_SLASHES``
    only makes sense if you can have JSON References in your data (not specification). However, using ``false`` for
    ``JsonDecode`` (which means not using associative array but ``\stdClass`` instead) is mandatory.

    As an example of why it's mandatory, a JSON Schema could contain the following valid specification::

        {
            "type": "object",
            "properties": {
                "foo": {
                    "type": ["array", "object"]
                }
            }
        }

    When using associative array, it would be tricky (but feasible) to deal with data inside the array or object (need to detect if all keys are
    numerical). The main problem comes when dealing with an empty array or object. In this case, there is no possibility
    to know if it was an array or object, and in some cases, decoding and recoding this value (with no modification)
    will change the data.

.. _Symfony Serializer Component: https://symfony.com/doc/current/components/serializer.html
