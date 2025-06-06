<?php
declare(strict_types=1);

namespace Demoniqus\DataObjectBundle\Common\Traits\Preserve;

/**
 * @property string|null $name
 */
trait NameTrait
{
    public function setName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

}
