<ul>
        @foreach($childs as $child)
                <li class="list-group-item" id="{{ $child->Id }}">
                        {{ $child->Code }} - {{ $child->Name }}
                        <span class="badge pull-left"> {{ count($child->childs) }} </span>
                        @if(count($child->childs))
                                @include('financial.total.manageChild',['childs' => $child->childs])
                        @endif
                </li>
        @endforeach
</ul>