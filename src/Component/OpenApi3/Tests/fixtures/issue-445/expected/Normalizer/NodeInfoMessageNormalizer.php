<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class NodeInfoMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\NodeInfoMessage';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\NodeInfoMessage';
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
        $object = new \PicturePark\API\Model\NodeInfoMessage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('retries', $data)) {
            $object->setRetries($data['retries']);
        }
        if (\array_key_exists('priority', $data)) {
            $object->setPriority($data['priority']);
        }
        if (\array_key_exists('deduplicate', $data)) {
            $object->setDeduplicate($data['deduplicate']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        if (\array_key_exists('nodeId', $data) && $data['nodeId'] !== null) {
            $object->setNodeId($data['nodeId']);
        }
        elseif (\array_key_exists('nodeId', $data) && $data['nodeId'] === null) {
            $object->setNodeId(null);
        }
        if (\array_key_exists('hostName', $data) && $data['hostName'] !== null) {
            $object->setHostName($data['hostName']);
        }
        elseif (\array_key_exists('hostName', $data) && $data['hostName'] === null) {
            $object->setHostName(null);
        }
        if (\array_key_exists('lastResponseTime', $data)) {
            $object->setLastResponseTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['lastResponseTime']));
        }
        if (\array_key_exists('serviceName', $data) && $data['serviceName'] !== null) {
            $object->setServiceName($data['serviceName']);
        }
        elseif (\array_key_exists('serviceName', $data) && $data['serviceName'] === null) {
            $object->setServiceName(null);
        }
        if (\array_key_exists('fileVersion', $data) && $data['fileVersion'] !== null) {
            $object->setFileVersion($data['fileVersion']);
        }
        elseif (\array_key_exists('fileVersion', $data) && $data['fileVersion'] === null) {
            $object->setFileVersion(null);
        }
        if (\array_key_exists('productVersion', $data) && $data['productVersion'] !== null) {
            $object->setProductVersion($data['productVersion']);
        }
        elseif (\array_key_exists('productVersion', $data) && $data['productVersion'] === null) {
            $object->setProductVersion(null);
        }
        if (\array_key_exists('release', $data) && $data['release'] !== null) {
            $object->setRelease($data['release']);
        }
        elseif (\array_key_exists('release', $data) && $data['release'] === null) {
            $object->setRelease(null);
        }
        if (\array_key_exists('logLevel', $data) && $data['logLevel'] !== null) {
            $object->setLogLevel($data['logLevel']);
        }
        elseif (\array_key_exists('logLevel', $data) && $data['logLevel'] === null) {
            $object->setLogLevel(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        $data['retries'] = $object->getRetries();
        $data['priority'] = $object->getPriority();
        $data['deduplicate'] = $object->getDeduplicate();
        $data['kind'] = $object->getKind();
        if (null !== $object->getNodeId()) {
            $data['nodeId'] = $object->getNodeId();
        }
        if (null !== $object->getHostName()) {
            $data['hostName'] = $object->getHostName();
        }
        if (null !== $object->getLastResponseTime()) {
            $data['lastResponseTime'] = $object->getLastResponseTime()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getServiceName()) {
            $data['serviceName'] = $object->getServiceName();
        }
        if (null !== $object->getFileVersion()) {
            $data['fileVersion'] = $object->getFileVersion();
        }
        if (null !== $object->getProductVersion()) {
            $data['productVersion'] = $object->getProductVersion();
        }
        if (null !== $object->getRelease()) {
            $data['release'] = $object->getRelease();
        }
        if (null !== $object->getLogLevel()) {
            $data['logLevel'] = $object->getLogLevel();
        }
        return $data;
    }
}