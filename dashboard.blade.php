<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  
                You're logged in!
                <p align='center'><a href='continue'>con</a></p></br>    
            </div>
                

    @foreach($Myjmarts as $row)
   
<p align='center' style="margin-left:22x;" ><label id='label'>PROFILE</label></p></br>
<p class="flex items-center"><label id='label'>Firstname:</label>{{$row['name']}}</p>
<p class="flex items-center"><label id='label'>Lastname:</label>{{$row['name']}}</p>
<p class="flex items-center">Member Since</label>{{$row['email']}} </p>
<p class="flex items-center"><label id='label'>Phonenumber:</label>{{$row['email']}}</p>
<p class="flex items-center"><label id='label'>:</label>{{$row['email']}}</p>

</div>


@endforeach
 
            </div>
        </div>
    </div>
</x-app-layout>
<a href="jobfeed">obs</a>