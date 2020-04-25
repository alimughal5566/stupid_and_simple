@foreach($get as $data)
    <tr role="row" class="odd">
        <td class="d-none get-id-reports" style="display: none">{{$data['id']}}</td>
        <td class="sorting_1">{{$data['name_first'].' '.$data['nashname']}}</td>
        <td>{{$data['email']}}</td>
        <td class="hidden-350">{{$data['gebdatum']}}</td>
        <td class="hidden-1024">{{$data['IBAN']}}</td>
        <td class="hidden-480">{{$data['Datum']}}</td>
        <td>
            <button class="view-data-btn" data-placement="bottom" title="View" data-toggle="modal" data-target="#exampleModal" ><i class="fa fa-search"></i></button>
            <button class="edit-data-btn" data-placement="bottom" title="Edit" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></button>
        </td>
    </tr>
@endforeach
