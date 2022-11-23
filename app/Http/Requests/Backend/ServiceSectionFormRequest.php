<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ServiceSectionFormRequest extends FormRequest
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
        return [
            'name' => [
                'required', 
                'max:255',
            ],
            'image' => [
                $this->service_section ? 'nullable' : 'required', 
                'file',
                'max:2048',
            ],
            'description' => [
                'nullable',
                ],
            'status' => [
                'required',
                ],
        ];
    }
    public function persist(){

        $validated = $this->validated();

        if($this->hasFile('image')){
            $validated['image'] = upload($this->image, 'service/', $this->service_section->image ?? null);
        }
        return $validated;
    }
}
