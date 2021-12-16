<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
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
    protected $normalizers = array('Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ContextAnnotation' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ContextAnnotationNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ContextAnnotationDomainFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ContextAnnotationDomainFieldsNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ContextAnnotationEntityFields' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ContextAnnotationEntityFieldsNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\UrlEntity' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\UrlEntityNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\URLImage' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\URLImageNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\HashtagEntity' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\HashtagEntityNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CashtagEntity' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CashtagEntityNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\MentionEntity' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\MentionEntityNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\FullTextEntities' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\FullTextEntitiesNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\FullTextEntitiesAnnotationsItem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\FullTextEntitiesAnnotationsItemNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Expansions' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\ExpansionsNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFieldsReferencedTweetsItem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CompactTweetFieldsReferencedTweetsItemNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFieldsAttachments' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\CompactTweetFieldsAttachmentsNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultTweetFieldsGeo' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultTweetFieldsGeoNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedTweetFieldsStats' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DetailedTweetFieldsStatsNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultUserFieldsEntities' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultUserFieldsEntitiesNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultUserFieldsEntitiesUrl' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DefaultUserFieldsEntitiesUrlNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedUserFieldsStats' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\DetailedUserFieldsStatsNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetLookupResponse' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetLookupResponseNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Point' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\PointNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Geo' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\GeoNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Poll' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\PollNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\PollOption' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\PollOptionNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetWithheld' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetWithheldNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\UserWithheld' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\UserWithheldNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\InvalidRequestProblemErrorsItem' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\InvalidRequestProblemErrorsItemNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetMetrics' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetMetricsNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetInteractionMetrics' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetInteractionMetricsNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\VideoMetrics' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\VideoMetricsNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\Rule' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\RuleNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\RuleNoId' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\RuleNoIdNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\RulesResponseMetadata' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\RulesResponseMetadataNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetSearchResponseMeta' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\TweetSearchResponseMetaNormalizer', 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\HideReplyResponseData' => 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Normalizer\\HideReplyResponseDataNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Jane\\Component\\OpenApi3\\Tests\\Expected\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
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