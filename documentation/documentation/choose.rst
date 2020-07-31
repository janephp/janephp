Choose the component you need
=============================

Before using Jane you have to understand the two schema descriptors we are using:

- `JSON Schema`_
- `OpenAPI`_

Each of theses schema descriptors have their own use and you should choose the one that fit your use-case.

JSON Schema
-----------

"JSON Schema is a vocabulary that allows you to annotate and validate JSON documents". So it will allow you to describe
your existing data format(s) and provides clear human- and machine- readable documentation.

Actually Jane does not support validation but it `will come soon`_. With that descriptor you can describe documents and
Jane will generate models & normalizers. This is mostly used when you need DTO or you need to use/store a JSON object
that our normalizer can normalize/denormalize.

.. hint::

    You can read more about what is JSON Schema and how to use it on the excellent `"Understanding JSON Schema" book`_.

If you think this is what you need, you can read our getting started :doc:`/documentation/JsonSchema`

Or you can see our detailled guides with more feature-focused stuff:

- :doc:`/guides/elasticsearch`
- :doc:`/guides/apip_dto`

OpenAPI
-------

"The OpenAPI Specification (OAS) defines a standard, language-agnostic interface to RESTful APIs which allows both
humans and computers to discover and understand the capabilities of the service without access to source code,
documentation, or through network traffic inspection".

This descriptor is on top of JSON Schema, so every feature we have in JSON Schema will be in OpenAPI. And Jane will also
generate a Client, endpoints and needed exceptions (for HTTP error responses). This is used with any API Client, some
API even provide this file, like `Stripe`_ or `Slack`_

.. hint::

    You can read more about what is OpenAPI and how to use it on `API Handyman tutorials`_.

If you think this is what you need, you can read our getting started :doc:`/documentation/OpenAPI`

Or you can see our detailled guides with more feature-focused stuff:

- :doc:`/guides/external_client`
- :doc:`/guides/two_symfony_apps`

.. _`JSON Schema`: https://json-schema.org/
.. _`OpenAPI`: https://www.openapis.org/
.. _`"Understanding JSON Schema" book`: https://json-schema.org/understanding-json-schema/
.. _`will come soon`: https://github.com/janephp/janephp/issues/10
.. _`Stripe`: https://raw.githubusercontent.com/stripe/openapi/master/openapi/spec3.json
.. _`Slack`: https://raw.githubusercontent.com/slackapi/slack-api-specs/master/web-api/slack_web_openapi_v2.json
.. _`API Handyman tutorials`: https://apihandyman.io/writing-openapi-swagger-specification-tutorial-part-1-introduction/
