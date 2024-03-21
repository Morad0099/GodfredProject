<?php

namespace App\Repository;

use App\Http\Requests\StoreResultsRequest;
use App\Models\CArts;
use App\Models\computing;
use App\Models\french;
use App\Models\gh_language;
use App\Models\Maths;
use App\Models\results;
use App\Models\rme;
use App\Models\science;
use App\Models\socialstd;
use Illuminate\Http\JsonResponse;

class StoreResultsRepository
{
    public function __construct()
    {
    }

    public function storeResults(StoreResultsRequest $storeResultsRequest)
    {
        if ($storeResultsRequest) {
            // Calculate the class total
            $class_total = $storeResultsRequest->test1 + $storeResultsRequest->test2 + $storeResultsRequest->group_work + $storeResultsRequest->project_work;

            // Calculate the SBA (50% of the class total)
            $SBA = $class_total / 2;

            // Calculate the exams results (50% of the raw_exams_score)
            $exams_results = $storeResultsRequest->raw_exams_score / 2;

            // Calculate the Total Score
            $total_score = $SBA + $exams_results;

            // Determine the subject and corresponding model
            $subject = $storeResultsRequest->subject;
            $model = null;

            switch ($subject) {
                case 'ENG':
                    $model = results::class;
                    break;
                case 'MATHS':
                    $model = Maths::class;
                    break;
                case 'CART':
                    $model = CArts::class;
                    break;
                case 'FRENCH':
                    $model = french::class;
                    break;
                case 'RME':
                    $model = rme::class;
                    break;
                case 'COM':
                    $model = computing::class;
                    break;
                case 'SCI':
                    $model = science::class;
                    break;
                case 'SSTUD':
                    $model = socialstd::class;
                    break;
                case 'GHLANG':
                    $model = gh_language::class;
                    break;
                case 'CART':
                    $model = CArts::class;
                    break;
                case 'FRENCH':
                    $model = french::class;
                    break;
                case 'RME':
                    $model = rme::class;
                    break;
                case 'COM':
                    $model = computing::class;
                    break;
                case 'SCI':
                    $model = science::class;
                    break;
                case 'SSTUD':
                    $model = socialstd::class;
                    break;
                case 'GHLANG':
                    $model = gh_language::class;
                    break;
                default:
                    // Handle unknown subjects or throw an exception
                    break;
            }

            // Create a new result record with the calculated class total and other request fields
            if ($model) {
                $result = $model::create([
                    'class_total' => $class_total,
                    'Exams' => $exams_results,
                    'Total_Score' => $total_score,
                    'SBA' => $SBA,
                    ...$storeResultsRequest->safe()
                ]);

                // Recalculate positions if necessary
                $this->recalculatePositions($model);

                // Return the newly created result
                return response()->json([
                    'ok' => true,
                    'msg' => "Results saved successfully",
                    'data' => $result
                ]);
            }
        }
    }

    public function update(StoreResultsRequest $storeResultsRequest): JsonResponse
    {
        try {
            if ($storeResultsRequest) {
                // Calculate the class total
                $class_total = $storeResultsRequest->test1 + $storeResultsRequest->test2 + $storeResultsRequest->group_work + $storeResultsRequest->project_work;

                // Calculate the SBA (50% of the class total)
                $SBA = $class_total / 2;

                // Calculate the exams results (50% of the raw_exams_score)
                $exams_results = $storeResultsRequest->raw_exams_score / 2;

                // Calculate the Total Score
                $total_score = $SBA + $exams_results;

                $subject = $storeResultsRequest->subject;
                $model = null;

                switch ($subject) {
                    case 'ENG':
                        $model = results::class;
                        break;
                    case 'MATHS':
                        $model = Maths::class;
                        break;
                    case 'CART':
                        $model = CArts::class;
                        break;
                    case 'FRENCH':
                        $model = french::class;
                        break;
                    case 'RME':
                        $model = rme::class;
                        break;
                    case 'COM':
                        $model = computing::class;
                        break;
                    case 'SCI':
                        $model = science::class;
                        break;
                    case 'SSTUD':
                        $model = socialstd::class;
                        break;
                    case 'GHLANG':
                        $model = gh_language::class;
                        break;
                    case 'CART':
                        $model = CArts::class;
                        break;
                    case 'FRENCH':
                        $model = french::class;
                        break;
                    case 'RME':
                        $model = rme::class;
                        break;
                    case 'COM':
                        $model = computing::class;
                        break;
                    case 'SCI':
                        $model = science::class;
                        break;
                    case 'SSTUD':
                        $model = socialstd::class;
                        break;
                    case 'GHLANG':
                        $model = gh_language::class;
                        break;
                    default:
                        // Handle unknown subjects or throw an exception
                        break;
                }

                if ($model) {
                    $result = $model::where('student_no', $storeResultsRequest->student_no)
                        ->where('subject', $storeResultsRequest->subject)
                        ->update([
                            'class_total' => $class_total,
                            'Exams' => $exams_results,
                            'Total_Score' => $total_score,
                            'SBA' => $SBA,
                            ...$storeResultsRequest->safe()
                            // Add other fields to update if needed
                        ]);

                    $this->recalculatePositions($model);

                    // Return the response
                    return response()->json([
                        'ok' => true,
                        'msg' => "Results saved successfully",
                        'data' => $result
                    ]);
                }
            }

            // Return a response in case the request doesn't meet the conditions
            return response()->json([
                'ok' => false,
                'msg' => "Invalid request"
            ], 400); // You can adjust the status code as needed
        } catch (\Exception $e) {
            // Handle exceptions and return an error response
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage()
            ], 500); // Internal Server Error
        }
    }


    private function recalculatePositions($modelClass)
    {
        // Retrieve all existing records sorted by total score in descending order
        $students = $modelClass::orderBy('Total_Score', 'desc')->get();

        // Initialize variables for position calculation
        $position = 1;
        $prev_total_score = null;

        // Recalculate positions based on the sorted list
        foreach ($students as $student) {
            // Increment position only when the total score changes
            if ($prev_total_score !== null && $student->Total_Score != $prev_total_score) {
                $position++;
            }

            // Update the position for the current student
            $student->position_in_class = $position;
            $student->save();

            // Update the previous total score for the next iteration
            $prev_total_score = $student->Total_Score;
        }
    }
}
