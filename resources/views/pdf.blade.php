<table style="width: 100%; border-collapse: collapse">
    <tbody>
        <tr>
            <td style="font-size: large; border: 1px solid; width: 20%; font-weight: 600">
                <p style="padding: 5pt">Title</p>
            </td>
            <td style="font-size: large; border: 1px solid; width: 80%">
                <p style="padding: 5pt">{{ $product['data']['name'] }}</p>
            </td>
        </tr>
        <tr>
            <td style="font-size: large; border: 1px solid; width: 20%; font-weight: 600">
                <p style="padding: 5pt">Detail</p>
            </td>
            <td style="font-size: large; border: 1px solid; width: 80%">
                <p style="padding: 5pt">{{ $product['data']['name'] }}</p>
            </td>
        </tr>
        <tr>
            <td style="font-size: large; border: 1px solid; width: 20%; font-weight: 600">
                <p style="padding: 5pt">Availability</p>
            </td>
            <td style="font-size: large; border: 1px solid; width: 80%">
                <p style="padding: 5pt">{{ $product['data']['in_stock'] }}</p>
            </td>
        </tr>
        <tr>
            <td style="font-size: large; border: 1px solid; width: 20%; font-weight: 600">
                <p style="padding: 5pt">Price</p>
            </td>
            <td style="font-size: large; border: 1px solid; width: 80%">
                <p style="padding: 5pt">{{ $product['data']['formated_price'] }}</p>
            </td>
        </tr>
        <tr>
            <td style="font-size: large; border: 1px solid; width: 20%; font-weight: 600">
                <p style="padding: 5pt">Short Description</p>
            </td>
            <td style="font-size: large; border: 1px solid; width: 80%">
                <p style="padding: 5pt">{{ strip_tags($product['data']['short_description']) }}</p>
            </td>
        </tr>
        <tr>
            <td style="font-size: large; border: 1px solid; width: 20%; font-weight: 600">
                <p style="padding: 5pt">Description</p>
            </td>
            <td style="font-size: large; border: 1px solid; width: 80%">
                <p style="padding: 5pt">{{ strip_tags($product['data']['description']) }}</p>
            </td>
        </tr>
        <tr>
            <td style="font-size: large; border: 1px solid; width: 20%; font-weight: 600">
                <p style="padding: 5pt">Images</p>
            </td>
            <td style="border: 1px solid; width: 80%">
                <div style="margin-top: 30pt; margin-left: 5pt">
                    @foreach ($product['data']['images'] as $image)
                        <img src="{{ $image['large_image_url'] }}" alt="{{ $image['id'] }}" height="100pt">
                    @endforeach
                </div>
            </td>
        </tr>
    </tbody>
</table>