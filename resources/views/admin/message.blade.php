@if (Session::has('error'))




<div class="mb-1 demo-spacing-0">
    <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
        <div class="alert-body">
            <i data-feather="info" class="mr-50 align-middle"></i>
            <span>{{ Session::get('error') }}</span>
        </div>
    </div>
</div>


    {{-- <div class="col-xl-12">
        <div class="alert alert-danger left-icon-big alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i
                        class="mdi mdi-btn-close"></i></span>
            </button>
            <div style="align-items: center;!important" class="media">

                <div class="media-body">

                    <p class="mb-0">{{ Session::get('error') }}</p>
                </div>
            </div>
        </div>
    </div> --}}
@endif

@if (Session::has('success'))

<div class="mb-1 demo-spacing-0">
    <div class="alert alert-success mt-1 alert-validation-msg" role="alert">
        <div class="alert-body">
            <i data-feather="info" class="mr-50 align-middle"></i>
            <span>{{ Session::get('success') }}</span>
        </div>
    </div>
</div>
@endif
