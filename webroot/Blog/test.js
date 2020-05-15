    
    
    const titleError = document.getElementById("title_error");
    const bodyError = document.getElementById("body_error");
    const title = document.getElementById('title');
    const body = document.getElementById('body');
    const form = document.getElementById('myForm');
    
    form.addEventListener('submit', function prevent(event){
        if (title.value === '') 
    	{
        window.alert("I was called");
    	event.preventDefault();
    	title.style.border = "1px solid red";
        titleError.textContent = "Title is required!";
        title.focus();
        }
        if(body.value == '')
    	{
        window.alert("I was called");
    	event.preventDefault();
     	body.style.border = "1px solid red";
        bodyError.textContent = "Body is required!";
        body.focus();
        }
        if (title.value != '') 
        {
            title.style.border = "1px solid green";
            titleError.innerHTML = "";
        }
        if (body.value != '') 
        {   
            body.style.border = "1px solid green";
            bodyError.innerHTML = "";
        }
    })