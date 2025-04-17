<?php

namespace Jane\Component\OpenApi3\JsonSchema\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\JsonSchema\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\JsonSchema\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class OAuthFlowsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []) : bool
    {
        return $type === 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\OAuthFlows';
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return $data instanceof \Jane\Component\OpenApi3\JsonSchema\Model\OAuthFlows;
    }
    /**
     * @return mixed
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []) : mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\JsonSchema\Model\OAuthFlows();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('implicit', $data) && $data['implicit'] !== null) {
            $object->setImplicit($this->denormalizer->denormalize($data['implicit'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\ImplicitOAuthFlow', 'json', $context));
            unset($data['implicit']);
        }
        elseif (\array_key_exists('implicit', $data) && $data['implicit'] === null) {
            $object->setImplicit(null);
        }
        if (\array_key_exists('password', $data) && $data['password'] !== null) {
            $object->setPassword($this->denormalizer->denormalize($data['password'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\PasswordOAuthFlow', 'json', $context));
            unset($data['password']);
        }
        elseif (\array_key_exists('password', $data) && $data['password'] === null) {
            $object->setPassword(null);
        }
        if (\array_key_exists('clientCredentials', $data) && $data['clientCredentials'] !== null) {
            $object->setClientCredentials($this->denormalizer->denormalize($data['clientCredentials'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\ClientCredentialsFlow', 'json', $context));
            unset($data['clientCredentials']);
        }
        elseif (\array_key_exists('clientCredentials', $data) && $data['clientCredentials'] === null) {
            $object->setClientCredentials(null);
        }
        if (\array_key_exists('authorizationCode', $data) && $data['authorizationCode'] !== null) {
            $object->setAuthorizationCode($this->denormalizer->denormalize($data['authorizationCode'], 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\AuthorizationCodeOAuthFlow', 'json', $context));
            unset($data['authorizationCode']);
        }
        elseif (\array_key_exists('authorizationCode', $data) && $data['authorizationCode'] === null) {
            $object->setAuthorizationCode(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/^x-/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize(mixed $object, ?string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if ($object->isInitialized('implicit') && null !== $object->getImplicit()) {
            $data['implicit'] = $this->normalizer->normalize($object->getImplicit(), 'json', $context);
        }
        if ($object->isInitialized('password') && null !== $object->getPassword()) {
            $data['password'] = $this->normalizer->normalize($object->getPassword(), 'json', $context);
        }
        if ($object->isInitialized('clientCredentials') && null !== $object->getClientCredentials()) {
            $data['clientCredentials'] = $this->normalizer->normalize($object->getClientCredentials(), 'json', $context);
        }
        if ($object->isInitialized('authorizationCode') && null !== $object->getAuthorizationCode()) {
            $data['authorizationCode'] = $this->normalizer->normalize($object->getAuthorizationCode(), 'json', $context);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/^x-/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return ['Jane\\Component\\OpenApi3\\JsonSchema\\Model\\OAuthFlows' => false];
    }
}