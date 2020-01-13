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
class AnimatedGifNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\AnimatedGif';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\AnimatedGif';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\AnimatedGif();
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'preview_image_url')) {
            $object->setPreviewImageUrl($data->{'preview_image_url'});
        }
        if (property_exists($data, 'media_key')) {
            $object->setMediaKey($data->{'media_key'});
        }
        if (property_exists($data, 'height')) {
            $object->setHeight($data->{'height'});
        }
        if (property_exists($data, 'width')) {
            $object->setWidth($data->{'width'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getPreviewImageUrl()) {
            $data->{'preview_image_url'} = $object->getPreviewImageUrl();
        }
        if (null !== $object->getMediaKey()) {
            $data->{'media_key'} = $object->getMediaKey();
        }
        if (null !== $object->getHeight()) {
            $data->{'height'} = $object->getHeight();
        }
        if (null !== $object->getWidth()) {
            $data->{'width'} = $object->getWidth();
        }
        return $data;
    }
}