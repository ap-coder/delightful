<?php

namespace App\Http\Requests;

use App\Service;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateServiceRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('service_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'title'            => [
                'required'],
            'meta_title'       => [
                'max:55'],
            'meta_description' => [
                'max:120'],
            'twitter_desc'     => [
                'max:110'],
            'twitter_title'    => [
                'max:90'],
        ];
    }
}