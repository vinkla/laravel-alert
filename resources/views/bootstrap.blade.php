@if (session()->has('alert.message'))
    <?php $messages = json_decode(session()->get('alert.message')); ?>
    @foreach($messages as $message)
        <div class="alert alert-{{ $message->style }} alert-dismissible fade in show" role="alert">
            <button type="button" class="close {{ $message->fade }}" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button><!-- /close -->

            {!! $message->message !!}
        </div><!-- /alert -->
    @endforeach
    <?php session()->forget('alert.message'); ?>
    <script>
    window.setTimeout(function() {
        $(".fade-alert").click();
    }, 4000);
    </script>
@endif
