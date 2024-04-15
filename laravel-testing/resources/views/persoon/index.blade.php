<x-app-layout>
    <main>
        <p class="text-white">je moeder</p>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($persoons as $persoon)
                <tr>
                    <td>{{ $persoon->name }}</td>
                    <td>{{ $persoon->price }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <main>
</x-app-layout>