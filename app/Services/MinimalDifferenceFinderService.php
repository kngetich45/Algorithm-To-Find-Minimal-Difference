<?php
namespace App\Services;

class MinimalDifferenceFinderService
{
    public function calculate(array $arr): int
    {
        $totalArray = count($arr);
        $totalSum = array_sum($arr);
        $minSplitDifference = PHP_INT_MAX;
        $sumLeftPart = 0;

        for ($i = 0; $i < $totalArray - 1; $i++) {
            $sumLeftPart += $arr[$i];
            $sumRightPart = $totalSum - $sumLeftPart;
            $currentSplitDifference = abs($sumLeftPart - $sumRightPart);

            if ($currentSplitDifference < $minSplitDifference) {
                $minSplitDifference = $currentSplitDifference;
            }
        }

        return $minSplitDifference;
    }






}
