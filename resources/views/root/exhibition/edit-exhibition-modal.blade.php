<div class="modal" tabindex="-1" id="exhibitionModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Exbibition</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/root/exhibition/{{$exhibition->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="material__form-group form-group">
                                    <input type="text" name="title" value="{{ $exhibition->title }}" class="form-control @error('title') is-invalid @enderror material__input" id="title" required>
                                    <label for="title" class="material__label">Title
                                        <abbr title="required" class="required">*</abbr>
                                    </label>
                                    @if ($errors->has('title'))
                                        <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 material__form-group">
                                        <input type="text" name="location" value="{{ $exhibition->location }}" class="form-control @error('location') is-invalid @enderror material__input" id="location">
                                        <label for="location" class="material__label">Location
                                        </label>
                                        @if ($errors->has('location'))
                                            <div class="invalid-feedback">{{ $errors->first('location') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6 material__form-group">
                                        <input type="text" name="year" value="{{ $exhibition->year }}" class="form-control @error('year') is-invalid @enderror material__input" id="year" required>
                                        <label for="year" class="material__label">Year
                                        </label>
                                        @if ($errors->has('year'))
                                            <div class="invalid-feedback">{{ $errors->first('year') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="material__form-group form-group">
                                    <div id="edit_note" class="{{ $errors->has('description') ? 'is-invalid' : '' }} material__input"></div>
                                    <input type="hidden" name="description" id="description" value="{{ $exhibition->description }}"/>
                                    <label for="edit_note" class="material__label d-none">Description
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