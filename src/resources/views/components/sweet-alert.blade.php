@if(session()->has('sweet_alert') && session()->get('sweet_alert')['show'] == true)
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  Swal.fire({
    @if(array_key_exists('title', session('sweet_alert')))
      title: "{{ session('sweet_alert')['title'] }}",
    @endif
    
    @if(array_key_exists('text', session('sweet_alert')))
      text: "{{ session('sweet_alert')['text'] }}",
    @endif
    
    @if(array_key_exists('icon', session('sweet_alert')))
      icon: "{{ session('sweet_alert')['icon'] }}",
    @endif
    
    @if(array_key_exists('button', session('sweet_alert')))
      button : "{{ session('sweet_alert')['button'] }}",
    @endif
    
    @if(array_key_exists('buttons', session('sweet_alert')))
      buttons : [@foreach(session("sweet_alert")['buttons'] as $btn)  "{{$btn}}" , @endforeach],
    @endif

    @if(array_key_exists('footer', session('sweet_alert')))
    footer : `{!! session('sweet_alert')['footer'] !!}`,
    @endif

    @if(array_key_exists('showCloseButton', session('sweet_alert')))
    showCloseButton: {{ session('sweet_alert')['showCloseButton'] }},
    @endif 

    @if(array_key_exists('showCancelButton', session('sweet_alert')))
    showCancelButton: {{ session('sweet_alert')['showCancelButton'] }},
    @endif

    @if(array_key_exists('cancelButtonText', session('sweet_alert')))
    cancelButtonText: `{!! session('sweet_alert')['cancelButtonText'] !!}`,
    @endif
    
  });
  
{{ Session::forget('sweet_alert') }}
</script>
@endif