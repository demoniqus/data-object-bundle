<?php
declare(strict_types=1);

namespace Demoniqus\DataObjectBundle\DataObject\Representative\Dto;

use Demoniqus\DataObjectBundle\Common\Interfaces\DtoInterface;
use Demoniqus\DataObjectBundle\Common\Interfaces\EntityInterface;
use Demoniqus\DataObjectBundle\Common\Traits\DtoTrait;

class DataObjectDto implements DtoInterface
{
    use DtoTrait;
    private ?EntityInterface $entity = null;

    public function getEntity(): ?EntityInterface
    {
        return $this->entity;
    }

    public function setEntity(EntityInterface $entity): DataObjectDto
    {
        $this->entity = $entity;

        return $this;
    }

}
