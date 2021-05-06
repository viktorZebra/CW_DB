@foreach($associations as $association)
    <tr>
        <td>{{$association->name}}</td>
        <td class="td-center">{{$association->course}}</td>
        <td class="td-center">{{$association->organisation}}</td>
        <td class="td-center">
            <a href="javascript:void(0);"
               class="btn btn-sm btn-danger delete"
               data="{{$association->id}}"><i class="fas fa-times"></i></a>
        </td>
    </tr>
@endforeach
<tr><td class="td-pagination">{{ $associations->links() }}</td></tr>
