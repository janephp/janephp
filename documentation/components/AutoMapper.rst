Component: AutoMapper
=====================

Description
-----------

Jane AutoMapper is an experimental library that generate AutoMapper class which allows to automap values from Class to Class.

Taken from `AutoMapper/AutoMapper`_:

AutoMapper is a simple little library built to solve a deceptively complex problem - getting rid of code that mapped one object to another. This type of code is rather dreary and boring to write, so why not invent a tool to do it for us?

In PHP libraries and application mapping from one object to another is fairly common:

- ``ObjectNormalizer`` / ``GetSetMethodNormalizer`` in ``symfony/serializer``
- Mapping request data to object in ``symfony/form``
- Hydrate object from SQL results in Doctrine
- Migrating legacy data to new model
- Mapping from database model to DTO objects (API / CQRS / ...)
- And even more...

The goal of this component is to offer an abstraction on top of this subject.
For that goal it provides an unique interface (other code is only implementation detail)::

    interface AutoMapperInterface
    {
        /**
         * Map data from to target.
         *
         * @param array|object        $source  Any data object, which may be an object or an array
         * @param string|array|object $target  To which type of data, or data, the source should be mapped
         * @param Context             $context Options mappers have access to
         *
         * @return array|object The mapped object
         */
        public function map($source, $target, Context $context = null);
    }

The source is from where the data comes from, it can be either an array or an object.
The target is where the data should be mapped to, it can be either a string (representing a type: array or class name) or directly an array or object (in that case construction of the object is avoided).

Current implementation handle all of those possiblities at the exception of the mapping from a dynamic object (array / stdClass) to another dynamic object.

.. _`AutoMapper/AutoMapper`: https://github.com/AutoMapper/AutoMapper

Using AutoMapper
----------------

Basic usage
~~~~~~~~~~~

Someone who wants to map an object will only have to do this::

    // With class name
    $target = $automapper->map($source, Foo::class);
    // With existing object
    $target = new Foo();
    $target = $automapper->map($source, $target);
    // To an array
    $target = $automapper->map($source, 'array');
    // From an array
    $source = ['a' => 'b'];
    $target = $automapper->map($source, Foo::class);


With custom context
~~~~~~~~~~~~~~~~~~~

Context object allow to pass options for the mapping::

    // Using context
    $context = new Context();
    $target = $automapper->map($source, Foo::class, $context);

    // Groups (serializer annotation), will only map value that match those group in source and target
    $context = new Context(['groupA', 'groupB']);
    // Allowed attributes, will only map specific properties (exclude others), allow nesting for sub mapping like the serializer component
    $context = new Context(null, ['propertyA', 'propertyB', 'foo' => ['fooPropertyA']]);
    // Ignored attributes, exclude thos propreties include others
    $context = new Context(null, null, ['propertyA', 'propertyB', 'foo' => ['fooPropertyA']]);
    // Set circular reference limit
    $context->setCircularReferenceLimit(2);
    // Set circular reference handler
    $context->setCircularReferenceHandler(function () { ... });

Features
--------

Nested Mapping
~~~~~~~~~~~~~~

This component map nested class when it's possible.

Circular Reference
~~~~~~~~~~~~~~~~~~

Default circular reference implementation is to keep them during mapping, which means somethings like::

    $foo = new Foo();
    $foo->setFoo($foo);

    $target = $this->automapper->map($foo, 'array');

Will produce an array where the foo property will be a reference to the parent.

Having that allow using this component as a DeepCloning service by mapping to the same object::

    $foo = new Foo();
    $foo->setFoo($foo);

    $deepClonedFoo = $this->automapper->map($foo, Foo::class);

Max Depth
~~~~~~~~~

This component understand the Max Depth Annotation of the Serializer component and will not map after it's reached.

Name Converter
~~~~~~~~~~~~~~

Default implementation allows you to pass a Name Converter when converting to or from an array to change the property name used.

Discriminator Mapping
~~~~~~~~~~~~~~~~~~~~~

This component understand the Discriminator Mapping Annotation of the Serializer component and should correctly handle construction of object when having inheritance.

