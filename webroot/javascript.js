let form_reset_button = document.querySelector('input[type="reset"]');
console.log(form_reset_button);

function manual_clear(e)
{
	e.preventDefault();
	let confirm_clear = confirm("Are you sure you want to clear the form?");
	if(confirm_clear)
	{
		let form_username_field = document.querySelector('input[name="username"]');
		let form_password_field = document.querySelector('input[name="password"]');
		
		localStorage.setItem('username',form_username_field.value);
		localStorage.setItem('password',form_password_field.value);
		
		form_username_field.value = "";
		form_password_field.value = "";
	}
}

form_reset_button.addEventListener('click', manual_clear);
