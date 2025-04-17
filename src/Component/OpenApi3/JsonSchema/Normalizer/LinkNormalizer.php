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
class LinkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []) : bool
    {
        return $type === 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Link';
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return $data instanceof \Jane\Component\OpenApi3\JsonSchema\Model\Link;
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
        $object = new \Jane\Component\OpenApi3\JsonSchema\Model\Link();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('operationId', $data) && $data['operationId'] !== null) {
            $object->setOperationId($data['operationId']);
            unset($data['operationId']);
        }
        elseif (\array_key_exists('operationId', $data) && $data['operationId'] === null) {
            $object->setOperationId(null);
        }
        if (\array_key_exists('operationRef', $data) && $data['operationRef'] !== null) {
            $object->setOperationRef($data['operationRef']);
            unset($data['operationRef']);
        }
        elseif (\array_key_exists('operationRef', $data) && $data['operationRef'] === null) {
            $object->setOperationRef(null);
        }
        if (\array_key_exists('parameters', $data) && $data['parameters'] !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['parameters'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setParameters($values);
            unset($data['parameters']);
        }
        elseif (\array_key_exists('parameters', $data) && $data['parameters'] === null) {
            $object->setParameters(null);
        }
        if (\array_key_exists('requestBody', $data) && $data['requestBody'] !== null) {
            $object->setRequestBody($data['requestBody']);
            unset($data['requestBody']);
        }
        elseif (\array_key_exists('requestBody', $data) && $data['requestBody'] === null) {
            $object->setRequestBody(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('server', $data) && $data['server'] !== null) {
            $object->setServer($this->denormalizer->denormalize($data['server'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Server', 'json', $context));
            unset($data['server']);
        }
        elseif (\array_key_exists('server', $data) && $data['server'] === null) {
            $object->setServer(null);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/^x-/', (string) $key_1)) {
                $object[$key_1] = $value_1;
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
        if ($object->isInitialized('operationId') && null !== $object->getOperationId()) {
            $data['operationId'] = $object->getOperationId();
        }
        if ($object->isInitialized('operationRef') && null !== $object->getOperationRef()) {
            $data['operationRef'] = $object->getOperationRef();
        }
        if ($object->isInitialized('parameters') && null !== $object->getParameters()) {
            $values = [];
            foreach ($object->getParameters() as $key => $value) {
                $values[$key] = $value;
            }
            $data['parameters'] = $values;
        }
        if ($object->isInitialized('requestBody') && null !== $object->getRequestBody()) {
            $data['requestBody'] = $object->getRequestBody();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('server') && null !== $object->getServer()) {
            $data['server'] = $this->normalizer->normalize($object->getServer(), 'json', $context);
        }
        foreach ($object as $key_1 => $value_1) {
            if (preg_match('/^x-/', (string) $key_1)) {
                $data[$key_1] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return ['Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Link' => false];
    }
}