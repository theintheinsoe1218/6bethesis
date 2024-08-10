<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SimilarityMatrixService;

class MatrixController extends Controller
{
    protected $similarityMatrixService;

    public function __construct(SimilarityMatrixService $similarityMatrixService)
    {
        $this->similarityMatrixService = $similarityMatrixService;
    }

    public function showMatrix(Request $request)
    {
        $method = $request->input('method', 'cosine'); // Default to cosine if not provided
        $similarityMatrix = $this->similarityMatrixService->getSimilarityMatrix($method);

        return view('matrix', compact('similarityMatrix', 'method'));
    }
}
