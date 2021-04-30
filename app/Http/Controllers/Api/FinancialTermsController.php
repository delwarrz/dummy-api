<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FinancialTerm;
use Illuminate\Http\Request;

class FinancialTermsController extends Controller
{
    /**
     * @OA\Get(
     *  path="/financial-terms",
     *  operationId="financialTermsList",
     *  tags={"Financial Terms"},
     *  summary="Financial Terms related API",
     *  @OA\Response(
     *     response=400,
     *     description="Bad Request"
     *  ),
     *  @OA\Response(
     *     response=401,
     *     description="Unauthenticated"
     *  ),
     *  @OA\Response(
     *     response=403,
     *     description="Forbidden"
     *  ),
     *  @OA\Response(
     *     response=404,
     *     description="Not Found"
     *  ),
     *  @OA\Response(
     *     response=200,
     *     description="Successful"
     *  )
     * )
     *
     */
    public function index(){
        try {
            $terms = FinancialTerm::paginate(10);
            return response()->json($terms);
        }catch (\Exception $e){
            return response()->json(['success' => false, 'message' => 'something went wrong!']);
        }
    }
}
