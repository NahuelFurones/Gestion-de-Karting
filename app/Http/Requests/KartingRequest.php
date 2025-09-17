<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class KartingRequest extends FormRequest
{
    public function authorize(){ return true; }
    public function rules()
    {
        return [
            'name'=>'required|string|max:255',
            'location'=>'required|string|max:255',
            'capacity'=>'required|integer',
            'price_per_hour'=>'required|numeric',
            // Permitir ambos formatos para open_time y close_time
            'open_time'=>'nullable|regex:/^\d{2}:\d{2}(:\d{2})?$/',
            'close_time'=>'nullable|regex:/^\d{2}:\d{2}(:\d{2})?$/',
            'description'=>'nullable|string',
        ];
    }
}
