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
class ApiOverviewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ApiOverview::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ApiOverview::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ApiOverview();
        if (\array_key_exists('verifiable_password_authentication', $data) && \is_int($data['verifiable_password_authentication'])) {
            $data['verifiable_password_authentication'] = (bool) $data['verifiable_password_authentication'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ApiOverviewConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('verifiable_password_authentication', $data)) {
            $object->setVerifiablePasswordAuthentication($data['verifiable_password_authentication']);
            unset($data['verifiable_password_authentication']);
        }
        if (\array_key_exists('ssh_key_fingerprints', $data)) {
            $object->setSshKeyFingerprints($this->denormalizer->denormalize($data['ssh_key_fingerprints'], \Github\Model\ApiOverviewSshKeyFingerprints::class, 'json', $context));
            unset($data['ssh_key_fingerprints']);
        }
        if (\array_key_exists('hooks', $data)) {
            $values = [];
            foreach ($data['hooks'] as $value) {
                $values[] = $value;
            }
            $object->setHooks($values);
            unset($data['hooks']);
        }
        if (\array_key_exists('web', $data)) {
            $values_1 = [];
            foreach ($data['web'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setWeb($values_1);
            unset($data['web']);
        }
        if (\array_key_exists('api', $data)) {
            $values_2 = [];
            foreach ($data['api'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setApi($values_2);
            unset($data['api']);
        }
        if (\array_key_exists('git', $data)) {
            $values_3 = [];
            foreach ($data['git'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setGit($values_3);
            unset($data['git']);
        }
        if (\array_key_exists('pages', $data)) {
            $values_4 = [];
            foreach ($data['pages'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setPages($values_4);
            unset($data['pages']);
        }
        if (\array_key_exists('importer', $data)) {
            $values_5 = [];
            foreach ($data['importer'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setImporter($values_5);
            unset($data['importer']);
        }
        if (\array_key_exists('github_services_sha', $data)) {
            $object->setGithubServicesSha($data['github_services_sha']);
            unset($data['github_services_sha']);
        }
        if (\array_key_exists('installed_version', $data)) {
            $object->setInstalledVersion($data['installed_version']);
            unset($data['installed_version']);
        }
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_6;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['verifiable_password_authentication'] = $data->getVerifiablePasswordAuthentication();
        if ($data->isInitialized('sshKeyFingerprints') && null !== $data->getSshKeyFingerprints()) {
            $dataArray['ssh_key_fingerprints'] = $this->normalizer->normalize($data->getSshKeyFingerprints(), 'json', $context);
        }
        if ($data->isInitialized('hooks') && null !== $data->getHooks()) {
            $values = [];
            foreach ($data->getHooks() as $value) {
                $values[] = $value;
            }
            $dataArray['hooks'] = $values;
        }
        if ($data->isInitialized('web') && null !== $data->getWeb()) {
            $values_1 = [];
            foreach ($data->getWeb() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['web'] = $values_1;
        }
        if ($data->isInitialized('api') && null !== $data->getApi()) {
            $values_2 = [];
            foreach ($data->getApi() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['api'] = $values_2;
        }
        if ($data->isInitialized('git') && null !== $data->getGit()) {
            $values_3 = [];
            foreach ($data->getGit() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['git'] = $values_3;
        }
        if ($data->isInitialized('pages') && null !== $data->getPages()) {
            $values_4 = [];
            foreach ($data->getPages() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['pages'] = $values_4;
        }
        if ($data->isInitialized('importer') && null !== $data->getImporter()) {
            $values_5 = [];
            foreach ($data->getImporter() as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['importer'] = $values_5;
        }
        if ($data->isInitialized('githubServicesSha') && null !== $data->getGithubServicesSha()) {
            $dataArray['github_services_sha'] = $data->getGithubServicesSha();
        }
        if ($data->isInitialized('installedVersion') && null !== $data->getInstalledVersion()) {
            $dataArray['installed_version'] = $data->getInstalledVersion();
        }
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_6;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ApiOverviewConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ApiOverview::class => false];
    }
}