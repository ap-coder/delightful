@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.pageSection.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.page-sections.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="section_nickname">{{ trans('cruds.pageSection.fields.section_nickname') }}</label>
                <input class="form-control {{ $errors->has('section_nickname') ? 'is-invalid' : '' }}" type="text" name="section_nickname" id="section_nickname" value="{{ old('section_nickname', '') }}">
                @if($errors->has('section_nickname'))
                    <span class="text-danger">{{ $errors->first('section_nickname') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pageSection.fields.section_nickname_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="section">{{ trans('cruds.pageSection.fields.section') }}</label>
                <textarea class="form-control {{ $errors->has('section') ? 'is-invalid' : '' }}" name="section" id="section" required>{{ old('section') }}</textarea>
                @if($errors->has('section'))
                    <span class="text-danger">{{ $errors->first('section') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.pageSection.fields.section_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection