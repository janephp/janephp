<?php

namespace PicturePark\API\Model;

class DocumentHistoryDifference
{
    /**
     * @var string|null
     */
    public ?string $documentId;
    /**
     * @var int
     */
    public int $oldDocumentVersion;
    /**
     * @var int
     */
    public int $newDocumentVersion;
    /**
     * Contains an RFC 6902 compatible patch that can be applied on the old document to get the new document.
     * Use a library like jsondiffpatch.net (https://github.com/wbish/jsondiffpatch.net)
     * or jsondiffpatch (https://github.com/benjamine/jsondiffpatch) to process this.
     *
     * @var mixed|null
     */
    public $patch;
}