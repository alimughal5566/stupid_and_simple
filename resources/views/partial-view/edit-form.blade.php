<form action="">
    <label>First Name : </label>
    <input type="text" class="form-control" value="{{$getData['name_first']}}">
    <label>Nashname : </label>
    <input type="text" class="form-control" value="{{$getData['nashname']}}">
    <label>Email : </label>
    <input type="text" value="{{$getData['email']}}">
    <label>Gebdatum : </label>
    <input type="date" value="{{$getData['gebdatum']}}" class="form-control">
    <label>Mail : </label>
    <input type="text" class="form-control" value="{{$getData['Mail']}}">
    <label>Mobil : </label>
    <input type="text" class="form-control" value="{{$getData['Mobil']}}">
    <label>Festnetz : </label>
    <input type="text" class="form-control" value="{{$getData['Festnetz']}}">
    <label>Skype : </label>
    <input type="text" value="{{$getData['Skype']}}" class="form-control">
    <label>Firmen Name : </label>
    <input type="text" value="{{$getData['firmen_name']}}" class="form-control">
    <label>Firmen2 Name : </label>
    <input type="text" value="{{$getData['firmen2_name']}}" class="form-control">
    <label>Adresszusatz : </label>
    <input type="text" value="{{$getData['Adresszusatz']}}" class="form-control">
    <label>PLZ : </label>
    <input type="text" value="{{$getData['PLZ']}}" class="form-control">
    <label>Ort : </label>
    <input type="text" value="{{$getData['Ort']}}">
    <label>KontoInhaber : </label>
    <input type="text" required value="{{$getData['KontoInhaber']}}" class="form-control">
    <label>IBAN : </label>
    <input type="text" required value="{{$getData['IBAN']}}" class="form-control">
    <label>Konto Inhaber : </label>
    <input type="text" required value="{{$getData['Konto_Inhaber']}}" class="form-control">
    <label>Buchhal tung : </label>
    <input type="text" required value="{{$getData['Buchhal_tung']}}" class="form-control">
    <label>Firma : </label>
    <input type="text" required value="{{$getData['Firma']}}" class="form-control">
    <label>USt-ID : </label>
    <input type="text" value="{{$getData['USt-ID']}}" required class="form-control">
    <label>Gutschriften : </label>
    <input type="text" value="{{$getData['Gutschriften']}}" required>
    <label>Datum : </label>
    <input type="text" value="{{$getData['Datum']}}" class="form-control" required>
</form>
