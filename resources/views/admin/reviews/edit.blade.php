@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.review.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.reviews.update", [$review->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="service_reviewed_id">{{ trans('cruds.review.fields.service_reviewed') }}</label>
                <select class="form-control select2 {{ $errors->has('service_reviewed') ? 'is-invalid' : '' }}" name="service_reviewed_id" id="service_reviewed_id">
                    @foreach($service_revieweds as $id => $service_reviewed)
                        <option value="{{ $id }}" {{ ($review->service_reviewed ? $review->service_reviewed->id : old('service_reviewed_id')) == $id ? 'selected' : '' }}>{{ $service_reviewed }}</option>
                    @endforeach
                </select>
                @if($errors->has('service_reviewed'))
                    <span class="text-danger">{{ $errors->first('service_reviewed') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.review.fields.service_reviewed_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="product_reviewed_id">{{ trans('cruds.review.fields.product_reviewed') }}</label>
                <select class="form-control select2 {{ $errors->has('product_reviewed') ? 'is-invalid' : '' }}" name="product_reviewed_id" id="product_reviewed_id">
                    @foreach($product_revieweds as $id => $product_reviewed)
                        <option value="{{ $id }}" {{ ($review->product_reviewed ? $review->product_reviewed->id : old('product_reviewed_id')) == $id ? 'selected' : '' }}>{{ $product_reviewed }}</option>
                    @endforeach
                </select>
                @if($errors->has('product_reviewed'))
                    <span class="text-danger">{{ $errors->first('product_reviewed') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.review.fields.product_reviewed_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="review_author">{{ trans('cruds.review.fields.review_author') }}</label>
                <input class="form-control {{ $errors->has('review_author') ? 'is-invalid' : '' }}" type="text" name="review_author" id="review_author" value="{{ old('review_author', $review->review_author) }}">
                @if($errors->has('review_author'))
                    <span class="text-danger">{{ $errors->first('review_author') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.review.fields.review_author_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="review_content">{{ trans('cruds.review.fields.review_content') }}</label>
                <input class="form-control {{ $errors->has('review_content') ? 'is-invalid' : '' }}" type="text" name="review_content" id="review_content" value="{{ old('review_content', $review->review_content) }}">
                @if($errors->has('review_content'))
                    <span class="text-danger">{{ $errors->first('review_content') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.review.fields.review_content_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="rating">{{ trans('cruds.review.fields.rating') }}</label>
                <input class="form-control {{ $errors->has('rating') ? 'is-invalid' : '' }}" type="number" name="rating" id="rating" value="{{ old('rating', $review->rating) }}" step="1" required>
                @if($errors->has('rating'))
                    <span class="text-danger">{{ $errors->first('rating') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.review.fields.rating_helper') }}</span>
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