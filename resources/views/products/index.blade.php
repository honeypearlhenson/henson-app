<x-layout>
    <x-slot:heading>Product List</x-slot>
<x-table>
<div class="container mt-5">
    <!-- <h1>Products</h1> -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product['id'] }}</td>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['category'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-table>
</x-layout>

<!-- <h1>Tasks</h1>
<ul>
    @foreach ($tasks as $task)
        <li>{{ $task}}</li>
    @endforeach 
</ul>

<p>Global Variables:</p>
<p>{{ $sharedVariable }}</p>

<p>Product Key: {{ $productKey }}</p> -->