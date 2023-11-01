<?php

namespace Jane\Component\OpenApi2\JsonSchema\Normalizer;

use Jane\Component\OpenApi2\JsonSchema\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi2\JsonSchema\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = array('Jane\\Component\\OpenApi2\\JsonSchema\\Model\\OpenApi' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\OpenApiNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Info' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\InfoNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Contact' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\ContactNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\License' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\LicenseNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\ExternalDocs' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\ExternalDocsNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Operation' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\OperationNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\PathItem' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\PathItemNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Response' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\ResponseNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Header' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\HeaderNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\BodyParameter' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\BodyParameterNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Schema' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\SchemaNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\JsonReference' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\JsonReferenceNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\HeaderParameterSubSchema' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\HeaderParameterSubSchemaNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\FormDataParameterSubSchema' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\FormDataParameterSubSchemaNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\QueryParameterSubSchema' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\QueryParameterSubSchemaNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\PathParameterSubSchema' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\PathParameterSubSchemaNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\FileSchema' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\FileSchemaNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\PrimitivesItems' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\PrimitivesItemsNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Xml' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\XmlNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Tag' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\TagNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\BasicAuthenticationSecurity' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\BasicAuthenticationSecurityNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\ApiKeySecurity' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\ApiKeySecurityNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Oauth2ImplicitSecurity' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\Oauth2ImplicitSecurityNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Oauth2PasswordSecurity' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\Oauth2PasswordSecurityNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Oauth2ApplicationSecurity' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\Oauth2ApplicationSecurityNormalizer', 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Oauth2AccessCodeSecurity' => 'Jane\\Component\\OpenApi2\\JsonSchema\\Normalizer\\Oauth2AccessCodeSecurityNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Jane\\Component\\OpenApi2\\JsonSchema\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = [];
    public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    /**
     * @return mixed
     */
    public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return ['Jane\\Component\\OpenApi2\\JsonSchema\\Model\\OpenApi' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Info' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Contact' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\License' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\ExternalDocs' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Operation' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\PathItem' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Response' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Header' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\BodyParameter' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Schema' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\JsonReference' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\HeaderParameterSubSchema' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\FormDataParameterSubSchema' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\QueryParameterSubSchema' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\PathParameterSubSchema' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\FileSchema' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\PrimitivesItems' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Xml' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Tag' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\BasicAuthenticationSecurity' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\ApiKeySecurity' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Oauth2ImplicitSecurity' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Oauth2PasswordSecurity' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Oauth2ApplicationSecurity' => false, 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\Oauth2AccessCodeSecurity' => false, '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => false];
    }
}