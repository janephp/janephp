---
id: the-journey-of-writing-an-api-client-with-php-and-some-wise-advices
title: The journey of writing an API Client with PHP and some wise advices
author: Joel Wurtz
author_title: Web & Symfony expert, cook with Chef
author_url: https://github.com/joelwurtz
author_image_url: https://jolicode.com/media/cache/team_thumbnail/media/original/team/joel-2.png
tags: [Swagger, OpenAPI, API, HTTPlug]
---

TL; DR; Have a small feature set, use [HTTPlug](http://httplug.io/) and [Jane OpenAPI](https://github.com/jolicode/jane-openapi).

My (love-)story with [Docker](https://www.docker.com/) started in December 2013, after having lost a 2 years long battle against [Chef](https://www.chef.io/). I had been attracted to Docker for a couple of months, and I finally made the switch the day when I learned that it was built on a <abbr title="REpresentational State Transfer">REST</abbr> <abbr title="Application Programming Interface">API</abbr>. This meant that I could control all my infrastructure from PHP, which is the language I’m most partial to.

After some research, I found the library [docker-php](https://github.com/docker-php/docker-php) built by [ubermuda](https://twitter.com/ubermuda), but, like all the things around Docker at that time, there was only a very limited support of the API.

Like any decent developer (yes, it's a troll), I started to write pull requests to fulfill my needs, and it was both the greatest and the worst thing that happened to me.

## History of PHP librairies on HTTP Client

Like any API Client, we need to send HTTP requests. Luckily for us PHP developers, we can take profit out of [Guzzle](https://github.com/guzzle/guzzle), a very good library available in PHP for sending HTTP requests.

But using this library with docker-php was a very bad decision. Let me be clear, Guzzle is an awesome library, however, Docker has specific features that were impossible to use with Guzzle:

 * Unix socket domain: the listening endpoint for Docker is, by default, a socket file (`unix:///var/run/docker.sock`) and neither guzzle nor curl (the underlying adapter) support this;
 * Sending big files: when building images with Docker, you need to send a `tar` archive in the request which easily takes from tens to hundreds of megabytes, and doing this "the trivial way" can lead to memory errors. To make it right, you need to use the chunked transfer encoding, which is, as you can imagine, not available in Guzzle;
 * Real time: when running a container, you want to output logs in real time, so you need the stream of the response before it is complete, and this is (was) also missing in Guzzle.

Based on these facts, I tried to do some pull requests to Guzzle, but they were not accepted as it would have increased the maintenance cost. Even if I was sad about that, I believe the maintainers took the right decision.

So we implemented our own Guzzle adapter to handle all of those features. It was not perfect and there were bugs that we fixed over time, but it worked.

Even if it worked, it was a very bad decision from the **maintenance** point of view. At that time, we used Guzzle3, but when our adapter was finally stable, Guzzle4 got published. Months later, we got Guzzle5 and then Guzzle6 with PSR7. In the beginning, it was not a problem, but when you don’t update your version of Guzzle and others librairies start to require newer versions, you begin to have conflicts in Composer and that makes the whole thing unusable and, indeed, your library becomes useless.

## Keeping up

At the beginning, covering the Docker's API was not that hard, as there were only a few endpoints and a quite small feature set. But when you have over 1k+ contributors and a company behind, your product evolves fast, really fast! There was a release every month with many changes to the API, new features and new tools (A LOT of new tools).

In comparison, we were mostly two active developers working on the `docker-php` library ([@ubermuda](https://github.com/ubermuda) and me, along with some great [contributors](https://github.com/docker-php/docker-php/graphs/contributors)) but too few to keep up with Docker pace.

Months passed and new features were not available in our client. I started to get exhausted with all these changes (and I believe ubermuda too). It was also at that time that I became a father and to be honest, on my spare time, [I prefer being on my couch and playing video games than fixing issues](http://www.michaelbromley.co.uk/blog/529/why-i-havent-fixed-your-issue-yet).

## Taking a step back

We were facing those two problems:

 * Updating our HTTP client was hard;
 * Keeping up with the pace of Docker was impossible.

How do we move forward from that? My decision was to invest more time in other open source projects in order to move some of the maintenance from docker-php to other parts.

Investing more time was not that hard as I have the chance to work at JoliCode, a company which supports some open source projects by giving them some time (don’t get me wrong, it’s not because we are nice people that we allow this, it’s more than we believe that investing in open source is rewarding for our company on several points: keeping up to date with new things, publicize our knowledge and being recognized, to be short, it’s our training and commercial service - we don’t have any commercial people).

So, the new question was: on which parts should I invest some time to make the maintenance of docker-php more "lean"?

## PHP-HTTP - HTTPlug

First, we needed a strong HTTP Client supporting [PSR7](http://www.php-fig.org/psr/psr-7/) while being able to work on Docker. Supporting all these features on our own library was a straight "no go"!

Hopefully, I heard about [php-http](https://github.com/php-http) (the successor of [ivory-http-adapter](https://github.com/egeloen/ivory-http-adapter)), which allows to abstract our HTTP client implementation, and the project was just starting. I wrote the [socket client package](https://github.com/php-http/socket-client) for them and made it so small in features that, now, I really have nothing to do on this lib (there may be bugs, but this is really easy to update).

[![Logo HTTPlug](/static/img/blog/logo-httplug.png)](http://httplug.io/)

I also implemented many things needed in other libs in order to support the HTTP 1.1 protocol (chunked encoding / decoding, content-length sanitation, etc.).

I don’t think that I have enough words to say thanks to all the team of php-http, [sagikazarmark](https://github.com/sagikazarmark), [dbu](https://github.com/dbu), [nyholm](https://github.com/nyholm), and [many others](https://github.com/php-http/httplug/graphs/contributors). We have had different opinions and visions, we have had issues but overall, packages on this organization are amongst the best, and I highly recommend to check them out. As a developer, it’s always a pleasure to work on these libraries.

## Automating things

Now that we have a strong HTTP Client supporting all features needed by the Docker’s API, there is still the problem of keeping up with Docker pace.

When we think about docker-php, it is mainly a one-to-one mapping of API endpoints to PHP, with an object-oriented design. Creating a new endpoint simply requires to read the documentation, set the correct HTTP method, the correct url, register all the parameters and map the result into an object. And when doing this for a few methods, you just repeat yourself. **And when you repeat yourself, there is room for automation**.

I decided to look into automating the mapping between docker-php and the Docker API.

What we needed first was a way to write the Docker API into a specification that could be interpreted by a machine. For some time, we considered using [guzzle-services](https://github.com/guzzle/guzzle-services), but it was not a good choice. As it was really tied to guzzle, both for the spec and for the HTTP client, and because we were not using a guzzle client anymore, it would have been more than a hack to achieve this.

I then look into a popular format, like [Swagger](http://swagger.io/), [RAML](http://raml.org/), etc. And Swagger was a blast, a strong community, a lot of tools, a well designed specification (basically if you do HTTP + JSON, you can write a swagger schema on it, no need to be 100% RESTFul).

Moreover, someone already started to write a [specification on Docker](https://github.com/api-stack/api-stack/tree/gh-pages/data/) (I did not use it in the end, but it allowed me to better understand the specification). This repository also owns an INSANE amount of others Swagger specifications, writing this automated tool would allow us to easily use other APIs.

Furthermore, Swagger already had a tool called [codegen](https://github.com/swagger-api/swagger-codegen/blob/master/README.md) which allow you to create an API Client from the specification: I knew my vision was possible using Swagger.

On my first attempt, I tried to use codegen, but, oh boy, don’t use this for PHP :-) It may be good for other languages, but the code generated in PHP was just awful and full of bugs, and also there were no possibility to inject our HTTP Client as it writes the code with curl functions which is not a suitable library for doing requests on Docker (at least from PHP).

The main problem of Codegen is that it generates code using templates, which is a bit too simple for our complex needs (don’t get me wrong: generating code with templates is a good way to do generation - look at the Symfony Router / DIC Components for instance - but only for simple use cases). When you need to generate a complex API Client, you can be sure that template-driven codegen is a painful path.

That said, our only choice was to create our own library around Swagger and there were two ways of doing this:

 * Interpreting the specification in real time (ie., when an operation is requested by the user, load the Swagger spec, parse and analyse it, and try to perform the right operation);
 * Generating the code (like codegen, but with a different approach).

Interpreting a specification is nice, but adds a layer between the user call and the real one which can be significant (from the performance point of view particularly). This also means that we have to use magic methods of PHP (__call, __set, …) and this leads to debug nightmare.

On the other hand, although generating code also adds complexity, debugging is easy, as you don’t have this layer in the generated code, which is simple, calls are fast and don’t involve too many things. This is the path we chose.

We decided to use the following workflow for our generation tool:

 * Read and parse a Swagger Specification;
 * Determine API Endpoint with their parameters and Object for requests / responses;
 * Generate the code;
 * Write the code to files with a nice printing (readable by a human).

When you look at how the Swagger specification is written, you see that [it uses a JSON Schema](https://github.com/OAI/OpenAPI-Specification/blob/master/schemas/v2.0/schema.json). Furthermore, they also use a sub specification of JSON Schema to describe objects for requests and responses.

## Jane

[Jane](https://github.com/jolicode/jane) was created to understand and generate code from a [JSON Schema](http://json-schema.org/), as it kills two birds with one stone: read the swagger specification and easily generate the objects of requests, responses of a swagger specification.

One of the best thing about a JSON Schema specification is that it is written by following a JSON Schema specification… This kind of recursive design allows us to ensure that the library is valid (well, at least if the recursivity is respected) if by running Jane with the [JSON Schema specification](https://github.com/json-schema-org/json-schema-spec/blob/master/schema.json), I was generating Jane again, [look at this test](https://github.com/jolicode/jane/blob/master/tests/LibraryTest.php).

Basically what Jane do is:

 * reading a JSON Schema
 * generating a bunch of classes which represent the schema, and the way of serializing / deserializing from JSON to this object model.

When writing the generator, I first started to use templates (twig) like codegen. I rapidly realized that it was very hard to achieve a correct workflow, it was easy for the model, but for the normalizers, it was awful.

Another way to generate code is to use an [Abstract Syntax Tree (AST)](https://en.wikipedia.org/wiki/Abstract_syntax_tree), like a compiler. We interpret our code to create this AST and then we just need to render it.

Hopefully for us, there is a library for that, [php-parser](https://github.com/nikic/PHP-Parser), where [nikic](https://github.com/nikic), a PHP core developer, has done an incredible job.

Decoupling this to its own package, we are now able to use Jane in our client projects at JoliCode, when we need to transfer Data across services. I can’t count the number of hours saved by using this library. We just have to write a simple JSON Schema, and we no longer need to do the repeated work of creating models and serializers as we just generate them!

## Jane OpenAPI

![Logo of the OpenAPI initiative](/static/img/blog/logo_openapi.png)

Writing Jane was the foundation of our API Client Generator. We already had many code that could be reused and we could take advantage of its architecture and choices (using AST). Not long after releasing Jane, we finished Jane OpenAPI ([It’s called OpenAPI as it is the new name for swagger specification](https://openapis.org/)).

[Jane OpenAPI](https://github.com/jolicode/jane-openapi) uses Jane to generate models and normalizers for requests and response body objects. It also adds a new generated class: the Resource.

A generated resource will have all the code needed to make HTTP Request, and, in my opinion, a nice and simple API exposed to end user. They just have to call one method and directly get the model object from the response.

It uses HTTPlug to make the requests, so you can use any HTTP Client library. I highly recommend you to use [Guzzle](https://github.com/php-http/guzzle6-adapter), but there can be benefits in using others, like using the one already provided by your framework (hello [Zend](https://github.com/php-http/zend-adapter) and [CakePHP](https://github.com/php-http/cakephp-adapter)) or for [their specific features set](https://github.com/php-http/socket-client).

## It was a long path

Now that we have all these tools, rebuilding docker-php with 100% of the API endpoints was extremely fast. I merely spent one day creating the swagger specification, and some more hours to have better end-user APIs on specific features (real-time, parsing multiple JSON streams, etc.).

For each new version of Docker, it doesn’t take long to add new features and make the according changes. As an example, in the last version, 4 new API domains with multiple API calls were added to Docker (swarm), [it took me some hours](https://github.com/docker-php/docker-php/commits/1.24) to implement all of them, and 90% of this time was used to understand the new APIs, not writing it.

However, we can still reduce this maintenance cost: the specification from Swagger can be directly generated from the Docker code source, and [I cannot wait to have this issue solved](https://github.com/docker/engine-api/issues/77).

## It’s all about maintenance

Maintaining an open source library is hard and takes time. However, these last years made me realize that we can control it, by moving features into other projects, trust people behind it, and by reducing the feature sets.

In fact, this is not a new thing: many libraries and tools in the Unix ecosystem [follow this philosophy](https://en.wikipedia.org/wiki/Unix_philosophy), and therefore we just have to copy them, as it is where Open Source Software is born, and they've got very experienced in managing it. Lesson learned!
