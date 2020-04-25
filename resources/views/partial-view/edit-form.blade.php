<form action="{{route('edit')}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$getData['id']}}">
    <label>First Name : </label>
    <input type="text" required class="form-control" value="{{$getData['name_first']}}" name="name_first">
    <label>Nashname : </label>
    <input type="text" required class="form-control" value="{{$getData['nashname']}}" name="nashname">
    <label>Email : </label>
    <input type="text" required class="form-control" value="{{$getData['email']}}" name="email">
    <label>Gebdatum : </label>
    <input type="date" required value="{{$getData['gebdatum']}}" name="gebdatum" class="form-control">
    <label>Mail : </label>
    <input type="text" required class="form-control" value="{{$getData['Mail']}}" name="Mail">
    <label>Mobil : </label>
    <input type="text" required class="form-control" value="{{$getData['Mobil']}}" name="Mobil">
    <label>Festnetz : </label>
    <input type="text" required class="form-control" value="{{$getData['Festnetz']}}" name="Festnetz">
    <label>Skype : </label>
    <input type="text" required value="{{$getData['Skype']}}" class="form-control" name="Skype">
    <label>Firmen Name : </label>
    <input type="text" required value="{{$getData['firmen_name']}}" name="firmen_name" class="form-control">
    <label>Firmen2 Name : </label>
    <input type="text" required value="{{$getData['firmen2_name']}}" name="firmen2_name" class="form-control">
    <label>Adresszusatz : </label>
    <input type="text" required value="{{$getData['Adresszusatz']}}" name="Adresszusatz" class="form-control">
    <label>PLZ : </label>
    <input type="text" required value="{{$getData['PLZ']}}" name="PLZ" class="form-control">
    <label>Ort : </label>
    <input type="text" value="{{$getData['Ort']}}" name="Ort" class="form-control" required>
    <label>KontoInhaber : </label>
    <input type="text" required value="{{$getData['KontoInhaber']}}" name="KontoInhaber" class="form-control">
    <label>IBAN : </label>
    <input type="text" required value="{{$getData['IBAN']}}" name="IBAN" class="form-control">
    <label>Konto Inhaber : </label>
    <input type="text" required value="{{$getData['Konto_Inhaber']}}" name="Konto_Inhaber" class="form-control">
    <label>Buchhal tung : </label>
    <input type="text" required value="{{$getData['Buchhal_tung']}}" name="Buchhal_tung" class="form-control">
    <label>Firma : </label>
    <input type="text" required value="{{$getData['Firma']}}" name="Firma" class="form-control">
    <label>USt-ID : </label>
    <input type="text" value="{{$getData['USt-ID']}}" name="USt-ID" required class="form-control">
    <label>Gutschriften : </label>
    <input type="text" class="form-control" value="{{$getData['Gutschriften']}}" name="Gutschriften" required>
    <label>Datum : </label>
    <input type="date" value="{{$getData['Datum']}}" name="Datum" class="form-control" required>
    <div class="col-md-12 d-flex justify-content-center">
        <button class="btn btn-primary w-50 text-center" style="margin-left: 230px; margin-top: 10px;">Update</button>
    </div>
</form>
