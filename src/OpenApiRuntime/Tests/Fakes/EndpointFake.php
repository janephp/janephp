<?php

namespace Jane\OpenApiRuntime\Tests\Fakes;

use Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class EndpointFake
{
    use Psr7HttplugEndpointTrait;

    /**
     * @var string
     */
    protected $contentType = '';

    protected function transformResponseBody(
        string $body,
        int $status,
        SerializerInterface $serializer,
        ?string $contentType = null
    ): ?string {
        if ($contentType === $this->contentType && $status === 200) {
            return $body;
        }

        return null;
    }

    public function setContentType(string $contentType): self
    {
        $this->contentType = $contentType;

        return $this;
    }
}
