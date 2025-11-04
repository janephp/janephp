<?php

namespace Jane\Component\Server\Console\Loader;

use Jane\Component\Server\Registry\Server;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ServerLoader implements ServerLoaderInterface
{
    public function resolve(string $apiName, array $options = []): Server
    {
        $optionsResolver = new OptionsResolver();

        $optionsResolver->setDefined($this->getDefinedOptions());
        $optionsResolver->setRequired($this->getRequiredOptions());
        $options = $optionsResolver->resolve($options);

        return $this->newSchema($apiName, $options);
    }

    protected function newSchema(string $apiName, array $options): Server
    {
        return new Server($apiName, $options['namespace'], $options['directory']);
    }

    protected function getDefinedOptions(): array
    {
        return [
            'openapi-file',
            'use-fixer',
            'fixer-config-file',
        ];
    }

    protected function getRequiredOptions(): array
    {
        return [
            'namespace',
            'directory',
        ];
    }
}
