<?php

namespace App\Http\Requests;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Rules\UniqueCaseInsensitive;
use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        if ($this->title) {
            $this->merge([
                // This creates the slug and adds it to the request data.
                'slug' => Str::slug($this->title),
            ]);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'string',
                'max:190',
                // This now performs a clean, case-insensitive check on the 'title' column
                new UniqueCaseInsensitive('blogs', 'title', $this->route('id')),
            ],
            'slug' => [
                'nullable',
                Rule::unique('blogs', 'slug') // Check uniqueness on the 'slug' column
                    ->ignore($this->route('id'))
                    ->whereNull('deleted_at'),
            ],
            'order' => 'required|integer',
            'topImage' => 'nullable|image',
            'topDescription' => 'nullable|string',
            'listingDescription' => 'nullable|string',
            'reletedBlogId' => 'nullable|array',
        ];
    }
}
