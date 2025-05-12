<?php

namespace App\Controller\Admin;

use App\Entity\Livre;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class LivreCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Livre::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            
            TextField::new('titre'),
            TextEditorField::new('resume'),
            ImageField::new('couverture')
                ->setBasePath('uploads/livres')
                ->setUploadDir('public/uploads/livres')
                ->setRequired(true),
            AssociationField::new('auteur')
                ->setRequired(true)
                ->setFormTypeOption('choice_label', 'nom'),
        ];
    }
    
}
