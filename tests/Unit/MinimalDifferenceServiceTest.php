<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\MinimalDifferenceFinderService;

class MinimalDifferenceServiceTest extends TestCase
{

    public function test_service_finder_should_return_minimum_difference(): void
    {
        $minSplitDifference = new MinimalDifferenceFinderService();

         $array = [4,5,6,7,8,9];
         $this->assertEquals(5, $minSplitDifference->calculate($array));

    }
    public function test_should_return_o_with_only_two_same_values(): void
    {
        $minSplitDifference = new MinimalDifferenceFinderService();
         $emptyArray = [3, 3];
         $this->assertEquals(0, $minSplitDifference->calculate($emptyArray));


    }

}
