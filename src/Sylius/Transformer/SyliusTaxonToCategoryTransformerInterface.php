<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace BitBag\SyliusVueStorefrontPlugin\Sylius\Transformer;

use BitBag\SyliusVueStorefrontPlugin\Document\Category;
use Sylius\Component\Core\Model\TaxonInterface;

interface SyliusTaxonToCategoryTransformerInterface
{
    public function transform(TaxonInterface $taxon): Category;
}