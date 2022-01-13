<!-- jQuery Scripts -->
<script src="{{asset(config('app.public_prefix').'assets/js/jquery.min.js')}}"></script>
@if (!empty(Auth::user()))
<script src="{{asset(config('app.public_prefix').'assets/bootstrap/js/bootstrap.min.js')}}"></script>
@else
<script src="{{asset(config('app.public_prefix').'assets/js/bootstrap.min.js')}}"></script>
@endif
<script src="{{asset(config('app.public_prefix').'assets/js/plugins.js')}}"></script>
<script src="{{asset(config('app.public_prefix').'assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset(config('app.public_prefix').'assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset(config('app.public_prefix').'assets/js/rev-slider.js')}}"></script>

<script src="{{asset(config('app.public_prefix').'assets/js/scripts.js')}}"></script>


@if (empty(Auth::user()))
<!-- Rev Slider Offline Scripts -->
<script src="{{asset(config('app.public_prefix').'assets/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset(config('app.public_prefix').'assets/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset(config('app.public_prefix').'assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset(config('app.public_prefix').'assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset(config('app.public_prefix').'assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset(config('app.public_prefix').'assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset(config('app.public_prefix').'assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset(config('app.public_prefix').'assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset(config('app.public_prefix').'assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
@endif

<script type="text/javascript">

    $(document).on('click', '.confirmDialog', function(){
        let confirmDiag = confirm($(this).attr('data-message'));
        if(!confirmDiag){
            return false;
        }
    });

    $(document).on('click','.preview-image', function(){
        let dataTitle = $(this).attr('data-title'), dataSrc = $(this).attr('data-src'), dataSize = $(this).attr('data-size'), dataMedium = $(this).attr('data-medium'), 
        dataCompany = $(this).attr('data-company') ? $(this).attr('data-company') : '';
        let dataDescription = $(this).attr('data-desc') ? $(this).attr('data-desc') : '', dataYear = $(this).attr('data-year') ? $(this).attr('data-year') : '', 
        dataAmount = $(this).attr('data-amount') ? $(this).attr('data-amount') : '', dataCategory = $(this).attr('data-category') ? $(this).attr('data-category') : '';
        console.log(dataTitle, dataSrc, dataSize, dataDescription);
        $('.preview-img').attr('src', `${dataSrc ? dataSrc : ''}`);
        $('.preview-img-title').html(`${dataTitle ? dataTitle : ''}`);
        $('.preview-img-size').html(`${dataSize ? dataSize : ''}`);
        $('.preview-img-medium').html(`${dataMedium ? dataMedium : ''}`);
        $('.preview-img-company').html(`${dataCompany ? dataCompany : ''}`);
        $('.preview-img-desc').html(`${dataDescription ? dataDescription : ''}`);
        $('.preview-img-year').html(`${dataYear ? dataYear : ''}`);
        $('.preview-img-amount').html(`${dataAmount ? `₦ ${dataAmount}` : ''}`);
        $('.preview-img-category').html(`${dataCategory ? dataCategory : ''}`);
        if (!dataSize) $('.preview-img-size').hide(); else $('.preview-img-size').show();
        if (!dataMedium) $('.preview-img-medium').hide(); else $('.preview-img-medium').show();
        if (!dataCompany) $('.preview-img-company').hide(); else $('.preview-img-company').show();
        if (!dataDescription) $('.preview-img-desc').hide(); else $('.preview-img-desc').show();
        if (!dataYear) $('.preview-img-year').hide(); else $('.preview-img-year').show();
        if (!dataAmount) $('.preview-img-amount').hide(); else $('.preview-img-amount').show();
        if (!dataCategory) $('.preview-img-category').hide(); else $('.preview-img-category').show();

    });
    $(document).on('change', "#photo, .upload_file", function() {
        readURL(this, '.img-upload', 'vid-upload');
    });
    const htmlEntities = (str)=>{
        return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
    }

    const htmlReverseEntities = (str) => {
        return String(str).replace(/&quot;/g, '"').replace(/&gt;/g, '>').replace(/&lt;/g, '<').replace(/&amp;/g, '&');
    }

    // image upload function
    function readURL(input, imgTag, vidTag = null, buttonClass = null) {
        let targetValue = null;
        if (input.files && input.files[0]) {
            let fileType = input.files[0].type.split('/')[0];
                // console.log(fileType);
            let reader = new FileReader();
            reader.onload = function(e) {
                // console.log(e.target);
                targetValue = e.target.result;
                if(buttonClass!=null){
                    $(buttonClass).removeClass("hidden");
                }
                $(fileType == 'image' ? imgTag: vidTag).attr('src', targetValue);
                if (fileType == 'video') {
                    $(vidTag).removeClass('d-none');
                    $(imgTag).addClass('d-none');
                    $(vidTag).load();
                }else{
                    $(imgTag).removeClass('d-none');
                    $(vidTag).addClass('d-none');
                }
            }.bind(this);
            reader.readAsDataURL(input.files[0]);
        }
        return targetValue;
    }

    function readVideo(input, tagPointer, buttonClass = null) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                if(buttonClass!=null){
                    $(buttonClass).removeClass("hidden");
                }
                tagPointer.src = e.target.result
                tagPointer.load()
            }.bind(this);
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@if(in_array(request()->path(), array('root/gallery', 'root/gallery/'.( $gallery->id ?? ''), 
'root/exhibitions', 'root/exhibition/'.( $exhibition->id ?? ''), 'root/murals', 'root/mural/'.( $mural->id ?? ''), 
'root/store', 'root/store/'.( $product->id ?? '') )) && Auth::user())
    <script src="{{ asset(config('app.public_prefix').'assets/quill/quill.min.js') }}"></script>
    @include('shared.quill-js')
@endif