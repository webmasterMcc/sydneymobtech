<x-layout>
    <x-slot:heading>services</x-slot:heading>
    <p>services page</p>
    
    @foreach($services as $key => $value)
        <li><a href="service/{{$value['id']}}">{{$value['title']}}</a></li>
    @endforeach
</x-layout>