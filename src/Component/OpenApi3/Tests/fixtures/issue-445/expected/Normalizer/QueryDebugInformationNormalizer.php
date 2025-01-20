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
class QueryDebugInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\QueryDebugInformation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\QueryDebugInformation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\QueryDebugInformation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('general', $data) && $data['general'] !== null) {
            $object->setGeneral($data['general']);
        }
        elseif (\array_key_exists('general', $data) && $data['general'] === null) {
            $object->setGeneral(null);
        }
        if (\array_key_exists('auditTrail', $data) && $data['auditTrail'] !== null) {
            $object->setAuditTrail($data['auditTrail']);
        }
        elseif (\array_key_exists('auditTrail', $data) && $data['auditTrail'] === null) {
            $object->setAuditTrail(null);
        }
        if (\array_key_exists('request', $data) && $data['request'] !== null) {
            $object->setRequest($data['request']);
        }
        elseif (\array_key_exists('request', $data) && $data['request'] === null) {
            $object->setRequest(null);
        }
        if (\array_key_exists('response', $data) && $data['response'] !== null) {
            $object->setResponse($data['response']);
        }
        elseif (\array_key_exists('response', $data) && $data['response'] === null) {
            $object->setResponse(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('general') && null !== $data->getGeneral()) {
            $dataArray['general'] = $data->getGeneral();
        }
        if ($data->isInitialized('auditTrail') && null !== $data->getAuditTrail()) {
            $dataArray['auditTrail'] = $data->getAuditTrail();
        }
        if ($data->isInitialized('request') && null !== $data->getRequest()) {
            $dataArray['request'] = $data->getRequest();
        }
        if ($data->isInitialized('response') && null !== $data->getResponse()) {
            $dataArray['response'] = $data->getResponse();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\QueryDebugInformation::class => false];
    }
}