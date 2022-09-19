<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuizCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;   //Requestimizi oturum açık iken kontrol ettiğimiz için false true yaptık
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'title'=>'required|min:3|max:200',
            'description'=>'max:50',
            'finished_at'=>"nullable|after:".now()
        ];
    }

    public function attributes()
    {
        return [
            //
            'title'=>'BAŞLIK',
            'finished_at'=>"TARİH",
            'description'=>"AÇIKLAMA"
        ];
    }
 

    // public function messages()
    // {
    //     return [
    //         //
    //         'title'=>'Bunlar benim yorumlarım eger rules  gelen hazır meşajı görmek istemiyorsan messages fonk tanımlayabilirsin görmek istiyorsan messages() fonk kes görürsün Request alanını messages diye bir fonksiyon belirledim message burada dönüyor bu kulllanım dogrumu',
    //         'finished_at'=>"tarih alanını girmek zorundasınız yoksa sadece rules() ve attributes() yeter mi yoksa",
    //         'description'=>"açıklama satırı maximum 20 karakterden fazla olamaz"
    //     ];
    // }

    
}
