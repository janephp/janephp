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
class InstallationPermissionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\InstallationPermissions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\InstallationPermissions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\InstallationPermissions();
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
            $this->validate($data, new \Github\Validator\InstallationPermissionsConstraint());
        }
        if (\array_key_exists('deployments', $data)) {
            $object->setDeployments($data['deployments']);
            unset($data['deployments']);
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
        if (\array_key_exists('pull_requests', $data)) {
            $object->setPullRequests($data['pull_requests']);
            unset($data['pull_requests']);
        }
        if (\array_key_exists('statuses', $data)) {
            $object->setStatuses($data['statuses']);
            unset($data['statuses']);
        }
        if (\array_key_exists('issues', $data)) {
            $object->setIssues($data['issues']);
            unset($data['issues']);
        }
        if (\array_key_exists('organization_administration', $data)) {
            $object->setOrganizationAdministration($data['organization_administration']);
            unset($data['organization_administration']);
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
        if ($data->isInitialized('deployments') && null !== $data->getDeployments()) {
            $dataArray['deployments'] = $data->getDeployments();
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
        if ($data->isInitialized('pullRequests') && null !== $data->getPullRequests()) {
            $dataArray['pull_requests'] = $data->getPullRequests();
        }
        if ($data->isInitialized('statuses') && null !== $data->getStatuses()) {
            $dataArray['statuses'] = $data->getStatuses();
        }
        if ($data->isInitialized('issues') && null !== $data->getIssues()) {
            $dataArray['issues'] = $data->getIssues();
        }
        if ($data->isInitialized('organizationAdministration') && null !== $data->getOrganizationAdministration()) {
            $dataArray['organization_administration'] = $data->getOrganizationAdministration();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\InstallationPermissionsConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\InstallationPermissions::class => false];
    }
}