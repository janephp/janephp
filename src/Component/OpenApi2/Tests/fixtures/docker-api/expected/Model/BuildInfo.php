<?php

namespace Docker\Api\Model;

class BuildInfo
{
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $stream;
    /**
     * @var string
     */
    public string $error;
    /**
     * @var ErrorDetail
     */
    public ErrorDetail $errorDetail;
    /**
     * @var string
     */
    public string $status;
    /**
     * @var string
     */
    public string $progress;
    /**
     * @var ProgressDetail
     */
    public ProgressDetail $progressDetail;
    /**
     * Image ID or Digest
     *
     * @var ImageID
     */
    public ImageID $aux;
}