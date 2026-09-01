<?php

namespace PicturePark\API\Model;

class PermissionSet
{
    /**
     * The permission set ID.
     *
     * @var string
     */
    public string $id;
    /**
     * When true this permission set will derogate all other configured permission sets.
     * Cannot be changed after creation.
     *
     * @var bool
     */
    public bool $exclusive;
    /**
     * Language specific permission set names.
     *
     * @var array<string, string>
     */
    public iterable $names;
}