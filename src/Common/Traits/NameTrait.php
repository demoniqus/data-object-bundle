<?php
declare(strict_types=1);

namespace Demoniqus\DataObjectBundle\Common\Traits;

/**
 * @property string|null $name
 */
trait NameTrait
{
    public function getName(): ?string
    {
        return $this->name;
    }
}
