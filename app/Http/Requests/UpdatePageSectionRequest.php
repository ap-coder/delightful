<?php

namespace App\Http\Requests;

use App\PageSection;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdatePageSectionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('page_section_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'section' => [
                'required'],
        ];
    }
}
