<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class IntegrationPermissionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\IntegrationPermissions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\IntegrationPermissions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\IntegrationPermissions();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\IntegrationPermissionsConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('issues', $data)) {
            $object->setIssues($data['issues']);
            unset($data['issues']);
        }
        if (\array_key_exists('checks', $data)) {
            $object->setChecks($data['checks']);
            unset($data['checks']);
        }
        if (\array_key_exists('metadata', $data)) {
            $object->setMetadata($data['metadata']);
            unset($data['metadata']);
        }
        if (\array_key_exists('contents', $data)) {
            $object->setContents($data['contents']);
            unset($data['contents']);
        }
        if (\array_key_exists('deployments', $data)) {
            $object->setDeployments($data['deployments']);
            unset($data['deployments']);
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
        if ($data->isInitialized('issues') && null !== $data->getIssues()) {
            $dataArray['issues'] = $data->getIssues();
        }
        if ($data->isInitialized('checks') && null !== $data->getChecks()) {
            $dataArray['checks'] = $data->getChecks();
        }
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $dataArray['metadata'] = $data->getMetadata();
        }
        if ($data->isInitialized('contents') && null !== $data->getContents()) {
            $dataArray['contents'] = $data->getContents();
        }
        if ($data->isInitialized('deployments') && null !== $data->getDeployments()) {
            $dataArray['deployments'] = $data->getDeployments();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\IntegrationPermissionsConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\IntegrationPermissions::class => false];
    }
}