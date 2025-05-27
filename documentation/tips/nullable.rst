How to manage nullable properties
=================================

Most of the time, the schema you get from vendor have issues about nullability of their properties.

Here Jane has an option called ``strict`` mode, by default we will follow strictly your schema types. But you can
switch to non-strict mode (by having the option set to false in your Jane configuration file: ``"strict" => false``).
By doing this, any property of your schema will be considered nullable.

You can also try to fix your schema, here are some tips depending on which schema you are using

JSON Schema
-----------

Jane is actually supporting JSON Schema draft 2019-09. Which support ``null`` type, you just have to add it to your
type field as follows:

.. code-block:: yaml

    type:
      - 'null'   # Note the quotes around 'null'
      - string

OpenAPI v2 / Swagger
--------------------

OpenAPI v2 does not support ``null`` type. Instead, most libraries does support ``x-nullable`` field in order to fake
``null`` support. You can use it as follows:

.. code-block:: yaml

    type: string
    x-nullable: true

If you are using OpenAPI v2, consider migrating to OpenAPI v3 to get proper nullability support.

OpenAPI v3.0.x
--------------

OpenAPI v3 still does not support ``null`` type but added a ``nullable`` field in order to say that property is
nullable or not. By default this field is set to ``false``. You can use it as follows:

.. code-block:: yaml

    type: string
    nullable: true

OpenAPI v3.1.x
--------------

This new OpenAPI version will be compatible with JSON Schema. So everything will be the same as JSON Schema. You still
can use ``nullable`` field but it will be deprecated in favor of JSON Schema ``null`` type.
