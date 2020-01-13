<?php

namespace Jane\OpenApi\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class VideoMetricsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\VideoMetrics';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\VideoMetrics';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\VideoMetrics();
        if (property_exists($data, 'media_key')) {
            $object->setMediaKey($data->{'media_key'});
        }
        if (property_exists($data, 'view_count')) {
            $object->setViewCount($data->{'view_count'});
        }
        if (property_exists($data, 'playback_0_count')) {
            $object->setPlayback0Count($data->{'playback_0_count'});
        }
        if (property_exists($data, 'playback_25_count')) {
            $object->setPlayback25Count($data->{'playback_25_count'});
        }
        if (property_exists($data, 'playback_50_count')) {
            $object->setPlayback50Count($data->{'playback_50_count'});
        }
        if (property_exists($data, 'playback_75_count')) {
            $object->setPlayback75Count($data->{'playback_75_count'});
        }
        if (property_exists($data, 'playback_100_count')) {
            $object->setPlayback100Count($data->{'playback_100_count'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getMediaKey()) {
            $data->{'media_key'} = $object->getMediaKey();
        }
        if (null !== $object->getViewCount()) {
            $data->{'view_count'} = $object->getViewCount();
        }
        if (null !== $object->getPlayback0Count()) {
            $data->{'playback_0_count'} = $object->getPlayback0Count();
        }
        if (null !== $object->getPlayback25Count()) {
            $data->{'playback_25_count'} = $object->getPlayback25Count();
        }
        if (null !== $object->getPlayback50Count()) {
            $data->{'playback_50_count'} = $object->getPlayback50Count();
        }
        if (null !== $object->getPlayback75Count()) {
            $data->{'playback_75_count'} = $object->getPlayback75Count();
        }
        if (null !== $object->getPlayback100Count()) {
            $data->{'playback_100_count'} = $object->getPlayback100Count();
        }
        return $data;
    }
}