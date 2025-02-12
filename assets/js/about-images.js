let image=document.getElementById("aboutimage");
fetch('get-data.php/get-web-images')
    .then(response=>response.json())
        .then(items=>{
            image.src=items[0].image_path;
            console.log(items); 
        }  
       
        )

.catch(error => console.error('Error fetching about images:', error));

