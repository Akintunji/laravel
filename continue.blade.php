<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style type="text/css">

**{
	margin-left:2px;
	padding-left:10px;
text-decoration:none;
font-size: 12px;
width: 100%;
}

header{
    padding-bottom:40px;
}
.header{
border-radius: 9px; 
margin-bottom:10px;	
width: 100%;
max-height:190px; 
margin-left: -10px;
position: relative;
border-bottom:20px;
padding-bottom:0px;
overflow: hidden;
}



#header h2{
margin-left: 30px;
	font-size: 30px;
}

.showdiv{
    border-bottom:20px; 
    color:purple;
    border-radius: 9px; 
margin-bottom:10px;	
 background-color:#6b78b4; 
}

#b{
    color:purple;
}
</style>
</head>
<header>
<div id="header" class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
<div><p><h2>Thejobmart</h2></p></div>

<button id="b"class="pull-left"><a href="Postjobf">POST JOB</a></button>(RECRUITERS) </button>

</div>
</div>
</header>
<body>     
                

<div class="showdiv">
@foreach ($Myjmarts as $row)
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


<span> {{$Myjmarts->link()}   </span>

   
   

</body>
</html>

