<div class="card-body">
    <div class="row">
        <div class="col-md-4">
            {!! \Form::nText('name', __('common.Name'), old('name', $sms->name ?? null), true) !!}
        </div>
        <div class="col-md-4">
            {!! \Form::nSelect('enabled', __('common.Enabled'), \App\Supports\Constant::ENABLED_OPTIONS,
                old('enabled', ($sms->enabled ?? \App\Supports\Constant::ENABLED_OPTION)), true) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            {!! \Form::nTextarea('remarks', __('common.Remarks'), old('remarks', $sms->remarks ?? null), false) !!}
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 justify-content-between d-flex">
            {!! \Form::nCancel(__('common.Cancel')) !!}
            {!! \Form::nSubmit('submit', __('common.Save')) !!}
        </div>
    </div>
</div>


@push('page-script')
    <script>
        $(function () {
            $("#sms-form").validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 3,
                        maxlength: 255
                    },
                    enabled: {
                        required: true
                    },
                    remarks: {
                    },
                }
            });
        });
    </script>
@endpush