Type casting
~~~~~~~~~~~~

This component will try to correctly map scalar values (going from int to string, etc).

Transformer extension
~~~~~~~~~~~~~~~~~~~~~

Sometimes you have to convert special objects (such as ``\Money\Money`` from ``moneyphp\money`` package), to do that you should create a
custom TransformerFactory and its Transformers. We made `an example in the AutoMapper tests files`_ that you can look at.

To use a custom TransformerFactory class, you have to do as following::

    $autoMapper->bindTransformer(new TransformerFactory());

With the Symfony bundle, you have to tag your TransformerFactory class with a ``jane_auto_mapper.transformer_factory`` tag.
This will use automatically the TransformerFactory.

.. _`an example in the AutoMapper tests files`: https://github.com/janephp/janephp/tree/next/src/AutoMapper/Tests/Fixtures/Transformer

Implementation
--------------

Default implementation use code generation for mapping, it reads once the metadata needed to build the mapper then write PHP code, after this, no metadata reading or analysis is done, only the generated mapper is used.

This allow for very fast mapping, here is some benchmarks using the library:

* `travis-ci.org/idr0id/php-mappers-benchmarks/builds/361253808?utm_source=github_status&utm_medium=notification`_
* `travis-ci.org/php-serializers/ivory-serializer-benchmark`_

.. _`travis-ci.org/idr0id/php-mappers-benchmarks/builds/361253808?utm_source=github_status&utm_medium=notification`: https://travis-ci.org/idr0id/php-mappers-benchmarks/builds/361253808?utm_source=github_status&utm_medium=notification
.. _`travis-ci.org/php-serializers/ivory-serializer-benchmark`: https://travis-ci.org/php-serializers/ivory-serializer-benchmark

And here is an `example of generated code`_

.. _`example of generated code`: https://gist.github.com/joelwurtz/7ee48dd768f6d39ccc78d6ab7bdea22a

Bundle
------

The component ships a Bundle to allow a quick integration with Symfony.
To use it, you just have to add the main bundle class to your ``config/bundles.php`` file::

    return [
        // ...
        Jane\AutoMapper\Bundle\JaneAutoMapperBundle::class => ['all' => true],
    ];

Then configure the bundle to your needs, for example:

.. code-block:: yaml

    jane_auto_mapper:
      normalizer: false
      name_converter: ~
      cache_dir: '%kernel.cache_dir%/automapper'
      date_time_format: !php/const \DateTimeInterface::RFC3339_EXTENDED

Possible fields:

* ``normalizer`` (default: ``false``):  A boolean which indicate if we inject the AutoMapperNormalizer;
* ``name_converter`` (default: ``null``): A NameConverter based on your needs;
* ``cache_dir`` (default: ``%kernel.cache_dir%/automapper``): This settings allows you to customize the output directory for generated mappers;
* ``date_time_format``: This option allows you to change the date time format used to transform strings to ``\DateTimeInterface`` (default: ``\DateTimeInterface::RFC3339``).

Normalizer Bridge
-----------------

A Normalizer Bridge is available, aiming to be 100% feature compatible with the ObjectNormalizer of the ``symfony/serializer`` component. The goal of this bridge **is not to replace the ObjectNormalizer** but rather providing a very fast alternative.

As shown in the benchmark above, using this bridge leads up to more than 8x speed increase in normalization.

Future consideration
--------------------

Things that could be done later:

* symfony/form bridge for mapping request data to object
* symfony/validator integration:

PHP 7.4 may give a problem to the symfony/validator component where typed properties can be problem, given a class like this::

    class Foo {
        /** @Assert\NotNull() */
        public int $foo;
    }

An user may send a null value (in a form by example or JSON), and PHP will raise an error before the validation, since the validation occurs on the mapped object.

This component can help resolving this case with the actual behavior:

- Create a dummy class with the same properties as Foo but without type checking
- Mapping user data to this dummy class (using the automapper component)
- Validating this dummy class with the metadata from the Foo class
- Mapping the dummy object to the foo class (using the automapper component)

Feel free to challenge as much as possible.
