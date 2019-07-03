/*global $*/
/*global console */

$('textarea').keyup(function(){
	var x = $(this).val().length;
    if(x !=0)
        $('input').attr('disabled', false);            
    else
        $('input').attr('disabled',true);
})

$('input').click(function(e){
	e.preventDefault();
})

//Show Edit Pop-up

$('#postcomment').on('click','.edit-icon', function(){
	$('.edit').fadeIn(200);
	$('#post-id').val($(this).data('id'));
	$('#TextareaEdit').val($(this).siblings('p').text());
})

$('.edit span').on('click', function(){
	$('.edit').fadeOut(200);

})

$('.edit-button').on('click', function(){
	$('.edit').fadeOut(200);

})




function post(reqType,id){

	var user = "Muhammad Shaalan";
	var post = document.getElementById('Textarea1').value;
	
	var xhr = new XMLHttpRequest();

	if(reqType == undefined && id == undefined){
		reqType = '';
		id = '';
	}else if(reqType == 'add'){
		id = '';
	}else if(reqType == 'del'){
		var confirm = window.confirm("Are You Sure?");
		if(confirm ==false){
			id = '';
		}
	}else if(reqType == 'edit'){
		post = document.getElementById('TextareaEdit').value;
		id = document.getElementById('post-id').value;
	}


	xhr.onreadystatechange = function (){
		if(xhr.readyState == 4 && xhr.status == 200){
			document.getElementById('postcomment').innerHTML = xhr.responseText;
			var post = document.getElementById('Textarea1').value='';
		}
	}
		xhr.open("GET","server.php?u="+user+"&req="+reqType+"&p="+post+"&id="+id,true);
		xhr.send();
	
}