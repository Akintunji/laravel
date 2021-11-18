<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         
        </h2>
          <p align='left'><a href='job'>Post Job(Recruiters)</a></p></br>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                
        @foreach($Myjmarts as $row)

        $username=Auth::user()->username;
         $posterusername= $row['username'];
         $postid=$row['postid'];
         $firmname= $row['$firm'];
         $location=  $row['location'];
         $firstname=$row['firstname'];
         $lastname=$row['firstname'];
         $email=$row['email'];
         $salary=$row['salary '];
         $OtherInfo=  $row['OtherInfo'];

 @if( $username== $posterusername){
        
     <div class="p-6 bg-white border-b border-gray-200"> 
    <p align='center'>Organization:</p>
<p align='center'>Job By:$firstname</p>
<p align='center'>Time:$time</p>
<p align='center'>Location: $location</p>
<p align='center'>Job Title:$title></p>
<p align='center'>Sourcing Email:</label>$email</p>
<p align='center'><label id='label'>Salary:</label>$salary</p>
<p align='center'><label id='label'>Other Informations:</label>$otherinfo</p>
<span >
<div>
<button  style="margin-left:22px;"><a href='edit'>Edit</a></button><button  style="margin-left:22px;"><button  style="margin-left:22px;"><a href="comment/$id">Comment</button><button style="margin-left:22px;" onclick="Cont()">Like</button><button  style="margin-left:22px;">Share</button>
</div>
<div><form action='comment' method='post'>
<input type='submit' name='comment' value='comment'>
<input type='hidden' name='id' value='$id'></div>
</div>
</span>
 }
 @else{

<p align='center'>Organization:{{ $row['username']}}</p>
<p align='center'>Job By:{{ $row['firstname']}}</p>
<p align='center'>Time:{{ $row['lastname']}}</p>
<p align='center'>Location:{{ $row['location']}}</p>

<p align='center'>Job Title</p>
<p align='center'>Sourcing Email:</label>{{$row['email']}}</p>
<p align='center'><a href='profilev'>Sourcing Email</a></label>{{$row['email']}}</p>
<p align='center'><label id='label'>Salary:</label>{{$row['salary ']}}</p>
<p align='center'><label id='label'>Other Informations:</label>{{$row['location ']}}</p>
<span >
<button  style="margin-left:22px;"><a href="comment/$id">Comment</button><button style="margin-left:22px;" onclick="Cont()">Like</button><button  style="margin-left:22px;">Share</button>
</span>

}
@endforeach

 
            </div>
        </div>
    </div>
</x-app-layout>
