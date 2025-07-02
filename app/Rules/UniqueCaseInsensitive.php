<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UniqueCaseInsensitive implements Rule
{
    private $table;
    private $column;
    private $ignoreId;

    /**
     * Create a new rule instance.
     *
     * @param string $table The table to check.
     * @param string $column The column to check for uniqueness.
     * @param int|null $ignoreId The ID to ignore (on updates).
     */
    public function __construct(string $table, string $column = 'NULL', $ignoreId = null)
    {
        $this->table = $table;
        $this->column = $column;
        $this->ignoreId = $ignoreId;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute The name of the field being validated.
     * @param  mixed  $value The value of the field.
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // If no column is specified, use the attribute name (e.g., 'title')
        $columnToCheck = ($this->column === 'NULL') ? $attribute : $this->column;

        $query = DB::table($this->table)
            ->whereRaw("LOWER({$columnToCheck}) = ?", [strtolower($value)])
            ->whereNull('deleted_at');

        if ($this->ignoreId) {
            $query->where('id', '!=', $this->ignoreId);
        }

        return !$query->exists();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute has already been taken.';
    }
}