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
class BusinessProcessWaitForStateResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessProcessWaitForStateResult::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessProcessWaitForStateResult::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\BusinessProcessWaitForStateResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('stateHit', $data) && $data['stateHit'] !== null) {
            $object->setStateHit($data['stateHit']);
        }
        elseif (\array_key_exists('stateHit', $data) && $data['stateHit'] === null) {
            $object->setStateHit(null);
        }
        if (\array_key_exists('businessProcess', $data)) {
            $value = $data['businessProcess'];
            if (is_array($data['businessProcess']) and isset($data['businessProcess']['id']) and isset($data['businessProcess']['processDefinitionId']) and isset($data['businessProcess']['supportsCancellation']) and isset($data['businessProcess']['businessProcessScope']) and isset($data['businessProcess']['lifeCycle']) and isset($data['businessProcess']['startDate']) and isset($data['businessProcess']['endDate']) and isset($data['businessProcess']['finished']) and isset($data['businessProcess']['kind'])) {
                $value = $this->denormalizer->denormalize($data['businessProcess'], \PicturePark\API\Model\BusinessProcess::class, 'json', $context);
            }
            $object->setBusinessProcess($value);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('stateHit')) {
            $dataArray['stateHit'] = $data->getStateHit();
        }
        $value = $data->getBusinessProcess();
        if (is_object($data->getBusinessProcess())) {
            $value = $this->normalizer->normalize($data->getBusinessProcess(), 'json', $context);
        }
        $dataArray['businessProcess'] = $value;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessProcessWaitForStateResult::class => false];
    }
}