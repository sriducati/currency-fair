<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<title>Currency Fair</title>
{{ HTML::style ('/css/style.css') }}
<style>
.formData li label {
width: 30px;
margin-top:3px;
}
button{
width:55px;
text-align:center;
}
.theading{
display:inline-block;
border-right:1px solid black;
text-align:center;
width:102px;
float:left;
border-top:1px solid black;
}
.table_contents{

border-bottom:1px solid black;
height:28px;
}
.side_menu{
	display:block;
	border-left:1px solid black;
	border-right:1px solid black;
	border-top:1px solid black;
	text-align:center;
	float:left;
	width:100px;
}
.sb_system_li{
width:183px;
	float:left;
}
.sb_system_li input[type="text"]{
 width:105px;

}
#sb_label{
	display:inline-block;
	margin-left:7px;
}

</style>

</head>
<body>
	<div class="main">
		<!-- Tested Based on....
		{{Form::open(array('action'=>'HomeController@Post_Data'))}}
		<input type="text" name="userId" value="12121">
		<input type="text" name="currencyFrom" value="eur">
		<input type="text" name="currencyTo" value="asd">
		<input type="text" name="amountSell" value="12.56">
		<input type="text" name="amountBuy" value="45.321">
		<input type="text" name="rate" value="122.789">
		<input type="text" name="timePlaced" value="14-JAN-15 10:27:44">
		<input type="text" name="originatingCountry" value="india">
		<button type="submit">submit</button>
		{{Form::close()}}
		-->
		<div class="wrapper" style="width:99.8%;margin-bottom:30px;border:1px solid black;">
			<div class="wrapper_heading" >Currency Fair Data</div>
			<div class="wrapper" style="width:98%;">
				<br>
				<div class="wrapper_table" style="float:left;margin-left:44px;width:100%;">
					<div class="theading" style="border-left:1px solid black;">
					<b>User Id</b>
					</div>
					<div class="theading">
					<b>Currency From</b>
					</div>
					<div class="theading">
					<b>Currency To</b>
					</div>
					<div class="theading">
					<b>Amount Sell</b>
					</div>
					<div class="theading">
					<b>Amount Buy</b>
					</div>
					<div class="theading" >
					<b>Rate</b>
					</div>
					<div class="theading" style="width:170px;">
					<b>Time Placed</b>
					</div>
				</div>
				<div class="wrapper_table" style="float:left;margin-left:44px;width:90%;overflow:auto;height:156px;">			
					<div class="theading" style="border-left:1px solid black;">
						@if($currency_data)
						@foreach($currency_data as $key => $value)
						<div class="table_contents">
							{{$value->User_Id}}				
						</div>
						@endforeach 
						@endif
					</div>
					<div class="theading">
						@if($currency_data)
						@foreach($currency_data as $key => $value)
						<div class="table_contents">
						{{$value->Currency_From}}
						</div>
						@endforeach 
						@endif
					</div>
					<div class="theading">
						@if($currency_data)
						@foreach($currency_data as $key => $value)
						<div class="table_contents">
						{{$value->Currency_To}}
						</div>
						@endforeach 
						@endif
					</div>
					<div class="theading">
						@if($currency_data)
						@foreach($currency_data as $key => $value)
						<div class="table_contents">
						{{$value->Amount_Sell}}
						</div>
						@endforeach 
						@endif
					</div>
					<div class="theading">
						@if($currency_data)
						@foreach($currency_data as $key => $value)
						<div class="table_contents">
						{{$value->Amount_Buy}}
						</div>
						@endforeach 
						@endif
					</div>
					<div class="theading" >
						@if($currency_data)
						@foreach($currency_data as $key => $value)
						<div class="table_contents">
						
						{{$value->Rate}}
						</div>
						@endforeach 
						@endif
					</div>
					<div class="theading" style="width:170px;">
						@if($currency_data)
						@foreach($currency_data as $key => $value)
						<div class="table_contents">
						{{$value->Time_Placed}}
						</div>
						@endforeach 
						@endif
					</div>
				</div>
			</div>
			<br>
		</div>			
	</div>
<body>
</html>