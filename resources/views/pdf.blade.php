<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
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
                <p style="padding: 5pt">Rating</p>
            </td>
            <td style="font-size: large; border: 1px solid; width: 80%">
                <p style="padding: 5pt">{{ $product['data']['reviews']['average_rating'] }}</p>
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
        <tr>
            <td style="font-size: large; border: 1px solid; width: 20%; font-weight: 600">
                <p style="padding: 5pt">Reviews</p>
            </td>
            <td style="font-size: large; border: 1px solid; width: 80%">
                <div style="padding: 5pt">
                    @foreach ($reviews['data'] as $review)
                        <div style="padding-top: 5pt; padding-bottom: 5pt">
                            <div>
                                {{ $review['title'] }}
                            </div>
                            <div>
                                {{ $review['comment'] }}
                            </div>
                            <div>
                                {{ $review['rating'] }} Rating
                            </div>
                            <div>
                                {{ $review['name'] }}, {{ date('F d, Y', strtotime($review['created_at'])) }}
                            </div>
                        </div>
                        <hr />
                    @endforeach
                </div>
            </td>
        </tr>
    </tbody>
</table>
