<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class TweetInteractionMetricsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetInteractionMetrics';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetInteractionMetrics';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\TweetInteractionMetrics();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('like_count', $data)) {
                $object->setLikeCount($data['like_count']);
                unset($data['like_count']);
            }
            if (\array_key_exists('retweet_count', $data)) {
                $object->setRetweetCount($data['retweet_count']);
                unset($data['retweet_count']);
            }
            if (\array_key_exists('quote_count', $data)) {
                $object->setQuoteCount($data['quote_count']);
                unset($data['quote_count']);
            }
            if (\array_key_exists('reply_count', $data)) {
                $object->setReplyCount($data['reply_count']);
                unset($data['reply_count']);
            }
            if (\array_key_exists('impression_count', $data)) {
                $object->setImpressionCount($data['impression_count']);
                unset($data['impression_count']);
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
            $data['like_count'] = $object->getLikeCount();
            $data['retweet_count'] = $object->getRetweetCount();
            $data['quote_count'] = $object->getQuoteCount();
            $data['reply_count'] = $object->getReplyCount();
            if ($object->isInitialized('impressionCount') && null !== $object->getImpressionCount()) {
                $data['impression_count'] = $object->getImpressionCount();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetInteractionMetrics' => false];
        }
    }
} else {
    class TweetInteractionMetricsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetInteractionMetrics';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetInteractionMetrics';
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
            $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\TweetInteractionMetrics();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('like_count', $data)) {
                $object->setLikeCount($data['like_count']);
                unset($data['like_count']);
            }
            if (\array_key_exists('retweet_count', $data)) {
                $object->setRetweetCount($data['retweet_count']);
                unset($data['retweet_count']);
            }
            if (\array_key_exists('quote_count', $data)) {
                $object->setQuoteCount($data['quote_count']);
                unset($data['quote_count']);
            }
            if (\array_key_exists('reply_count', $data)) {
                $object->setReplyCount($data['reply_count']);
                unset($data['reply_count']);
            }
            if (\array_key_exists('impression_count', $data)) {
                $object->setImpressionCount($data['impression_count']);
                unset($data['impression_count']);
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
            $data['like_count'] = $object->getLikeCount();
            $data['retweet_count'] = $object->getRetweetCount();
            $data['quote_count'] = $object->getQuoteCount();
            $data['reply_count'] = $object->getReplyCount();
            if ($object->isInitialized('impressionCount') && null !== $object->getImpressionCount()) {
                $data['impression_count'] = $object->getImpressionCount();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetInteractionMetrics' => false];
        }
    }
}