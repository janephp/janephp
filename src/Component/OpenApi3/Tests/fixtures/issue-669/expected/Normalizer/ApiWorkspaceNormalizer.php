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
class ApiWorkspaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiWorkspace::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiWorkspace::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiWorkspace();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('agents', $data)) {
            $values = [];
            foreach ($data['agents'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\ApiAgent::class, 'json', $context);
            }
            $object->setAgents($values);
            unset($data['agents']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('created_by', $data)) {
            $object->setCreatedBy($data['created_by']);
            unset($data['created_by']);
        }
        if (\array_key_exists('created_by_email', $data)) {
            $object->setCreatedByEmail($data['created_by_email']);
            unset($data['created_by_email']);
        }
        if (\array_key_exists('deleted_at', $data)) {
            $object->setDeletedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['deleted_at']));
            unset($data['deleted_at']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('evaluation_test_cases', $data)) {
            $values_1 = [];
            foreach ($data['evaluation_test_cases'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\ApiEvaluationTestCase::class, 'json', $context);
            }
            $object->setEvaluationTestCases($values_1);
            unset($data['evaluation_test_cases']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (\array_key_exists('uuid', $data)) {
            $object->setUuid($data['uuid']);
            unset($data['uuid']);
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
        if ($data->isInitialized('agents') && null !== $data->getAgents()) {
            $values = [];
            foreach ($data->getAgents() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['agents'] = $values;
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('createdBy') && null !== $data->getCreatedBy()) {
            $dataArray['created_by'] = $data->getCreatedBy();
        }
        if ($data->isInitialized('createdByEmail') && null !== $data->getCreatedByEmail()) {
            $dataArray['created_by_email'] = $data->getCreatedByEmail();
        }
        if ($data->isInitialized('deletedAt') && null !== $data->getDeletedAt()) {
            $dataArray['deleted_at'] = $data->getDeletedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('evaluationTestCases') && null !== $data->getEvaluationTestCases()) {
            $values_1 = [];
            foreach ($data->getEvaluationTestCases() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['evaluation_test_cases'] = $values_1;
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('uuid') && null !== $data->getUuid()) {
            $dataArray['uuid'] = $data->getUuid();
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
        return [\Jane\Generated\DigitalOcean\Model\ApiWorkspace::class => false];
    }
}