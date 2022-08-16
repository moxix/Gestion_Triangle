<?php

namespace App\Controller\Admin;

use App\Entity\Supply;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SupplyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Supply::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            //IdField::new('id'),
            DateTimeField::new('created_at', 'Payée le'),
            TextField::new('name','Nom'),
            TextField::new('fournisseur','Fournisseur'),
            IntegerField::new('quantity', 'Quantité'),
            BooleanField::new('avalaible', 'Disponible'),
            MoneyField::new('price')->setCurrency('XOF'),
            TextEditorField::new('description')->hideOnIndex()
        ];
    }
}
