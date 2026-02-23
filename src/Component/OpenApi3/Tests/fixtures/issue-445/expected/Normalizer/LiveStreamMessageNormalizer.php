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
class LiveStreamMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\LiveStreamMessage::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\LiveStreamMessage::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\LiveStreamMessage();
        if (\array_key_exists('deduplicate', $data) && \is_int($data['deduplicate'])) {
            $data['deduplicate'] = (bool) $data['deduplicate'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('customerId', $data) && $data['customerId'] !== null) {
            $object->setCustomerId($data['customerId']);
            unset($data['customerId']);
        }
        elseif (\array_key_exists('customerId', $data) && $data['customerId'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('customerAlias', $data) && $data['customerAlias'] !== null) {
            $object->setCustomerAlias($data['customerAlias']);
            unset($data['customerAlias']);
        }
        elseif (\array_key_exists('customerAlias', $data) && $data['customerAlias'] === null) {
            $object->setCustomerAlias(null);
        }
        if (\array_key_exists('timestamp', $data)) {
            $object->setTimestamp(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['timestamp']));
            unset($data['timestamp']);
        }
        if (\array_key_exists('scope', $data) && $data['scope'] !== null) {
            $object->setScope($data['scope']);
            unset($data['scope']);
        }
        elseif (\array_key_exists('scope', $data) && $data['scope'] === null) {
            $object->setScope(null);
        }
        if (\array_key_exists('documentChange', $data) && $data['documentChange'] !== null) {
            $value = $data['documentChange'];
            if (is_array($data['documentChange']) and isset($data['documentChange']['version']) and isset($data['documentChange']['timeStamp'])) {
                $value = $this->denormalizer->denormalize($data['documentChange'], \PicturePark\API\Model\DocumentChange::class, 'json', $context);
            }
            $object->setDocumentChange($value);
            unset($data['documentChange']);
        }
        elseif (\array_key_exists('documentChange', $data) && $data['documentChange'] === null) {
            $object->setDocumentChange(null);
        }
        if (\array_key_exists('applicationEvent', $data) && $data['applicationEvent'] !== null) {
            $value_1 = $data['applicationEvent'];
            if (is_array($data['applicationEvent']) and isset($data['applicationEvent']['timestamp']) and isset($data['applicationEvent']['kind'])) {
                $value_1 = $this->denormalizer->denormalize($data['applicationEvent'], \PicturePark\API\Model\ApplicationEvent::class, 'json', $context);
            }
            $object->setApplicationEvent($value_1);
            unset($data['applicationEvent']);
        }
        elseif (\array_key_exists('applicationEvent', $data) && $data['applicationEvent'] === null) {
            $object->setApplicationEvent(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        if ($data->isInitialized('customerId')) {
            $dataArray['customerId'] = $data->getCustomerId();
        }
        if ($data->isInitialized('customerAlias')) {
            $dataArray['customerAlias'] = $data->getCustomerAlias();
        }
        if ($data->isInitialized('timestamp') && null !== $data->getTimestamp()) {
            $dataArray['timestamp'] = $data->getTimestamp()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('scope')) {
            $dataArray['scope'] = $data->getScope();
        }
        if ($data->isInitialized('documentChange')) {
            $value = $data->getDocumentChange();
            if (is_object($data->getDocumentChange())) {
                $value = $this->normalizer->normalize($data->getDocumentChange(), 'json', $context);
            }
            $dataArray['documentChange'] = $value;
        }
        if ($data->isInitialized('applicationEvent')) {
            $value_1 = $data->getApplicationEvent();
            if (is_object($data->getApplicationEvent())) {
                $value_1 = $this->normalizer->normalize($data->getApplicationEvent(), 'json', $context);
            }
            $dataArray['applicationEvent'] = $value_1;
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\LiveStreamMessage::class => false];
    }
}