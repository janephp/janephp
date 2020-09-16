How our test suite works
========================

This documentation describes how our test suite works and how you can interact with it.
It is mainly oriented for people wanting to contribute to theses libraries.

We test each components with a global composer configuration.
On repository root you can find a ``composer.json`` file that contains all components dependencies, in our CI we install
theses dependencies then we tests all components.

If you want to run it locally, you can do:

.. code-block:: bash

    composer update
    vendor/bin/phpunit

You can also run same commands to test a single component, you just have to cd inside the component first:

.. code-block:: bash

    cd src/JsonSchema
    composer update
    vendor/bin/phpunit

We mainly use JsonSchema / OpenAPI fixtures for our tests. When we add a feature, we create a new folder in related
component tests folder with a schema related to the added feature. That way when we run tests, it will generate a
``generated/`` folder that will be compared with a ``expected/`` that contains generated files like they should be.

If you just created a fixture folder and don't have ``expected/`` folder, just run tests and check manually
``generated/`` files and if everything is ok, you can copy the folder and name it ``expected/``. If you have to do this
on multiple fixtures, you can use ``./replace-all-expected-fixtures.sh`` script. It will copy all ``generated/`` into
``expected/`` folder. So please be sure that everything is okay before running this script.

By default, we don't run generated client related tests locally, because you need to run `stoplightio/prism`_ with
configuration as following:

- ``nohup prism mock -p 4010 -m src/OpenApi3/Tests/client/openapi.yaml &``
- ``nohup prism mock -p 4011 -m src/OpenApi2/Tests/client/swagger.yaml &``

Both theses will run a "fake" API based on the given OpenApi scheme. If you want to see logs, you can remove ``nohup``
and ``&`` keywords on given commands.
With theses servers running you can now run generated client tests with ``vendor/bin/phpunit --exclude-group none``
command.
Even if we don't run theses tests locally, they will always run on CI.

.. _`stoplightio/prism`: https://github.com/stoplightio/prism
