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
class OperationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Operation';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return $data instanceof \Jane\Component\OpenApi3\JsonSchema\Model\Operation;
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\JsonSchema\Model\Operation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values = array();
            foreach ($data['tags'] as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
            unset($data['tags']);
        }
        elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->setTags(null);
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
        if (\array_key_exists('externalDocs', $data) && $data['externalDocs'] !== null) {
            $object->setExternalDocs($this->denormalizer->denormalize($data['externalDocs'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\ExternalDocumentation', 'json', $context));
            unset($data['externalDocs']);
        }
        elseif (\array_key_exists('externalDocs', $data) && $data['externalDocs'] === null) {
            $object->setExternalDocs(null);
        }
        if (\array_key_exists('operationId', $data) && $data['operationId'] !== null) {
            $object->setOperationId($data['operationId']);
            unset($data['operationId']);
        }
        elseif (\array_key_exists('operationId', $data) && $data['operationId'] === null) {
            $object->setOperationId(null);
        }
        if (\array_key_exists('parameters', $data) && $data['parameters'] !== null) {
            $values_1 = array();
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
        if (\array_key_exists('requestBody', $data) && $data['requestBody'] !== null) {
            $value_3 = $data['requestBody'];
            if (is_array($data['requestBody']) and isset($data['requestBody']['$ref'])) {
                $value_3 = $this->denormalizer->denormalize($data['requestBody'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Reference', 'json', $context);
            } elseif (is_array($data['requestBody']) and isset($data['requestBody']['content'])) {
                $value_3 = $this->denormalizer->denormalize($data['requestBody'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\RequestBody', 'json', $context);
            }
            $object->setRequestBody($value_3);
            unset($data['requestBody']);
        }
        elseif (\array_key_exists('requestBody', $data) && $data['requestBody'] === null) {
            $object->setRequestBody(null);
        }
        if (\array_key_exists('responses', $data) && $data['responses'] !== null) {
            $object->setResponses($this->denormalizer->denormalize($data['responses'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Responses', 'json', $context));
            unset($data['responses']);
        }
        elseif (\array_key_exists('responses', $data) && $data['responses'] === null) {
            $object->setResponses(null);
        }
        if (\array_key_exists('callbacks', $data) && $data['callbacks'] !== null) {
            $values_2 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['callbacks'] as $key => $value_4) {
                $value_5 = $value_4;
                if (is_array($value_4) and isset($value_4['$ref'])) {
                    $value_5 = $this->denormalizer->denormalize($value_4, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Reference', 'json', $context);
                } elseif (isset($value_4)) {
                    $values_3 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value_4 as $key_1 => $value_6) {
                        if (preg_match('/^x-/', (string) $key_1) && isset($value_6)) {
                            $values_3[$key_1] = $value_6;
                            continue;
                        }
                    }
                    $value_5 = $values_3;
                }
                $values_2[$key] = $value_5;
            }
            $object->setCallbacks($values_2);
            unset($data['callbacks']);
        }
        elseif (\array_key_exists('callbacks', $data) && $data['callbacks'] === null) {
            $object->setCallbacks(null);
        }
        if (\array_key_exists('deprecated', $data) && $data['deprecated'] !== null) {
            $object->setDeprecated($data['deprecated']);
            unset($data['deprecated']);
        }
        elseif (\array_key_exists('deprecated', $data) && $data['deprecated'] === null) {
            $object->setDeprecated(null);
        }
        if (\array_key_exists('security', $data) && $data['security'] !== null) {
            $values_4 = array();
            foreach ($data['security'] as $value_7) {
                $values_5 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value_7 as $key_2 => $value_8) {
                    $values_6 = array();
                    foreach ($value_8 as $value_9) {
                        $values_6[] = $value_9;
                    }
                    $values_5[$key_2] = $values_6;
                }
                $values_4[] = $values_5;
            }
            $object->setSecurity($values_4);
            unset($data['security']);
        }
        elseif (\array_key_exists('security', $data) && $data['security'] === null) {
            $object->setSecurity(null);
        }
        if (\array_key_exists('servers', $data) && $data['servers'] !== null) {
            $values_7 = array();
            foreach ($data['servers'] as $value_10) {
                $values_7[] = $this->denormalizer->denormalize($value_10, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Server', 'json', $context);
            }
            $object->setServers($values_7);
            unset($data['servers']);
        }
        elseif (\array_key_exists('servers', $data) && $data['servers'] === null) {
            $object->setServers(null);
        }
        foreach ($data as $key_3 => $value_11) {
            if (preg_match('/^x-/', (string) $key_3)) {
                $object[$key_3] = $value_11;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTags()) {
            $values = array();
            foreach ($object->getTags() as $value) {
                $values[] = $value;
            }
            $data['tags'] = $values;
        }
        if (null !== $object->getSummary()) {
            $data['summary'] = $object->getSummary();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getExternalDocs()) {
            $data['externalDocs'] = $this->normalizer->normalize($object->getExternalDocs(), 'json', $context);
        }
        if (null !== $object->getOperationId()) {
            $data['operationId'] = $object->getOperationId();
        }
        if (null !== $object->getParameters()) {
            $values_1 = array();
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
        if (null !== $object->getRequestBody()) {
            $value_3 = $object->getRequestBody();
            if (is_object($object->getRequestBody())) {
                $value_3 = $this->normalizer->normalize($object->getRequestBody(), 'json', $context);
            } elseif (is_object($object->getRequestBody())) {
                $value_3 = $this->normalizer->normalize($object->getRequestBody(), 'json', $context);
            }
            $data['requestBody'] = $value_3;
        }
        $data['responses'] = $this->normalizer->normalize($object->getResponses(), 'json', $context);
        if (null !== $object->getCallbacks()) {
            $values_2 = array();
            foreach ($object->getCallbacks() as $key => $value_4) {
                $value_5 = $value_4;
                if (is_object($value_4)) {
                    $value_5 = $this->normalizer->normalize($value_4, 'json', $context);
                } elseif (!is_null($value_4)) {
                    $values_3 = array();
                    foreach ($value_4 as $key_1 => $value_6) {
                        if (preg_match('/^x-/', (string) $key_1) && !is_null($value_6)) {
                            $values_3[$key_1] = $value_6;
                            continue;
                        }
                    }
                    $value_5 = $values_3;
                }
                $values_2[$key] = $value_5;
            }
            $data['callbacks'] = $values_2;
        }
        if (null !== $object->getDeprecated()) {
            $data['deprecated'] = $object->getDeprecated();
        }
        if (null !== $object->getSecurity()) {
            $values_4 = array();
            foreach ($object->getSecurity() as $value_7) {
                $values_5 = array();
                foreach ($value_7 as $key_2 => $value_8) {
                    $values_6 = array();
                    foreach ($value_8 as $value_9) {
                        $values_6[] = $value_9;
                    }
                    $values_5[$key_2] = $values_6;
                }
                $values_4[] = $values_5;
            }
            $data['security'] = $values_4;
        }
        if (null !== $object->getServers()) {
            $values_7 = array();
            foreach ($object->getServers() as $value_10) {
                $values_7[] = $this->normalizer->normalize($value_10, 'json', $context);
            }
            $data['servers'] = $values_7;
        }
        foreach ($object as $key_3 => $value_11) {
            if (preg_match('/^x-/', (string) $key_3)) {
                $data[$key_3] = $value_11;
            }
        }
        return $data;
    }
}