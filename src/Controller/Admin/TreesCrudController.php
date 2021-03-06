<?php

namespace App\Controller\Admin;

use App\Entity\Trees;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class TreesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Trees::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextEditorField::new('description'),
            IntegerField::new('planting_year'),
            TextField::new('imageFile')
                ->setFormType(VichImageType::class)->hideOnIndex(),
            TextField::new('imageFile_2')
                ->setFormType(VichImageType::class)->hideOnIndex(),
            TextField::new('imageFile_3')
                ->setFormType(VichImageType::class)->hideOnIndex(),
            TextField::new('imageFile_4')
                ->setFormType(VichImageType::class)->hideOnIndex(),
        ];
    }

}
