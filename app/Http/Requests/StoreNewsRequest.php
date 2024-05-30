<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
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
        if (!$this->id) {
            return [
                'title' => 'required|string|max:255|unique:services,title,' . $this->id,
                'description' => 'required|string',
                'sort_description' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'status' => 'required|boolean',
            ];
        } else {
            return [
                'title' => 'sometimes|required|string|max:255|unique:services,title,' . $this->id,
                'description' => 'sometimes|required|string',
                'sort_description' => 'sometimes|required|string',
                'image' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'status' => 'sometimes|required|boolean',
            ];
        }
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'status' => $this->status ? true : false,
        ]);
    }
}
