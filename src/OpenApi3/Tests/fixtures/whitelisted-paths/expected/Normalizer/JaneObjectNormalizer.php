<?php

namespace Jane\OpenApi3\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
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
    protected $normalizers = array('Jane\\OpenApi3\\Tests\\Expected\\Model\\ContextAnnotationDomainFields' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\ContextAnnotationDomainFieldsNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\ContextAnnotationEntityFields' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\ContextAnnotationEntityFieldsNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\FullTextEntities' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\FullTextEntitiesNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\Expansions' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\ExpansionsNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFieldsAttachments' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\CompactTweetFieldsAttachmentsNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\DefaultTweetFieldsGeo' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultTweetFieldsGeoNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\DetailedTweetFieldsStats' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\DetailedTweetFieldsStatsNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\DefaultUserFieldsEntities' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultUserFieldsEntitiesNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\DefaultUserFieldsEntitiesUrl' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultUserFieldsEntitiesUrlNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\DetailedUserFieldsStats' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\DetailedUserFieldsStatsNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\TweetLookupResponse' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetLookupResponseNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\Point' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\PointNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\Geo' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\GeoNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\TweetWithheld' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetWithheldNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\UserWithheld' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\UserWithheldNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\TweetInteractionMetrics' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetInteractionMetricsNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\VideoMetrics' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\VideoMetricsNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\RulesResponseMetadata' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\RulesResponseMetadataNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\TweetSearchResponseMeta' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetSearchResponseMetaNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\HideReplyResponseData' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\HideReplyResponseDataNormalizer', '\\Jane\\JsonSchemaRuntime\\Reference' => '\\Jane\\JsonSchemaRuntime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
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
}