<?php

namespace Castor;

use Castor\Attribute\AsContext;

/** @internal */
class ContextDescriptor
{
    public function __construct(
        public readonly AsContext $contextAttribute,
        public readonly \ReflectionFunction $function,
    ) {}
}
