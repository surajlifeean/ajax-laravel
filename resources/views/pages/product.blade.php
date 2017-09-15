{{dump($product)}}
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->

<style>
<!-- Latest compiled and minified CSS -->

.shadow{width:100%; float:left;box-shadow:0 0 10px #000;}
.img-wrap-tailor a{display:block}
.img-wrap-tailor{    width: 100%;
float: left;
overflow: hidden;
height: 300px;
position: relative;}
.img-wrap-tailor span{    position: absolute;
background: #ff6600;
width: 100%;
left: 0;
bottom: 0;
text-align: center;
padding: 5px 0;
font-size: 19px;
color: #fff;}
.box-customn{    width: 100%;
float: left;
border: 1px solid #ccc;
margin: 15px 0;box-shadow:0 0 5px #000;}
.box-customn .imfo-area{width:100%; float:left;text-align:center;}
.box-customn .imfo-area h3{    margin: 0px;
padding: 0px;
color: #0c0c0c;
font-size: 21px;
line-height: 30px;
font-weight: 600;
text-transform: uppercase;}
.box-customn .imfo-area p{margin: 0px;padding:5px 0px;font-size:14px;}
.box-customn .imfo-area h4{color: #ff0000;
font-weight: bold;
line-height: 30px;
font-size: 25px;}
.img-wrap-tailor img{max-width:100%;}
.box-customn a.onhover{display:none;}
.box-customn:hover a.onhover{display:block;position:absolute;top:0px;left:0px;}
.box-customn:hover a.nohover{display:none;}

/*
filter*/

.list-group.panel > .list-group-item {
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
  width: 250px;
  background: white;
  color: #666;
}
.list-group-submenu {
  width: 250px;
}

.strong { font-weight: bold; }


</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head> 
<body>
<div class="container">
<div class="row">
<div class="col-md-3">
  <div class="list-group panel">
    <a class="list-group-item list-group-item strong text-center" style="background: #009ce0; color: white;" data-toggle="collapse"> Filter</a>
    <a href="#demo1" class="list-group-item list-group-item-success strong" style="background: #f7f7f7;" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-photo"></i> Price <i class="fa fa-caret-down"></i></a>
    <div class="collapse list-group-submenu" id="demo1">
    @foreach($product as $prod)
      <input type="checkbox" value="{{$prod->price}}"> {{$prod->price}}

      @endforeach

      
    </div> 
    <a href="#demo2" class="list-group-item list-group-item strong" style="background: #f7f7f7;" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-book"></i> Type <i class="fa fa-caret-down"></i></a>
    <div class="collapse list-group-submenu" id="demo2">
       @foreach($product as $prod)
      <input type="checkbox" value="{{$prod->type}}"> {{$prod->type}}

      @endforeach

      
    </div>
    <a href="#demo4" class="list-group-item list-group-item strong" style="background: #f7f7f7;" data-toggle="collapse" data-parent="#MainMenu"><i class="fa fa-language"></i> Size <i class="fa fa-caret-down"></i></a>
    <div class="collapse list-group-submenu" id="demo4">
       @foreach($product as $prod)
      <input type="checkbox" value="{{$prod->size}}"> {{$prod->size}}

      @endforeach



        </div>
    </div>
   

    
  </div>





<div class="col-md-9">
 <div class="container-flex">
    <div class="shadow">
		
    @foreach($product as $prod)
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="box-customn">
			<div class="img-wrap-tailor">
				<a href="#" class="nohover"><img src="/images/{{$prod->image}}" alt="fdsfsdf" /></a>
				<a href="#" class="onhover"><img src="/images/{{$prod->image}}"  alt="fdsfsdf" /></a>
				<span>Quick View</span>
			</div>
			<div class="imfo-area">
				<h3>{{$prod->name}}</h3>
				<h4>Rs.{{$prod->price}}</h4>
			</div>
		</div>
		</div>
	@endforeach
		
	</div>
	</div>
</div>

</div>
</div>
	</body>