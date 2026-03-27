<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class NetworkAttachmentConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\NetworkAttachmentConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\NetworkAttachmentConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\NetworkAttachmentConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\NetworkAttachmentConfigConstraint());
        }
        if (\array_key_exists('Target', $data)) {
            $object->setTarget($data['Target']);
        }
        if (\array_key_exists('Aliases', $data)) {
            $values = [];
            foreach ($data['Aliases'] as $value) {
                $values[] = $value;
            }
            $object->setAliases($values);
        }
        if (\array_key_exists('DriverOpts', $data)) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['DriverOpts'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setDriverOpts($values_1);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('target') && null !== $data->getTarget()) {
            $dataArray['Target'] = $data->getTarget();
        }
        if ($data->isInitialized('aliases') && null !== $data->getAliases()) {
            $values = [];
            foreach ($data->getAliases() as $value) {
                $values[] = $value;
            }
            $dataArray['Aliases'] = $values;
        }
        if ($data->isInitialized('driverOpts') && null !== $data->getDriverOpts()) {
            $values_1 = [];
            foreach ($data->getDriverOpts() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $dataArray['DriverOpts'] = $values_1;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\NetworkAttachmentConfigConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\NetworkAttachmentConfig::class => false];
    }
}