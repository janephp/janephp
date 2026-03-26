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

class PathItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\JsonSchema\Model\PathItem::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\OpenApi31\JsonSchema\Model\PathItem;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi31\JsonSchema\Model\PathItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('servers', $data) && $data['servers'] !== null) {
            $values = [];
            foreach ($data['servers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi31\JsonSchema\Model\Server::class, 'json', $context);
            }
            $object->setServers($values);
        } elseif (\array_key_exists('servers', $data) && $data['servers'] === null) {
            $object->setServers(null);
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
        if (\array_key_exists('get', $data) && $data['get'] !== null) {
            $object->setGet($this->denormalizer->denormalize($data['get'], \Jane\Component\OpenApi31\JsonSchema\Model\Operation::class, 'json', $context));
        } elseif (\array_key_exists('get', $data) && $data['get'] === null) {
            $object->setGet(null);
        }
        if (\array_key_exists('put', $data) && $data['put'] !== null) {
            $object->setPut($this->denormalizer->denormalize($data['put'], \Jane\Component\OpenApi31\JsonSchema\Model\Operation::class, 'json', $context));
        } elseif (\array_key_exists('put', $data) && $data['put'] === null) {
            $object->setPut(null);
        }
        if (\array_key_exists('post', $data) && $data['post'] !== null) {
            $object->setPost($this->denormalizer->denormalize($data['post'], \Jane\Component\OpenApi31\JsonSchema\Model\Operation::class, 'json', $context));
        } elseif (\array_key_exists('post', $data) && $data['post'] === null) {
            $object->setPost(null);
        }
        if (\array_key_exists('delete', $data) && $data['delete'] !== null) {
            $object->setDelete($this->denormalizer->denormalize($data['delete'], \Jane\Component\OpenApi31\JsonSchema\Model\Operation::class, 'json', $context));
        } elseif (\array_key_exists('delete', $data) && $data['delete'] === null) {
            $object->setDelete(null);
        }
        if (\array_key_exists('options', $data) && $data['options'] !== null) {
            $object->setOptions($this->denormalizer->denormalize($data['options'], \Jane\Component\OpenApi31\JsonSchema\Model\Operation::class, 'json', $context));
        } elseif (\array_key_exists('options', $data) && $data['options'] === null) {
            $object->setOptions(null);
        }
        if (\array_key_exists('head', $data) && $data['head'] !== null) {
            $object->setHead($this->denormalizer->denormalize($data['head'], \Jane\Component\OpenApi31\JsonSchema\Model\Operation::class, 'json', $context));
        } elseif (\array_key_exists('head', $data) && $data['head'] === null) {
            $object->setHead(null);
        }
        if (\array_key_exists('patch', $data) && $data['patch'] !== null) {
            $object->setPatch($this->denormalizer->denormalize($data['patch'], \Jane\Component\OpenApi31\JsonSchema\Model\Operation::class, 'json', $context));
        } elseif (\array_key_exists('patch', $data) && $data['patch'] === null) {
            $object->setPatch(null);
        }
        if (\array_key_exists('trace', $data) && $data['trace'] !== null) {
            $object->setTrace($this->denormalizer->denormalize($data['trace'], \Jane\Component\OpenApi31\JsonSchema\Model\Operation::class, 'json', $context));
        } elseif (\array_key_exists('trace', $data) && $data['trace'] === null) {
            $object->setTrace(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('summary') && null !== $data->getSummary()) {
            $dataArray['summary'] = $data->getSummary();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('servers') && null !== $data->getServers()) {
            $values = [];
            foreach ($data->getServers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['servers'] = $values;
        }
        if ($data->isInitialized('parameters') && null !== $data->getParameters()) {
            $values_1 = [];
            foreach ($data->getParameters() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['parameters'] = $values_1;
        }
        if ($data->isInitialized('get') && null !== $data->getGet()) {
            $dataArray['get'] = $this->normalizer->normalize($data->getGet(), 'json', $context);
        }
        if ($data->isInitialized('put') && null !== $data->getPut()) {
            $dataArray['put'] = $this->normalizer->normalize($data->getPut(), 'json', $context);
        }
        if ($data->isInitialized('post') && null !== $data->getPost()) {
            $dataArray['post'] = $this->normalizer->normalize($data->getPost(), 'json', $context);
        }
        if ($data->isInitialized('delete') && null !== $data->getDelete()) {
            $dataArray['delete'] = $this->normalizer->normalize($data->getDelete(), 'json', $context);
        }
        if ($data->isInitialized('options') && null !== $data->getOptions()) {
            $dataArray['options'] = $this->normalizer->normalize($data->getOptions(), 'json', $context);
        }
        if ($data->isInitialized('head') && null !== $data->getHead()) {
            $dataArray['head'] = $this->normalizer->normalize($data->getHead(), 'json', $context);
        }
        if ($data->isInitialized('patch') && null !== $data->getPatch()) {
            $dataArray['patch'] = $this->normalizer->normalize($data->getPatch(), 'json', $context);
        }
        if ($data->isInitialized('trace') && null !== $data->getTrace()) {
            $dataArray['trace'] = $this->normalizer->normalize($data->getTrace(), 'json', $context);
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\JsonSchema\Model\PathItem::class => false];
    }
}
