<table class="table table-bordered mb-5">
    <thead>
        <tr class="table-danger">
            <th scope="col">#</th>
            <th scope="col">Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employee ?? '' as $key=>$value)
        <tr>
            <th scope="row">{{ $key }}</th>
            <td>{{ $value }}</td>
        </tr>
        @endforeach
    </tbody>
</table>