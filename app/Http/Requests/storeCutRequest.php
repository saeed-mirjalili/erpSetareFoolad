<?php

namespace App\Http\Requests;

class storeCutRequest extends apiFormRequest
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
            'barcodeRoll' => 'required|exists:App\Models\Roll,barcodeRoll',
            'width' => 'array',
            'width.*' => 'numeric',
        ];
    }
}
