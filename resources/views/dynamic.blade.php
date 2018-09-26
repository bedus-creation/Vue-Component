@extends('layouts.app')


@section('content')
<div class="container">
    <dynamicform></dynamicform>
</div>
@endsection


@section('scripts')
<script>
    console.log('mounted');
    $('.steps-basic').steps({
        headerTag: 'h6',
        bodyTag: 'fieldset',
        transitionEffect: 'fade',
        titleTemplate: '<span class="number">#index#</span> #title#',
        labels: {
            previous: '<i class="icon-arrow-left13 mr-2" /> Previous',
            next: 'Next <i class="icon-arrow-right14 ml-2" />',
            finish: 'Submit form <i class="icon-arrow-right14 ml-2" />'
        },
        onFinished: function (event, currentIndex) {
            alert('Form submitted.');
        }
    });

</script>
@endsection