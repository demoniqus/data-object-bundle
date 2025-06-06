<?php
declare(strict_types=1);

namespace Demoniqus\DataObjectBundle\Common\Traits;

use Demoniqus\DataObjectBundle\Common\Traits\Preserve\IdTrait as PreserveIdTrait;

trait DtoTrait
{
    use IdFieldTrait;
    use IdTrait, PreserveIdTrait {
        PreserveIdTrait::setId as public;
    }

}
