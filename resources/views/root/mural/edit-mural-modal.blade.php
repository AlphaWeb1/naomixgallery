<div class="modal" tabindex="-1" id="muralModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Mural Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/root/mural/{{$mural->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-row">
                                    <div class="material__form-group col-md-6 form-group">
                                        <input type="text" name="title" value="{{ $mural->title }}" class="form-control @error('title') is-invalid @enderror material__input" id="title" required>
                                        <label for="title" class="material__label">Title
                                            <abbr title="required" class="required">*</abbr>
                                        </label>
                                        @if ($errors->has('title'))
                                            <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6 material__form-group">
                                        <input type="text" name="company" value="{{ $mural->company }}" class="form-control @error('company') is-invalid @enderror material__input" id="company">
                                        <label for="company" class="material__label">Company
                                            <abbr title="required" class="required">*</abbr>
                                        </label>
                                        @if ($errors->has('company'))
                                            <div class="invalid-feedback">{{ $errors->first('company') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 material__form-group">
                                        <input type="text" name="size" value="{{ $mural->size }}" class="form-control @error('size') is-invalid @enderror material__input" id="size">
                                        <label for="size" class="material__label">Size
                                        </label>
                                        @if ($errors->has('size'))
                                            <div class="invalid-feedback">{{ $errors->first('size') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6 material__form-group">
                                        <input type="text" name="year" value="{{ $mural->year }}" class="form-control @error('year') is-invalid @enderror material__input" id="year">
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
                                            <img src="{{ asset(config('app.storage_prefix').$mural->path) }}" alt="{{ $mural->title }}" class="img img-rounded img-thumbnail clickable {{ $mural->media_type == 'video' ? 'd-none' : '' }} img-upload"/>
                                            <video src="{{ asset(config('app.storage_prefix').$mural->path) }}" alt="{{ $mural->title }}" class="img-thumbnail clickable {{ $mural->media_type == 'image' ? 'd-none' : '' }} landscape-picture vid-upload" controls></video>
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