@if(empty(config('apidoc.hide_info')) || config('apidoc.hide_info') === false) 
    # Info
    {{config('apidoc.info_blade', 'Welcome to the generated API reference.')}}
    @if($showPostmanCollectionButton)
    [Get Postman Collection]({{url($outputPath.'/collection.json')}})
    @endif
@endif
