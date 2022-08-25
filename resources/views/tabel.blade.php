
<table class="table-art table table-hover">
    <thead>
        <tr>
            <th>Artikel</th>
            <th>Desc</th>
            <th>Harga</th>
            <th>LV 3</th>
            <th>LV 4</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($master as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->desc }}</td>
                <td>{{ $item->harga }}</td>
                <td>{{ $item->lv3 }}</td>
                <td>{{ $item->lv4 }}</td>
            </tr>
        @endforeach
    </tbody>
</table>