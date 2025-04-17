<?php

namespace Jane\Component\OpenApi3\JsonSchema\Normalizer;

use Jane\Component\OpenApi3\JsonSchema\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\JsonSchema\Runtime\Normalizer\ValidatorTrait;
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
    protected $normalizers = ['Jane\\Component\\OpenApi3\\JsonSchema\\Model\\OpenApi' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\OpenApiNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Reference' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\ReferenceNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Info' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\InfoNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Contact' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\ContactNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\License' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\LicenseNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Server' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\ServerNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\ServerVariable' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\ServerVariableNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Components' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\ComponentsNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Schema' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\SchemaNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Discriminator' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\DiscriminatorNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\XML' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\XMLNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Response' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\ResponseNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\MediaType' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\MediaTypeNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Example' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\ExampleNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Header' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\HeaderNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\PathItem' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\PathItemNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Operation' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\OperationNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Responses' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\ResponsesNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Tag' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\TagNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\ExternalDocumentation' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\ExternalDocumentationNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Parameter' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\ParameterNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\RequestBody' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\RequestBodyNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\APIKeySecurityScheme' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\APIKeySecuritySchemeNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\HTTPSecurityScheme' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\HTTPSecuritySchemeNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\HTTPSecuritySchemeSub' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\HTTPSecuritySchemeSubNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\OAuth2SecurityScheme' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\OAuth2SecuritySchemeNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\OpenIdConnectSecurityScheme' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\OpenIdConnectSecuritySchemeNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\OAuthFlows' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\OAuthFlowsNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\ImplicitOAuthFlow' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\ImplicitOAuthFlowNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\PasswordOAuthFlow' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\PasswordOAuthFlowNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\ClientCredentialsFlow' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\ClientCredentialsFlowNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\AuthorizationCodeOAuthFlow' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\AuthorizationCodeOAuthFlowNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Link' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\LinkNormalizer', 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Encoding' => 'Jane\\Component\\OpenApi3\\JsonSchema\\Normalizer\\EncodingNormalizer', \Jane\Component\JsonSchemaRuntime\Reference::class => '\\Jane\\Component\\OpenApi3\\JsonSchema\\Runtime\\Normalizer\\ReferenceNormalizer'], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []) : bool
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
    public function normalize(mixed $data, ?string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    /**
     * @return mixed
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []) : mixed
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
        return ['Jane\\Component\\OpenApi3\\JsonSchema\\Model\\OpenApi' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Reference' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Info' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Contact' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\License' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Server' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\ServerVariable' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Components' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Schema' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Discriminator' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\XML' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Response' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\MediaType' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Example' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Header' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\PathItem' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Operation' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Responses' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Tag' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\ExternalDocumentation' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Parameter' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\RequestBody' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\APIKeySecurityScheme' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\HTTPSecurityScheme' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\HTTPSecuritySchemeSub' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\OAuth2SecurityScheme' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\OpenIdConnectSecurityScheme' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\OAuthFlows' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\ImplicitOAuthFlow' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\PasswordOAuthFlow' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\ClientCredentialsFlow' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\AuthorizationCodeOAuthFlow' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Link' => false, 'Jane\\Component\\OpenApi3\\JsonSchema\\Model\\Encoding' => false, \Jane\Component\JsonSchemaRuntime\Reference::class => false];
    }
}