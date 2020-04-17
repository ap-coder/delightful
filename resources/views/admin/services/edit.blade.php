@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.service.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.services.update", [$service->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="price">{{ trans('cruds.service.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', $service->price) }}" step="0.01">
                @if($errors->has('price'))
                    <span class="text-danger">{{ $errors->first('price') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.service.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.service.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $service->title) }}" required>
                @if($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.service.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="service_text">{{ trans('cruds.service.fields.service_text') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('service_text') ? 'is-invalid' : '' }}" name="service_text" id="service_text">{!! old('service_text', $service->service_text) !!}</textarea>
                @if($errors->has('service_text'))
                    <span class="text-danger">{{ $errors->first('service_text') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.service.fields.service_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="service_text_2">{{ trans('cruds.service.fields.service_text_2') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('service_text_2') ? 'is-invalid' : '' }}" name="service_text_2" id="service_text_2">{!! old('service_text_2', $service->service_text_2) !!}</textarea>
                @if($errors->has('service_text_2'))
                    <span class="text-danger">{{ $errors->first('service_text_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.service.fields.service_text_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="excerpt">{{ trans('cruds.service.fields.excerpt') }}</label>
                <textarea class="form-control {{ $errors->has('excerpt') ? 'is-invalid' : '' }}" name="excerpt" id="excerpt">{{ old('excerpt', $service->excerpt) }}</textarea>
                @if($errors->has('excerpt'))
                    <span class="text-danger">{{ $errors->first('excerpt') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.service.fields.excerpt_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="featured_image">{{ trans('cruds.service.fields.featured_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('featured_image') ? 'is-invalid' : '' }}" id="featured_image-dropzone">
                </div>
                @if($errors->has('featured_image'))
                    <span class="text-danger">{{ $errors->first('featured_image') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.service.fields.featured_image_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="icon_class">{{ trans('cruds.service.fields.icon_class') }}</label>
                <input class="form-control {{ $errors->has('icon_class') ? 'is-invalid' : '' }}" type="text" name="icon_class" id="icon_class" value="{{ old('icon_class', $service->icon_class) }}">
                @if($errors->has('icon_class'))
                    <span class="text-danger">{{ $errors->first('icon_class') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.service.fields.icon_class_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="youtube_video">{{ trans('cruds.service.fields.youtube_video') }}</label>
                <input class="form-control {{ $errors->has('youtube_video') ? 'is-invalid' : '' }}" type="text" name="youtube_video" id="youtube_video" value="{{ old('youtube_video', $service->youtube_video) }}">
                @if($errors->has('youtube_video'))
                    <span class="text-danger">{{ $errors->first('youtube_video') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.service.fields.youtube_video_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="meta_title">{{ trans('cruds.service.fields.meta_title') }}</label>
                <input class="form-control {{ $errors->has('meta_title') ? 'is-invalid' : '' }}" type="text" name="meta_title" id="meta_title" value="{{ old('meta_title', $service->meta_title) }}">
                @if($errors->has('meta_title'))
                    <span class="text-danger">{{ $errors->first('meta_title') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.service.fields.meta_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="meta_description">{{ trans('cruds.service.fields.meta_description') }}</label>
                <input class="form-control {{ $errors->has('meta_description') ? 'is-invalid' : '' }}" type="text" name="meta_description" id="meta_description" value="{{ old('meta_description', $service->meta_description) }}">
                @if($errors->has('meta_description'))
                    <span class="text-danger">{{ $errors->first('meta_description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.service.fields.meta_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="facebook_title">{{ trans('cruds.service.fields.facebook_title') }}</label>
                <input class="form-control {{ $errors->has('facebook_title') ? 'is-invalid' : '' }}" type="text" name="facebook_title" id="facebook_title" value="{{ old('facebook_title', $service->facebook_title) }}">
                @if($errors->has('facebook_title'))
                    <span class="text-danger">{{ $errors->first('facebook_title') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.service.fields.facebook_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="facebook_desc">{{ trans('cruds.service.fields.facebook_desc') }}</label>
                <input class="form-control {{ $errors->has('facebook_desc') ? 'is-invalid' : '' }}" type="text" name="facebook_desc" id="facebook_desc" value="{{ old('facebook_desc', $service->facebook_desc) }}">
                @if($errors->has('facebook_desc'))
                    <span class="text-danger">{{ $errors->first('facebook_desc') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.service.fields.facebook_desc_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="twitter_desc">{{ trans('cruds.service.fields.twitter_desc') }}</label>
                <input class="form-control {{ $errors->has('twitter_desc') ? 'is-invalid' : '' }}" type="text" name="twitter_desc" id="twitter_desc" value="{{ old('twitter_desc', $service->twitter_desc) }}">
                @if($errors->has('twitter_desc'))
                    <span class="text-danger">{{ $errors->first('twitter_desc') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.service.fields.twitter_desc_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="twitter_title">{{ trans('cruds.service.fields.twitter_title') }}</label>
                <input class="form-control {{ $errors->has('twitter_title') ? 'is-invalid' : '' }}" type="text" name="twitter_title" id="twitter_title" value="{{ old('twitter_title', $service->twitter_title) }}">
                @if($errors->has('twitter_title'))
                    <span class="text-danger">{{ $errors->first('twitter_title') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.service.fields.twitter_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="banner">{{ trans('cruds.service.fields.banner') }}</label>
                <div class="needsclick dropzone {{ $errors->has('banner') ? 'is-invalid' : '' }}" id="banner-dropzone">
                </div>
                @if($errors->has('banner'))
                    <span class="text-danger">{{ $errors->first('banner') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.service.fields.banner_helper') }}</span>
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

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '/admin/services/ckmedia', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', {{ $service->id ?? 0 }});
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

<script>
    Dropzone.options.featuredImageDropzone = {
    url: '{{ route('admin.services.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4086,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="featured_image"]').remove()
      $('form').append('<input type="hidden" name="featured_image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="featured_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($service) && $service->featured_image)
      var file = {!! json_encode($service->featured_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $service->featured_image->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="featured_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
<script>
    Dropzone.options.bannerDropzone = {
    url: '{{ route('admin.services.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="banner"]').remove()
      $('form').append('<input type="hidden" name="banner" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="banner"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($service) && $service->banner)
      var file = {!! json_encode($service->banner) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $service->banner->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="banner" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@endsection