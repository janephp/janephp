<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ApiModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiModel::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiModel::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\ApiModel();
        if (\array_key_exists('is_foundational', $data) && \is_int($data['is_foundational'])) {
            $data['is_foundational'] = (bool) $data['is_foundational'];
        }
        if (\array_key_exists('upload_complete', $data) && \is_int($data['upload_complete'])) {
            $data['upload_complete'] = (bool) $data['upload_complete'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('agreement', $data)) {
            $object->setAgreement($this->denormalizer->denormalize($data['agreement'], \Jane\Generated\DigitalOcean\Model\ApiAgreement::class, 'json', $context));
            unset($data['agreement']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('inference_name', $data)) {
            $object->setInferenceName($data['inference_name']);
            unset($data['inference_name']);
        }
        if (\array_key_exists('inference_version', $data)) {
            $object->setInferenceVersion($data['inference_version']);
            unset($data['inference_version']);
        }
        if (\array_key_exists('is_foundational', $data)) {
            $object->setIsFoundational($data['is_foundational']);
            unset($data['is_foundational']);
        }
        if (\array_key_exists('metadata', $data)) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setMetadata($values);
            unset($data['metadata']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('parent_uuid', $data)) {
            $object->setParentUuid($data['parent_uuid']);
            unset($data['parent_uuid']);
        }
        if (\array_key_exists('provider', $data)) {
            $object->setProvider($data['provider']);
            unset($data['provider']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (\array_key_exists('upload_complete', $data)) {
            $object->setUploadComplete($data['upload_complete']);
            unset($data['upload_complete']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('usecases', $data)) {
            $values_1 = [];
            foreach ($data['usecases'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setUsecases($values_1);
            unset($data['usecases']);
        }
        if (\array_key_exists('uuid', $data)) {
            $object->setUuid($data['uuid']);
            unset($data['uuid']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($this->denormalizer->denormalize($data['version'], \Jane\Generated\DigitalOcean\Model\ApiModelVersion::class, 'json', $context));
            unset($data['version']);
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('agreement') && null !== $data->getAgreement()) {
            $dataArray['agreement'] = $this->normalizer->normalize($data->getAgreement(), 'json', $context);
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('inferenceName') && null !== $data->getInferenceName()) {
            $dataArray['inference_name'] = $data->getInferenceName();
        }
        if ($data->isInitialized('inferenceVersion') && null !== $data->getInferenceVersion()) {
            $dataArray['inference_version'] = $data->getInferenceVersion();
        }
        if ($data->isInitialized('isFoundational') && null !== $data->getIsFoundational()) {
            $dataArray['is_foundational'] = $data->getIsFoundational();
        }
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $values = [];
            foreach ($data->getMetadata() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['metadata'] = $values;
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('parentUuid') && null !== $data->getParentUuid()) {
            $dataArray['parent_uuid'] = $data->getParentUuid();
        }
        if ($data->isInitialized('provider') && null !== $data->getProvider()) {
            $dataArray['provider'] = $data->getProvider();
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('uploadComplete') && null !== $data->getUploadComplete()) {
            $dataArray['upload_complete'] = $data->getUploadComplete();
        }
        if ($data->isInitialized('url') && null !== $data->getUrl()) {
            $dataArray['url'] = $data->getUrl();
        }
        if ($data->isInitialized('usecases') && null !== $data->getUsecases()) {
            $values_1 = [];
            foreach ($data->getUsecases() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['usecases'] = $values_1;
        }
        if ($data->isInitialized('uuid') && null !== $data->getUuid()) {
            $dataArray['uuid'] = $data->getUuid();
        }
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $this->normalizer->normalize($data->getVersion(), 'json', $context);
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ApiModel::class => false];
    }
}