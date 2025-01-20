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
class AppInstallationsInstallationIdAccessTokensPostBodyPermissionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\AppInstallationsInstallationIdAccessTokensPostBodyPermissions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\AppInstallationsInstallationIdAccessTokensPostBodyPermissions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\AppInstallationsInstallationIdAccessTokensPostBodyPermissions();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\AppInstallationsInstallationIdAccessTokensPostBodyPermissionsConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('contents', $data)) {
            $object->setContents($data['contents']);
            unset($data['contents']);
        }
        if (\array_key_exists('issues', $data)) {
            $object->setIssues($data['issues']);
            unset($data['issues']);
        }
        if (\array_key_exists('deployments', $data)) {
            $object->setDeployments($data['deployments']);
            unset($data['deployments']);
        }
        if (\array_key_exists('single_file', $data)) {
            $object->setSingleFile($data['single_file']);
            unset($data['single_file']);
        }
        if (\array_key_exists('def_not_a_repo', $data)) {
            $object->setDefNotARepo($data['def_not_a_repo']);
            unset($data['def_not_a_repo']);
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
        if ($data->isInitialized('contents') && null !== $data->getContents()) {
            $dataArray['contents'] = $data->getContents();
        }
        if ($data->isInitialized('issues') && null !== $data->getIssues()) {
            $dataArray['issues'] = $data->getIssues();
        }
        if ($data->isInitialized('deployments') && null !== $data->getDeployments()) {
            $dataArray['deployments'] = $data->getDeployments();
        }
        if ($data->isInitialized('singleFile') && null !== $data->getSingleFile()) {
            $dataArray['single_file'] = $data->getSingleFile();
        }
        if ($data->isInitialized('defNotARepo') && null !== $data->getDefNotARepo()) {
            $dataArray['def_not_a_repo'] = $data->getDefNotARepo();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\AppInstallationsInstallationIdAccessTokensPostBodyPermissionsConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\AppInstallationsInstallationIdAccessTokensPostBodyPermissions::class => false];
    }
}