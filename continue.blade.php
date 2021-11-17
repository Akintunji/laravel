<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  
                          

    @foreach($Myjmarts as $row)
   

    <p align='center'>Organization:{{ $row['firstname']}}</p>
<p align='center'>Job By:{{ $row['firstname']}}</p>
<p align='center'>Time:{{ $row['lastname']}}</p>
<p align='center'>Location:{{ $row['location']}}</p>

<p align='center'>Job Title</p>
<p align='center'>Sourcing Email:</label>{{$row['email']}}</p>
<p align='center'><a href='profilev'>Sourcing Email</a></label>{{$row['email']}}</p>
<p align='center'><label id='label'>Salary:</label>{{$row['location ']}}</p>
<p align='center'><label id='label'>Other Informations:</label>{{$row['location ']}}</p>



@endforeach
 
            </div>
        </div>
    </div>
</x-app-layout>
