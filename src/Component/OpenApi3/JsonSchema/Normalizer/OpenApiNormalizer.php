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
class OpenApiNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []) : bool
    {
        return $type === 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\OpenApi';
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return $data instanceof \Jane\Component\OpenApi3\JsonSchema\Model\OpenApi;
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
        $object = new \Jane\Component\OpenApi3\JsonSchema\Model\OpenApi();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('openapi', $data) && $data['openapi'] !== null) {
            $object->setOpenapi($data['openapi']);
            unset($data['openapi']);
        }
        elseif (\array_key_exists('openapi', $data) && $data['openapi'] === null) {
            $object->setOpenapi(null);
        }
        if (\array_key_exists('info', $data) && $data['info'] !== null) {
            $object->setInfo($this->denormalizer->denormalize($data['info'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Info', 'json', $context));
            unset($data['info']);
        }
        elseif (\array_key_exists('info', $data) && $data['info'] === null) {
            $object->setInfo(null);
        }
        if (\array_key_exists('externalDocs', $data) && $data['externalDocs'] !== null) {
            $object->setExternalDocs($this->denormalizer->denormalize($data['externalDocs'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\ExternalDocumentation', 'json', $context));
            unset($data['externalDocs']);
        }
        elseif (\array_key_exists('externalDocs', $data) && $data['externalDocs'] === null) {
            $object->setExternalDocs(null);
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
        if (\array_key_exists('security', $data) && $data['security'] !== null) {
            $values_1 = [];
            foreach ($data['security'] as $value_1) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value_1 as $key => $value_2) {
                    $values_3 = [];
                    foreach ($value_2 as $value_3) {
                        $values_3[] = $value_3;
                    }
                    $values_2[$key] = $values_3;
                }
                $values_1[] = $values_2;
            }
            $object->setSecurity($values_1);
            unset($data['security']);
        }
        elseif (\array_key_exists('security', $data) && $data['security'] === null) {
            $object->setSecurity(null);
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values_4 = [];
            foreach ($data['tags'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Tag', 'json', $context);
            }
            $object->setTags($values_4);
            unset($data['tags']);
        }
        elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->setTags(null);
        }
        if (\array_key_exists('paths', $data) && $data['paths'] !== null) {
            $values_5 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['paths'] as $key_1 => $value_5) {
                if (preg_match('/^\\//', (string) $key_1) && is_array($value_5)) {
                    $values_5[$key_1] = $this->denormalizer->denormalize($value_5, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\PathItem', 'json', $context);
                    continue;
                }
                if (preg_match('/^x-/', (string) $key_1) && isset($value_5)) {
                    $values_5[$key_1] = $value_5;
                    continue;
                }
            }
            $object->setPaths($values_5);
            unset($data['paths']);
        }
        elseif (\array_key_exists('paths', $data) && $data['paths'] === null) {
            $object->setPaths(null);
        }
        if (\array_key_exists('components', $data) && $data['components'] !== null) {
            $object->setComponents($this->denormalizer->denormalize($data['components'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Components', 'json', $context));
            unset($data['components']);
        }
        elseif (\array_key_exists('components', $data) && $data['components'] === null) {
            $object->setComponents(null);
        }
        foreach ($data as $key_2 => $value_6) {
            if (preg_match('/^x-/', (string) $key_2)) {
                $object[$key_2] = $value_6;
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
        $data['openapi'] = $object->getOpenapi();
        $data['info'] = $this->normalizer->normalize($object->getInfo(), 'json', $context);
        if ($object->isInitialized('externalDocs') && null !== $object->getExternalDocs()) {
            $data['externalDocs'] = $this->normalizer->normalize($object->getExternalDocs(), 'json', $context);
        }
        if ($object->isInitialized('servers') && null !== $object->getServers()) {
            $values = [];
            foreach ($object->getServers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['servers'] = $values;
        }
        if ($object->isInitialized('security') && null !== $object->getSecurity()) {
            $values_1 = [];
            foreach ($object->getSecurity() as $value_1) {
                $values_2 = [];
                foreach ($value_1 as $key => $value_2) {
                    $values_3 = [];
                    foreach ($value_2 as $value_3) {
                        $values_3[] = $value_3;
                    }
                    $values_2[$key] = $values_3;
                }
                $values_1[] = $values_2;
            }
            $data['security'] = $values_1;
        }
        if ($object->isInitialized('tags') && null !== $object->getTags()) {
            $values_4 = [];
            foreach ($object->getTags() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['tags'] = $values_4;
        }
        $values_5 = [];
        foreach ($object->getPaths() as $key_1 => $value_5) {
            if (preg_match('/^\\//', (string) $key_1) && is_object($value_5)) {
                $values_5[$key_1] = $this->normalizer->normalize($value_5, 'json', $context);
                continue;
            }
            if (preg_match('/^x-/', (string) $key_1) && !is_null($value_5)) {
                $values_5[$key_1] = $value_5;
                continue;
            }
        }
        $data['paths'] = $values_5;
        if ($object->isInitialized('components') && null !== $object->getComponents()) {
            $data['components'] = $this->normalizer->normalize($object->getComponents(), 'json', $context);
        }
        foreach ($object as $key_2 => $value_6) {
            if (preg_match('/^x-/', (string) $key_2)) {
                $data[$key_2] = $value_6;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return ['Jane\\Component\\OpenApi3\\JsonSchema\\Model\\OpenApi' => false];
    }
}