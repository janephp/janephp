<?php

namespace Jane\Component\OpenApi3\JsonSchema\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\JsonSchema\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\JsonSchema\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PathItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []) : bool
    {
        return $type === 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\PathItem';
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return $data instanceof \Jane\Component\OpenApi3\JsonSchema\Model\PathItem;
    }
    /**
     * @return mixed
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []) : mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\JsonSchema\Model\PathItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('$ref', $data) && $data['$ref'] !== null) {
            $object->setDollarRef($data['$ref']);
            unset($data['$ref']);
        }
        elseif (\array_key_exists('$ref', $data) && $data['$ref'] === null) {
            $object->setDollarRef(null);
        }
        if (\array_key_exists('summary', $data) && $data['summary'] !== null) {
            $object->setSummary($data['summary']);
            unset($data['summary']);
        }
        elseif (\array_key_exists('summary', $data) && $data['summary'] === null) {
            $object->setSummary(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('get', $data) && $data['get'] !== null) {
            $object->setGet($this->denormalizer->denormalize($data['get'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Operation', 'json', $context));
            unset($data['get']);
        }
        elseif (\array_key_exists('get', $data) && $data['get'] === null) {
            $object->setGet(null);
        }
        if (\array_key_exists('put', $data) && $data['put'] !== null) {
            $object->setPut($this->denormalizer->denormalize($data['put'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Operation', 'json', $context));
            unset($data['put']);
        }
        elseif (\array_key_exists('put', $data) && $data['put'] === null) {
            $object->setPut(null);
        }
        if (\array_key_exists('post', $data) && $data['post'] !== null) {
            $object->setPost($this->denormalizer->denormalize($data['post'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Operation', 'json', $context));
            unset($data['post']);
        }
        elseif (\array_key_exists('post', $data) && $data['post'] === null) {
            $object->setPost(null);
        }
        if (\array_key_exists('delete', $data) && $data['delete'] !== null) {
            $object->setDelete($this->denormalizer->denormalize($data['delete'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Operation', 'json', $context));
            unset($data['delete']);
        }
        elseif (\array_key_exists('delete', $data) && $data['delete'] === null) {
            $object->setDelete(null);
        }
        if (\array_key_exists('options', $data) && $data['options'] !== null) {
            $object->setOptions($this->denormalizer->denormalize($data['options'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Operation', 'json', $context));
            unset($data['options']);
        }
        elseif (\array_key_exists('options', $data) && $data['options'] === null) {
            $object->setOptions(null);
        }
        if (\array_key_exists('head', $data) && $data['head'] !== null) {
            $object->setHead($this->denormalizer->denormalize($data['head'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Operation', 'json', $context));
            unset($data['head']);
        }
        elseif (\array_key_exists('head', $data) && $data['head'] === null) {
            $object->setHead(null);
        }
        if (\array_key_exists('patch', $data) && $data['patch'] !== null) {
            $object->setPatch($this->denormalizer->denormalize($data['patch'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Operation', 'json', $context));
            unset($data['patch']);
        }
        elseif (\array_key_exists('patch', $data) && $data['patch'] === null) {
            $object->setPatch(null);
        }
        if (\array_key_exists('trace', $data) && $data['trace'] !== null) {
            $object->setTrace($this->denormalizer->denormalize($data['trace'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Operation', 'json', $context));
            unset($data['trace']);
        }
        elseif (\array_key_exists('trace', $data) && $data['trace'] === null) {
            $object->setTrace(null);
        }
        if (\array_key_exists('servers', $data) && $data['servers'] !== null) {
            $values = [];
            foreach ($data['servers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Server', 'json', $context);
            }
            $object->setServers($values);
            unset($data['servers']);
        }
        elseif (\array_key_exists('servers', $data) && $data['servers'] === null) {
            $object->setServers(null);
        }
        if (\array_key_exists('parameters', $data) && $data['parameters'] !== null) {
            $values_1 = [];
            foreach ($data['parameters'] as $value_1) {
                $value_2 = $value_1;
                if (is_array($value_1) and isset($value_1['$ref'])) {
                    $value_2 = $this->denormalizer->denormalize($value_1, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Reference', 'json', $context);
                } elseif (is_array($value_1) and isset($value_1['name']) and isset($value_1['in'])) {
                    $value_2 = $this->denormalizer->denormalize($value_1, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Parameter', 'json', $context);
                }
                $values_1[] = $value_2;
            }
            $object->setParameters($values_1);
            unset($data['parameters']);
        }
        elseif (\array_key_exists('parameters', $data) && $data['parameters'] === null) {
            $object->setParameters(null);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/^(get|put|post|delete|options|head|patch|trace)$/', (string) $key)) {
                $object[$key] = $this->denormalizer->denormalize($value_3, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Operation', 'json', $context);
            }
            if (preg_match('/^x-/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize(mixed $object, ?string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if ($object->isInitialized('dollarRef') && null !== $object->getDollarRef()) {
            $data['$ref'] = $object->getDollarRef();
        }
        if ($object->isInitialized('summary') && null !== $object->getSummary()) {
            $data['summary'] = $object->getSummary();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('get') && null !== $object->getGet()) {
            $data['get'] = $this->normalizer->normalize($object->getGet(), 'json', $context);
        }
        if ($object->isInitialized('put') && null !== $object->getPut()) {
            $data['put'] = $this->normalizer->normalize($object->getPut(), 'json', $context);
        }
        if ($object->isInitialized('post') && null !== $object->getPost()) {
            $data['post'] = $this->normalizer->normalize($object->getPost(), 'json', $context);
        }
        if ($object->isInitialized('delete') && null !== $object->getDelete()) {
            $data['delete'] = $this->normalizer->normalize($object->getDelete(), 'json', $context);
        }
        if ($object->isInitialized('options') && null !== $object->getOptions()) {
            $data['options'] = $this->normalizer->normalize($object->getOptions(), 'json', $context);
        }
        if ($object->isInitialized('head') && null !== $object->getHead()) {
            $data['head'] = $this->normalizer->normalize($object->getHead(), 'json', $context);
        }
        if ($object->isInitialized('patch') && null !== $object->getPatch()) {
            $data['patch'] = $this->normalizer->normalize($object->getPatch(), 'json', $context);
        }
        if ($object->isInitialized('trace') && null !== $object->getTrace()) {
            $data['trace'] = $this->normalizer->normalize($object->getTrace(), 'json', $context);
        }
        if ($object->isInitialized('servers') && null !== $object->getServers()) {
            $values = [];
            foreach ($object->getServers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['servers'] = $values;
        }
        if ($object->isInitialized('parameters') && null !== $object->getParameters()) {
            $values_1 = [];
            foreach ($object->getParameters() as $value_1) {
                $value_2 = $value_1;
                if (is_object($value_1)) {
                    $value_2 = $this->normalizer->normalize($value_1, 'json', $context);
                } elseif (is_object($value_1)) {
                    $value_2 = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $values_1[] = $value_2;
            }
            $data['parameters'] = $values_1;
        }
        foreach ($object as $key => $value_3) {
            if (preg_match('/^(get|put|post|delete|options|head|patch|trace)$/', (string) $key)) {
                $data[$key] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            if (preg_match('/^x-/', (string) $key)) {
                $data[$key] = $value_3;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return ['Jane\\Component\\OpenApi3\\JsonSchema\\Model\\PathItem' => false];
    }
}