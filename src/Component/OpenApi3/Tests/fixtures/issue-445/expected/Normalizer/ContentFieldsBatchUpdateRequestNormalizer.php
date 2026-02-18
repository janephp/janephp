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
class ContentFieldsBatchUpdateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ContentFieldsBatchUpdateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ContentFieldsBatchUpdateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\ContentFieldsBatchUpdateRequest();
        if (\array_key_exists('allowMissingDependencies', $data) && \is_int($data['allowMissingDependencies'])) {
            $data['allowMissingDependencies'] = (bool) $data['allowMissingDependencies'];
        }
        if (\array_key_exists('notifyProgress', $data) && \is_int($data['notifyProgress'])) {
            $data['notifyProgress'] = (bool) $data['notifyProgress'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('changeCommands', $data)) {
            $values = [];
            foreach ($data['changeCommands'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\MetadataValuesChangeCommandBase::class, 'json', $context);
            }
            $object->setChangeCommands($values);
            unset($data['changeCommands']);
        }
        if (\array_key_exists('allowMissingDependencies', $data)) {
            $object->setAllowMissingDependencies($data['allowMissingDependencies']);
            unset($data['allowMissingDependencies']);
        }
        if (\array_key_exists('notifyProgress', $data)) {
            $object->setNotifyProgress($data['notifyProgress']);
            unset($data['notifyProgress']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('contentIds', $data)) {
            $values_1 = [];
            foreach ($data['contentIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setContentIds($values_1);
            unset($data['contentIds']);
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
        $values = [];
        foreach ($data->getChangeCommands() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['changeCommands'] = $values;
        $dataArray['allowMissingDependencies'] = $data->getAllowMissingDependencies();
        $dataArray['notifyProgress'] = $data->getNotifyProgress();
        $dataArray['kind'] = $data->getKind();
        $values_1 = [];
        foreach ($data->getContentIds() as $value_1) {
            $values_1[] = $value_1;
        }
        $dataArray['contentIds'] = $values_1;
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ContentFieldsBatchUpdateRequest::class => false];
    }
}