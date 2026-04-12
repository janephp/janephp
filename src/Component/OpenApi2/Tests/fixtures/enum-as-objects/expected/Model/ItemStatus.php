<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

enum ItemStatus : string
{
    case Pending = 'pending';
    case InProgress = 'in_progress';
    case Completed = 'completed';
    case Cancelled = 'cancelled';
}