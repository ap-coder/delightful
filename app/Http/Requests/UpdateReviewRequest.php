<?php

namespace App\Http\Requests;

use App\Review;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateReviewRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('review_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'rating' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647'],
        ];
    }
}
