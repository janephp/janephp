Internal
========

This documentation describes how all Jane libraries work to generate the code. It is mainly oriented for people wanting
to contribute to this library.

This library is based on 3 different steps:

Guessing
--------

First step is to guess a set of metadata given a specification (JsonSchema or OpenAPI at the time of writing this).
To do so, it will read the specification, transform it into objects and pass it to guessers implementing one of
the ``GuesserInterface``.

Each guesser tell if it supports the current specification and returns metadata. Occasionally, it will try to guess
sub objects of the specification.

Analyzing
---------

Once all metadata are guessed, they are passed to a set of generators implementing the ``GeneratorInterface`` given a
``Context``.

Then, each generator will analyze the metadata and create PHP code by using the `PHP Parser Library`_. Using the library
improves the flexibility to create complex code, as using a template generator solution.

``Context`` provides a lots of functions to generate code, like using unique variable name in a scope or adding generated file.

Generation
----------

When the code is ready, the ``Context`` is read to generate PHP files and optionally format it with `PHP CS Fixer`_ if available.

.. _PHP Parser Library: https://github.com/nikic/PHP-Parser
.. _PHP CS Fixer: http://cs.sensiolabs.org/
