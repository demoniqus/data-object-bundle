<?php
declare(strict_types=1);

namespace Demoniqus\DataObjectBundle\Common\Interfaces;

use Demoniqus\DataObjectBundle\Common\Interfaces\Preserve\IdInterface as PreserveIdInterface;

interface DtoInterface extends IdInterface, PreserveIdInterface
{
    public function setEntity(EntityInterface $entity): DtoInterface;

    public function getEntity(): ?EntityInterface;
}
