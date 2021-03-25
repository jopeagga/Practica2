<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class validaRequest extends FormRequest
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
            'Matricula' => 'required|numeric|digits:10', /*Requerido, deben ser numeros y longitud de 10*/
            'Nombre' => 'required|alpha',     /*DRequerido, deben ser solo letras*/
            'Direccion' => 'required|alpha_num',  /*Requeerido, deben ser solo letras y numeros*/
            'Edad' => 'required|numeric|min:17|max:30', /*Requerido, deben ser solo numeros y el valor debe ser minimo 17 y max 30*/
        ];
    }
    
}
