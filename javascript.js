let form_reset_button = document.querySelector('input[type="reset"]');

function manual_clear(e)
{
	e.preventDefault();
	let confirm_clear = confirm("Are you sure you want to clear the form?");
	if(confirm_clear)
	{
		let form_username_field = document.querySelector('input[name="username"]');
		let form_password_field = document.querySelector('input[name="password"]');
		
		if(form_username_field != null)
		{
			localStorage.setItem('username',form_username_field.value);
			localStorage.setItem('password',form_password_field.value);
			
			form_username_field.value = "";
			form_password_field.value = "";
		}

		let form_title_field = document.querySelector('input[name="title"]');
		let form_content_field = document.querySelector('input[name="content"]');
		
		if(form_title_field != null)
		{
			localStorage.setItem('title',form_title_field.value);
			localStorage.setItem('content',form_content_field.value);
			
			form_title_field.value = "";
			form_content_field.value = "";
		}
	}
}

form_reset_button.addEventListener('click', manual_clear);

let blog_submit_button = document.querySelector('input[type="submit"]');

blog_submit_button.addEventListener('click', blank_field_check);

function blank_field_check(e)
{
	let form_title_field = document.querySelector('input[name="title"]');
	let form_content_field = document.querySelector('input[name="content"]');
	
	if (form_title_field != null)
	{
		if(form_title_field.value == "")
		{
			form_title_field.className = 'not_filled_in';
			form_title_field.style.backgroundColor = 'grey';
		}
		if(form_content_field.value == "")
		{
			form_content_field.className = 'not_filled_in';
			form_content_field.style.backgroundColor = 'grey';
		}
	}
}