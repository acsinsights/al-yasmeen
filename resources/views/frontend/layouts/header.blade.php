<meta charset="UTF-8" />
<meta name="author" content="Interar" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Interior & Architecture" />
<meta name="keywords" content="architecture, interior, decoration, design, corporate, modern" />
<title>AL Yasmeen - Interior & Architecture</title>
<link href="{{ asset('user-assets\images\favicon.svg') }}" rel="shortcut icon" type="image/png" />


<!--  Pixel code  -->
@foreach ($users as $user)
<script>
{{  $user->meta_pixel  }}
{{  $user->g_analytics  }}
</script>
@endforeach


<!--  Widgets code  -->
 @foreach ($users as $user)
 <script>
 {{ $user->chatbot_widgets }}
 {{ $user->w_app_wid }}
</script>
 @endforeach


<!-- Main Stylesheet -->
<link rel="stylesheet" href="  {{ asset('user-assets/css/style.css') }}"  />
<link rel="stylesheet" href=" {{ asset('user-assets/css/responsive.css') }}" />


