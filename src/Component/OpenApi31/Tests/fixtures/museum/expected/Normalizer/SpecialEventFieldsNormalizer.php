<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SpecialEventFieldsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\Model\SpecialEventFields::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\Model\SpecialEventFields::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi31\Tests\Expected\Model\SpecialEventFields();
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (double) $data['price'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\Validator\SpecialEventFieldsConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($data['location']);
        }
        if (\array_key_exists('eventDescription', $data)) {
            $object->setEventDescription($data['eventDescription']);
        }
        if (\array_key_exists('dates', $data)) {
            $values = [];
            foreach ($data['dates'] as $value) {
                $values[] = \DateTime::createFromFormat('Y-m-d', $value)->setTime(0, 0, 0);
            }
            $object->setDates($values);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = $data->getLocation();
        }
        if ($data->isInitialized('eventDescription') && null !== $data->getEventDescription()) {
            $dataArray['eventDescription'] = $data->getEventDescription();
        }
        if ($data->isInitialized('dates') && null !== $data->getDates()) {
            $values = [];
            foreach ($data->getDates() as $value) {
                $values[] = $value?->format('Y-m-d');
            }
            $dataArray['dates'] = $values;
        }
        if ($data->isInitialized('price') && null !== $data->getPrice()) {
            $dataArray['price'] = $data->getPrice();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\Validator\SpecialEventFieldsConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\Model\SpecialEventFields::class => false];
    }
}