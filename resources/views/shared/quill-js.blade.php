<script>
    /*Handle Quill*/
    const quillToolbars = [
        ['bold', 'italic', 'underline', 'strike'],
        ['blockquote', 'code-block', 'code'],

        //[{ 'header': 1 }, { 'header': 2 }],
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'script': 'sub'}, { 'script': 'super' }],
        [{ 'indent': '-1'}, { 'indent': '+1' }],
        [{ 'direction': 'rtl' }],

        //[{ 'size': ['small', false, 'large', 'huge'] }],
        // [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
        [{ 'header': [4, 5, 6, false] }],

        [{ 'color': [] }, { 'background': [] }],
        [{ 'font': [] }],
        [{ 'align': [] }],
        // ['image', 'formula', 'link', 'video'], 
        ['clean']
    ]
    const quillOptions = {
        modules: {
            toolbar: quillToolbars
        },
        placeholder: `Type your content here...`,
        theme: 'snow'
    };
    let quill = new Quill('#edit_note', quillOptions);

    @if(!empty($description_decode))
        $('#edit_note .ql-editor').html(htmlReverseEntities('{{ $description_decode  }}'));
    @endif

    /*Quill Event Trigger*/
    quill.on('text-change', function(delta, oldDelta, source) {
        $('#description, #content').attr('value',htmlEntities($('#edit_note .ql-editor').html()));
        // console.log($('#description, #content').attr('value'));
    });
</script>