<x-layout>
    <x-slot:heading>service</x-slot:heading>
    <p>service {{$service['id']}} page</p>
    {{ Request::path() }}
    {{request()->is('/')}}
    {{ url()->current() }}
    {{ Request::path() }}
</x-layout>