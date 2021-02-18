@if(session('error_message'))
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <strong>Error!</strong> {{ session('error_message') }}.
        </div>
    </div>
</div>
@endif