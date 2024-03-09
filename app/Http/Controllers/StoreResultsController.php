<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StoreResultsRequest;
use App\Repository\StoreResultsRepository;
use App\Repository\StoreRmeResultsRepository;
use App\Repository\StoreCArtsResultsRepository;
use App\Repository\StoreFrenchResultsRepository;
use App\Repository\StoreScienceResultsRepository;
use App\Repository\StoreComputingResultsRepository;
use App\Repository\StoreGhLanguageResultsRepository;
use App\Repository\StoreSocialStudiesResultsRepository;

class StoreResultsController extends Controller
{
    public function __construct()
    {
    }

    public function store_results(StoreResultsRepository $storeResultsRepository, StoreResultsRequest $storeResultsRequest)
    {
        $storeResultsRepository->storeResults($storeResultsRequest);

        return response()->json([
            'ok' => true,
            'msg' => "Results saved successfully",
            'data' => []
        ]);
    }

    public function update_results(StoreResultsRepository $storeResultsRepository, StoreResultsRequest $storeResultsRequest):JsonResponse
    {
        return $storeResultsRepository->update($storeResultsRequest);
    }

    // public function store_GhLang(StoreGhLanguageResultsRepository $storeGhLanguageResultsRepository, StoreResultsRequest $storeResultsRequest):JsonResponse
    // {
    //     return $storeGhLanguageResultsRepository->storeResults($storeResultsRequest);
    // }

    // public function store_socicalStd(StoreSocialStudiesResultsRepository $storeSocialStudiesResultsRepository, StoreResultsRequest $storeResultsRequest):JsonResponse
    // {
    //     return $storeSocialStudiesResultsRepository->storeResults($storeResultsRequest);
    // }

    // public function store_science(StoreScienceResultsRepository $storeScienceResultsRepository, StoreResultsRequest $storeResultsRequest):JsonResponse
    // {
    //     return $storeScienceResultsRepository->storeResults($storeResultsRequest);
    // }

    // public function store_computing(StoreComputingResultsRepository $storeComputingResultsRepository, StoreResultsRequest $storeResultsRequest):JsonResponse
    // {
    //     return $storeComputingResultsRepository->storeResults($storeResultsRequest);
    // }

    // public function store_rme(StoreRmeResultsRepository $storeRmeResultsRepository, StoreResultsRequest $storeResultsRequest):JsonResponse
    // {
    //     return $storeRmeResultsRepository->storeResults($storeResultsRequest);
    // }

    // public function store_french(StoreFrenchResultsRepository $storeFrenchResultsRepository, StoreResultsRequest $storeResultsRequest):JsonResponse
    // {
    //     return $storeFrenchResultsRepository->storeResults($storeResultsRequest);
    // }

    // public function store_cArts(StoreCArtsResultsRepository $storeCArtsResultsRepository, StoreResultsRequest $storeResultsRequest):JsonResponse
    // {
    //     return $storeCArtsResultsRepository->storeResults($storeResultsRequest);
    // }

}
