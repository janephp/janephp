<?php

namespace Jane\Component\OpenApi31\JsonSchema\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\JsonSchema\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\JsonSchema\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ComponentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\JsonSchema\Model\Components::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\OpenApi31\JsonSchema\Model\Components;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi31\JsonSchema\Model\Components();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('schemas', $data) && $data['schemas'] !== null) {
            $values = new \Jane\Component\OpenApi31\JsonSchema\Runtime\JsonObject();
            foreach ($data['schemas'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setSchemas($values);
            unset($data['schemas']);
        } elseif (\array_key_exists('schemas', $data) && $data['schemas'] === null) {
            $object->setSchemas(null);
        }
        if (\array_key_exists('responses', $data) && $data['responses'] !== null) {
            $values_1 = new \Jane\Component\OpenApi31\JsonSchema\Runtime\JsonObject();
            foreach ($data['responses'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setResponses($values_1);
            unset($data['responses']);
        } elseif (\array_key_exists('responses', $data) && $data['responses'] === null) {
            $object->setResponses(null);
        }
        if (\array_key_exists('parameters', $data) && $data['parameters'] !== null) {
            $values_2 = new \Jane\Component\OpenApi31\JsonSchema\Runtime\JsonObject();
            foreach ($data['parameters'] as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $object->setParameters($values_2);
            unset($data['parameters']);
        } elseif (\array_key_exists('parameters', $data) && $data['parameters'] === null) {
            $object->setParameters(null);
        }
        if (\array_key_exists('examples', $data) && $data['examples'] !== null) {
            $values_3 = new \Jane\Component\OpenApi31\JsonSchema\Runtime\JsonObject();
            foreach ($data['examples'] as $key_3 => $value_3) {
                $values_3[$key_3] = $value_3;
            }
            $object->setExamples($values_3);
            unset($data['examples']);
        } elseif (\array_key_exists('examples', $data) && $data['examples'] === null) {
            $object->setExamples(null);
        }
        if (\array_key_exists('requestBodies', $data) && $data['requestBodies'] !== null) {
            $values_4 = new \Jane\Component\OpenApi31\JsonSchema\Runtime\JsonObject();
            foreach ($data['requestBodies'] as $key_4 => $value_4) {
                $values_4[$key_4] = $value_4;
            }
            $object->setRequestBodies($values_4);
            unset($data['requestBodies']);
        } elseif (\array_key_exists('requestBodies', $data) && $data['requestBodies'] === null) {
            $object->setRequestBodies(null);
        }
        if (\array_key_exists('headers', $data) && $data['headers'] !== null) {
            $values_5 = new \Jane\Component\OpenApi31\JsonSchema\Runtime\JsonObject();
            foreach ($data['headers'] as $key_5 => $value_5) {
                $values_5[$key_5] = $value_5;
            }
            $object->setHeaders($values_5);
            unset($data['headers']);
        } elseif (\array_key_exists('headers', $data) && $data['headers'] === null) {
            $object->setHeaders(null);
        }
        if (\array_key_exists('securitySchemes', $data) && $data['securitySchemes'] !== null) {
            $values_6 = new \Jane\Component\OpenApi31\JsonSchema\Runtime\JsonObject();
            foreach ($data['securitySchemes'] as $key_6 => $value_6) {
                $values_6[$key_6] = $value_6;
            }
            $object->setSecuritySchemes($values_6);
            unset($data['securitySchemes']);
        } elseif (\array_key_exists('securitySchemes', $data) && $data['securitySchemes'] === null) {
            $object->setSecuritySchemes(null);
        }
        if (\array_key_exists('links', $data) && $data['links'] !== null) {
            $values_7 = new \Jane\Component\OpenApi31\JsonSchema\Runtime\JsonObject();
            foreach ($data['links'] as $key_7 => $value_7) {
                $values_7[$key_7] = $value_7;
            }
            $object->setLinks($values_7);
            unset($data['links']);
        } elseif (\array_key_exists('links', $data) && $data['links'] === null) {
            $object->setLinks(null);
        }
        if (\array_key_exists('callbacks', $data) && $data['callbacks'] !== null) {
            $values_8 = new \Jane\Component\OpenApi31\JsonSchema\Runtime\JsonObject();
            foreach ($data['callbacks'] as $key_8 => $value_8) {
                $values_8[$key_8] = $value_8;
            }
            $object->setCallbacks($values_8);
            unset($data['callbacks']);
        } elseif (\array_key_exists('callbacks', $data) && $data['callbacks'] === null) {
            $object->setCallbacks(null);
        }
        if (\array_key_exists('pathItems', $data) && $data['pathItems'] !== null) {
            $values_9 = new \Jane\Component\OpenApi31\JsonSchema\Runtime\JsonObject();
            foreach ($data['pathItems'] as $key_9 => $value_9) {
                $values_9[$key_9] = $value_9;
            }
            $object->setPathItems($values_9);
            unset($data['pathItems']);
        } elseif (\array_key_exists('pathItems', $data) && $data['pathItems'] === null) {
            $object->setPathItems(null);
        }
        foreach ($data as $key_10 => $value_10) {
            if (preg_match('/^(schemas|responses|parameters|examples|requestBodies|headers|securitySchemes|links|callbacks|pathItems)$/', (string) $key_10)) {
                $object[$key_10] = $value_10;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('schemas') && null !== $data->getSchemas()) {
            $values = [];
            foreach ($data->getSchemas() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['schemas'] = $values;
        }
        if ($data->isInitialized('responses') && null !== $data->getResponses()) {
            $values_1 = [];
            foreach ($data->getResponses() as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $dataArray['responses'] = $values_1;
        }
        if ($data->isInitialized('parameters') && null !== $data->getParameters()) {
            $values_2 = [];
            foreach ($data->getParameters() as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $dataArray['parameters'] = $values_2;
        }
        if ($data->isInitialized('examples') && null !== $data->getExamples()) {
            $values_3 = [];
            foreach ($data->getExamples() as $key_3 => $value_3) {
                $values_3[$key_3] = $value_3;
            }
            $dataArray['examples'] = $values_3;
        }
        if ($data->isInitialized('requestBodies') && null !== $data->getRequestBodies()) {
            $values_4 = [];
            foreach ($data->getRequestBodies() as $key_4 => $value_4) {
                $values_4[$key_4] = $value_4;
            }
            $dataArray['requestBodies'] = $values_4;
        }
        if ($data->isInitialized('headers') && null !== $data->getHeaders()) {
            $values_5 = [];
            foreach ($data->getHeaders() as $key_5 => $value_5) {
                $values_5[$key_5] = $value_5;
            }
            $dataArray['headers'] = $values_5;
        }
        if ($data->isInitialized('securitySchemes') && null !== $data->getSecuritySchemes()) {
            $values_6 = [];
            foreach ($data->getSecuritySchemes() as $key_6 => $value_6) {
                $values_6[$key_6] = $value_6;
            }
            $dataArray['securitySchemes'] = $values_6;
        }
        if ($data->isInitialized('links') && null !== $data->getLinks()) {
            $values_7 = [];
            foreach ($data->getLinks() as $key_7 => $value_7) {
                $values_7[$key_7] = $value_7;
            }
            $dataArray['links'] = $values_7;
        }
        if ($data->isInitialized('callbacks') && null !== $data->getCallbacks()) {
            $values_8 = [];
            foreach ($data->getCallbacks() as $key_8 => $value_8) {
                $values_8[$key_8] = $value_8;
            }
            $dataArray['callbacks'] = $values_8;
        }
        if ($data->isInitialized('pathItems') && null !== $data->getPathItems()) {
            $values_9 = [];
            foreach ($data->getPathItems() as $key_9 => $value_9) {
                $values_9[$key_9] = $value_9;
            }
            $dataArray['pathItems'] = $values_9;
        }
        foreach ($data as $key_10 => $value_10) {
            if (preg_match('/^(schemas|responses|parameters|examples|requestBodies|headers|securitySchemes|links|callbacks|pathItems)$/', (string) $key_10)) {
                $dataArray[$key_10] = $value_10;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\JsonSchema\Model\Components::class => false];
    }
}
