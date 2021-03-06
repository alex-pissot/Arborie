<?php

namespace App\Controller\Admin;

use App\Entity\Trails;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TrailsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Trails::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
        ];
    }

}
