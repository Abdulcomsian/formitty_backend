<table style="width: 100%; padding: 1rem">
    <tbody>
        <tr style="margin-top: 1rem">
            <th style="font-size: x-large">Title</th>
            <td style="font-size: large">{{ $product['data']['name'] }}</td>
        </tr>
        <tr style="margin-top: 1rem">
            <th style="font-size: x-large">Detail</th>
            <td style="font-size: large">{{ $product['data']['name'] }}</td>
        </tr>
        <tr style="margin-top: 1rem">
            <th style="font-size: x-large">Availability</th>
            <td style="font-size: large">{{ $product['data']['in_stock'] }}</td>
        </tr>
        <tr style="margin-top: ;">
            <th style="font-size: x-large">Price</th>
            <td style="font-size: large">{{ $product['data']['formated_price'] }}</td>
        </tr>
        <tr>
            <th style="font-size: x-large">Short Description</th>
            <td style="font-size: large">{!! $product['data']['short_description'] !!}</td>
        </tr>
        <tr>
            <th style="font-size: x-large">Description</th>
            <td style="font-size: large">{{ strip_tags($product['data']['description']) }}</td>
        </tr>
        <tr>
            <th style="font-size: x-large">Image</th>
            <td>
                @foreach ($product['data']['images'] as $image)
                    <img src="{{ $image['original_image_url'] }}" alt="{{ $image['id'] }}" width="100px">
                @endforeach
            </td>
        </tr>
        <tr>
            <th style="font-size: x-large">Image</th>
            <td>
                @foreach ($product['data']['images'] as $image)
                    <img src="{{ $image['original_image_url'] }}" alt="{{ $image['id'] }}" width="100px">
                @endforeach
            </td>
        </tr>
    </tbody>
</table>