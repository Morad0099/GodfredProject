<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Http\Exceptions\HttpResponseException;


class StoreResultsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'student_no' => ["required"],
            'subject' => ["sometimes"],
            'group_work' => ["required"],
            'test1' => ["required"],
            'project_work' => ["required"],
            'test2' => ["required"],
            'raw_exams_score' => ["required"],
        ];
    }

    public function messages()
    {
        return [
            'student_no.required' => 'The student field is required',
            'subject.required' => 'The subject field is required',
            'group_work.required' => 'The group work field is required',
            'test1.required' => 'The test 1 field is required',
            'project_work.required' => 'The project work field is required',
            'test2' => 'The test 2 field is required',
            'raw_exams_score' => 'The raw exams score field is required'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'ok' => false,
            'msg' => "Submitting results failed",
            'data' => [],
            'error' => $validator->errors(),
            'error_all' => $validator->errors()->all()
        ],422));
    }
}
