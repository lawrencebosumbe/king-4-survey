@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.section.name_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.sections.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.section.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($Section) ? $section->name : '') }}" required>
                <select name="category_id" id="category_id" class="form-control select2" required>
                @if(!empty($categories))
                    <option selected="selected">Select Survey Category</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">
                            {{ $category->name }}
                        </option>
                    @endforeach
                @endif
                </select>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.section.fields.name_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-success" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection
