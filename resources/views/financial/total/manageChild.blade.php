<ul>

    @foreach($childs as $child)
        <li class="list-group-item activeThis" onclick="level2({{$child->Id}})" id="{{ $child->Id }}">
            {{ $child->Code }} - {{ $child->Name }}
            <span class="badge pull-left"> {{ count($child->childs) }} </span>
            @if(count($child->childs))
                @include('financial.total.manageChild3',['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>
<script>
    function level2(id) {
        $(".customDisable").fadeOut(0);
        $("#h").fadeIn();
        $("#updatetotal").fadeIn();
        $("#delete").fadeIn();
        $("#View").fadeIn();
        $("#print").fadeIn();

        $("#ThisId").val(id);
    }


</script>