<?php
declare(strict_types=1);

namespace Demoniqus\DataObjectBundle\Common\Traits\Preserve;

/**
 * @property int|null $id
 */
trait IdTrait
{
    protected function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

}
