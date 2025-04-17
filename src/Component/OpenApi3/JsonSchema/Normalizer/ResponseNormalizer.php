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
class ResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []) : bool
    {
        return $type === 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Response';
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return $data instanceof \Jane\Component\OpenApi3\JsonSchema\Model\Response;
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
        $object = new \Jane\Component\OpenApi3\JsonSchema\Model\Response();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('headers', $data) && $data['headers'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['headers'] as $key => $value) {
                $value_1 = $value;
                if (is_array($value) and isset($value['$ref'])) {
                    $value_1 = $this->denormalizer->denormalize($value, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Reference', 'json', $context);
                } elseif (is_array($value)) {
                    $value_1 = $this->denormalizer->denormalize($value, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Header', 'json', $context);
                }
                $values[$key] = $value_1;
            }
            $object->setHeaders($values);
            unset($data['headers']);
        }
        elseif (\array_key_exists('headers', $data) && $data['headers'] === null) {
            $object->setHeaders(null);
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['content'] as $key_1 => $value_2) {
                $values_1[$key_1] = $this->denormalizer->denormalize($value_2, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\MediaType', 'json', $context);
            }
            $object->setContent($values_1);
            unset($data['content']);
        }
        elseif (\array_key_exists('content', $data) && $data['content'] === null) {
            $object->setContent(null);
        }
        if (\array_key_exists('links', $data) && $data['links'] !== null) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['links'] as $key_2 => $value_3) {
                $value_4 = $value_3;
                if (is_array($value_3) and isset($value_3['$ref'])) {
                    $value_4 = $this->denormalizer->denormalize($value_3, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Reference', 'json', $context);
                } elseif (is_array($value_3)) {
                    $value_4 = $this->denormalizer->denormalize($value_3, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Link', 'json', $context);
                }
                $values_2[$key_2] = $value_4;
            }
            $object->setLinks($values_2);
            unset($data['links']);
        }
        elseif (\array_key_exists('links', $data) && $data['links'] === null) {
            $object->setLinks(null);
        }
        foreach ($data as $key_3 => $value_5) {
            if (preg_match('/^x-/', (string) $key_3)) {
                $object[$key_3] = $value_5;
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
        $data['description'] = $object->getDescription();
        if ($object->isInitialized('headers') && null !== $object->getHeaders()) {
            $values = [];
            foreach ($object->getHeaders() as $key => $value) {
                $value_1 = $value;
                if (is_object($value)) {
                    $value_1 = $this->normalizer->normalize($value, 'json', $context);
                } elseif (is_object($value)) {
                    $value_1 = $this->normalizer->normalize($value, 'json', $context);
                }
                $values[$key] = $value_1;
            }
            $data['headers'] = $values;
        }
        if ($object->isInitialized('content') && null !== $object->getContent()) {
            $values_1 = [];
            foreach ($object->getContent() as $key_1 => $value_2) {
                $values_1[$key_1] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['content'] = $values_1;
        }
        if ($object->isInitialized('links') && null !== $object->getLinks()) {
            $values_2 = [];
            foreach ($object->getLinks() as $key_2 => $value_3) {
                $value_4 = $value_3;
                if (is_object($value_3)) {
                    $value_4 = $this->normalizer->normalize($value_3, 'json', $context);
                } elseif (is_object($value_3)) {
                    $value_4 = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $values_2[$key_2] = $value_4;
            }
            $data['links'] = $values_2;
        }
        foreach ($object as $key_3 => $value_5) {
            if (preg_match('/^x-/', (string) $key_3)) {
                $data[$key_3] = $value_5;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return ['Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Response' => false];
    }
}