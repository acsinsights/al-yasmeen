@if (Session::has('error'))
    <div class="mb-1 demo-spacing-0">
        <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
            <div class="alert-body">
                <i data-feather="info" class="mr-50 align-middle"></i>
                <span>{{ Session::get('error') }}</span>
            </div>
        </div>
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
