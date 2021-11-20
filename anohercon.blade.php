<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <button > <a href="continue">Post Job</a></button>
                </div>

<div class="container">
<div id="header" class="header" ><br>
@foreach ($Myjmarts as $row)

<p align='center'>Recruiting Firm:{{ $row['firm']}}</p></div>
<p align='center'>Job Tittle:{{ $row['created_at']}}</p></div>
<p align='center'>Posted by:{{ $row['firstname']}} $row['lastname']}}</p></div>
<p align='center'>poseted at:{{ $row['created_at']}}</p></div>
<p align='center'>Location:{{ $row['location']}}</p></div>
<p align='center'>Sourcing Email:</label>{{$row['sourcemail']}}</p>
<p align='center'><label id='label'>Salary:</label>{{$row['salary']}}</p>
<p align='center'><label id='label'>Other informations:</label>{{$row['others']}}<br></p>
<p align='center'><label id='label'>Recruiter's contact :</label>{{$row['phonenumber'] }}<br>
<button > <a href="delete/{{ $row['id']}}">delete <\a></button >
<input type='submit' name='comment' value='comment'><input type='hidden' name='id' value='$_SESSION[id]'>
<div id='cle'><form ><a href="Postcomments/{{ $row['id']}}">Comment<\button></form> <button >Like<\button> <button ><a href=Editpost> Edit  </a><\button></div>




<p align='center'>Recruiting Firm:{{ $row['firm']}}</p></div>
<p align='center'>Job Tittle:{{ $row['created_at']}}</p></div>
<p align='center'>Posted by:{{ $row['Nameofposter']}}</p></div>
<p align='center'>poseted at:{{ $row['created_at']}}</p></div>
<p align='center'>Location:{{ $row['location']}}</p></div>
<p align='center'>Sourcing Email:</label>{{$row['sourcemail']}}</p>
<p align='center'><label id='label'>Salary:</label>{{$row['salary']}}</p>
<p align='center'><label id='label'>Other informations:</label>{{$row['others']}}<br></p>
<p align='center'><label id='label'>Recruiter's contact :</label>{{$row['phonenumber'] }}<br>
<form action= 'comment.php' method='post'>
<input type='submit' name='comment' value='comment'><input type='hidden' name='id' value='$_SESSION[id]'>
<div id='cle'><form ><in <a href="Postcomments/{{ $row['id']}}">Comment<\button></form> <button >Like<\<button> <button ><a href=Editpost> Edit  </a><\button></div>
@endforeach
</div>
</div>

<span> {{$Myjmarts->link()}   </span>
<style>
   .w-S{display:none}
   
   </style>
