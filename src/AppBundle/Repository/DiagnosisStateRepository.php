<?php

namespace AppBundle\Repository;

use AppBundle\Entity\DiagnosisState;
use Doctrine\ORM\EntityRepository;

class DiagnosisStateRepository extends EntityRepository
{
    /**
     * @return DiagnosisState[]
     */
    public function findAllOrderedByDiagnosis()
    {
        return $this->createQueryBuilder('d')
            ->orderBy('d.stateName', 'ASC')
            ->getQuery()
            ->execute();
    }
}
