<?php

namespace Jane\OpenApi3\Tests\Expected\Normalizer;

use Jane\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
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
    protected $normalizers = array('Jane\\OpenApi3\\Tests\\Expected\\Model\\ContextAnnotation' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\ContextAnnotationNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\ContextAnnotationDomainFields' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\ContextAnnotationDomainFieldsNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\ContextAnnotationEntityFields' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\ContextAnnotationEntityFieldsNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\UrlEntity' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\UrlEntityNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\URLImage' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\URLImageNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\HashtagEntity' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\HashtagEntityNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\CashtagEntity' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\CashtagEntityNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\MentionEntity' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\MentionEntityNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\FullTextEntities' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\FullTextEntitiesNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\FullTextEntitiesAnnotationsItem' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\FullTextEntitiesAnnotationsItemNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\Expansions' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\ExpansionsNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFieldsReferencedTweetsItem' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\CompactTweetFieldsReferencedTweetsItemNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFieldsAttachments' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\CompactTweetFieldsAttachmentsNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\DefaultTweetFieldsGeo' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultTweetFieldsGeoNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\DetailedTweetFieldsStats' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\DetailedTweetFieldsStatsNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\DefaultUserFieldsEntities' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultUserFieldsEntitiesNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\DefaultUserFieldsEntitiesUrl' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultUserFieldsEntitiesUrlNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\DetailedUserFieldsStats' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\DetailedUserFieldsStatsNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\TweetLookupResponse' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetLookupResponseNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\Point' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\PointNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\Geo' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\GeoNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\Poll' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\PollNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\PollOption' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\PollOptionNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\TweetWithheld' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetWithheldNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\UserWithheld' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\UserWithheldNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\InvalidRequestProblemErrorsItem' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\InvalidRequestProblemErrorsItemNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\TweetMetrics' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetMetricsNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\TweetInteractionMetrics' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetInteractionMetricsNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\VideoMetrics' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\VideoMetricsNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\Rule' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\RuleNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\RuleNoId' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\RuleNoIdNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\RulesResponseMetadata' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\RulesResponseMetadataNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\TweetSearchResponseMeta' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetSearchResponseMetaNormalizer', 'Jane\\OpenApi3\\Tests\\Expected\\Model\\HideReplyResponseData' => 'Jane\\OpenApi3\\Tests\\Expected\\Normalizer\\HideReplyResponseDataNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Jane\\OpenApi3\\Tests\\Expected\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }
    /**
     * @return bool
     */
    public function supportsNormalization($data, $format = null)
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
}