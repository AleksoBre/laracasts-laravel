<x-layout>
<x-slot:heading>Jobs</x-slot:heading>

<ul>
@foreach ($jobs as $job)
    <li>
        <a href="/jobs/{{$job['id']}}">
            <strong>{{$job['title']}}</strong> pays <strong>{{$job['salary']}}</strong> per year.
        </a>
    </li>
    <br>
@endforeach
</ul>

</x-layout>