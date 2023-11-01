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
    class RepositorySubscriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\RepositorySubscription';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\RepositorySubscription';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\RepositorySubscription();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\RepositorySubscriptionConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('subscribed', $data)) {
                $object->setSubscribed($data['subscribed']);
                unset($data['subscribed']);
            }
            if (\array_key_exists('ignored', $data)) {
                $object->setIgnored($data['ignored']);
                unset($data['ignored']);
            }
            if (\array_key_exists('reason', $data) && $data['reason'] !== null) {
                $object->setReason($data['reason']);
                unset($data['reason']);
            }
            elseif (\array_key_exists('reason', $data) && $data['reason'] === null) {
                $object->setReason(null);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('repository_url', $data)) {
                $object->setRepositoryUrl($data['repository_url']);
                unset($data['repository_url']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['subscribed'] = $object->getSubscribed();
            $data['ignored'] = $object->getIgnored();
            $data['reason'] = $object->getReason();
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
            $data['url'] = $object->getUrl();
            $data['repository_url'] = $object->getRepositoryUrl();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\RepositorySubscriptionConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\RepositorySubscription' => false];
        }
    }
} else {
    class RepositorySubscriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\RepositorySubscription';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\RepositorySubscription';
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
            $object = new \Github\Model\RepositorySubscription();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\RepositorySubscriptionConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('subscribed', $data)) {
                $object->setSubscribed($data['subscribed']);
                unset($data['subscribed']);
            }
            if (\array_key_exists('ignored', $data)) {
                $object->setIgnored($data['ignored']);
                unset($data['ignored']);
            }
            if (\array_key_exists('reason', $data) && $data['reason'] !== null) {
                $object->setReason($data['reason']);
                unset($data['reason']);
            }
            elseif (\array_key_exists('reason', $data) && $data['reason'] === null) {
                $object->setReason(null);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('repository_url', $data)) {
                $object->setRepositoryUrl($data['repository_url']);
                unset($data['repository_url']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            $data['subscribed'] = $object->getSubscribed();
            $data['ignored'] = $object->getIgnored();
            $data['reason'] = $object->getReason();
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
            $data['url'] = $object->getUrl();
            $data['repository_url'] = $object->getRepositoryUrl();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\RepositorySubscriptionConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\RepositorySubscription' => false];
        }
    }
}