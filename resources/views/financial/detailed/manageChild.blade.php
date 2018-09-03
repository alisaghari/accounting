<ul>
    @foreach($childs as $child)
        <li class="list-group-item" title="{{ $child->Code }}" id="{{ $child->Id }}">
            {{ $child->Code }} - {{ $child->Name }}
            <span class="badge pull-left"> {{ count($child->childs) }} </span>
        </li>
    @endforeach
</ul>