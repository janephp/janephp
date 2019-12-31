Using AutoMapper
================

Basic usage
-----------

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
-------------------

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
