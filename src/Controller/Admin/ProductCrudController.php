<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ColorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextField::new('slug')->hideOnIndex(),
            TextEditorField::new('descr'),
            MoneyField::new('price')->setCurrency('EUR'),
            MoneyField::new('price_old')->setCurrency('EUR')->hideOnIndex(),
            ColorField::new('color')->hideOnIndex(),
            AssociationField::new('stocks')->hideOnIndex(),
            AssociationField::new('categories')->hideOnIndex(),
            //IntegerField::new('price'),
            //DateTimeField::new('publishedAt'),
        ];
    }
    
}
