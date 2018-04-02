<?php

namespace Jane\AutoMapper;

use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class AbstractMapperConfiguration implements MapperConfigurationInterface
{
    protected $hash;

    protected $options;

    protected $source;

    protected $target;

    public function __construct(string $source, string $target, array $options = [])
    {
        $this->options = $this->getOptionsResolver()->resolve($options);
        $this->hash = $this->buildHash($source, $target, $options);
    }

    public function supports(string $source, string $target, array $options = [])
    {
        $options = $this->getOptionsResolver()->resolve($options);

        return $this->buildHash($source, $target, $options) === $this->hash;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function getTarget(): string
    {
        return $this->target;
    }

    public function getMapperClassName(): string
    {
        return sprintf('Mapper_%s', $this->hash);
    }

    protected function buildHash(string $source, string $target, array $options = [])
    {
        return hash('md5', serialize([
            $source,
            $target,
            $options,
        ]));
    }

    protected function getOptionsResolver(): OptionsResolver
    {
        return new OptionsResolver();
    }
}
