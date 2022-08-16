@if ($type == "error")
<span class="text-danger">
    {{ $message }}
</span>
@elseif($type == "success")
<span class="text-success">
    {{ $message }}
</span>
@endif
