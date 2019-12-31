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
