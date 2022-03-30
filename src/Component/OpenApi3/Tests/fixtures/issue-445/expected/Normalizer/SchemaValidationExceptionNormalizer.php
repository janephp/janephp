<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SchemaValidationExceptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\SchemaValidationException';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\SchemaValidationException';
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
        $object = new \PicturePark\API\Model\SchemaValidationException();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('traceLevel', $data)) {
            $object->setTraceLevel($data['traceLevel']);
        }
        if (\array_key_exists('traceId', $data) && $data['traceId'] !== null) {
            $object->setTraceId($data['traceId']);
        }
        elseif (\array_key_exists('traceId', $data) && $data['traceId'] === null) {
            $object->setTraceId(null);
        }
        if (\array_key_exists('traceJobId', $data) && $data['traceJobId'] !== null) {
            $object->setTraceJobId($data['traceJobId']);
        }
        elseif (\array_key_exists('traceJobId', $data) && $data['traceJobId'] === null) {
            $object->setTraceJobId(null);
        }
        if (\array_key_exists('httpStatusCode', $data)) {
            $object->setHttpStatusCode($data['httpStatusCode']);
        }
        if (\array_key_exists('exceptionMessage', $data) && $data['exceptionMessage'] !== null) {
            $object->setExceptionMessage($data['exceptionMessage']);
        }
        elseif (\array_key_exists('exceptionMessage', $data) && $data['exceptionMessage'] === null) {
            $object->setExceptionMessage(null);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        if (\array_key_exists('customerId', $data) && $data['customerId'] !== null) {
            $object->setCustomerId($data['customerId']);
        }
        elseif (\array_key_exists('customerId', $data) && $data['customerId'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('customerAlias', $data) && $data['customerAlias'] !== null) {
            $object->setCustomerAlias($data['customerAlias']);
        }
        elseif (\array_key_exists('customerAlias', $data) && $data['customerAlias'] === null) {
            $object->setCustomerAlias(null);
        }
        if (\array_key_exists('userId', $data) && $data['userId'] !== null) {
            $object->setUserId($data['userId']);
        }
        elseif (\array_key_exists('userId', $data) && $data['userId'] === null) {
            $object->setUserId(null);
        }
        if (\array_key_exists('schemaId', $data) && $data['schemaId'] !== null) {
            $object->setSchemaId($data['schemaId']);
        }
        elseif (\array_key_exists('schemaId', $data) && $data['schemaId'] === null) {
            $object->setSchemaId(null);
        }
        if (\array_key_exists('exceptions', $data) && $data['exceptions'] !== null) {
            $values = array();
            foreach ($data['exceptions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\PictureparkBusinessException', 'json', $context);
            }
            $object->setExceptions($values);
        }
        elseif (\array_key_exists('exceptions', $data) && $data['exceptions'] === null) {
            $object->setExceptions(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTraceLevel()) {
            $data['traceLevel'] = $object->getTraceLevel();
        }
        if (null !== $object->getTraceId()) {
            $data['traceId'] = $object->getTraceId();
        }
        if (null !== $object->getTraceJobId()) {
            $data['traceJobId'] = $object->getTraceJobId();
        }
        if (null !== $object->getHttpStatusCode()) {
            $data['httpStatusCode'] = $object->getHttpStatusCode();
        }
        if (null !== $object->getExceptionMessage()) {
            $data['exceptionMessage'] = $object->getExceptionMessage();
        }
        $data['kind'] = $object->getKind();
        if (null !== $object->getCustomerId()) {
            $data['customerId'] = $object->getCustomerId();
        }
        if (null !== $object->getCustomerAlias()) {
            $data['customerAlias'] = $object->getCustomerAlias();
        }
        if (null !== $object->getUserId()) {
            $data['userId'] = $object->getUserId();
        }
        if (null !== $object->getSchemaId()) {
            $data['schemaId'] = $object->getSchemaId();
        }
        if (null !== $object->getExceptions()) {
            $values = array();
            foreach ($object->getExceptions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['exceptions'] = $values;
        }
        return $data;
    }
}