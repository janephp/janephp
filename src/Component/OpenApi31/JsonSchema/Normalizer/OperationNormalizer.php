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

class OperationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\JsonSchema\Model\Operation::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\OpenApi31\JsonSchema\Model\Operation;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi31\JsonSchema\Model\Operation();
        if (\array_key_exists('deprecated', $data) && \is_int($data['deprecated'])) {
            $data['deprecated'] = (bool) $data['deprecated'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values = [];
            foreach ($data['tags'] as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
        } elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->setTags(null);
        }
        if (\array_key_exists('summary', $data) && $data['summary'] !== null) {
            $object->setSummary($data['summary']);
        } elseif (\array_key_exists('summary', $data) && $data['summary'] === null) {
            $object->setSummary(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('externalDocs', $data) && $data['externalDocs'] !== null) {
            $object->setExternalDocs($this->denormalizer->denormalize($data['externalDocs'], \Jane\Component\OpenApi31\JsonSchema\Model\ExternalDocumentation::class, 'json', $context));
        } elseif (\array_key_exists('externalDocs', $data) && $data['externalDocs'] === null) {
            $object->setExternalDocs(null);
        }
        if (\array_key_exists('operationId', $data) && $data['operationId'] !== null) {
            $object->setOperationId($data['operationId']);
        } elseif (\array_key_exists('operationId', $data) && $data['operationId'] === null) {
            $object->setOperationId(null);
        }
        if (\array_key_exists('parameters', $data) && $data['parameters'] !== null) {
            $values_1 = [];
            foreach ($data['parameters'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setParameters($values_1);
        } elseif (\array_key_exists('parameters', $data) && $data['parameters'] === null) {
            $object->setParameters(null);
        }
        if (\array_key_exists('requestBody', $data) && $data['requestBody'] !== null) {
            $object->setRequestBody($data['requestBody']);
        } elseif (\array_key_exists('requestBody', $data) && $data['requestBody'] === null) {
            $object->setRequestBody(null);
        }
        if (\array_key_exists('responses', $data) && $data['responses'] !== null) {
            $object->setResponses($this->denormalizer->denormalize($data['responses'], \Jane\Component\OpenApi31\JsonSchema\Model\Responses::class, 'json', $context));
        } elseif (\array_key_exists('responses', $data) && $data['responses'] === null) {
            $object->setResponses(null);
        }
        if (\array_key_exists('callbacks', $data) && $data['callbacks'] !== null) {
            $values_2 = new \Jane\Component\OpenApi31\JsonSchema\Runtime\JsonObject();
            foreach ($data['callbacks'] as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $object->setCallbacks($values_2);
        } elseif (\array_key_exists('callbacks', $data) && $data['callbacks'] === null) {
            $object->setCallbacks(null);
        }
        if (\array_key_exists('deprecated', $data) && $data['deprecated'] !== null) {
            $object->setDeprecated($data['deprecated']);
        } elseif (\array_key_exists('deprecated', $data) && $data['deprecated'] === null) {
            $object->setDeprecated(null);
        }
        if (\array_key_exists('security', $data) && $data['security'] !== null) {
            $values_3 = [];
            foreach ($data['security'] as $value_3) {
                $values_4 = new \Jane\Component\OpenApi31\JsonSchema\Runtime\JsonObject();
                foreach ($value_3 as $key_1 => $value_4) {
                    $values_5 = [];
                    foreach ($value_4 as $value_5) {
                        $values_5[] = $value_5;
                    }
                    $values_4[$key_1] = $values_5;
                }
                $values_3[] = $values_4;
            }
            $object->setSecurity($values_3);
        } elseif (\array_key_exists('security', $data) && $data['security'] === null) {
            $object->setSecurity(null);
        }
        if (\array_key_exists('servers', $data) && $data['servers'] !== null) {
            $values_6 = [];
            foreach ($data['servers'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, \Jane\Component\OpenApi31\JsonSchema\Model\Server::class, 'json', $context);
            }
            $object->setServers($values_6);
        } elseif (\array_key_exists('servers', $data) && $data['servers'] === null) {
            $object->setServers(null);
        }

        foreach ($data as $key => $value) {
            if (preg_match('/^x-/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values = [];
            foreach ($data->getTags() as $value) {
                $values[] = $value;
            }
            $dataArray['tags'] = $values;
        }
        if ($data->isInitialized('summary') && null !== $data->getSummary()) {
            $dataArray['summary'] = $data->getSummary();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('externalDocs') && null !== $data->getExternalDocs()) {
            $dataArray['externalDocs'] = $this->normalizer->normalize($data->getExternalDocs(), 'json', $context);
        }
        if ($data->isInitialized('operationId') && null !== $data->getOperationId()) {
            $dataArray['operationId'] = $data->getOperationId();
        }
        if ($data->isInitialized('parameters') && null !== $data->getParameters()) {
            $values_1 = [];
            foreach ($data->getParameters() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['parameters'] = $values_1;
        }
        if ($data->isInitialized('requestBody') && null !== $data->getRequestBody()) {
            $dataArray['requestBody'] = $data->getRequestBody();
        }
        if ($data->isInitialized('responses') && null !== $data->getResponses()) {
            $dataArray['responses'] = $this->normalizer->normalize($data->getResponses(), 'json', $context);
        }
        if ($data->isInitialized('callbacks') && null !== $data->getCallbacks()) {
            $values_2 = [];
            foreach ($data->getCallbacks() as $key => $value_2) {
                $values_2[$key] = $value_2;
            }
            $dataArray['callbacks'] = $values_2;
        }
        if ($data->isInitialized('deprecated') && null !== $data->getDeprecated()) {
            $dataArray['deprecated'] = $data->getDeprecated();
        }
        if ($data->isInitialized('security') && null !== $data->getSecurity()) {
            $values_3 = [];
            foreach ($data->getSecurity() as $value_3) {
                $values_4 = [];
                foreach ($value_3 as $key_1 => $value_4) {
                    $values_5 = [];
                    foreach ($value_4 as $value_5) {
                        $values_5[] = $value_5;
                    }
                    $values_4[$key_1] = $values_5;
                }
                $values_3[] = $values_4;
            }
            $dataArray['security'] = $values_3;
        }
        if ($data->isInitialized('servers') && null !== $data->getServers()) {
            $values_6 = [];
            foreach ($data->getServers() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $dataArray['servers'] = $values_6;
        }

        foreach ($data as $key => $value) {
            if (preg_match('/^x-/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\JsonSchema\Model\Operation::class => false];
    }
}
