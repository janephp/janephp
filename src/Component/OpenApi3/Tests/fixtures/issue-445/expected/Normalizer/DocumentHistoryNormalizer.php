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
class DocumentHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\DocumentHistory::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\DocumentHistory::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\DocumentHistory();
        if (\array_key_exists('deleted', $data) && \is_int($data['deleted'])) {
            $data['deleted'] = (bool) $data['deleted'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('documentId', $data) && $data['documentId'] !== null) {
            $object->setDocumentId($data['documentId']);
        }
        elseif (\array_key_exists('documentId', $data) && $data['documentId'] === null) {
            $object->setDocumentId(null);
        }
        if (\array_key_exists('documentVersion', $data)) {
            $object->setDocumentVersion($data['documentVersion']);
        }
        if (\array_key_exists('documentType', $data) && $data['documentType'] !== null) {
            $object->setDocumentType($data['documentType']);
        }
        elseif (\array_key_exists('documentType', $data) && $data['documentType'] === null) {
            $object->setDocumentType(null);
        }
        if (\array_key_exists('documentDate', $data)) {
            $object->setDocumentDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['documentDate']));
        }
        if (\array_key_exists('document', $data) && $data['document'] !== null) {
            $object->setDocument($data['document']);
        }
        elseif (\array_key_exists('document', $data) && $data['document'] === null) {
            $object->setDocument(null);
        }
        if (\array_key_exists('timestamp', $data)) {
            $object->setTimestamp(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['timestamp']));
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $object->setAudit($data['audit']);
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->setAudit(null);
        }
        if (\array_key_exists('deleted', $data)) {
            $object->setDeleted($data['deleted']);
        }
        if (\array_key_exists('action', $data)) {
            $object->setAction($data['action']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('documentId')) {
            $dataArray['documentId'] = $data->getDocumentId();
        }
        $dataArray['documentVersion'] = $data->getDocumentVersion();
        if ($data->isInitialized('documentType')) {
            $dataArray['documentType'] = $data->getDocumentType();
        }
        $dataArray['documentDate'] = $data->getDocumentDate()->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('document')) {
            $dataArray['document'] = $data->getDocument();
        }
        $dataArray['timestamp'] = $data->getTimestamp()->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('audit')) {
            $dataArray['audit'] = $data->getAudit();
        }
        $dataArray['deleted'] = $data->getDeleted();
        $dataArray['action'] = $data->getAction();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\DocumentHistory::class => false];
    }
}