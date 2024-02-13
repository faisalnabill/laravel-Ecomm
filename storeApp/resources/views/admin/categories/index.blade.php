@extends('layouts.admin')
@section('title', 'Categories')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/css/dashboard.css') }}">
    {{-- <link rel="stylesheet" href="{{asset('css/css/dashboard.css')}}"> --}}
@endpush
@push('js')
    <script src=" {{ asset('js/dashboard.js') }} "></script>
@endpush
@section('content')
    <h1 class="mb-2">Categories @if ($parent)
            / {{ $parent->name }}
        @endif
    </h1>
    <a class="btn btn-primary mb-2" href="{{ route('categories.create') }}" style="float: right">create category</a>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    @if (session()->has('successs'))
        <div class="alert alert-success">
            {{ session()->get('successs') }}
        </div>
    @endif

    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th># </th>
                <th>ID </th>
                <th>NAME </th>
                <th>PARENT_ID </th>
                <th>DATE </th>
            </tr>
        </thead>
        <tbody>

            {{-- comment --}}
            @php $i = 1 @endphp
            {{-- forelse تسمح للارافيل انها تدخل على الindex وتشوف داخلها child --}}
            @forelse($categories as $cat)
                {{-- @if ($loop->index == 2)
                @continue
            @endif --}}

                <tr>

                    <td>{{ $loop->iteration }}</td>
                    <td> {{ $cat->id }}</td>
                    <td>
                        @if ($loop->first)
                            First:
                        @elseif($loop->last)
                            last:
                        @else
                            Mid:
                        @endif

                        <a href=" {{ route('categories.child', [$cat->id]) }}"> {{ $cat->name }}</a>
                    </td>
                    <td> {{ $cat->parent->name }} </td>
                    <td> {{ $cat->created_at }} </td>
                    <td>
                        <a  type="edit" class="btn btn-info" href="{{ route('categories.edit', [$cat->id]) }}"> Edit</a>
                        <form method="post" action=" {{ route('categories.delete', [$cat->id]) }}">
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
                    <td colspan="5"> no category</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
