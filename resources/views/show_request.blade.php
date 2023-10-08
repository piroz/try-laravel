<?php var_dump($request->all()) ?>
@{{ name }}
<script>
    var app = {{ Js::from($request->all()) }};
</script>

@verbatim
    <div class="container">
        Hello, {{ name }}.
    </div>
@endverbatim
