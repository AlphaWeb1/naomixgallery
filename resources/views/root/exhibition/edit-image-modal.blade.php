<div class="modal" tabindex="-1" id="editExhibitionItemModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/root/exhibition/{{ $exhibition->id }}/{{$exhibition_item->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="material__form-group form-group">
                                    <input type="text" name="title" value="{{ $exhibition_item->title }}" class="form-control @error('title') is-invalid @enderror material__input" id="title">
                                    <label for="title" class="material__label">Title
                                    </label>
                                    @if ($errors->has('title'))
                                        <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 material__form-group">
                                        <input type="text" name="medium" value="{{ $exhibition_item->medium }}" class="form-control @error('medium') is-invalid @enderror material__input" id="medium">
                                        <label for="medium" class="material__label">Medium
                                        </label>
                                        @if ($errors->has('medium'))
                                            <div class="invalid-feedback">{{ $errors->first('medium') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6 material__form-group">
                                        <input type="text" name="size" value="{{ $exhibition_item->size }}" class="form-control @error('size') is-invalid @enderror material__input" id="size">
                                        <label for="size" class="material__label">Size
                                        </label>
                                        @if ($errors->has('size'))
                                            <div class="invalid-feedback">{{ $errors->first('size') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="material__form-group form-group">
                                    <label class="d-block">
                                        <div class="text-center">
                                            <img src="{{ asset(config('app.storage_prefix').$exhibition_item->path) }}" alt="{{ $exhibition_item->title }}" class="img img-rounded img-thumbnail clickable {{ $exhibition_item->media_type == 'video' ? 'd-none' : '' }} img-upload"/>
                                            <video src="{{ asset(config('app.storage_prefix').$exhibition_item->path) }}" alt="{{ $exhibition_item->title }}" class="img-thumbnail clickable {{ $exhibition_item->media_type == 'image' ? 'd-none' : '' }} landscape-picture vid-upload" controls></video>
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
                    <button type="submit" class="btn btn-success">save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>