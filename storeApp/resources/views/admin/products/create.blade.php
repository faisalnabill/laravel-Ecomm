@extends('layouts.admin')

@section('content')
<h1 class="mb-2">create Products</h1>

@if($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif
{{-- enctype="multipart/form-data" عشان يتعرف على الصور --}}
<form method="post" action=" {{route('products.store')}}" enctype="multipart/form-data">
@csrf
<div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">name</label>
        <div class="mb-3 col-sm-10">
            <input name="name" class="form-control  @error ('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
            @if ($errors->has('name'))
            <p class="text-danger">{{ $errors->first('name') }}</p>
            @endif
        </div>
        <div class="mb-3 row">
            <label for="description" class="col-sm-2 col-form-label">description</label>
            <div class="mb-3 col-sm-10">
                <textarea name="description" class="form-control @error ('description') is-invalid @enderror" id="description">{{ old('description') }}</textarea>
            </div>
            @if ($errors->has('description'))
            <p class="text-danger">{{ $errors->first('description') }}</p>
            @endif
            <div class="from-group ">
                <label for="category_id">category</label>

                <select name="category_id" id="category_id" class="form-control @error('category_id')is-invalid @enderror">
                    <option value=" ">no parent</option>
                    @foreach (App\Models\category::all() as $cat)
                        <option value="{{$cat->id}} "@if (old('category_id') == $cat->id) selected @endif> {{$cat->name}}</option>
                    @endforeach
                </select>
            </div>

        </div>
        <div class="form-group">
            <label for="price">price</label>
            <input type="text" name="price" class="form-control  @error ('price') is-invalid @enderror" id="price" value="{{old('price')}}" >
            @if ($errors->has('price'))
            <p class="text-danger">{{ implode(',',$errors->get('price')) }}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="image">image</label>
            <input type="file" name="image" class="form-control  @error ('image') is-invalid @enderror" id="image">
            @if ($errors->has('image'))
            <p class="text-danger">{{ implode(', ',$errors->get('image')) }}</p>
            @endif
        </div>
        <div class="mb-3 col-sm-10">
                        <button type="submit" class="btn btn-primary mb-3">confirm</button>
</form>

@endsection
