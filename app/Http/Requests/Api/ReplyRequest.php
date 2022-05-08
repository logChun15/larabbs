<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\ApiRequest;

class ReplyRequest extends ApiRequest
{
    public function rules()
    {
        switch($this->method())
        {
            // CREATE
            case 'POST':
            {
                return [
                    // CREATE ROLES
                    'topic_id' => 'bail|required|integer|min:0',
					'user_id' => 'bail|required|integer|min:0',
					'content' => 'bail|required|string',
                ];
            }
            // UPDATE
            case 'PUT':
            case 'PATCH':
            {
                return [
                    // UPDATE ROLES
                    'topic_id' => 'bail|required|integer|min:0',
					'user_id' => 'bail|required|integer|min:0',
					'content' => 'bail|required|string',
                ];
            }
            case 'GET':
            {
                return [
                    // LIST ROLES
                    'page'=>'bail|required|integer|min:1',
                    'per_page'=>'bail|required|integer|min:1'
                ];
            }
            case 'DELETE':
            default:
            {
                return [];
            }
        }
    }

    public function messages()
    {
        return [
            // Validation messages
        ];
    }
}
