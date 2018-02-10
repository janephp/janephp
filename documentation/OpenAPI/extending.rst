Extending the Client
====================

Some endpoints need sometimes custom implementation that were not possible to generate through the OpenAPI Specification.
Jane OpenAPI try to be nice with this and each specific behavior of an API call has been seprated into different methods
which are public or protected.

As an exemple you may want to encode in base64 a specific query parameter of an Endpoint. First step is to create your
own Endpoint extending the generated one::

    <?php

    namespace MyApi\Endpoint;

    use MyApiGenerated\Endpoint\FooEndpoint as BaseEndpoint;
    use Symfony\Component\OptionsResolver\Options;
    use Symfony\Component\OptionsResolver\OptionsResolver;

    class FooEndpoint extends BaseEndpoint
    {
        protected function getQueryOptionsResolver(): OptionsResolver
        {
            $optionsResolver = parent::getQueryOptionsResolver();
            $optionsResolver->setNormalizer('bar', function (Options $options, $value) {
                return base64_encode($value);
            });

            return $optionsResolver;
        }
    }

Once this endpoint is generated, you need to tell your Client to use yours endpoint instead of the Generated one. For that
you can extends the generated client and override the method that use this endpoint::

    <?php

    namespace MyApi;

    use MyApiGenerated\Client as BaseClient;
    use MyApi\Endpoint\FooEndpoint;

    class Client extends BaseClient
    {
        public function getFoo(array $queryParameters = [], $fetch = self::FETCH_OBJECT)
        {
            return $this->executePsr7Endpoint(new FooEndpoint($queryParameters), $fetch);
        }
    }

Then you will need to use your own client instead of the generated one. To extends other parts of the endpoint you can look
at the generated code.
