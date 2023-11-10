<meta charset="UTF-8" />
<meta name="author" content="Interar" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Interior & Architecture" />
<meta name="keywords" content="architecture, interior, decoration, design, corporate, modern" />
<title>AL Yasmeen - Interior & Architecture</title>
<link href="{{ asset('user-assets\images\favicon.svg') }}" rel="shortcut icon" type="image/png" />


<!--  Pixel code  -->
{{-- @foreach ($users as $user)
<script>
{{  $user->meta_pixel  }}
</script>
@endforeach --}}
<div class="d-none">
    {{ $data['meta-pixel-code'] }}
</div>
<div class="d-none">
    {{ $data['google-analytics-code'] }}
</div>

<!--  Widgets code  -->
<div class="d-none">
    {{ $data['whats-app'] }}
</div>
<div class="d-none">
    {{ $data['chat-bot-code'] }}
</div>


<!-- Main Stylesheet -->
<link rel="stylesheet" href="  {{ asset('user-assets/css/style.css') }}" />
<link rel="stylesheet" href=" {{ asset('user-assets/css/responsive.css') }}" />
