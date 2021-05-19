<?php

namespace App\Controller\Admin;

use App\Entity\ProductDetail;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProductDetailCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProductDetail::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
