Features
=============

Private properties
------------------

This component map private properties (However this can deactivated).

Nested Mapping
--------------

This component map nested class when it's possible.

Circular Reference
------------------

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
---------

This component understand the Max Depth Annotation of the Serializer component and will not map after it's reached.

Name Converter
--------------

Default implementation allows you to pass a Name Converter when converting to or from an array to change the property name used.

Discriminator Mapping
---------------------

This component understand the Discriminator Mapping Annotation of the Serializer component and should correctly handle construction of object when having inheritance.

Type casting
------------

This component will try to correctly map scalar values (going from int to string, etc.).
