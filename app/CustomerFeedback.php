<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerFeedback
 * @package App
 */
class CustomerFeedback extends Model
{
    /**
     * @var array
     */
    protected $guarded=['id','_token'];

    /**
     * @param $request
     * @return mixed
     */
    public function insertData($request){
        $response=$this::create([
           'name_first'=>$request['name'],
            'nashname'=>$request['nashname'],
            'email'=>$request['email'],
            'gebdatum'=>$request['gebdatum'],
            'Mail'=>$request['Mail'],
            'Mobil'=>$request['Mobil'],
            'Festnetz'=>$request['Festnetz'],
            'Skype'=>$request['Skype'],
            'firmen_name'=>$request['firmen_name'],
            'radio2'=>$request['radio2'],
            'firmen2_name'=>$request['firmen2_name'],
            'Adresszusatz'=>$request['Adresszusatz'],
            'Anschrift'=>$request['Anschrift'],
            'PLZ'=>$request['PLZ'],
            'Ort'=>$request['Ort'],
            'radio'=>$request['radio'],
            'select'=>$request['select'],
            'KontoInhaber'=>$request['KontoInhaber'],
            'iban1'=>$request['iban'],
            'bic1'=>$request['bic1'],
            'E-Mail'=>$request['E-Mail'],
            'USt'=>$request['USt'],
            'Konto'=>$request['Konto'],
            'IBAN'=>$request['IBAN'],
            'bic2'=>$request['bic2'],
            'Konto_Inhaber'=>$request['Konto_Inhaber'],
            'bic3'=>$request['bic3'],
            'Buchhal_tung'=>$request['Buchhal_tung'],
            'Firma'=>$request['Firma'],
            'Nachname'=>$request['Nachname'],
            'USt-ID'=>$request['USt-ID'],
            'Konto-Inhaber'=>$request['Konto-Inhaber'],
            'bic4'=>$request['bic4'],
            'Gutschriften'=>$request['Gutschriften'],
            'Name'=>$request['Name'],
            'Datum'=>$request['Datum'],
            'radio1'=>$request['radio1']
        ]);
        return $response;
    }
}
