<?php declare(strict_types=1);

namespace AlexHouse\Core\Content\Mentor;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void add(MentorEntity $entity)
 * @method void set(string $key, MentorEntity $entity)
 * @method MentorEntity[] getIterator()
 * @method MentorEntity[] getElements()
 * @method MentorEntity|null get(string $key)
 * @method MentorEntity|null first()
 * @method MentorEntity|null last()
 */
class MentorCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return MentorEntity::class;
    }
}
