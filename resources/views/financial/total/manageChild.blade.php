<ul>

    @foreach($childs as $child)
        <li class="list-group-item" onclick="level2()" id="{{ $child->Id }}">
            {{ $child->Code }} - {{ $child->Name }}
            <span class="badge pull-left"> {{ count($child->childs) }} </span>
            @if(count($child->childs))
                @include('financial.total.manageChild3',['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>
<script>
    function level2() {
        $(".customDisable").fadeOut(0);
        $("#m").fadeIn();
        $("#update").fadeIn();
        $("#delete").fadeIn();
        $("#View").fadeIn();
        $("#print").fadeIn();
    }
</script>