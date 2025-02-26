<?php

namespace SBC\WPOrm\Relation;

use SBC\WPOrm\ModelCollection;
use SBC\WPOrm\Relation\Relation;

class HasMany extends HasOneOrMany
{

    public function getResults()
    {
        return $this->query->get();
    }

    public function initRelation(array $models, $relation)
    {
        foreach ($models as $model) {
            $model->setRelation($relation, $this->related->newCollection());
        }

        return $models;
    }

    public function match(array $models, ModelCollection $results, $relation)
    {
        return $this->matchMany($models, $results, $relation);
    }
}
