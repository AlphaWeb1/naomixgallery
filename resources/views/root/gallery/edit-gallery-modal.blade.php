<div class="modal" tabindex="-1" id="galleryModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Gallery Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/root/gallery/{{$gallery->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="material__form-group form-group">
                                    <input type="text" name="title" value="{{ $gallery->title }}" class="form-control @error('title') is-invalid @enderror material__input" id="title" required>
                                    <label for="title" class="material__label">Title
                                        <abbr title="required" class="required">*</abbr>
                                    </label>
                                    @if ($errors->has('title'))
                                        <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 material__form-group">
                                        <select name="category" id="category" class="form-control @error('category') is-invalid @enderror material__input">
                                            <option value=""></option>
                                            <option value="abstract" {{ $gallery->category == 'abstract' ? 'selected' : '' }}>Abstract</option>
                                            <option value="collection" {{ $gallery->category == 'collection' ? 'selected' : '' }}>Gallery Collection</option>
                                            <option value="miniature" {{ $gallery->category == 'miniature' ? 'selected' : '' }}>Miniature</option>
                                            <option value="portrait" {{ $gallery->category == 'portrait' ? 'selected' : '' }}>Portrait</option>
                                        </select>
                                        <label for="category" class="material__label">Category
                                            <abbr title="required" class="required">*</abbr>
                                        </label>
                                        @if ($errors->has('category'))
                                            <div class="invalid-feedback">{{ $errors->first('category') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6 material__form-group">
                                        <input type="text" name="medium" value="{{ $gallery->medium }}" class="form-control @error('medium') is-invalid @enderror material__input" id="medium">
                                        <label for="medium" class="material__label">Medium
                                        </label>
                                        @if ($errors->has('medium'))
                                            <div class="invalid-feedback">{{ $errors->first('medium') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 material__form-group">
                                        <input type="text" name="size" value="{{ $gallery->size }}" class="form-control @error('size') is-invalid @enderror material__input" id="size">
                                        <label for="size" class="material__label">Size
                                        </label>
                                        @if ($errors->has('size'))
                                            <div class="invalid-feedback">{{ $errors->first('size') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6 material__form-group">
                                        <input type="text" name="year" value="{{ $gallery->year }}" class="form-control @error('year') is-invalid @enderror material__input" id="year">
                                        <label for="year" class="material__label">Year
                                        </label>
                                        @if ($errors->has('year'))
                                            <div class="invalid-feedback">{{ $errors->first('year') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="material__form-group form-group">
                                    <label class="d-block">
                                        <div class="text-center">
                                            <img src="{{ asset(config('app.storage_prefix').$gallery->path) }}" alt="{{ $gallery->title }}" class="img img-rounded img-thumbnail clickable {{ $gallery->media_type == 'video' ? 'd-none' : '' }} img-upload"/>
                                            <video src="{{ asset(config('app.storage_prefix').$gallery->path) }}" alt="{{ $gallery->title }}" class="img-thumbnail clickable {{ $gallery->media_type == 'image' ? 'd-none' : '' }} landscape-picture vid-upload" controls></video>
                                            <div class="py-2 text-center">
                                                <label class="photo-label text-white bg-secondary" for="photo">Upload Photo</label>
                                                <input type="file" class="form-control input-special d-none" accept="image/*" id="photo" name="file"/>
                                            </div>
                                        </div>
                                    </label>
                                    @if ($errors->has('file'))
                                        <div class="invalid-feedback">{{ $errors->first('file') }}</div>
                                    @endif
                                </div>
                                <div class="material__form-group form-group">
                                    <div id="edit_note" class="{{ $errors->has('description') ? 'is-invalid' : '' }} material__input"></div>
                                    <input type="hidden" name="description" id="description" value="{{ old('description') }}"/>
                                    <label for="edit_note" class="material__label d-none">Content
                                        <abbr title="required" class="required">*</abbr>
                                    </label>

                                    @if ($errors->has('description'))
                                        <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
                    <button type="submit" class="btn btn-success">update</button>
                </div>
            </form>
        </div>
    </div>
</div>