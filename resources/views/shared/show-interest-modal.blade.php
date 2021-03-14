<div class="modal" tabindex="-1" id="showInterestModal" role="dialog">
    <div class="modal-dialog modal-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title itemTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-6 col-lg-6 project__info mb-md-40">
                            <h1 class="preview-img-title"></h1>
                            <div class="gallery gallery-size-large">
                                <figure class="gallery-item">
                                    <div class="gallery-icon landscape">
                                        <img src="" class="attachment-large size-large preview-img" alt="">
                                    </div>
                                </figure>
                            </div>
                            <h6 class="pt-8 pb-8 preview-img-company"></h6>
                            <div class="preview-img-desc"></div>
                        </div> <!-- project info -->

                        <div class="col-sm-12 col-md-6 col-lg-6 project__details">
                            <form action="/root/store/{{$product->id}}" method="POST" enctype="multipart/form-data">
                                <div class="material__form-group form-group">
                                    <input type="text" name="title" value="{{ $product->title }}" class="form-control @error('title') is-invalid @enderror material__input" id="title" required>
                                    <label for="title" class="material__label">Title
                                        <abbr title="required" class="required">*</abbr>
                                    </label>
                                    @if ($errors->has('title'))
                                        <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                                <div class="material__form-group form-group">
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('title') is-invalid @enderror material__input" id="title" required>
                                    <label for="title" class="material__label">Title
                                        <abbr title="required" class="required">*</abbr>
                                    </label>
                                    @if ($errors->has('title'))
                                        <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6 material__form-group">
                                    <input type="text" name="category" class="form-control @error('category') is-invalid @enderror material__input" 
                                    value="{{ old('category') ?? $product->category }}" list="catlist" id="category">
                                    <label for="category" class="material__label">Category
                                        <abbr title="required" class="required">*</abbr>
                                    </label>
                                    <datalist id="catlist">
                                        @forelse($categories as $cat)
                                            <option value="{{ $cat->category }}" {{ $product->category == $cat->category ? 'selected' : '' }}>{{ $cat->category }}</option>
                                        @empty
                                            <option value="others" selected>others</option>
                                        @endforelse
                                    </datalist>

                                    @if ($errors->has('category'))
                                        <div class="invalid-feedback">{{ $errors->first('category') }}</div>
                                    @endif
                                </div>
                                <div class="form-group material__form-group">
                                    <textarea id="message" name="message" rows="7" class="form-input material__input" required=""></textarea>
                                    <label for="message" class="material__label">Message
                                        <abbr title="required" class="required">*</abbr>
                                    </label>
                                    @if ($errors->has('message'))
                                        <span class="material__underline">{{ $errors->first('message') }}</span>
                                    @endif
                                </div>
                                <div class="form-group material__form-group">
                                    <button type="submit" class="btn btn-lg btn-success">Drop Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
            </div>
        </div>
    </div>
</div>