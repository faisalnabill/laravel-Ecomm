@extends('layouts.admin')
@section('title', 'product')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/css/dashboard.css') }}">
    {{-- <link rel="stylesheet" href="{{asset('css/css/dashboard.css')}}"> --}}
@endpush
@push('js')
    <script src=" {{ asset('js/dashboard.js') }} "></script>
@endpush
@section('content')

    <h1 class="mb-2">Products </h1>
    <a class="btn btn-primary mb-2" href="{{ route('products.create') }}">create Products</a>


    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th># </th>
                <th>ID </th>
                <th>IMAGE </th>
                <th>NAME </th>
                <th>tags </th>
                <th>price </th>
                <th>Product_category </th>
                <th>DATE </th>
            </tr>
        </thead>
        <tbody>

            {{-- comment --}}
            @php $i = 1 @endphp
            {{-- forelse تسمح للارافيل انها تدخل على الindex وتشوف داخلها child --}}
            @forelse($products as $Product)
                {{-- @if ($loop->index == 2)
                @continue
            @endif --}}

                <tr>

                    <td>{{ $loop->iteration }}</td>
                    <td> {{ $Product->id }}</td>
                    <td> <img src="{{ asset('storage/' . $Product->image) }}" width="60"></td>
                    <td>{{ $Product->name }}</td>
                    <td>{{ $Product->price }}</td>
                    <td> {{ $Product->category->name }} </td>
                    <td>
                        <ul>
                            @foreach ($Product->tags as $tag)
                                <li>{{ $tag->name }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td> {{ $Product->created_at }} </td>
                    <td>
                        <a href="{{ route('products.edit', [$Product->id]) }}"> Edit</a>
                        <form method="post" action=" {{ route('products.delete', [$Product->id]) }}">
                            @csrf
                            {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
                            @method('delete')
                            {{-- <input type="hidden" name="_method" value="delete"> --}}
                            <button type='submit' class='btn btn-danger'>Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6"> no Products</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <style>
        .pagination-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .per-page {
            letter-spacing: 2px;
            line-height: 80px;
            height: 80px;
            width: 240px;
            display: inline-block;
            margin-right: 10px;
        }
    </style>

    <div class="pagination-wrapper">
        <div class="per-page">
            <form method="GET" action="{{ route('products') }}">
                Item per page
                <select name="perpage">
                    <option value="1">1</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="all">all</option>
                </select>
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="pagination-links">
            @if (method_exists($products, 'links'))
                {{ $products->links() }}
            @endif
        </div>
    </div>
@endsection
