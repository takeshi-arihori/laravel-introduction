<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Myrule implements ValidationRule
{
    protected $num; // プロパティの宣言を追加

    public function __construct($n) // コンストラクタを追加
    {
        $this->num = $n;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if ($value % $this->num !== 0) {
            $fail($this->num . 'で割り切れる数値を入力してください。');
        }
    }
}
