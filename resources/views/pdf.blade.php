<table style="width: 100%; padding: 1rem">
    <tbody>
        <tr style="margin-top: 1rem">
            <th style="font-size: large">Title</th>
            <td style="font-size: large">{{ $product['data']['name'] }}</td>
        </tr>
        <tr style="margin-top: 1rem">
            <th style="font-size: large">Detail</th>
            <td style="font-size: large">{{ $product['data']['name'] }}</td>
        </tr>
        <tr style="margin-top: 1rem">
            <th style="font-size: large">Availability</th>
            <td style="font-size: large">{{ $product['data']['in_stock'] }}</td>
        </tr>
        <tr style="margin-top: ;">
            <th style="font-size: large">Price</th>
            <td style="font-size: large">{{ $product['data']['formated_price'] }}</td>
        </tr>
        <tr>
            <th style="font-size: large">Short Description</th>
            <td style="font-size: large">{{ strip_tags($product['data']['short_description']) }}</td>
        </tr>
        <tr>
            <th style="font-size: large">Description</th>
            <td style="font-size: large">{{ strip_tags($product['data']['description']) }}</td>
        </tr>
        <tr>
            <th style="font-size: large">Images</th>
            <td>
                <div style="margin-top: 30pt">
                    @foreach ($product['data']['images'] as $image)
                        <img src="{{ $image['large_image_url'] }}" alt="{{ $image['id'] }}" height="100pt">
                    @endforeach
                </div>
            </td>
        </tr>
    </tbody>
</table>