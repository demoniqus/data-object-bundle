<?php
declare(strict_types=1);

namespace Demoniqus\DataObjectBundle\Common\Traits;

/**
 * @property int|null $id
 */
trait IdTrait
{
    public function getId(): ?int
    {
        return $this->id;
    }
}
