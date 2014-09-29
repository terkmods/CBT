<!DOCTYPE html>
<html>
<head>
	<title>chosen</title>
	{{ HTML::script('assets/vendor/jquery-1.10.2.min.js') }}
{{ HTML::style('assets/css/bootstrap.css') }}
{{ HTML::script('assets/js/bootstrap.min.js') }}
{{ HTML::style('assets/css/chosen.min.css')}}
{{ HTML::script('assets/js/chosen.jquery.min.js')}}
</head>
<body>
<div class="container">
	<div class="row clearfix">
	
		<div class="col-md-12 column">
			<div class="row clearfix">
				</div>
				<div class="col-md-3 column">
				{{ Form::select('pak',array(''=>'') + Pak::lists('PAK_NAME','PAK_ID'),null,
				array('class'=>'chosen-select','data-placeholder'=>'เลือกภาค','id'=>'pak','style'=>"width: 150px;"))}}
				
				</div>
				<div class="col-md-3 column">
				{{ Form::select('province',array(''=>''),null,
				array('class'=>'chosen-select','id'=>'province','style'=>"width: 150px;",'data-placeholder'=>'เลือกจังหวัด'))}}
				</div>
				<div class="col-md-3 column">
				{{ Form::select('amphur',array(''=>''),null,array('class'=>'chosen-select','data-placeholder'=>'เลือกอำเภอ','id'=>'amphur','style'=>"width: 150px;"))}}
				</div>
				<div class="col-md-3 column">
				{{ Form::select('tumbon',array(''=>''),null,array('class'=>'chosen-select','data-placeholder'=>'เลือกตำบล','id'=>'tumbon','style'=>"width: 150px;"))}}
				
				</div>
			</div>
		</div>
	</div>
</div>
			


	
</body>
<script type="text/javascript">
$(document).ready(function(){

	$('.chosen-select').chosen();
	$('#pak').change(function(){
		var value = $("#pak").val();
		
		$.ajax({
			type:'GET',
			url:"province",
			data:{id:value},
			success:function(data){
				
				$('#province').find('option')
							  .remove()
							  .end()
							  .append(data)
							  .trigger('chosen:updated');
				
			}
		});
	});
	$('#province').change(function(){
		var value = $("#province").val();
		
		$.ajax({
			type:'GET',
			url:"amphur",
			data:{id:value},
			success:function(data){
				
				$('#amphur').find('option')
							.remove()
							.end()
							.append(data)
							.trigger('chosen:updated');
				
			}
		});
	});
	$('#amphur').change(function(){
		var value = $("#amphur").val();
		
		$.ajax({
			type:'GET',
			url:"tumbon",
			data:{id:value},
			success:function(data){
				
				$('#tumbon').find('option')
							 .remove()
							 .end()
							 .append(data)
							 .trigger('chosen:updated');
				
			}
		});
	});
});
</script>
</html>




