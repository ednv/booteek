<?php

namespace App\Controller\Admin;

use App\Entity\Stock;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class StockCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Stock::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            AssociationField::new('product')->hideOnIndex(),
            AssociationField::new('size')->hideOnIndex(),
            IntegerField::new('stock'),
        ];
    }
}
