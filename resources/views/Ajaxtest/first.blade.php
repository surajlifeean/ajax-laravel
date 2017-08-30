<body>
	

{!!Form::open(['route' => 'ajaxtest.store'])!!}
		 <div id = 'msg'>This message will be replaced using Ajax. 
         Click the button to replace the message.</div>
		   {{Form::label('category_id','Category:')}}
    <select class="form-control category" name="category_id">
    
     
          <option value="1">A</option>

          <option value="2">B</option>

          <option value="3">C</option>
  
    </select>

      <select class="form-control subcategory" name="subcategory_id">
  
    </select>

    {!!Form::submit('Click Me!')!!}

{!! Form::close() !!}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
		$(".category").on('change',function(e){

			var id=e.target.value;
			console.log(id);
      $(".subcategory").empty();
			$.ajax({
               type:'GET',
               url:'/ajaxtest/create',
               data:{id:id},
               success:function(data){
                console.log(data);
                $.each(data,function(index,data){
                   $('.subcategory').append('<option value="'+data.id+'">'+data.name+'</option>');
                 });
                 
               }
            });
					
	});
</script>
</body>