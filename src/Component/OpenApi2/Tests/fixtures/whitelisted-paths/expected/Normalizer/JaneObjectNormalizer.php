<?php

namespace Jane\OpenApi2\Tests\Expected\Normalizer;

use Jane\OpenApi2\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\OpenApi2\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
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
    protected $normalizers = array('Jane\\OpenApi2\\Tests\\Expected\\Model\\Company' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\CompanyNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Project' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ProjectNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ProjectClient' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ProjectClientNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Projects' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ProjectsNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Error' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ErrorNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\PaginationLinks' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\PaginationLinksNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\CompanyPatchBody' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\CompanyPatchBodyNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ProjectsPostBody' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ProjectsPostBodyNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Jane\\OpenApi2\\Tests\\Expected\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
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
        return array('Jane\\OpenApi2\\Tests\\Expected\\Model\\Company' => false, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Project' => false, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ProjectClient' => false, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Projects' => false, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Error' => false, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\PaginationLinks' => false, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\CompanyPatchBody' => false, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ProjectsPostBody' => false, '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => false);
    }
}