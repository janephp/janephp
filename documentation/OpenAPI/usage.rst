Using a generated client
========================

Generating a client will produce same classes as the :doc:`/JsonSchema/introduction` library:

 * Model files in the ``Model`` namespace
 * Normalizer files in the ``Normalizer`` namesapce
 * A ``NormalizerFactory`` class in the ``Normalizer`` namespace

Futhermore it generates:

 * Resources files in the ``Resource`` namespace are a subset of the API endpoints (depends on the tags of the endpoint)
 * Client file in the root namespace contains all API endpoints
 * ClientAsync file in the root namespace contains all API endpoints with an Async API. (if using the ``'async' => true`` option)

Creating the Serializer
-----------------------


Creating the Http Client
------------------------


Creating the API Client
-----------------------


Using the API Client
--------------------

