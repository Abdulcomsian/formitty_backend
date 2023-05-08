{{-- @dd($product['data']['name']) --}}
<table class="table table-bordered mb-5">
    <thead>
        <tr class="table-danger">
            <th scope="col">Title</th>
            <th scope="col">Detail</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">Name</th>
            <td>{{ $product['data']['name']}}</td>
        </tr>
        <tr>
            <th scope="row">Price</th>
            <td>{{ $product['data']['formated_price']}}</td>
        </tr>
        <tr>
            <th scope="row">Short Description</th>
            <td>{!! $product['data']['short_description'] !!}</td>
        </tr>
        <tr>
            <th scope="row">Description</th>
            <td>{!! $product['data']['description'] !!}</td>
        </tr>
        <tr>
            <th scope="row">Image</th>
            <td>
                @foreach($product['data']['images'] as $image)
                <img src="{{ $image['original_image_url'] }}" alt="{{ $image['id'] }}" width="100px">
                @endforeach
            </td>
        </tr>
        <tr>
            <th scope="row">Image</th>
            <td>
                @foreach($product['data']['images'] as $image)
                <img src="{{ $image['original_image_url'] }}" alt="{{ $image['id'] }}" width="100px">
                @endforeach
            </td>
        </tr>
    </tbody>
</table>