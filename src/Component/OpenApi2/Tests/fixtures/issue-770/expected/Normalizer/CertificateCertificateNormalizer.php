<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CertificateCertificateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateCertificate::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateCertificate::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\CertificateCertificate();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('data', $data)) {
            $object->setData($data['data']);
        }
        if (\array_key_exists('information', $data)) {
            $object->setInformation($data['information']);
        }
        if (\array_key_exists('intermediateData', $data)) {
            $values = [];
            foreach ($data['intermediateData'] as $value) {
                $values[] = $value;
            }
            $object->setIntermediateData($values);
        }
        if (\array_key_exists('rootData', $data)) {
            $object->setRootData($data['rootData']);
        }
        if (\array_key_exists('privateKeyData', $data)) {
            $object->setPrivateKeyData($data['privateKeyData']);
        }
        if (\array_key_exists('certificasSigningRequest', $data)) {
            $object->setCertificasSigningRequest($this->denormalizer->denormalize($data['certificasSigningRequest'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('passphrase', $data)) {
            $object->setPassphrase($data['passphrase']);
        }
        if (\array_key_exists('publicKey', $data)) {
            $object->setPublicKey($data['publicKey']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('data') && null !== $data->getData()) {
            $dataArray['data'] = $data->getData();
        }
        if ($data->isInitialized('information') && null !== $data->getInformation()) {
            $dataArray['information'] = $data->getInformation();
        }
        if ($data->isInitialized('intermediateData') && null !== $data->getIntermediateData()) {
            $values = [];
            foreach ($data->getIntermediateData() as $value) {
                $values[] = $value;
            }
            $dataArray['intermediateData'] = $values;
        }
        if ($data->isInitialized('rootData') && null !== $data->getRootData()) {
            $dataArray['rootData'] = $data->getRootData();
        }
        if ($data->isInitialized('privateKeyData') && null !== $data->getPrivateKeyData()) {
            $dataArray['privateKeyData'] = $data->getPrivateKeyData();
        }
        if ($data->isInitialized('certificasSigningRequest') && null !== $data->getCertificasSigningRequest()) {
            $dataArray['certificasSigningRequest'] = $this->normalizer->normalize($data->getCertificasSigningRequest(), 'json', $context);
        }
        if ($data->isInitialized('passphrase') && null !== $data->getPassphrase()) {
            $dataArray['passphrase'] = $data->getPassphrase();
        }
        if ($data->isInitialized('publicKey') && null !== $data->getPublicKey()) {
            $dataArray['publicKey'] = $data->getPublicKey();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\CertificateCertificate::class => false];
    }
}