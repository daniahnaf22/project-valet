@extends('dashboard.layouts.main')
@section('admin')
    <div class="row">
        <div class="col-lg-8">
            <form action="/dashboard/posts" class="post-validation" method="POST" novalidate>
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <span data-feather="file-text"></span>
                        </span>
                        <input required value="{{ old('title') }}" type="text"
                            class="form-control @error('title') is-invalid @enderror" name="title" id="title">
                        <div class="invalid-feedback">
                            @if ($errors->has('title'))
                                {{ $errors->first('title') }}
                            @else
                                Silahkan di isi Title
                            @endif
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Slug</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <span data-feather="align-right"></span>
                        </span>
                        <input required type="text" class="form-control @error('slug') is-invalid @enderror"
                            name="slug" id="slug">
                        <div class="invalid-feedback">
                            @if ($errors->has('slug'))
                                {{ $errors->first('slug') }}
                            @else
                                Silahkan di isi Slug
                            @endif
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Body</label>
                    <input required type="text" class="form-control d-none @error('body') is-invalid @enderror"
                        id="body" name="body">
                    <trix-editor input="body"></trix-editor>
                    <div class="invalid-feedback">
                        @if ($errors->has('slug'))
                            {{ $errors->first('slug') }}
                        @else
                            Silahkan di isi Body
                        @endif
                    </div>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Category</label>
                    <div class="input-group">
                        <select class="form-select form-select-lg" name="category_id" id="category_id">
                            @foreach ($categories as $item)
                                <option {{ old('category_id') == $item->id ? 'selected' : '' }} value="{{ $item->id }}">
                                    {{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>

            </form>
        </div>
    </div>

    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.post-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()

        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');
        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });
    </script>
@endsection