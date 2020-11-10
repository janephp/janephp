Jane: Tools for generating PHP Code
===================================

Jane is a set of libraries to generate Models & API Clients based on JsonSchema / OpenAPI specs
by following high quality PHP code guidelines and respecting common & advanced PSR.

Jane also includes the AutoMapper, an advanced serializer that generates classes that can serialize or deserialize to
improve performance. You can read more about it on the :doc:`/components/AutoMapper` page.

If you don't know what JSON Schema or OpenAPI are, you should consider reading :doc:`/documentation/choose` to help you
sort what you need and how to use them.

If you already know which component you need, you can read one of the following getting started to use Jane:

 * :doc:`/documentation/JsonSchema`
 * :doc:`/documentation/OpenAPI`

If you are a more advanced user, you can read the detailed components pages:

 * :doc:`/components/JsonSchema`
 * :doc:`/components/OpenAPI`

Lastly, if you want to contribute there is some details about :doc:`/contributing/how`, :doc:`/contributing/bc` and
:doc:`/contributing/tests`

.. toctree::
   :hidden:

   Jane <self>

.. toctree::
   :hidden:
   :caption: Documentation

   Choose the component you need <documentation/choose>
   JSON Schema <documentation/JsonSchema>
   OpenAPI <documentation/OpenAPI>

.. toctree::
   :hidden:
   :caption: Guides

   Elasticsearch models <guides/elasticsearch>
   API Platform DTO <guides/apip_dto>
   External API Client <guides/external_client>
   Between two Symfony apps <guides/two_symfony_apps>

.. toctree::
   :hidden:
   :caption: Tips

   How to manage nullable properties <tips/nullable>

.. toctree::
   :hidden:
   :caption: Contributing

   Backwards compatibility <contributing/bc>
   How it works <contributing/how>
   Tests <contributing/tests>

.. toctree::
   :hidden:
   :caption: Components

   JSON Schema <components/JsonSchema>
   OpenAPI <components/OpenAPI>
   AutoMapper <components/AutoMapper>
