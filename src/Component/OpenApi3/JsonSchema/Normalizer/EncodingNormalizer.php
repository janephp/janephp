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
class EncodingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []) : bool
    {
        return $type === 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Encoding';
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return $data instanceof \Jane\Component\OpenApi3\JsonSchema\Model\Encoding;
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
        $object = new \Jane\Component\OpenApi3\JsonSchema\Model\Encoding();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('contentType', $data) && $data['contentType'] !== null) {
            $object->setContentType($data['contentType']);
        }
        elseif (\array_key_exists('contentType', $data) && $data['contentType'] === null) {
            $object->setContentType(null);
        }
        if (\array_key_exists('headers', $data) && $data['headers'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['headers'] as $key => $value) {
                $values[$key] = $this->denormalizer->denormalize($value, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Header', 'json', $context);
            }
            $object->setHeaders($values);
        }
        elseif (\array_key_exists('headers', $data) && $data['headers'] === null) {
            $object->setHeaders(null);
        }
        if (\array_key_exists('style', $data) && $data['style'] !== null) {
            $object->setStyle($data['style']);
        }
        elseif (\array_key_exists('style', $data) && $data['style'] === null) {
            $object->setStyle(null);
        }
        if (\array_key_exists('explode', $data) && $data['explode'] !== null) {
            $object->setExplode($data['explode']);
        }
        elseif (\array_key_exists('explode', $data) && $data['explode'] === null) {
            $object->setExplode(null);
        }
        if (\array_key_exists('allowReserved', $data) && $data['allowReserved'] !== null) {
            $object->setAllowReserved($data['allowReserved']);
        }
        elseif (\array_key_exists('allowReserved', $data) && $data['allowReserved'] === null) {
            $object->setAllowReserved(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize(mixed $object, ?string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if ($object->isInitialized('contentType') && null !== $object->getContentType()) {
            $data['contentType'] = $object->getContentType();
        }
        if ($object->isInitialized('headers') && null !== $object->getHeaders()) {
            $values = [];
            foreach ($object->getHeaders() as $key => $value) {
                $values[$key] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['headers'] = $values;
        }
        if ($object->isInitialized('style') && null !== $object->getStyle()) {
            $data['style'] = $object->getStyle();
        }
        if ($object->isInitialized('explode') && null !== $object->getExplode()) {
            $data['explode'] = $object->getExplode();
        }
        if ($object->isInitialized('allowReserved') && null !== $object->getAllowReserved()) {
            $data['allowReserved'] = $object->getAllowReserved();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return ['Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Encoding' => false];
    }
}