<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateInteriorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $method = $this->method();

        if ($method == 'PUT') {
            return [
                'categoryId' => ['required'],
                'name' => ['required'],
                'type' => ['required', Rule::in(['S','B'])],
                'description' => ['required'],
                'price' => ['required'],
                'image' => ['nullable']
            ];
        } else {
            return [
                'categoryId' => ['sometimes','required'],
                'name' => ['sometimes','required'],
                'type' => ['sometimes','required', Rule::in(['S','B'])],
                'description' => ['sometimes','required'],
                'price' => ['sometimes','required'],
                'image' => ['sometimes','nullable']
            ];
        }
    }

    protected function prepareForValidation()
    {
        if ($this->categotyId) {
            $this->merge([
                'category_id' => $this->categoryId
            ]);
        }
    }
}
