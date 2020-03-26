AutoMapper
===========

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

Private properties
~~~~~~~~~~~~~~~~~~

This component map private properties (However this can deactivated).

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

This component will try to correctly map scalar values (going from int to string, etc.).
