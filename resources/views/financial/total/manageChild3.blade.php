<ul>
        @foreach($childs as $child)
                <li class="list-group-item" onclick="level3()" id="{{ $child->Id }}">
                        {{ $child->Code }} - {{ $child->Name }}
                        <span class="badge pull-left"> {{ count($child->childs) }} </span>
                </li>
        @endforeach
</ul>

<script>
    function level3() {
        $(".customDisable").hide();
        $("#update").show();
        $("#delete").show();
        $("#View").show();
        $("#print").show();
    }
</script>