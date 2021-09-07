@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.entity.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.entities.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.entity.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.entity.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="recommended" for="description">{{ trans('cruds.entity.fields.description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{!! old('description') !!}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.entity.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="recommended" for="seurity_level">{{ trans('cruds.entity.fields.security_level') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('security_level') ? 'is-invalid' : '' }}" name="security_level" id="security_level">{!! old('security_level') !!}</textarea>
                @if($errors->has('security_level'))
                    <div class="invalid-feedback">
                        {{ $errors->first('security_level') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.entity.fields.security_level_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="recommended" for="contact_point">{{ trans('cruds.entity.fields.contact_point') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('contact_point') ? 'is-invalid' : '' }}" name="contact_point" id="contact_point">{!! old('contact_point') !!}</textarea>
                @if($errors->has('contact_point'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_point') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.entity.fields.contact_point_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="applications">{{ trans('cruds.entity.fields.applications_resp') }}</label>
                <select class="form-control select2 {{ $errors->has('applications') ? 'is-invalid' : '' }}" name="applications[]" id="applications" multiple>
                    @foreach($applications as $id => $name)
                        <option value="{{ $id }}" {{ in_array($id, old('applications', [])) ? 'selected' : '' }}>{{ $name }}</option>
                    @endforeach
                </select>
                @if($errors->has('applications'))
                    <div class="invalid-feedback">
                        {{ $errors->first('applications') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.entity.fields.applications_resp_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="databases">{{ trans('cruds.entity.fields.databases_resp') }}</label>
                <select class="form-control select2 {{ $errors->has('databases') ? 'is-invalid' : '' }}" name="databases[]" id="databases" multiple>
                    @foreach($databases as $id => $name)
                        <option value="{{ $id }}" {{ in_array($id, old('databases', [])) ? 'selected' : '' }}>{{ $name }}</option>
                    @endforeach
                </select>
                @if($errors->has('databases'))
                    <div class="invalid-feedback">
                        {{ $errors->first('databases') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.entity.fields.databases_resp_helper') }}</span>
            </div>


            <div class="form-group">
                <label class="recommended" for="processes">{{ trans('cruds.entity.fields.processes') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('processes') ? 'is-invalid' : '' }}" name="processes[]" id="activities" multiple>
                    @foreach($processes as $id => $identifiant)
                        <option value="{{ $id }}" {{ in_array($id, old('processes', [])) ? 'selected' : '' }}>{{ $identifiant }}</option>
                    @endforeach
                </select>
                @if($errors->has('processes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('processes') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.entity.fields.processes_helper') }}</span>
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
                xhr.open('POST', '/admin/entities/ckmedia', true);
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
                data.append('crud_id', {{ $entity->id ?? 0 }});
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

@endsection