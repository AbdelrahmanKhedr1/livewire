<div>
    {{$parentTitle}}
    <hr>
    @foreach ($myChild as $key => $child)
    <livewire:child-component :childName="$child" :key="$key"/>
    {{-- @livewire('child-component',['childName'=> $child], key($key) ) --}}
    @endforeach
</div>
