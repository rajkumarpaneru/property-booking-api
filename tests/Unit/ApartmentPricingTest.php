<?php

namespace Tests\Unit;

use App\Services\PricingService;
use PHPUnit\Framework\TestCase;

class ApartmentPricingTest extends TestCase
{
    private PricingService $pricingService;

    public function setUp(): void
    {
        parent::setUp();
        $this->pricingService = new PricingService();
    }

    public function test_pricing_for_single_price(): void
    {
        $prices = collect([
            [
                'start_date' => '2023-05-01',
                'end_date' => '2030-05-01',
                'price' => 100
            ]
        ]);

        $priceForOneDay = $this->pricingService->calculateApartmentPriceForDates(
            $prices,
            '2023-05-11',
            '2023-05-11'
        );

        $this->assertEquals(100, $priceForOneDay);
    }
}
