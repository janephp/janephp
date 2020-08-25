<?php

namespace Github\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class MarketplacePurchaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\MarketplacePurchase';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\MarketplacePurchase';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\MarketplacePurchase();
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('login', $data)) {
            $object->setLogin($data['login']);
        }
        if (\array_key_exists('organization_billing_email', $data)) {
            $object->setOrganizationBillingEmail($data['organization_billing_email']);
        }
        if (\array_key_exists('marketplace_pending_change', $data) && $data['marketplace_pending_change'] !== null) {
            $object->setMarketplacePendingChange($this->denormalizer->denormalize($data['marketplace_pending_change'], 'Github\\Model\\MarketplacePurchaseMarketplacePendingChange', 'json', $context));
        }
        elseif (\array_key_exists('marketplace_pending_change', $data) && $data['marketplace_pending_change'] === null) {
            $object->setMarketplacePendingChange(null);
        }
        if (\array_key_exists('marketplace_purchase', $data)) {
            $object->setMarketplacePurchase($this->denormalizer->denormalize($data['marketplace_purchase'], 'Github\\Model\\MarketplacePurchaseMarketplacePurchase', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getLogin()) {
            $data['login'] = $object->getLogin();
        }
        if (null !== $object->getOrganizationBillingEmail()) {
            $data['organization_billing_email'] = $object->getOrganizationBillingEmail();
        }
        if (null !== $object->getMarketplacePendingChange()) {
            $data['marketplace_pending_change'] = $this->normalizer->normalize($object->getMarketplacePendingChange(), 'json', $context);
        }
        if (null !== $object->getMarketplacePurchase()) {
            $data['marketplace_purchase'] = $this->normalizer->normalize($object->getMarketplacePurchase(), 'json', $context);
        }
        return $data;
    }
}