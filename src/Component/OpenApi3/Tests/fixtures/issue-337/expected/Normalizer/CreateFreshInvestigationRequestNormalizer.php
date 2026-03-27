<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CreateFreshInvestigationRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\CreateFreshInvestigationRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\CreateFreshInvestigationRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\CreateFreshInvestigationRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('consent', $data) && \is_int($data['consent'])) {
            $data['consent'] = (bool) $data['consent'];
        }
        if (\array_key_exists('consent', $data)) {
            $object->setConsent($data['consent']);
            unset($data['consent']);
        }
        if (\array_key_exists('contactInfo', $data)) {
            $object->setContactInfo($this->denormalizer->denormalize($data['contactInfo'], \CreditSafe\API\Model\CreateFreshInvestigationRequestContactInfo::class, 'json', $context));
            unset($data['contactInfo']);
        }
        if (\array_key_exists('chargeReference', $data)) {
            $object->setChargeReference($data['chargeReference']);
            unset($data['chargeReference']);
        }
        if (\array_key_exists('searchCriteria', $data)) {
            $object->setSearchCriteria($this->denormalizer->denormalize($data['searchCriteria'], \CreditSafe\API\Model\CreateFreshInvestigationRequestSearchCriteria::class, 'json', $context));
            unset($data['searchCriteria']);
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
        if ($data->isInitialized('consent') && null !== $data->getConsent()) {
            $dataArray['consent'] = $data->getConsent();
        }
        if ($data->isInitialized('contactInfo') && null !== $data->getContactInfo()) {
            $dataArray['contactInfo'] = $this->normalizer->normalize($data->getContactInfo(), 'json', $context);
        }
        if ($data->isInitialized('chargeReference') && null !== $data->getChargeReference()) {
            $dataArray['chargeReference'] = $data->getChargeReference();
        }
        if ($data->isInitialized('searchCriteria') && null !== $data->getSearchCriteria()) {
            $dataArray['searchCriteria'] = $this->normalizer->normalize($data->getSearchCriteria(), 'json', $context);
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
        return [\CreditSafe\API\Model\CreateFreshInvestigationRequest::class => false];
    }
}