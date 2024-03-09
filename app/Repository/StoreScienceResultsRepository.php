<?php

namespace App\Repository;

use App\Models\science;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StoreResultsRequest;

class  StoreScienceResultsRepository{
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

            // Get the count of students with a higher total score than the current student
            // $position_in_class = results::where('Total_Score', '>', $total_score)->count() + 1;


            // Create a new result record with the calculated class total and other request fields
            $result = science::create([
                'class_total' => $class_total,
                'Exams' => $exams_results,
                'Total_Score' => $total_score,
                // 'position_in_class' => $position_in_class,
                'SBA' => $SBA,
                ...$storeResultsRequest->safe()
            ]);

            $this->recalculatePositions();


            // Return the newly created result
            return response()->json([
                'ok' => true,
                'msg' => "Results saved successfully",
                'data' => $result
            ]);
        }
    }

    public function update(StoreResultsRequest $storeResultsRequest): JsonResponse
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

            $result = new science(); // Create an instance of the results class
            $result->where('student_no', $storeResultsRequest->student_no)
                ->where('subject', 'ENG')
                ->update([
                    'class_total' => $class_total,
                    'Exams' => $exams_results,
                    'Total_Score' => $total_score,
                    // 'position_in_class' => $position_in_class,
                    'SBA' => $SBA,
                    ...$storeResultsRequest->safe()
                ]);

            $this->recalculatePositions();


            // Return the newly created result
            return response()->json([
                'ok' => true,
                'msg' => "Results saved successfully",
                'data' => $result
            ]);
        }
    }

    private function recalculatePositions()
    {
        // Retrieve all existing records sorted by total score in descending order
        $students = science::orderBy('Total_Score', 'desc')->get();

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