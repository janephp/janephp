<?php

namespace Jane\OpenApiRuntime\Client;

use Http\Message\MultipartStream\MultipartStreamBuilder;
use Http\Message\StreamFactory;
use Jane\OpenApiRuntime\Client\Exception\InvalidParametersException;
use Jane\OpenApiRuntime\Client\Exception\MissingParametersException;
use Jane\OpenApiRuntime\Client\Exception\UndefinedParametersException;
use Symfony\Component\OptionsResolver\Exception\InvalidOptionsException;
use Symfony\Component\OptionsResolver\Exception\MissingOptionsException;
use Symfony\Component\OptionsResolver\Exception\UndefinedOptionsException;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QueryParam
{
    private $formParameters = [];

    private $headerParameters = [];

    private $optionsResolver;

    private $streamFactory;

    public function __construct(StreamFactory $streamFactory = null)
    {
        $this->optionsResolver = new OptionsResolver();
        $this->streamFactory = $streamFactory;
    }

    public function addQueryParameter(string $name, bool $required = false, array $allowedTypes = [], $defaultValue = null): void
    {
        // Default value is passed
        if (\func_num_args() > 3) {
            $this->optionsResolver->setDefault($name, $defaultValue);
        } else {
            $this->optionsResolver->setDefined([$name]);
        }

        if ($required) {
            $this->optionsResolver->setRequired([$name]);
        }

        if (\count($allowedTypes) > 0) {
            $this->optionsResolver->setAllowedTypes($name, $allowedTypes);
        }
    }

    public function addFormParameter(string $name, bool $required = false, array $allowedTypes = [], $defaultValue = null): void
    {
        if (\func_num_args() > 3) {
            $this->optionsResolver->setDefault($name, $defaultValue);
        } else {
            $this->optionsResolver->setDefined([$name]);
        }

        $this->formParameters[$name] = true;

        if ($required) {
            $this->optionsResolver->setRequired([$name]);
        }

        if (\count($allowedTypes) > 0) {
            $this->optionsResolver->setAllowedTypes($name, $allowedTypes);
        }
    }

    public function addHeaderParameter(string $name, bool $required = false, array $allowedTypes = [], $defaultValue = null): void
    {
        if (\func_num_args() > 3) {
            $this->optionsResolver->setDefault($name, $defaultValue);
        } else {
            $this->optionsResolver->setDefined([$name]);
        }

        $this->headerParameters[$name] = true;

        if ($required) {
            $this->optionsResolver->setRequired([$name]);
        }

        if (\count($allowedTypes) > 0) {
            $this->optionsResolver->setAllowedTypes($name, $allowedTypes);
        }
    }

    private function doResolve(\Closure $callable, array $options)
    {
        try {
            $options = $this->optionsResolver->resolve($options);
        } catch (MissingOptionsException $exception) {
            throw new MissingParametersException(str_replace('option', 'parameter', $exception->getMessage()), 0, $exception);
        } catch (UndefinedOptionsException $exception) {
            throw new UndefinedParametersException(str_replace('option', 'parameter', $exception->getMessage()), 0, $exception);
        } catch (InvalidOptionsException $exception) {
            throw new InvalidParametersException(str_replace('option', 'parameter', $exception->getMessage()), 0, $exception);
        }

        return $callable($options);
    }

    public function buildQueryString(array $options = []): string
    {
        return $this->doResolve(function ($options) {
            foreach ($this->formParameters as $key => $isFormParameter) {
                if ($isFormParameter && isset($options[$key])) {
                    unset($options[$key]);
                }
            }

            foreach ($this->headerParameters as $key => $isHeaderParameter) {
                if ($isHeaderParameter && isset($options[$key])) {
                    unset($options[$key]);
                }
            }

            return http_build_query($options);
        }, $options);
    }

    public function buildFormDataString(array $options = []): string
    {
        return $this->doResolve(function ($options) {
            $formOptions = [];

            foreach ($this->formParameters as $key => $isFormParameter) {
                if ($isFormParameter && isset($options[$key])) {
                    $formOptions[$key] = $options[$key];
                }
            }

            return http_build_query($formOptions);
        }, $options);
    }

    public function buildFormDataMultipart(array $options = []): MultipartStreamBuilder
    {
        return $this->doResolve(function ($options) {
            $multipartStreamBuilder = new MultipartStreamBuilder($this->streamFactory);

            foreach ($this->formParameters as $key => $isFormParameter) {
                if ($isFormParameter && isset($options[$key])) {
                    $multipartStreamBuilder->addResource($key, $options[$key]);
                }
            }

            return $multipartStreamBuilder;
        }, $options);
    }

    public function buildHeaders(array $options = []): array
    {
        return $this->doResolve(function ($options) {
            $headerOptions = [];

            foreach ($this->headerParameters as $key => $isHeaderParameter) {
                if ($isHeaderParameter && isset($options[$key])) {
                    $headerOptions[$key] = $options[$key];
                }
            }

            return $headerOptions;
        }, $options);
    }
}
