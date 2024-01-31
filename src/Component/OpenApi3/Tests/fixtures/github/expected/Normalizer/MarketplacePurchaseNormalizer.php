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
    class MarketplacePurchaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\MarketplacePurchase';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\MarketplacePurchase';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\MarketplacePurchase();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\MarketplacePurchaseConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('login', $data)) {
                $object->setLogin($data['login']);
                unset($data['login']);
            }
            if (\array_key_exists('organization_billing_email', $data)) {
                $object->setOrganizationBillingEmail($data['organization_billing_email']);
                unset($data['organization_billing_email']);
            }
            if (\array_key_exists('marketplace_pending_change', $data) && $data['marketplace_pending_change'] !== null) {
                $object->setMarketplacePendingChange($this->denormalizer->denormalize($data['marketplace_pending_change'], 'Github\\Model\\MarketplacePurchaseMarketplacePendingChange', 'json', $context));
                unset($data['marketplace_pending_change']);
            }
            elseif (\array_key_exists('marketplace_pending_change', $data) && $data['marketplace_pending_change'] === null) {
                $object->setMarketplacePendingChange(null);
            }
            if (\array_key_exists('marketplace_purchase', $data)) {
                $object->setMarketplacePurchase($this->denormalizer->denormalize($data['marketplace_purchase'], 'Github\\Model\\MarketplacePurchaseMarketplacePurchase', 'json', $context));
                unset($data['marketplace_purchase']);
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
            $data['url'] = $object->getUrl();
            $data['type'] = $object->getType();
            $data['id'] = $object->getId();
            $data['login'] = $object->getLogin();
            if ($object->isInitialized('organizationBillingEmail') && null !== $object->getOrganizationBillingEmail()) {
                $data['organization_billing_email'] = $object->getOrganizationBillingEmail();
            }
            if ($object->isInitialized('marketplacePendingChange') && null !== $object->getMarketplacePendingChange()) {
                $data['marketplace_pending_change'] = $this->normalizer->normalize($object->getMarketplacePendingChange(), 'json', $context);
            }
            $data['marketplace_purchase'] = $this->normalizer->normalize($object->getMarketplacePurchase(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\MarketplacePurchaseConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\MarketplacePurchase' => false];
        }
    }
} else {
    class MarketplacePurchaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\MarketplacePurchase';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\MarketplacePurchase';
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
            $object = new \Github\Model\MarketplacePurchase();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\MarketplacePurchaseConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('login', $data)) {
                $object->setLogin($data['login']);
                unset($data['login']);
            }
            if (\array_key_exists('organization_billing_email', $data)) {
                $object->setOrganizationBillingEmail($data['organization_billing_email']);
                unset($data['organization_billing_email']);
            }
            if (\array_key_exists('marketplace_pending_change', $data) && $data['marketplace_pending_change'] !== null) {
                $object->setMarketplacePendingChange($this->denormalizer->denormalize($data['marketplace_pending_change'], 'Github\\Model\\MarketplacePurchaseMarketplacePendingChange', 'json', $context));
                unset($data['marketplace_pending_change']);
            }
            elseif (\array_key_exists('marketplace_pending_change', $data) && $data['marketplace_pending_change'] === null) {
                $object->setMarketplacePendingChange(null);
            }
            if (\array_key_exists('marketplace_purchase', $data)) {
                $object->setMarketplacePurchase($this->denormalizer->denormalize($data['marketplace_purchase'], 'Github\\Model\\MarketplacePurchaseMarketplacePurchase', 'json', $context));
                unset($data['marketplace_purchase']);
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
            $data['url'] = $object->getUrl();
            $data['type'] = $object->getType();
            $data['id'] = $object->getId();
            $data['login'] = $object->getLogin();
            if ($object->isInitialized('organizationBillingEmail') && null !== $object->getOrganizationBillingEmail()) {
                $data['organization_billing_email'] = $object->getOrganizationBillingEmail();
            }
            if ($object->isInitialized('marketplacePendingChange') && null !== $object->getMarketplacePendingChange()) {
                $data['marketplace_pending_change'] = $this->normalizer->normalize($object->getMarketplacePendingChange(), 'json', $context);
            }
            $data['marketplace_purchase'] = $this->normalizer->normalize($object->getMarketplacePurchase(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\MarketplacePurchaseConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\MarketplacePurchase' => false];
        }
    }
}