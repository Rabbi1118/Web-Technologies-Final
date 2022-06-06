const form=document.getElementById('form');
const name_1=document.getElementById('name');
const email = document.getElementById ('email');
const phoneNo = document.getElementById ('phoneNo')
const uname_1 = document.getElementById ('uname')
const password_1=document.getElementById('pass');
form.addEventListener('submit', (e)=>{
	e.preventDefault();
	validate();
});
function validate()
{
	if(name_1.value=="")
		setError(name_1,'Insert Name');
	else
		setSuccess(name_1);

	if(email.value=="")
		setError2(email,'Insert Email');
	else
		setSuccess(email);

	if(phoneNo.value=="")
		setError(phoneNo,'Insert Phone Number');
	else
		setSuccess(phoneNo);

	if(uname_1.value=="")
		setError(uname_1,'Insert Username');
	else
		setSuccess(password_1);
		if(password_1.value=="")
		setError(password_1,'Insert Username');
	else
		setSuccess(password_1);
}
function setError1(input,msg)
{
	const x=document.getElementById('form-control3');
	const smalltag=x.querySelector('small');
	smalltag.innerHTML=msg;
	smalltag.style.visibility="visible";
	const itag=document.getElementById('error');
	itag.style.visibility="visible";
	itag.style.color="red";
	input.style.borderColor="red";
}

function setError2(input,msg)
{
	const x=document.getElementById('form-control4');
	const smalltag=x.querySelector('small');
	smalltag.innerHTML=msg;
	smalltag.style.visibility="visible";
	const itag=document.getElementById('error');
	itag.style.visibility="visible";
	itag.style.color="red";
	input.style.borderColor="red";
}

function setError3(input,msg)
{
	const x=document.getElementById('form-control5');
	const smalltag=x.querySelector('small');
	smalltag.innerHTML=msg;
	smalltag.style.visibility="visible";
	const itag=document.getElementById('error');
	itag.style.visibility="visible";
	itag.style.color="red";
	input.style.borderColor="red";
}
function setError4(input,msg)
{
	const x=document.getElementById('form-control');
	const smalltag=x.querySelector('small');
	smalltag.innerHTML=msg;
	smalltag.style.visibility="visible";
	const itag=document.getElementById('error');
	itag.style.visibility="visible";
	itag.style.color="red";
	input.style.borderColor="red";
}
function setError5(input,msg)
{
	const x=document.getElementById('form-control1');
	const smalltag=x.querySelector('small');
	smalltag.innerHTML=msg;
	smalltag.style.visibility="visible";
	const itag=document.getElementById('error');
	itag.style.visibility="visible";
	itag.style.color="red";
	input.style.borderColor="red";
}

function setSuccess(input)
{
	const itag=document.getElementById('success');
	itag.style.visibility="visible";
	itag.style.color="green";
	input.style.borderColor="green";
	
}