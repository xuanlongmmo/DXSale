<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class deficreatesale extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'token' => 'required|min:42|max:42',
            'token_name' => 'required',
            'token_symbol' => 'required',
            'token_decimal' => 'required',
            'price' => 'required|numeric',
            'soft' => 'required|numeric',
            'hard' => 'required|numeric',
            'min' => 'required|numeric',
            'max' => 'required|numeric',
            'liquidity' => 'required|min:51|max:100|numeric',
            'rate' => 'numeric',
        ];
    }

    public function messages()
    {
        return [
            'token.required' => 'Your Token address # is an invalid Address!',
            'token.min' => 'Your Token address # is an invalid Address!',
            'token.max' => 'Your Token address # is an invalid Address!',
            'token_name.required' => 'Token name cannot be blank',
            'token_symbol.required' => 'Token symbol cannot be blank',
            'token_decimal.required' => 'Token decimal cannot be blank',
            'price.required' => 'Price cannot be blank',
            'price.numeric' => 'Price must be number',
            'soft.required' => 'Soft cap cannot be blank',
            'soft.numeric' => 'Soft must be number',
            'hard.required' => 'Hard cap cannot be blank',
            'hard.numeric' => 'Hard must be number',
            'min.required' => 'Minimum contribution limit cannot be blank',
            'min.numeric' => 'Minimum contribution must be number',
            'max.required' => 'Maximum contribution limit cannot be blank',
            'max.numeric' => 'Maximum contribution must be number',
            'liquidity.required' => 'Uniswap liquidity contribution limit cannot be blank',
            'liquidity.min' => 'The liquidity amount needs to be a number >= 51 and <= 100',
            'liquidity.max' => 'The liquidity amount needs to be a number >= 51 and <= 100',
            'liquidity.numeric' => 'The liquidity must be number',
            'rate.numeric' => 'Uniswap listing rate must be number',
        ];
    }
}
