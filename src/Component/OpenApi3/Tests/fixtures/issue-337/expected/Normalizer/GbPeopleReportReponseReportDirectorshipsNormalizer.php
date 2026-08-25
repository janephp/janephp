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
class GbPeopleReportReponseReportDirectorshipsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorships::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorships::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorships();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('current', $data)) {
            $values = [];
            foreach ($data['current'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsCurrentItem::class, 'json', $context);
            }
            $object->setCurrent($values);
            unset($data['current']);
        }
        if (\array_key_exists('inactive', $data)) {
            $values_1 = [];
            foreach ($data['inactive'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItem::class, 'json', $context);
            }
            $object->setInactive($values_1);
            unset($data['inactive']);
        }
        if (\array_key_exists('previous', $data)) {
            $values_2 = [];
            foreach ($data['previous'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsPreviousItem::class, 'json', $context);
            }
            $object->setPrevious($values_2);
            unset($data['previous']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('current') && null !== $data->getCurrent()) {
            $values = [];
            foreach ($data->getCurrent() as $value) {
                $values[] = $value === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['current'] = $values;
        }
        if ($data->isInitialized('inactive') && null !== $data->getInactive()) {
            $values_1 = [];
            foreach ($data->getInactive() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['inactive'] = $values_1;
        }
        if ($data->isInitialized('previous') && null !== $data->getPrevious()) {
            $values_2 = [];
            foreach ($data->getPrevious() as $value_2) {
                $values_2[] = $value_2 === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['previous'] = $values_2;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\CreditSafe\API\Model\GbPeopleReportReponseReportDirectorships::class => false];
    }
}