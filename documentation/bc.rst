Backwards compatibility
=======================

Backwards compatiblity is an important topic. Those libraries follow Semver, so backwards compatibility will only
break between major versions. This library may use deprecations notices to inform you of the change, but it's a low
probability, you should always check the CHANGELOG when switching to a new major version.

JsonSchema and OpenAPI
----------------------

Those libraries generate code and should not be used in runtime. Also, there is no need to extends or use this code in
another libraries. The only thing used, is the command line.

So there is no BC promise on those libraries, you can consider that everything is internal.
The only BC promise is about the command line, and the generated code.

Generated Code
--------------

Code generated fall under our BC Promise, but only the public and protected API of the generated code.
When a method of a class is generated, its signature will not change with minor release, but it's implementation
may change, however a private method can have its signature updated. Behavior of the implementation should not change
between minor releases unless behavior is buggy.

No class will be removed between minor versions, but there can be new classes added.

Runtime Libraries
-----------------

JsonSchema Runtime and OpenAPI Runtime libraries have a standard BC Promise.
