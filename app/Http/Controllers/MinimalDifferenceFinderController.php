<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Validators\ContainsComma;
use App\Services\MinimalDifferenceFinderService;

class MinimalDifferenceFinderController extends Controller
{
    protected $minDifferenceService;

    public function __construct(MinimalDifferenceFinderService $minDifferenceService)
    {
        $this->minDifferenceService = $minDifferenceService;
    }
    public function index()
      {
            return view('minimal-difference');
     }
    public function getMinimalDifference(Request $request)
        {

            $request->validate([
                'array_input' => ['required', 'string', new ContainsComma],
            ]);
        $arrayInput = $request->input('array_input');
        $splitArray = array_map('intval', explode(',', $arrayInput));
        $minimalDifference = $this->minDifferenceService->calculate($splitArray);

        return view('minimal-difference', ['minimalDifference' => $minimalDifference]);
    }

    public function contains_comma(string $value)
{
    return strpos($value, ",") !== false;
}
}
