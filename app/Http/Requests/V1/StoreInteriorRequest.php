<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreInteriorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = $this->user();

        return $user != null && $user->tokenCan('create');

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'categoryId' => ['required'],
            'name' => ['required'],
            'type' => ['required', Rule::in(['S','B'])],
            'description' => ['required'],
            'price' => ['required'],
            'image' => ['nullable']
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'category_id' => $this->categoryId
        ]);
    }
}
