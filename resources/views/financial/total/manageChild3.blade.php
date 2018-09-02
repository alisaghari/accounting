<ul>
        @foreach($childs as $child)
                <li class="list-group-item activeThis" onclick="level3()" id="{{ $child->Id }}">
                        {{ $child->Code }} - {{ $child->Name }}
                        <span class="badge pull-left"> {{ count($child->childs) }} </span>
                </li>
        @endforeach
</ul>

<script>
    function level3() {
        $(".customDisable").fadeOut(0);
        $("#update").fadeIn();
        $("#delete").fadeIn();
        $("#View").fadeIn();
        $("#print").fadeIn();
    }
</script>