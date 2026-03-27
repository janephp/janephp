<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
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
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\NodeInfoMessage::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\NodeInfoMessage::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\NodeInfoMessage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('deduplicate', $data) && \is_int($data['deduplicate'])) {
            $data['deduplicate'] = (bool) $data['deduplicate'];
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('retries', $data)) {
            $object->setRetries($data['retries']);
            unset($data['retries']);
        }
        if (\array_key_exists('priority', $data)) {
            $object->setPriority($data['priority']);
            unset($data['priority']);
        }
        if (\array_key_exists('deduplicate', $data)) {
            $object->setDeduplicate($data['deduplicate']);
            unset($data['deduplicate']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('nodeId', $data) && $data['nodeId'] !== null) {
            $object->setNodeId($data['nodeId']);
            unset($data['nodeId']);
        }
        elseif (\array_key_exists('nodeId', $data) && $data['nodeId'] === null) {
            $object->setNodeId(null);
        }
        if (\array_key_exists('hostName', $data) && $data['hostName'] !== null) {
            $object->setHostName($data['hostName']);
            unset($data['hostName']);
        }
        elseif (\array_key_exists('hostName', $data) && $data['hostName'] === null) {
            $object->setHostName(null);
        }
        if (\array_key_exists('lastResponseTime', $data)) {
            $object->setLastResponseTime(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastResponseTime']));
            unset($data['lastResponseTime']);
        }
        if (\array_key_exists('serviceName', $data) && $data['serviceName'] !== null) {
            $object->setServiceName($data['serviceName']);
            unset($data['serviceName']);
        }
        elseif (\array_key_exists('serviceName', $data) && $data['serviceName'] === null) {
            $object->setServiceName(null);
        }
        if (\array_key_exists('fileVersion', $data) && $data['fileVersion'] !== null) {
            $object->setFileVersion($data['fileVersion']);
            unset($data['fileVersion']);
        }
        elseif (\array_key_exists('fileVersion', $data) && $data['fileVersion'] === null) {
            $object->setFileVersion(null);
        }
        if (\array_key_exists('productVersion', $data) && $data['productVersion'] !== null) {
            $object->setProductVersion($data['productVersion']);
            unset($data['productVersion']);
        }
        elseif (\array_key_exists('productVersion', $data) && $data['productVersion'] === null) {
            $object->setProductVersion(null);
        }
        if (\array_key_exists('release', $data) && $data['release'] !== null) {
            $object->setRelease($data['release']);
            unset($data['release']);
        }
        elseif (\array_key_exists('release', $data) && $data['release'] === null) {
            $object->setRelease(null);
        }
        if (\array_key_exists('logLevel', $data) && $data['logLevel'] !== null) {
            $object->setLogLevel($data['logLevel']);
            unset($data['logLevel']);
        }
        elseif (\array_key_exists('logLevel', $data) && $data['logLevel'] === null) {
            $object->setLogLevel(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id')) {
            $dataArray['id'] = $data->getId();
        }
        $dataArray['retries'] = $data->getRetries();
        $dataArray['priority'] = $data->getPriority();
        $dataArray['deduplicate'] = $data->getDeduplicate();
        $dataArray['kind'] = $data->getKind();
        if ($data->isInitialized('nodeId')) {
            $dataArray['nodeId'] = $data->getNodeId();
        }
        if ($data->isInitialized('hostName')) {
            $dataArray['hostName'] = $data->getHostName();
        }
        if ($data->isInitialized('lastResponseTime') && null !== $data->getLastResponseTime()) {
            $dataArray['lastResponseTime'] = $data->getLastResponseTime()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('serviceName')) {
            $dataArray['serviceName'] = $data->getServiceName();
        }
        if ($data->isInitialized('fileVersion')) {
            $dataArray['fileVersion'] = $data->getFileVersion();
        }
        if ($data->isInitialized('productVersion')) {
            $dataArray['productVersion'] = $data->getProductVersion();
        }
        if ($data->isInitialized('release')) {
            $dataArray['release'] = $data->getRelease();
        }
        if ($data->isInitialized('logLevel')) {
            $dataArray['logLevel'] = $data->getLogLevel();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\NodeInfoMessage::class => false];
    }
}