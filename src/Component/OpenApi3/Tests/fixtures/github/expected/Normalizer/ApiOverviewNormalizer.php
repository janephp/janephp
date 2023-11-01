<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ApiOverviewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ApiOverview';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ApiOverview';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\ApiOverview();
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
                $object->setSshKeyFingerprints($this->denormalizer->denormalize($data['ssh_key_fingerprints'], 'Github\\Model\\ApiOverviewSshKeyFingerprints', 'json', $context));
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
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['verifiable_password_authentication'] = $object->getVerifiablePasswordAuthentication();
            if ($object->isInitialized('sshKeyFingerprints') && null !== $object->getSshKeyFingerprints()) {
                $data['ssh_key_fingerprints'] = $this->normalizer->normalize($object->getSshKeyFingerprints(), 'json', $context);
            }
            if ($object->isInitialized('hooks') && null !== $object->getHooks()) {
                $values = [];
                foreach ($object->getHooks() as $value) {
                    $values[] = $value;
                }
                $data['hooks'] = $values;
            }
            if ($object->isInitialized('web') && null !== $object->getWeb()) {
                $values_1 = [];
                foreach ($object->getWeb() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['web'] = $values_1;
            }
            if ($object->isInitialized('api') && null !== $object->getApi()) {
                $values_2 = [];
                foreach ($object->getApi() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['api'] = $values_2;
            }
            if ($object->isInitialized('git') && null !== $object->getGit()) {
                $values_3 = [];
                foreach ($object->getGit() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['git'] = $values_3;
            }
            if ($object->isInitialized('pages') && null !== $object->getPages()) {
                $values_4 = [];
                foreach ($object->getPages() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['pages'] = $values_4;
            }
            if ($object->isInitialized('importer') && null !== $object->getImporter()) {
                $values_5 = [];
                foreach ($object->getImporter() as $value_5) {
                    $values_5[] = $value_5;
                }
                $data['importer'] = $values_5;
            }
            if ($object->isInitialized('githubServicesSha') && null !== $object->getGithubServicesSha()) {
                $data['github_services_sha'] = $object->getGithubServicesSha();
            }
            if ($object->isInitialized('installedVersion') && null !== $object->getInstalledVersion()) {
                $data['installed_version'] = $object->getInstalledVersion();
            }
            foreach ($object as $key => $value_6) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_6;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ApiOverviewConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ApiOverview' => false];
        }
    }
} else {
    class ApiOverviewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ApiOverview';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ApiOverview';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\ApiOverview();
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
                $object->setSshKeyFingerprints($this->denormalizer->denormalize($data['ssh_key_fingerprints'], 'Github\\Model\\ApiOverviewSshKeyFingerprints', 'json', $context));
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
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['verifiable_password_authentication'] = $object->getVerifiablePasswordAuthentication();
            if ($object->isInitialized('sshKeyFingerprints') && null !== $object->getSshKeyFingerprints()) {
                $data['ssh_key_fingerprints'] = $this->normalizer->normalize($object->getSshKeyFingerprints(), 'json', $context);
            }
            if ($object->isInitialized('hooks') && null !== $object->getHooks()) {
                $values = [];
                foreach ($object->getHooks() as $value) {
                    $values[] = $value;
                }
                $data['hooks'] = $values;
            }
            if ($object->isInitialized('web') && null !== $object->getWeb()) {
                $values_1 = [];
                foreach ($object->getWeb() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['web'] = $values_1;
            }
            if ($object->isInitialized('api') && null !== $object->getApi()) {
                $values_2 = [];
                foreach ($object->getApi() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['api'] = $values_2;
            }
            if ($object->isInitialized('git') && null !== $object->getGit()) {
                $values_3 = [];
                foreach ($object->getGit() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['git'] = $values_3;
            }
            if ($object->isInitialized('pages') && null !== $object->getPages()) {
                $values_4 = [];
                foreach ($object->getPages() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['pages'] = $values_4;
            }
            if ($object->isInitialized('importer') && null !== $object->getImporter()) {
                $values_5 = [];
                foreach ($object->getImporter() as $value_5) {
                    $values_5[] = $value_5;
                }
                $data['importer'] = $values_5;
            }
            if ($object->isInitialized('githubServicesSha') && null !== $object->getGithubServicesSha()) {
                $data['github_services_sha'] = $object->getGithubServicesSha();
            }
            if ($object->isInitialized('installedVersion') && null !== $object->getInstalledVersion()) {
                $data['installed_version'] = $object->getInstalledVersion();
            }
            foreach ($object as $key => $value_6) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_6;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ApiOverviewConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ApiOverview' => false];
        }
    }
}