    // This file is meant to add event processing for addPost.php

    const titleError = document.getElementById("title_error");
    const bodyError = document.getElementById("body_error");
    const title = document.getElementById('title');
    const body = document.getElementById('body');
    const form = document.getElementById('myForm');
    const clear = document.getElementById('clear-post');
    
    form.addEventListener('submit', function prevent(event){
        if (title.value != '') 
        {
            title.style.border = "1px solid green";   //changes field color to green if its not empty
            titleError.innerHTML = "";
        }
        if (body.value != '') 
        {   
            body.style.border = "1px solid green";
            bodyError.innerHTML = "";
        }
        if (title.value == '') 
    	{
    	event.preventDefault();
    	title.style.border = "1px solid red";    //changes field color to red if its empty
        titleError.textContent = "Title is required!";
        title.focus();
        }
        if(body.value == '')
    	{        
    	event.preventDefault();
     	body.style.border = "1px solid red";
        bodyError.textContent = "Body is required!";        
        body.focus();
        }
        
    })

    function check()    //returns true if to the reset button if user clicks 'Ok'
    {

        var response = window.confirm("Are you sure you want to clear all of the post? Any unsaved changes will be lost.");
        if(!response)
        {            
           return false;
        }
        else
        {
           return true;
        }        
    }

    