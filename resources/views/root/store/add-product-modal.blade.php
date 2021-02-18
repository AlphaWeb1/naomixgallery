<div class="modal" tabindex="-1" id="productModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/root/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-row">
                                    <div class="material__form-group col-md-6 form-group">
                                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror material__input" id="title" required>
                                        <label for="title" class="material__label">Procduct Name / Title
                                            <abbr title="required" class="required">*</abbr>
                                        </label>
                                        @if ($errors->has('title'))
                                            <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6 material__form-group">
                                        <input type="number" name="amount" class="form-control @error('company') is-invalid @enderror material__input" 
                                        value="{{ old('amount') ?? '0'}}" id="amount">
                                        <label for="amount" class="material__label">Amount
                                        </label>
                                        @if ($errors->has('amount'))
                                            <div class="invalid-feedback">{{ $errors->first('amount') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 material__form-group">
                                        <input type="text" name="size" class="form-control @error('size') is-invalid @enderror material__input" id="size">
                                        <label for="size" class="material__label">Size
                                        </label>
                                        @if ($errors->has('size'))
                                            <div class="invalid-feedback">{{ $errors->first('size') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6 material__form-group">
                                        <input type="text" name="category" class="form-control @error('category') is-invalid @enderror material__input" 
                                        value="{{ old('category') ?? 'others'}}" list="catlist" id="category">
                                        <label for="category" class="material__label">Category
                                            <abbr title="required" class="required">*</abbr>
                                        </label>
                                        <datalist id="catlist">
                                            @forelse($categories as $cat)
                                                <option value="{{ $cat->category }}">{{ $cat->category }}</option>
                                            @empty
                                                <option value="others">others</option>
                                            @endforelse
                                        </datalist>

                                        @if ($errors->has('category'))
                                            <div class="invalid-feedback">{{ $errors->first('category') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="material__form-group form-group">
                                    <label class="d-block">
                                        <div class="text-center">
                                            <img src="#" alt="" class="img img-rounded img-thumbnail clickable d-none img-upload"/>
                                            <video src="#" class="img-thumbnail clickable d-none landscape-picture d-none vid-upload" controls></video>
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
                    <button type="submit" class="btn btn-success">create</button>
                </div>
            </form>
        </div>
    </div>
</div>